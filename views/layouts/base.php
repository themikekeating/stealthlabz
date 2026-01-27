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
 *   $content             - Main page content (HTML string)
 */
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <title><?= htmlspecialchars($page['title'] ?? 'Stealth Labz') ?></title>
    <link rel="canonical" href="<?= canonicalUrl() ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme Overrides -->
    <link rel="stylesheet" href="<?= cdnUrl('css/global.css') ?>">

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
