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

    public function tech(): void
    {
        $page = [
            'title' => 'Our Tech | Stealth Labz',
            'description' => 'The technology stack powering Stealth Labz platforms.',
            'keywords' => 'technology, tech stack, Laravel, PHP, AI development'
        ];

        include ROOT_PATH . '/views/templates/tech.php';
    }
}
