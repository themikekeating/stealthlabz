<?php
/**
 * Category Model
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
