<?php
/**
 * Post Model
 * Handles blog post data from database
 */

namespace App\Models;

class Post
{
    /**
     * Get paginated posts
     */
    public static function paginate(int $page = 1, int $perPage = 12): array
    {
        $pdo = getDbConnection();
        if (!$pdo) {
            return ['posts' => [], 'total' => 0, 'pages' => 0];
        }

        $offset = ($page - 1) * $perPage;

        // Get total count
        $countStmt = $pdo->query("SELECT COUNT(*) FROM posts WHERE post_status = 'publish' AND post_type = 'post'");
        $total = (int) $countStmt->fetchColumn();

        // Get posts (WordPress column names)
        $stmt = $pdo->prepare("
            SELECT ID as id, post_title as title, post_name as slug, post_excerpt as excerpt, post_date as published_at
            FROM posts
            WHERE post_status = 'publish' AND post_type = 'post'
            ORDER BY post_date DESC
            LIMIT :limit OFFSET :offset
        ");
        $stmt->bindValue(':limit', $perPage, \PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, \PDO::PARAM_INT);
        $stmt->execute();

        $posts = $stmt->fetchAll();

        // Add featured image and categories to each post
        foreach ($posts as &$post) {
            $post['featured_image'] = self::getFeaturedImage($post['title'], $post['slug']);
            $post['categories'] = self::getCategoriesForPost($post['id']);
        }

        return [
            'posts' => $posts,
            'total' => $total,
            'pages' => ceil($total / $perPage),
            'current_page' => $page
        ];
    }

    /**
     * Find post by slug
     */
    public static function findBySlug(string $slug): ?array
    {
        $pdo = getDbConnection();
        if (!$pdo) {
            return null;
        }

        $stmt = $pdo->prepare("
            SELECT ID as id, post_title as title, post_name as slug, post_content as content, post_excerpt as excerpt, post_date as published_at, post_modified as updated_at
            FROM posts
            WHERE post_name = :slug AND post_status = 'publish' AND post_type = 'post'
            LIMIT 1
        ");
        $stmt->execute(['slug' => $slug]);

        $post = $stmt->fetch();
        if ($post) {
            $post['featured_image'] = self::getFeaturedImage($post['title'], $post['slug']);
        }
        return $post ?: null;
    }

    /**
     * Get recent posts
     */
    public static function recent(int $limit = 5): array
    {
        $pdo = getDbConnection();
        if (!$pdo) {
            return [];
        }

        $stmt = $pdo->prepare("
            SELECT ID as id, post_title as title, post_name as slug, post_excerpt as excerpt, post_date as published_at
            FROM posts
            WHERE post_status = 'publish' AND post_type = 'post'
            ORDER BY post_date DESC
            LIMIT :limit
        ");
        $stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $stmt->execute();

        $posts = $stmt->fetchAll();

        // Add featured image to each post
        foreach ($posts as &$post) {
            $post['featured_image'] = self::getFeaturedImage($post['title'], $post['slug']);
        }

        return $posts;
    }

    /**
     * Search posts
     */
    public static function search(string $query, int $limit = 20): array
    {
        $pdo = getDbConnection();
        if (!$pdo) {
            return [];
        }

        $stmt = $pdo->prepare("
            SELECT ID as id, post_title as title, post_name as slug, post_excerpt as excerpt, post_date as published_at
            FROM posts
            WHERE (post_title LIKE :query OR post_content LIKE :query) AND post_status = 'publish' AND post_type = 'post'
            ORDER BY post_date DESC
            LIMIT :limit
        ");
        $stmt->bindValue(':query', '%' . $query . '%', \PDO::PARAM_STR);
        $stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /**
     * Clean WordPress block content and strip inline images
     */
    public static function cleanContent(string $content): string
    {
        // Remove WordPress block comments
        $content = preg_replace('/<!-- wp:[^>]+-->/', '', $content);
        $content = preg_replace('/<!-- \/wp:[^>]+-->/', '', $content);

        // Strip all inline images (we use featured image instead)
        $content = self::stripImages($content);

        // Clean up extra whitespace
        $content = preg_replace('/\n{3,}/', "\n\n", $content);

        return trim($content);
    }

    /**
     * Strip all inline images from content
     */
    public static function stripImages(string $content): string
    {
        // Remove img tags
        $content = preg_replace('/<img[^>]+>/i', '', $content);

        // Remove empty figure tags that wrapped images
        $content = preg_replace('/<figure[^>]*>\s*<\/figure>/i', '', $content);

        // Remove empty paragraphs that may be left behind
        $content = preg_replace('/<p>\s*<\/p>/i', '', $content);

        return $content;
    }

    /**
     * Get recent posts excluding a specific slug
     */
    public static function recentExcluding(string $excludeSlug, int $limit = 4): array
    {
        $pdo = getDbConnection();
        if (!$pdo) {
            return [];
        }

        $stmt = $pdo->prepare("
            SELECT ID as id, post_title as title, post_name as slug, post_excerpt as excerpt, post_date as published_at
            FROM posts
            WHERE post_status = 'publish' AND post_type = 'post' AND post_name != :exclude_slug
            ORDER BY post_date DESC
            LIMIT :limit
        ");
        $stmt->bindValue(':exclude_slug', $excludeSlug, \PDO::PARAM_STR);
        $stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $stmt->execute();

        $posts = $stmt->fetchAll();

        foreach ($posts as &$post) {
            $post['featured_image'] = self::getFeaturedImage($post['title'], $post['slug']);
        }

        return $posts;
    }

    /**
     * Get paginated posts by category
     */
    public static function paginateByCategory(int $categoryId, int $page = 1, int $perPage = 12): array
    {
        $pdo = getDbConnection();
        if (!$pdo) {
            return ['posts' => [], 'total' => 0, 'pages' => 0];
        }

        $offset = ($page - 1) * $perPage;

        // Get total count
        $countStmt = $pdo->prepare("
            SELECT COUNT(*) FROM posts p
            INNER JOIN post_categories pc ON p.ID = pc.post_id
            WHERE pc.category_id = :category_id AND p.post_status = 'publish' AND p.post_type = 'post'
        ");
        $countStmt->execute(['category_id' => $categoryId]);
        $total = (int) $countStmt->fetchColumn();

        // Get posts
        $stmt = $pdo->prepare("
            SELECT p.ID as id, p.post_title as title, p.post_name as slug, p.post_excerpt as excerpt, p.post_date as published_at
            FROM posts p
            INNER JOIN post_categories pc ON p.ID = pc.post_id
            WHERE pc.category_id = :category_id AND p.post_status = 'publish' AND p.post_type = 'post'
            ORDER BY p.post_date DESC
            LIMIT :limit OFFSET :offset
        ");
        $stmt->bindValue(':category_id', $categoryId, \PDO::PARAM_INT);
        $stmt->bindValue(':limit', $perPage, \PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, \PDO::PARAM_INT);
        $stmt->execute();

        $posts = $stmt->fetchAll();

        foreach ($posts as &$post) {
            $post['featured_image'] = self::getFeaturedImage($post['title'], $post['slug']);
            $post['categories'] = self::getCategoriesForPost($post['id']);
        }

        return [
            'posts' => $posts,
            'total' => $total,
            'pages' => ceil($total / $perPage),
            'current_page' => $page
        ];
    }

    /**
     * Get categories for a specific post
     */
    public static function getCategoriesForPost(int $postId): array
    {
        $pdo = getDbConnection();
        if (!$pdo) {
            return [];
        }

        $stmt = $pdo->prepare("
            SELECT c.id, c.name, c.slug
            FROM categories c
            INNER JOIN post_categories pc ON c.id = pc.category_id
            WHERE pc.post_id = :post_id
            ORDER BY c.name ASC
        ");
        $stmt->execute(['post_id' => $postId]);
        return $stmt->fetchAll();
    }

    /**
     * Calculate read time in minutes
     */
    public static function getReadTime(string $content): int
    {
        $wordCount = str_word_count(strip_tags($content));
        return max(1, (int) ceil($wordCount / 200));
    }

    /**
     * Generate featured image URL for a post
     * Using Pollinations.ai for AI-generated images
     */
    public static function getFeaturedImage(string $title, string $slug): string
    {
        $secretsPath = defined('ROOT_PATH') ? ROOT_PATH . '/config/secrets.php' : dirname(__DIR__, 2) . '/config/secrets.php';
        $secrets = file_exists($secretsPath) ? require $secretsPath : [];
        $apiKey = $secrets['pollinations_key'] ?? null;

        // Generic prompt - seed makes each image unique per post
        $prompt = "Abstract digital marketing technology blog header, neon gradients, dark background, professional";
        $encodedPrompt = rawurlencode($prompt);
        $seed = crc32($slug) & 0x7FFFFFFF; // Cap at max signed 32-bit int

        $url = "https://gen.pollinations.ai/image/{$encodedPrompt}?model=flux&width=1200&height=630&seed={$seed}&nologo=true";
        if ($apiKey) {
            $url .= "&key={$apiKey}";
        }

        return $url;
    }

}
