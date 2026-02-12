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
            'title' => 'Stealth Labz — AI-Native Operating Company',
            'description' => '$4.5M in proprietary revenue systems across lead gen, SaaS, DTC, and content. 12 verticals. Two continents. Built on 20+ years of compounding execution depth.',
            'og_description' => '$4.5M in proprietary software. 12 verticals. Two continents. See what an AI-native operating company looks like.',
            'keywords' => 'AI-native operating company, proprietary revenue systems, lead generation, SaaS, DTC, compounding execution method'
        ];

        // Get recent blog posts for the insights section
        $recentPosts = Post::recent(3);

        include ROOT_PATH . '/views/templates/landing.php';
    }

    public function cem(): void
    {
        $page = [
            'title' => 'The Compounding Execution Method (CEM) | Stealth Labz',
            'description' => 'Refined over 18 years across 70+ projects and 8 verticals. The execution framework behind 10 production systems and a 13.4× compounding multiplier.',
            'keywords' => 'CEM, Compounding Execution Method, execution framework, AI development methodology, solo operator'
        ];

        include ROOT_PATH . '/views/templates/cem.php';
    }

    public function solutions(): void
    {
        $page = [
            'title' => 'Solutions — Custom Software & Systems | Stealth Labz',
            'description' => 'Custom builds, proven systems, or learn the method. Three tracks for teams that need production software shipped fast.',
            'keywords' => 'custom software development, production systems, SaaS development, AI integration, CEM training'
        ];

        include ROOT_PATH . '/views/templates/solutions.php';
    }

    public function training(): void
    {
        $page = [
            'title' => 'CEM Training — Learn the Method | Stealth Labz',
            'description' => 'Hands-on training applied to your real projects. Learn the full CEM framework in 4–8 weeks with the operator who built 10 production systems.',
            'keywords' => 'CEM training, execution coaching, methodology training, AI development, compounding execution method'
        ];

        include ROOT_PATH . '/views/templates/training.php';
    }

    public function ecosystem(): void
    {
        $page = [
            'title' => 'The Ecosystem — 7 Live Brands | Stealth Labz',
            'description' => 'Lead generation, SaaS, DTC, and content — 7 brands across 4 verticals and 2 continents, all owned, all live, all built with the Compounding Execution Method.',
            'keywords' => 'brand ecosystem, production portfolio, lead generation, DTC brands, AI platforms, CEM'
        ];

        include ROOT_PATH . '/views/templates/ecosystem.php';
    }
}
