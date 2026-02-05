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
            'title' => 'Stealth Labz | Built Different. Ships Fast.',
            'description' => '15+ years of combined execution across performance marketing, product development, and global operations — now accelerated by AI.',
            'keywords' => 'software development, performance marketing, AI, product development, global operations'
        ];

        // Get recent blog posts for the insights section
        $recentPosts = Post::recent(3);

        include ROOT_PATH . '/views/templates/landing.php';
    }

    public function process(): void
    {
        $page = [
            'title' => 'Process — The Compounding Execution Method | Stealth Labz',
            'description' => 'A universal execution operating system for AI-native builders. The methodology behind 596,903 lines of production code and 10 systems shipped by a solo operator.',
            'keywords' => 'CEM, Compounding Execution Method, AI development, methodology, software development'
        ];

        include ROOT_PATH . '/views/templates/cem.php';
    }

    public function stack(): void
    {
        $page = [
            'title' => 'Stack | Stealth Labz',
            'description' => 'The technology stack behind 10 production systems, 596,903 lines of code, and $938K in revenue.',
            'keywords' => 'technology, tech stack, Laravel, PHP, AI development'
        ];

        include ROOT_PATH . '/views/templates/tech.php';
    }

    public function brands(): void
    {
        $page = [
            'title' => 'Brands | Stealth Labz',
            'description' => '10 production systems across lead generation, content, DTC, and AI. Our portfolio of live platforms.',
            'keywords' => 'portfolio, brands, platforms, lead generation, DTC'
        ];

        include ROOT_PATH . '/views/templates/brands.php';
    }
}
