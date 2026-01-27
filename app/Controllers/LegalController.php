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

    public function cookies(): void
    {
        $page = [
            'title' => 'Cookie Policy | Stealth Labz',
            'description' => 'Cookie policy for Stealth Labz and associated properties.',
            'effectiveDate' => 'January 1, 2026',
            'sections' => [
                [
                    'title' => 'What Are Cookies',
                    'content' => 'Cookies are small text files stored on your device when you visit a website. They help us remember your preferences and understand how you use our site.'
                ],
                [
                    'title' => 'How We Use Cookies',
                    'content' => [
                        'Essential Cookies: Required for the website to function properly.',
                        'Analytics Cookies: Help us understand how visitors interact with our website.',
                        'Marketing Cookies: Used to deliver relevant advertisements and track campaign performance.'
                    ]
                ],
                [
                    'title' => 'Managing Cookies',
                    'content' => 'You can control and manage cookies through your browser settings. Note that disabling certain cookies may affect website functionality.'
                ],
                [
                    'title' => 'Contact Us',
                    'content' => 'For questions about our cookie policy, contact us at privacy@stealthlabz.com.'
                ]
            ]
        ];

        include ROOT_PATH . '/views/templates/legal.php';
    }

    public function disclaimer(): void
    {
        $page = [
            'title' => 'Disclaimer | Stealth Labz',
            'description' => 'Legal disclaimer for Stealth Labz and associated properties.',
            'effectiveDate' => 'January 1, 2026',
            'sections' => [
                [
                    'title' => 'General Information',
                    'content' => 'The information provided on this website is for general informational purposes only. All information is provided in good faith, however we make no representation or warranty of any kind regarding the accuracy, adequacy, validity, reliability, or completeness of any information.'
                ],
                [
                    'title' => 'Professional Advice',
                    'content' => 'The content on this website does not constitute professional advice. You should consult with appropriate professionals before taking any actions based on information found on this site.'
                ],
                [
                    'title' => 'External Links',
                    'content' => 'This website may contain links to external websites. We do not control the content or practices of these sites and are not responsible for their content or privacy policies.'
                ],
                [
                    'title' => 'Limitation of Liability',
                    'content' => 'Under no circumstances shall Stealth Labz be liable for any direct, indirect, incidental, consequential, special, or exemplary damages arising from your use of this website or any information contained herein.'
                ],
                [
                    'title' => 'Contact Us',
                    'content' => 'For questions about this disclaimer, contact us at legal@stealthlabz.com.'
                ]
            ]
        ];

        include ROOT_PATH . '/views/templates/legal.php';
    }
}
