<?php
/**
 * Auto-categorize posts based on keywords
 * Run once: php scripts/auto-categorize.php
 */

require_once dirname(__DIR__) . '/config/environment.php';

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

// Step 3: Categorize each post
$assigned = 0;
$insertStmt = $pdo->prepare("INSERT IGNORE INTO post_categories (post_id, category_id) VALUES (:post_id, :category_id)");

foreach ($posts as $post) {
    $searchText = strtolower($post['post_title'] . ' ' . $post['post_excerpt'] . ' ' . $post['post_content']);
    $postCategories = [];

    foreach ($categoryKeywords as $categoryName => $keywords) {
        foreach ($keywords as $keyword) {
            if (strpos($searchText, strtolower($keyword)) !== false) {
                $postCategories[$categoryName] = true;
                break; // Found match, move to next category
            }
        }
    }

    // Assign categories
    foreach ($postCategories as $categoryName => $matched) {
        if (isset($categories[$categoryName])) {
            $insertStmt->execute([
                'post_id' => $post['ID'],
                'category_id' => $categories[$categoryName]
            ]);
            $assigned++;
        }
    }

    $count = count($postCategories);
    if ($count > 0) {
        echo "Post {$post['ID']}: " . substr($post['post_title'], 0, 50) . "... -> " . implode(', ', array_keys($postCategories)) . "\n";
    } else {
        echo "Post {$post['ID']}: " . substr($post['post_title'], 0, 50) . "... -> NO MATCH\n";
    }
}

echo "\nDone! Assigned {$assigned} category links.\n";

// Show summary
echo "\nCategory counts:\n";
$stmt = $pdo->query("
    SELECT c.name, COUNT(pc.post_id) as count
    FROM categories c
    LEFT JOIN post_categories pc ON c.id = pc.category_id
    GROUP BY c.id, c.name
    ORDER BY count DESC
");
while ($row = $stmt->fetch()) {
    echo "  {$row['name']}: {$row['count']} posts\n";
}

// Show uncategorized
$stmt = $pdo->query("
    SELECT COUNT(*) FROM posts p
    WHERE p.post_status = 'publish' AND p.post_type = 'post'
    AND NOT EXISTS (SELECT 1 FROM post_categories pc WHERE pc.post_id = p.ID)
");
$uncategorized = $stmt->fetchColumn();
echo "\nUncategorized posts: {$uncategorized}\n";
