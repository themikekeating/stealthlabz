<?php
/**
 * Category Model
 * Handles blog categories from WordPress taxonomy tables
 */

namespace App\Models;

class Category
{
    /**
     * Get all categories (only those with posts)
     */
    public static function all(): array
    {
        $pdo = getDbConnection();
        if (!$pdo) {
            return [];
        }

        $stmt = $pdo->query("
            SELECT t.term_id as id, t.name, t.slug
            FROM couk_terms t
            INNER JOIN couk_term_taxonomy tt ON t.term_id = tt.term_id
            WHERE tt.taxonomy = 'category' AND tt.count > 0
            ORDER BY t.name ASC
        ");
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

        $stmt = $pdo->prepare("
            SELECT t.term_id as id, t.name, t.slug
            FROM couk_terms t
            INNER JOIN couk_term_taxonomy tt ON t.term_id = tt.term_id
            WHERE tt.taxonomy = 'category' AND t.slug = :slug
            LIMIT 1
        ");
        $stmt->execute(['slug' => $slug]);
        return $stmt->fetch() ?: null;
    }
}
