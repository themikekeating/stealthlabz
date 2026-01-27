<?php
/**
 * Blog/Insights Controller
 * Pulls posts from database
 */

namespace App\Controllers;

use App\Models\Post;

class BlogController
{
    public function index(): void
    {
        $currentPage = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;

        $data = Post::paginate($currentPage, 12);

        $page = [
            'title' => 'Insights | Stealth Labz',
            'headerDescription' => 'Technical deep-dives on AI development, lead generation, and performance marketing.',
            'metaDescription' => 'Technical insights on AI development, lead generation, and performance marketing.'
        ];

        $posts = $data['posts'];
        $pagination = [
            'current' => $data['current_page'],
            'total' => $data['pages'],
            'count' => $data['total']
        ];

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
        $recentPosts = Post::recent(5);

        include ROOT_PATH . '/views/templates/article.php';
    }
}
