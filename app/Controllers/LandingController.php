<?php
/**
 * Landing Page Controller
 */

namespace App\Controllers;

use App\Models\Post;

class LandingController
{
    public function index(): void
    {
        $page = [
            'title' => 'Stealth Labz | Built Different. Compounds Daily.',
            'description' => 'The Compounding Execution Method. 10 production systems shipped in 74 days. A 13.4× compounding multiplier across the portfolio.',
            'og_description' => 'The Compounding Execution Method. 10 production systems in 74 days. 13.4× compounding multiplier. See the method. See the results.',
            'keywords' => 'software development, performance marketing, AI, product development, global operations'
        ];

        // Get recent blog posts for the insights section
        $recentPosts = Post::recent(3);

        include ROOT_PATH . '/views/templates/landing.php';
    }

    public function cem(): void
    {
        $page = [
            'title' => 'CEM — The Compounding Execution Method | Stealth Labz',
            'description' => 'A universal execution operating system for AI-native builders. The methodology behind 596,903 lines of production code and 10 systems shipped by a solo operator.',
            'keywords' => 'CEM, Compounding Execution Method, AI development, methodology, software development'
        ];

        include ROOT_PATH . '/views/templates/cem.php';
    }

    public function brands(): void
    {
        $page = [
            'title' => 'Brands | Stealth Labz',
            'description' => '10 production systems across lead generation, content, DTC, and AI. Our portfolio of live platforms.',
            'keywords' => 'portfolio, brands, platforms, lead generation, DTC'
        ];

        include ROOT_PATH . '/views/templates/brands-old.php';
    }

    public function solutions(): void
    {
        $page = [
            'title' => 'Solutions | Stealth Labz',
            'description' => 'Custom software, proven systems, and production-ready platforms — built with the same methodology behind 2,561 commits and 10 shipped systems.',
            'keywords' => 'solutions, custom software, SaaS, lead generation, platform development, AI development'
        ];

        include ROOT_PATH . '/views/templates/solutions.php';
    }

    public function training(): void
    {
        $page = [
            'title' => 'Training | Learn the Compounding Execution Method | Stealth Labz',
            'description' => '1-on-1 coaching and embedded team training. Learn the methodology behind 2,561 commits, 10 production systems, and a 13.4× compounding multiplier.',
            'keywords' => 'CEM training, coaching, methodology, AI development, execution method'
        ];

        include ROOT_PATH . '/views/templates/training.php';
    }

    public function ecosystem(): void
    {
        $page = [
            'title' => 'The Ecosystem | Stealth Labz',
            'description' => '7 brands across lead generation, consumer products, content, and AI — all owned, all in production, all connected through one platform.',
            'keywords' => 'ecosystem, portfolio, brands, platforms, lead generation, DTC, AI'
        ];

        include ROOT_PATH . '/views/templates/ecosystem.php';
    }
}
