<?php
/**
 * Blog/Insights Controller
 */

namespace App\Controllers;

class BlogController
{
    private array $posts = [
        'ai-accelerated-development' => [
            'title' => 'AI-Accelerated Development: How We Built a Full CDP in 60 Days',
            'description' => 'The playbook for shipping enterprise software at startup speed using AI tools.',
            'date' => '2026-01-15',
            'category' => 'Development'
        ],
        'lead-gen-stack-2026' => [
            'title' => 'The Modern Lead Gen Stack for 2026',
            'description' => 'Config-driven verticals, identity resolution, and multi-tenant architecture.',
            'date' => '2026-01-10',
            'category' => 'Marketing'
        ],
        'zero-dependency-php' => [
            'title' => 'Zero-Dependency PHP: Why We Ditched WordPress',
            'description' => 'Building custom content platforms that outperform bloated CMS solutions.',
            'date' => '2026-01-05',
            'category' => 'Development'
        ]
    ];

    public function index(): void
    {
        $page = [
            'title' => 'Insights | Stealth Labz',
            'description' => 'Technical insights on AI development, lead generation, and performance marketing.'
        ];

        $posts = $this->posts;

        include ROOT_PATH . '/views/templates/blog/index.php';
    }

    public function show(string $slug): void
    {
        if (!isset($this->posts[$slug])) {
            http_response_code(404);
            include ROOT_PATH . '/views/templates/404.php';
            return;
        }

        $post = $this->posts[$slug];
        $post['slug'] = $slug;

        $page = [
            'title' => $post['title'] . ' | Stealth Labz',
            'description' => $post['description']
        ];

        $templatePath = ROOT_PATH . '/views/templates/blog/' . $slug . '.php';

        if (file_exists($templatePath)) {
            include $templatePath;
        } else {
            include ROOT_PATH . '/views/templates/blog/post.php';
        }
    }
}
