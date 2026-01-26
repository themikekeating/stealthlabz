<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <title><?= htmlspecialchars($page['title'] ?? 'Privacy Policy') ?></title>
    <link rel="canonical" href="<?= canonicalUrl() ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= cdnUrl('css/global.css') ?>">
</head>
<body>
    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <main class="legal-page">
        <div class="container">
            <h1>Privacy Policy</h1>
            <p class="effective-date">Effective Date: January 1, 2026</p>

            <section>
                <h2>Information We Collect</h2>
                <p>We collect information you provide directly to us, including contact information when you reach out through our website.</p>
            </section>

            <section>
                <h2>How We Use Your Information</h2>
                <p>We use the information we collect to respond to your inquiries, provide services, and improve our offerings.</p>
            </section>

            <section>
                <h2>Contact Us</h2>
                <p>For questions about this privacy policy, contact us at privacy@stealthlabz.com.</p>
            </section>
        </div>
    </main>

    <?php include ROOT_PATH . '/views/components/footer.php'; ?>
</body>
</html>
