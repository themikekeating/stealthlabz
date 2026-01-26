<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <title><?= htmlspecialchars($page['title'] ?? 'Terms of Service') ?></title>
    <link rel="canonical" href="<?= canonicalUrl() ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= cdnUrl('css/global.css') ?>">
</head>
<body>
    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <main class="legal-page">
        <div class="container">
            <h1>Terms of Service</h1>
            <p class="effective-date">Effective Date: January 1, 2026</p>

            <section>
                <h2>Acceptance of Terms</h2>
                <p>By accessing and using this website, you accept and agree to be bound by these terms of service.</p>
            </section>

            <section>
                <h2>Use of Website</h2>
                <p>You may use this website for lawful purposes only. You agree not to use this website in any way that violates applicable laws.</p>
            </section>

            <section>
                <h2>Contact</h2>
                <p>For questions about these terms, contact us at legal@stealthlabz.com.</p>
            </section>
        </div>
    </main>

    <?php include ROOT_PATH . '/views/components/footer.php'; ?>
</body>
</html>
