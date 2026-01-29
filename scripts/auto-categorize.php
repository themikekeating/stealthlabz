<?php
/**
 * Auto-categorize posts based on keywords
 * Assigns ONE category per post (best match by keyword hits)
 * Run once: php scripts/auto-categorize.php
 */

define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH . '/config/environment.php';

$pdo = getDbConnection();
if (!$pdo) {
    die("Database connection failed\n");
}

// Define categories and their keywords (case-insensitive matching)
$categoryKeywords = [
    'SEO' => ['seo', 'search engine', 'ranking', 'serp', 'backlink', 'keyword research', 'organic traffic', 'google search'],
    'PPC' => ['ppc', 'pay per click', 'google ads', 'facebook ads', 'ad campaign', 'cpc', 'cost per click', 'paid advertising', 'ad spend'],
    'Social Media' => ['social media', 'instagram', 'facebook', 'twitter', 'linkedin', 'tiktok', 'social marketing', 'influencer'],
    'Content Marketing' => ['content marketing', 'blog', 'copywriting', 'content strategy', 'storytelling', 'editorial'],
    'Email Marketing' => ['email marketing', 'newsletter', 'email campaign', 'drip campaign', 'email automation', 'mailchimp'],
    'Analytics' => ['analytics', 'google analytics', 'data', 'metrics', 'kpi', 'conversion rate', 'tracking', 'reporting'],
    'AI & Automation' => ['ai', 'artificial intelligence', 'machine learning', 'automation', 'chatbot', 'gpt', 'llm'],
    'Lead Generation' => ['lead generation', 'leads', 'lead magnet', 'conversion', 'landing page', 'funnel', 'b2b'],
    'E-commerce' => ['ecommerce', 'e-commerce', 'shopify', 'woocommerce', 'online store', 'product', 'cart'],
    'Web Development' => ['web development', 'website', 'html', 'css', 'javascript', 'php', 'frontend', 'backend'],
];

// Step 1: Create categories if they don't exist
echo "Creating categories...\n";
foreach ($categoryKeywords as $name => $keywords) {
    $slug = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $name));
    $slug = trim($slug, '-');

    $stmt = $pdo->prepare("INSERT IGNORE INTO categories (name, slug) VALUES (:name, :slug)");
    $stmt->execute(['name' => $name, 'slug' => $slug]);
}

// Get category IDs
$categories = [];
$stmt = $pdo->query("SELECT id, name, slug FROM categories");
while ($row = $stmt->fetch()) {
    $categories[$row['name']] = $row['id'];
}
echo "Categories ready: " . implode(', ', array_keys($categories)) . "\n\n";

// Step 2: Get all published posts
$stmt = $pdo->query("SELECT ID, post_title, post_content, post_excerpt FROM posts WHERE post_status = 'publish' AND post_type = 'post'");
$posts = $stmt->fetchAll();
echo "Found " . count($posts) . " posts to categorize\n\n";

// Step 3: Categorize each post — pick the single best match
$assigned = 0;
$updateStmt = $pdo->prepare("UPDATE posts SET category_id = :category_id WHERE ID = :post_id");

foreach ($posts as $post) {
    $searchText = strtolower($post['post_title'] . ' ' . $post['post_excerpt'] . ' ' . $post['post_content']);
    $bestCategory = null;
    $bestScore = 0;

    foreach ($categoryKeywords as $categoryName => $keywords) {
        $score = 0;
        foreach ($keywords as $keyword) {
            $score += substr_count($searchText, strtolower($keyword));
        }
        if ($score > $bestScore) {
            $bestScore = $score;
            $bestCategory = $categoryName;
        }
    }

    if ($bestCategory && isset($categories[$bestCategory])) {
        $updateStmt->execute([
            'category_id' => $categories[$bestCategory],
            'post_id' => $post['ID']
        ]);
        $assigned++;
        echo "Post {$post['ID']}: " . substr($post['post_title'], 0, 50) . "... -> {$bestCategory} (score: {$bestScore})\n";
    } else {
        echo "Post {$post['ID']}: " . substr($post['post_title'], 0, 50) . "... -> NO MATCH\n";
    }
}

echo "\nDone! Assigned {$assigned} posts to categories.\n";

// Show summary
echo "\nCategory counts:\n";
$stmt = $pdo->query("
    SELECT c.name, COUNT(p.ID) as count
    FROM categories c
    LEFT JOIN posts p ON p.category_id = c.id AND p.post_status = 'publish' AND p.post_type = 'post'
    GROUP BY c.id, c.name
    ORDER BY count DESC
");
while ($row = $stmt->fetch()) {
    echo "  {$row['name']}: {$row['count']} posts\n";
}

// Show uncategorized
$stmt = $pdo->query("
    SELECT COUNT(*) FROM posts
    WHERE post_status = 'publish' AND post_type = 'post' AND category_id IS NULL
");
$uncategorized = $stmt->fetchColumn();
echo "\nUncategorized posts: {$uncategorized}\n";
