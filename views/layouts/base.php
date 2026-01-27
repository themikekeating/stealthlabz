<?php
/**
 * Base Layout
 *
 * Shared HTML shell for all pages (except landing).
 *
 * Variables:
 *   $page['title']       - Page title
 *   $page['description'] - Meta description
 *   $page['bodyClass']   - Optional body CSS class
 *   $page['head']        - Optional extra head content (schema, etc.)
 *   $page['image']       - Optional OG image URL
 *   $page['type']        - Optional OG type (default: website)
 *   $content             - Main page content (HTML string)
 */

$ogImage = $page['image'] ?? 'https://stealthlabz.com/cdn/images/og-default.png';
$ogType = $page['type'] ?? 'website';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#e91e8c">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <title><?= htmlspecialchars($page['title'] ?? 'Stealth Labz') ?></title>
    <link rel="canonical" href="<?= canonicalUrl() ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($page['title'] ?? 'Stealth Labz') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
    <meta property="og:url" content="<?= canonicalUrl() ?>">
    <meta property="og:type" content="<?= $ogType ?>">
    <meta property="og:site_name" content="Stealth Labz">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page['title'] ?? 'Stealth Labz') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= cdnUrl('favicon.ico') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= cdnUrl('apple-touch-icon.png') ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme Overrides -->
    <link rel="stylesheet" href="<?= cdnUrl('css/global.css') ?>">

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Stealth Labz",
        "url": "https://stealthlabz.com",
        "logo": "https://stealthlabz.com/cdn/images/logo.png",
        "description": "AI-powered marketing technology and lead generation solutions.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1225 W Beaver St. Ste 205-1 #1135",
            "addressLocality": "Jacksonville",
            "addressRegion": "FL",
            "postalCode": "32204",
            "addressCountry": "US"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Sales",
            "email": "contact@stealthlabz.com"
        }
    }
    </script>

    <!-- WebSite Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Stealth Labz",
        "url": "https://stealthlabz.com",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://stealthlabz.com/insights?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    <?= $page['head'] ?? '' ?>
</head>
<body class="<?= htmlspecialchars($page['bodyClass'] ?? '') ?>">
    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <main>
        <?= $content ?>
    </main>

    <?php include ROOT_PATH . '/views/components/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
