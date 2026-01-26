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
            'description' => 'Technical insights on AI development, lead generation, and performance marketing.'
        ];

        $posts = $data['posts'];
        $pagination = [
            'current' => $data['current_page'],
            'total' => $data['pages'],
            'count' => $data['total']
        ];

        include ROOT_PATH . '/views/templates/blog/index.php';
    }

    public function show(string $slug): void
    {
        $post = Post::findBySlug($slug);

        if (!$post) {
            http_response_code(404);
            include ROOT_PATH . '/views/templates/404.php';
            return;
        }

        // Clean WordPress block markup
        $post['content'] = Post::cleanContent($post['content']);

        $page = [
            'title' => $post['title'] . ' | Stealth Labz',
            'description' => $post['excerpt'] ?? ''
        ];

        // Get related posts
        $recentPosts = Post::recent(5);

        include ROOT_PATH . '/views/templates/blog/post.php';
    }
}
