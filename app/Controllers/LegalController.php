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
            'description' => 'Privacy policy for Stealth Labz and associated properties.'
        ];

        include ROOT_PATH . '/views/templates/legal/privacy.php';
    }

    public function terms(): void
    {
        $page = [
            'title' => 'Terms of Service | Stealth Labz',
            'description' => 'Terms of service for Stealth Labz and associated properties.'
        ];

        include ROOT_PATH . '/views/templates/legal/terms.php';
    }
}
