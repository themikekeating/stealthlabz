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
        $countStmt = $pdo->query("SELECT COUNT(*) FROM posts");
        $total = (int) $countStmt->fetchColumn();

        // Get posts
        $stmt = $pdo->prepare("
            SELECT id, title, slug, excerpt, published_at
            FROM posts
            ORDER BY published_at DESC
            LIMIT :limit OFFSET :offset
        ");
        $stmt->bindValue(':limit', $perPage, \PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, \PDO::PARAM_INT);
        $stmt->execute();

        return [
            'posts' => $stmt->fetchAll(),
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
            SELECT id, title, slug, content, excerpt, published_at, updated_at
            FROM posts
            WHERE slug = :slug
            LIMIT 1
        ");
        $stmt->execute(['slug' => $slug]);

        $post = $stmt->fetch();
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
            SELECT id, title, slug, excerpt, published_at
            FROM posts
            ORDER BY published_at DESC
            LIMIT :limit
        ");
        $stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
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
            SELECT id, title, slug, excerpt, published_at
            FROM posts
            WHERE title LIKE :query OR content LIKE :query
            ORDER BY published_at DESC
            LIMIT :limit
        ");
        $stmt->bindValue(':query', '%' . $query . '%', \PDO::PARAM_STR);
        $stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /**
     * Clean WordPress block content
     */
    public static function cleanContent(string $content): string
    {
        // Remove WordPress block comments
        $content = preg_replace('/<!-- wp:[^>]+-->/', '', $content);
        $content = preg_replace('/<!-- \/wp:[^>]+-->/', '', $content);

        // Clean up extra whitespace
        $content = preg_replace('/\n{3,}/', "\n\n", $content);

        return trim($content);
    }
}
