<?php
/**
 * Legal Pages Controller
 */

namespace App\Controllers;

class LegalController
{
    public function privacy(): void
    {
        $page = [
            'title' => 'Privacy Policy | Stealth Labz',
            'description' => 'Privacy policy for Stealth Labz and associated properties.',
            'effectiveDate' => 'January 1, 2026',
            'sections' => [
                [
                    'title' => 'Information We Collect',
                    'content' => 'We collect information you provide directly to us, including contact information when you reach out through our website.'
                ],
                [
                    'title' => 'How We Use Your Information',
                    'content' => 'We use the information we collect to respond to your inquiries, provide services, and improve our offerings.'
                ],
                [
                    'title' => 'Contact Us',
                    'content' => 'For questions about this privacy policy, contact us at privacy@stealthlabz.com.'
                ]
            ]
        ];

        include ROOT_PATH . '/views/templates/legal.php';
    }

    public function terms(): void
    {
        $page = [
            'title' => 'Terms of Service | Stealth Labz',
            'description' => 'Terms of service for Stealth Labz and associated properties.',
            'effectiveDate' => 'January 1, 2026',
            'sections' => [
                [
                    'title' => 'Acceptance of Terms',
                    'content' => 'By accessing or using our services, you agree to be bound by these Terms of Service.'
                ],
                [
                    'title' => 'Use of Services',
                    'content' => 'You agree to use our services only for lawful purposes and in accordance with these terms.'
                ],
                [
                    'title' => 'Intellectual Property',
                    'content' => 'All content, features, and functionality of our services are owned by Stealth Labz and are protected by copyright and other intellectual property laws.'
                ],
                [
                    'title' => 'Contact Us',
                    'content' => 'For questions about these terms, contact us at legal@stealthlabz.com.'
                ]
            ]
        ];

        include ROOT_PATH . '/views/templates/legal.php';
    }
}
