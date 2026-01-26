<?php
/**
 * Landing Page Controller
 */

namespace App\Controllers;

class LandingController
{
    public function index(): void
    {
        $page = [
            'title' => 'Stealth Labz | Built Different. Ships Fast.',
            'description' => '15+ years of combined execution across performance marketing, product development, and global operations — now accelerated by AI.',
            'keywords' => 'software development, performance marketing, AI, product development, global operations'
        ];

        include ROOT_PATH . '/views/templates/landing.php';
    }
}
