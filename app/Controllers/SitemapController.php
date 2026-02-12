<?php
/**
 * Sitemap Controller
 * Generates XML sitemap for search engines
 */

namespace App\Controllers;

use App\Models\Post;
use App\Models\Category;

class SitemapController
{
    public function index(): void
    {
        header('Content-Type: application/xml; charset=utf-8');

        $baseUrl = 'https://stealthlabz.com';

        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Static pages
        $staticPages = [
            ['loc' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => '/method', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => '/solutions', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => '/training', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => '/ecosystem', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => '/insights', 'priority' => '0.9', 'changefreq' => 'daily'],
            ['loc' => '/privacy', 'priority' => '0.3', 'changefreq' => 'monthly'],
            ['loc' => '/terms', 'priority' => '0.3', 'changefreq' => 'monthly'],
            ['loc' => '/cookies', 'priority' => '0.3', 'changefreq' => 'monthly'],
            ['loc' => '/disclaimer', 'priority' => '0.3', 'changefreq' => 'monthly'],
        ];

        foreach ($staticPages as $page) {
            echo '<url>';
            echo '<loc>' . $baseUrl . $page['loc'] . '</loc>';
            echo '<changefreq>' . $page['changefreq'] . '</changefreq>';
            echo '<priority>' . $page['priority'] . '</priority>';
            echo '</url>';
        }

        // Categories
        $categories = Category::all();
        foreach ($categories as $category) {
            echo '<url>';
            echo '<loc>' . $baseUrl . '/insights/category/' . htmlspecialchars($category['slug']) . '</loc>';
            echo '<changefreq>weekly</changefreq>';
            echo '<priority>0.7</priority>';
            echo '</url>';
        }

        // Blog posts
        $posts = Post::allPublished();
        foreach ($posts as $post) {
            echo '<url>';
            echo '<loc>' . $baseUrl . '/insights/' . htmlspecialchars($post['slug']) . '</loc>';
            if (!empty($post['updated_at'])) {
                echo '<lastmod>' . date('Y-m-d', strtotime($post['updated_at'])) . '</lastmod>';
            } elseif (!empty($post['published_at'])) {
                echo '<lastmod>' . date('Y-m-d', strtotime($post['published_at'])) . '</lastmod>';
            }
            echo '<changefreq>monthly</changefreq>';
            echo '<priority>0.8</priority>';
            echo '</url>';
        }

        echo '</urlset>';
    }

}
