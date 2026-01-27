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

        // Add featured image to each post
        foreach ($posts as &$post) {
            $post['featured_image'] = self::getFeaturedImage($post['title'], $post['slug']);
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
     * Generate featured image URL for a post
     * Uses picsum.photos with consistent seed per post
     */
    public static function getFeaturedImage(string $title, string $slug): string
    {
        // Use slug hash for consistent image per post (1-1000 range for variety)
        $seed = abs(crc32($slug)) % 1000 + 1;

        return "https://picsum.photos/seed/{$slug}/1200/630?grayscale";
    }
}
