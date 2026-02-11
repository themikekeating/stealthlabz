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
            'title' => 'Stealth Labz | AI-Native Software Development',
            'description' => '10 production systems. 596K lines of code. 74 days. The Compounding Execution Method turns solo operators into system-building machines.',
            'og_description' => '10 production systems. 596K lines of code. 74 days. See the methodology behind a 13.4× compounding multiplier.',
            'keywords' => 'AI software development, compounding execution method, production systems, solo operator, rapid deployment'
        ];

        // Get recent blog posts for the insights section
        $recentPosts = Post::recent(3);

        include ROOT_PATH . '/views/templates/landing.php';
    }

    public function cem(): void
    {
        $page = [
            'title' => 'The Compounding Execution Method (CEM) | Stealth Labz',
            'description' => '12 mechanisms, 4 applications, and a tactical escalation chain. The execution OS behind 596K lines of production code shipped by one operator.',
            'keywords' => 'CEM, Compounding Execution Method, execution framework, AI development methodology, solo operator'
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
            'description' => '1-on-1 coaching and embedded team training. Master the 12 mechanisms behind 10 production systems and a 13.4× compounding multiplier.',
            'keywords' => 'CEM training, execution coaching, methodology training, AI development, compounding execution method'
        ];

        include ROOT_PATH . '/views/templates/training.php';
    }

    public function ecosystem(): void
    {
        $page = [
            'title' => 'The Ecosystem — 10 Live Brands | Stealth Labz',
            'description' => 'Lead generation, consumer products, content platforms, and AI tools — 10 brands, all owned, all live, all built with the Compounding Execution Method.',
            'keywords' => 'brand ecosystem, production portfolio, lead generation, DTC brands, AI platforms, CEM'
        ];

        include ROOT_PATH . '/views/templates/ecosystem.php';
    }
}
