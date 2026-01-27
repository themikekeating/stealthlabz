<?php
/**
 * Category Model
 * Handles blog categories from custom tables
 */

namespace App\Models;

class Category
{
    /**
     * Get all categories
     */
    public static function all(): array
    {
        $pdo = getDbConnection();
        if (!$pdo) {
            return [];
        }

        $stmt = $pdo->query("SELECT id, name, slug FROM categories ORDER BY name ASC");
        return $stmt->fetchAll();
    }

    /**
     * Get categories for a specific post
     */
    public static function forPost(int $postId): array
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
     * Find category by slug
     */
    public static function findBySlug(string $slug): ?array
    {
        $pdo = getDbConnection();
        if (!$pdo) {
            return null;
        }

        $stmt = $pdo->prepare("SELECT id, name, slug FROM categories WHERE slug = :slug LIMIT 1");
        $stmt->execute(['slug' => $slug]);
        return $stmt->fetch() ?: null;
    }
}
