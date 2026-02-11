<?php
/**
 * Legal Pages Controller
 *
 * Policy content adapted from Basecamp's open source policies (CC-BY license)
 * https://github.com/basecamp/policies
 */

namespace App\Controllers;

class LegalController
{
    public function privacy(): void
    {
        $page = [
            'title' => 'Privacy Policy | Stealth Labz',
            'heading' => 'Privacy Policy',
            'description' => 'How Stealth Labz collects, uses, and protects your personal data.',
            'effectiveDate' => 'January 27, 2026',
            'sections' => [
                [
                    'title' => 'Our Commitment to Privacy',
                    'content' => 'The privacy of your data is a big deal to us. We will never sell your personal information to third parties. This policy explains what information we collect, why we collect it, and how we handle it.'
                ],
                [
                    'title' => 'What We Collect and Why',
                    'content' => [
                        'Identity & Contact Information: When you reach out to us or sign up for our services, we collect your name, email address, and company name. This helps us communicate with you and provide our services.',
                        'Billing Information: If you purchase our services, your payment details are submitted directly to our payment processor. We only retain the last four digits of your credit card and billing address for our records and tax compliance.',
                        'Website Analytics: We collect information about how you use our website, including browser type, pages visited, and time spent. This helps us improve our site and understand what content is valuable to you.',
                        'Communications: When you email us or fill out forms, we keep those communications so we can respond to you and improve our services.'
                    ]
                ],
                [
                    'title' => 'When We Access or Share Your Information',
                    'content' => [
                        'To provide services: We may use trusted third-party services to help deliver our work (hosting, email, project management). These providers only access data necessary to perform their functions.',
                        'To comply with the law: We will share information if required by law, subpoena, or court order. We will notify you when possible unless legally prohibited.',
                        'To protect rights and safety: We may share information to investigate potential violations of our terms, or to protect the rights, property, and safety of Stealth Labz, our clients, or others.'
                    ]
                ],
                [
                    'title' => 'Your Rights',
                    'content' => [
                        'Right to Access: You can request a copy of the personal information we hold about you.',
                        'Right to Correction: You can ask us to correct inaccurate information.',
                        'Right to Deletion: You can request that we delete your personal information, subject to legal retention requirements.',
                        'Right to Object: You can object to our processing of your data in certain circumstances.',
                        'Right to Portability: You can request your data in a commonly used, machine-readable format.'
                    ]
                ],
                [
                    'title' => 'Data Security',
                    'content' => 'All data is encrypted in transit using SSL/TLS. We use industry-standard security practices to protect your information. However, no method of transmission or storage is 100% secure, and we cannot guarantee absolute security.'
                ],
                [
                    'title' => 'Data Retention',
                    'content' => 'We retain your information only as long as necessary to provide our services and fulfill the purposes described in this policy. When data is no longer needed, we securely delete or anonymize it.'
                ],
                [
                    'title' => 'International Data Transfers',
                    'content' => 'Our services are hosted in the United States. If you are accessing our services from outside the U.S., please be aware that your information may be transferred to, stored, and processed in the U.S. where our servers are located.'
                ],
                [
                    'title' => 'Changes to This Policy',
                    'content' => 'We may update this policy from time to time. We will notify you of significant changes by posting the new policy on this page and updating the effective date.'
                ],
                [
                    'title' => 'Contact Us',
                    'content' => 'For questions about this privacy policy or to exercise your rights, contact us at privacy@stealthlabz.com or write to: Stealth Labz LLC, 1225 W Beaver St. Ste 205-1 #1135, Jacksonville, FL 32204.'
                ]
            ]
        ];

        include ROOT_PATH . '/views/templates/legal.php';
    }

    public function terms(): void
    {
        $page = [
            'title' => 'Terms of Service | Stealth Labz',
            'heading' => 'Terms of Service',
            'description' => 'Terms governing use of Stealth Labz services, deliverables, and website.',
            'effectiveDate' => 'January 27, 2026',
            'sections' => [
                [
                    'title' => 'Agreement to Terms',
                    'content' => 'By accessing our website or using our services, you agree to be bound by these Terms of Service. If you disagree with any part of these terms, you may not access our services.'
                ],
                [
                    'title' => 'Our Services',
                    'content' => 'Stealth Labz provides performance marketing, AI development, and product development services. Specific deliverables, timelines, and terms are defined in individual service agreements with clients.'
                ],
                [
                    'title' => 'Client Responsibilities',
                    'content' => [
                        'You are responsible for providing accurate information and timely feedback.',
                        'You must not use our services for any unlawful purpose or in violation of any applicable laws.',
                        'You are responsible for maintaining the confidentiality of any account credentials.',
                        'You agree not to reproduce, duplicate, copy, sell, or exploit any portion of our services without express written permission.'
                    ]
                ],
                [
                    'title' => 'Intellectual Property',
                    'content' => [
                        'Our Property: The Stealth Labz website, branding, and proprietary tools remain our intellectual property.',
                        'Your Property: You retain ownership of your data and content you provide to us.',
                        'Work Product: Ownership of deliverables is defined in individual service agreements. Generally, upon full payment, clients receive ownership of custom work created specifically for them.'
                    ]
                ],
                [
                    'title' => 'Payment Terms',
                    'content' => 'Payment terms are specified in individual service agreements. Unless otherwise stated, invoices are due within 30 days. We reserve the right to suspend services for overdue accounts.'
                ],
                [
                    'title' => 'Confidentiality',
                    'content' => 'We treat all client information as confidential. We will not disclose your business information to third parties except as necessary to provide our services or as required by law.'
                ],
                [
                    'title' => 'Limitation of Liability',
                    'content' => 'To the maximum extent permitted by law, Stealth Labz shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including loss of profits, data, or business opportunities, arising from your use of our services. Our total liability shall not exceed the amount paid by you for services in the twelve months preceding the claim.'
                ],
                [
                    'title' => 'Disclaimer of Warranties',
                    'content' => 'Our services are provided "as is" without warranties of any kind, either express or implied. We do not guarantee that our services will meet your specific requirements or that results will be achieved.'
                ],
                [
                    'title' => 'Termination',
                    'content' => 'Either party may terminate services according to the terms of their service agreement. We reserve the right to terminate or suspend access to our services immediately, without prior notice, for conduct that we believe violates these terms or is harmful to other users, us, or third parties.'
                ],
                [
                    'title' => 'Governing Law',
                    'content' => 'These terms shall be governed by the laws of the State of Florida, United States, without regard to its conflict of law provisions.'
                ],
                [
                    'title' => 'Changes to Terms',
                    'content' => 'We reserve the right to modify these terms at any time. We will provide notice of significant changes. Your continued use of our services after changes constitutes acceptance of the new terms.'
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
            'heading' => 'Cookie Policy',
            'description' => 'How Stealth Labz uses cookies and similar tracking technologies.',
            'effectiveDate' => 'January 27, 2026',
            'sections' => [
                [
                    'title' => 'What Are Cookies',
                    'content' => 'Cookies are small text files that are stored on your device when you visit a website. They help websites remember your preferences and understand how you interact with the site. Cookies are widely used to make websites work more efficiently and provide useful information to website owners.'
                ],
                [
                    'title' => 'How We Use Cookies',
                    'content' => [
                        'Essential Cookies: These are necessary for the website to function properly. They enable basic features like page navigation and access to secure areas. The website cannot function properly without these cookies.',
                        'Analytics Cookies: We use analytics cookies (such as Google Analytics) to understand how visitors interact with our website. This helps us improve our site and content. These cookies collect information anonymously.',
                        'Functional Cookies: These cookies remember choices you make (such as your preferred language or region) to provide a more personalized experience.',
                        'Marketing Cookies: We may use marketing cookies to deliver relevant advertisements and track campaign performance. These cookies track your browsing activity across websites.'
                    ]
                ],
                [
                    'title' => 'Third-Party Cookies',
                    'content' => 'Some cookies on our site are set by third-party services. We use services like Google Analytics for website analytics and may use advertising platforms for marketing. These third parties have their own privacy policies governing how they use your information.'
                ],
                [
                    'title' => 'Managing Cookies',
                    'content' => [
                        'Browser Settings: Most web browsers allow you to control cookies through their settings. You can set your browser to refuse all cookies or to indicate when a cookie is being sent.',
                        'Opt-Out Tools: For analytics cookies, you can use the Google Analytics opt-out browser add-on. For advertising cookies, you can visit the Digital Advertising Alliance opt-out page.',
                        'Note: If you disable certain cookies, some features of our website may not function properly.'
                    ]
                ],
                [
                    'title' => 'Cookie Retention',
                    'content' => 'Session cookies are deleted when you close your browser. Persistent cookies remain on your device for a set period or until you delete them. Analytics cookies typically expire after 2 years. Marketing cookies may persist for up to 1 year.'
                ],
                [
                    'title' => 'Updates to This Policy',
                    'content' => 'We may update this cookie policy from time to time to reflect changes in our practices or for operational, legal, or regulatory reasons.'
                ],
                [
                    'title' => 'Contact Us',
                    'content' => 'If you have questions about our use of cookies, please contact us at privacy@stealthlabz.com.'
                ]
            ]
        ];

        include ROOT_PATH . '/views/templates/legal.php';
    }

    public function disclaimer(): void
    {
        $page = [
            'title' => 'Disclaimer | Stealth Labz',
            'heading' => 'Disclaimer',
            'description' => 'Legal disclaimer covering Stealth Labz website content, case studies, and liability.',
            'effectiveDate' => 'January 27, 2026',
            'sections' => [
                [
                    'title' => 'General Information',
                    'content' => 'The information provided on this website is for general informational purposes only. While we strive to keep the information accurate and up to date, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the information, products, services, or related graphics contained on this website.'
                ],
                [
                    'title' => 'Not Professional Advice',
                    'content' => 'The content on this website, including blog posts and articles, does not constitute professional advice. The information provided is general in nature and should not be relied upon for making business, legal, financial, or technical decisions. You should consult with qualified professionals before taking any action based on information found on this site.'
                ],
                [
                    'title' => 'No Guarantees',
                    'content' => 'While we share case studies and examples of our work, past performance does not guarantee future results. Marketing results, AI implementations, and product development outcomes vary based on numerous factors including market conditions, competition, execution, and timing.'
                ],
                [
                    'title' => 'External Links',
                    'content' => 'This website may contain links to external websites that are not operated by us. We have no control over the content, privacy policies, or practices of any third-party sites or services. We do not endorse or assume responsibility for any third-party content, products, or services.'
                ],
                [
                    'title' => 'Testimonials and Case Studies',
                    'content' => 'Any testimonials or case studies presented on this website represent individual experiences and results. They are not intended to represent or guarantee that anyone will achieve the same or similar results. Each client situation is unique.'
                ],
                [
                    'title' => 'Limitation of Liability',
                    'content' => 'In no event shall Stealth Labz LLC, its directors, employees, partners, agents, suppliers, or affiliates be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from your access to or use of (or inability to access or use) this website or any content on this website.'
                ],
                [
                    'title' => 'Indemnification',
                    'content' => 'You agree to defend, indemnify, and hold harmless Stealth Labz LLC and its officers, directors, employees, and agents from any claims, damages, obligations, losses, liabilities, costs, or expenses arising from your use of this website or violation of these terms.'
                ],
                [
                    'title' => 'Changes to This Disclaimer',
                    'content' => 'We reserve the right to modify this disclaimer at any time. Changes will be effective immediately upon posting to this website. Your continued use of the website after any changes indicates your acceptance of the modified disclaimer.'
                ],
                [
                    'title' => 'Contact Us',
                    'content' => 'If you have any questions about this disclaimer, please contact us at legal@stealthlabz.com.'
                ]
            ]
        ];

        include ROOT_PATH . '/views/templates/legal.php';
    }
}
