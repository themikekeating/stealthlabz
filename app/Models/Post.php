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

        // Get posts with category (single query via JOIN)
        $stmt = $pdo->prepare("
            SELECT p.ID as id, p.post_title as title, p.post_name as slug, p.post_excerpt as excerpt, p.post_date as published_at,
                   c.id as category_id, c.name as category_name, c.slug as category_slug
            FROM posts p
            LEFT JOIN categories c ON p.category_id = c.id
            WHERE p.post_status = 'publish' AND p.post_type = 'post'
            ORDER BY p.post_date DESC
            LIMIT :limit OFFSET :offset
        ");
        $stmt->bindValue(':limit', $perPage, \PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, \PDO::PARAM_INT);
        $stmt->execute();

        $posts = $stmt->fetchAll();

        foreach ($posts as &$post) {
            $post['featured_image'] = self::getFeaturedImage($post['title'], $post['slug']);
            $post['category'] = $post['category_id'] ? [
                'id' => $post['category_id'],
                'name' => $post['category_name'],
                'slug' => $post['category_slug'],
            ] : null;
        }

        return [
            'posts' => $posts,
            'total' => $total,
            'pages' => (int) ceil($total / $perPage),
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
            SELECT p.ID as id, p.post_title as title, p.post_name as slug, p.post_content as content, p.post_excerpt as excerpt,
                   p.post_date as published_at, p.post_modified as updated_at,
                   c.id as category_id, c.name as category_name, c.slug as category_slug
            FROM posts p
            LEFT JOIN categories c ON p.category_id = c.id
            WHERE p.post_name = :slug AND p.post_status = 'publish' AND p.post_type = 'post'
            LIMIT 1
        ");
        $stmt->execute(['slug' => $slug]);

        $post = $stmt->fetch();
        if ($post) {
            $post['featured_image'] = self::getFeaturedImage($post['title'], $post['slug']);
            $post['category'] = $post['category_id'] ? [
                'id' => $post['category_id'],
                'name' => $post['category_name'],
                'slug' => $post['category_slug'],
            ] : null;
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

        // Sanitize HTML to prevent XSS — allow safe tags only
        $content = self::sanitizeHtml($content);

        // Clean up extra whitespace
        $content = preg_replace('/\n{3,}/', "\n\n", $content);

        return trim($content);
    }

    /**
     * Sanitize HTML content — allowlist of safe tags and attributes
     */
    public static function sanitizeHtml(string $html): string
    {
        $allowedTags = '<p><br><strong><b><em><i><u><s><a><ul><ol><li><h1><h2><h3><h4><h5><h6>'
            . '<blockquote><pre><code><table><thead><tbody><tr><th><td><hr><div><span><figure><figcaption><sup><sub>';

        $html = strip_tags($html, $allowedTags);

        // Strip event handler attributes (onclick, onerror, onload, etc.) and javascript: URIs
        $html = preg_replace('/\s+on\w+\s*=\s*["\'][^"\']*["\']/i', '', $html);
        $html = preg_replace('/\s+on\w+\s*=\s*\S+/i', '', $html);
        $html = preg_replace('/href\s*=\s*["\']?\s*javascript:[^"\'>\s]*/i', 'href="#"', $html);
        $html = preg_replace('/src\s*=\s*["\']?\s*javascript:[^"\'>\s]*/i', 'src=""', $html);

        return $html;
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
            SELECT COUNT(*) FROM posts
            WHERE category_id = :category_id AND post_status = 'publish' AND post_type = 'post'
        ");
        $countStmt->execute(['category_id' => $categoryId]);
        $total = (int) $countStmt->fetchColumn();

        // Get posts with category
        $stmt = $pdo->prepare("
            SELECT p.ID as id, p.post_title as title, p.post_name as slug, p.post_excerpt as excerpt, p.post_date as published_at,
                   c.id as category_id, c.name as category_name, c.slug as category_slug
            FROM posts p
            LEFT JOIN categories c ON p.category_id = c.id
            WHERE p.category_id = :category_id AND p.post_status = 'publish' AND p.post_type = 'post'
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
            $post['category'] = $post['category_id'] ? [
                'id' => $post['category_id'],
                'name' => $post['category_name'],
                'slug' => $post['category_slug'],
            ] : null;
        }

        return [
            'posts' => $posts,
            'total' => $total,
            'pages' => (int) ceil($total / $perPage),
            'current_page' => $page
        ];
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
     * Get all published posts (lightweight — for sitemap, etc.)
     */
    public static function allPublished(): array
    {
        $pdo = getDbConnection();
        if (!$pdo) {
            return [];
        }

        $stmt = $pdo->query("
            SELECT post_name as slug, post_date as published_at, post_modified as updated_at
            FROM posts
            WHERE post_status = 'publish' AND post_type = 'post'
            ORDER BY post_date DESC
        ");

        return $stmt->fetchAll();
    }

    /**
     * Get featured image URL for a post
     * Uses static pre-generated images (50 variants) mapped by slug hash
     */
    public static function getFeaturedImage(string $title, string $slug): string
    {
        $imageNumber = (crc32($slug) & 0x7FFFFFFF) % 50 + 1;
        $paddedNumber = str_pad((string) $imageNumber, 2, '0', STR_PAD_LEFT);

        return cdnUrl("images/blog/blog-{$paddedNumber}.jpg");
    }

}
