<?php
/**
 * Blog/Insights Controller
 * Pulls posts from database
 */

namespace App\Controllers;

use App\Models\Post;
use App\Models\Category;

class BlogController
{
    public function index(): void
    {
        $currentPage = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;

        $data = Post::paginate($currentPage, 12);
        $categories = Category::all();

        $page = [
            'title' => 'Insights — AI Development & Execution Blog | Stealth Labz',
            'headerDescription' => 'Deep dives on AI-native development, execution methodology, and building production systems at speed.',
            'metaDescription' => 'Deep dives on AI-native development, execution methodology, and building production systems at speed.'
        ];

        $posts = $data['posts'];
        $pagination = [
            'current' => $data['current_page'],
            'total' => $data['pages'],
            'count' => $data['total']
        ];

        include ROOT_PATH . '/views/templates/hub.php';
    }

    public function category(string $slug): void
    {
        $category = Category::findBySlug($slug);

        if (!$category) {
            http_response_code(404);
            include ROOT_PATH . '/views/templates/404.php';
            return;
        }

        $currentPage = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
        $data = Post::paginateByCategory($category['id'], $currentPage, 12);
        $categories = Category::all();

        $page = [
            'title' => $category['name'] . ' | Insights | Stealth Labz',
            'headerDescription' => 'Articles about ' . $category['name'] . '.',
            'metaDescription' => 'Technical insights on ' . $category['name'] . '.'
        ];

        $posts = $data['posts'];
        $pagination = [
            'current' => $data['current_page'],
            'total' => $data['pages'],
            'count' => $data['total']
        ];
        $currentCategory = $category;

        include ROOT_PATH . '/views/templates/hub.php';
    }

    public function show(string $slug): void
    {
        $post = Post::findBySlug($slug);

        if (!$post) {
            http_response_code(404);
            include ROOT_PATH . '/views/templates/404.php';
            return;
        }

        // Clean WordPress block markup and strip inline images
        $post['content'] = Post::cleanContent($post['content']);

        // Get related posts
        $relatedPosts = Post::recentExcluding($slug, 4);

        include ROOT_PATH . '/views/templates/article.php';
    }
}
