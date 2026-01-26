<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <title><?= htmlspecialchars($page['title'] ?? 'Article') ?></title>
    <link rel="canonical" href="<?= canonicalUrl() ?>">

    <!-- Article Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "<?= htmlspecialchars($post['title']) ?>",
        "description": "<?= htmlspecialchars($post['excerpt'] ?? '') ?>",
        "author": {
            "@type": "Organization",
            "name": "Stealth Labz"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Stealth Labz",
            "url": "https://stealthlabz.com"
        },
        "datePublished": "<?= $post['published_at'] ?? '' ?>",
        "dateModified": "<?= $post['updated_at'] ?? $post['published_at'] ?? '' ?>",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?= canonicalUrl() ?>"
        }
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= cdnUrl('css/global.css') ?>">
</head>
<body>
    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <main class="blog-post">
        <article class="container">
            <header class="post-header">
                <h1><?= htmlspecialchars($post['title']) ?></h1>
                <?php if (!empty($post['published_at'])): ?>
                <time datetime="<?= $post['published_at'] ?>"><?= date('F j, Y', strtotime($post['published_at'])) ?></time>
                <?php endif; ?>
            </header>

            <div class="post-content">
                <?= $post['content'] ?>
            </div>

            <footer class="post-footer">
                <a href="<?= siteUrl('insights') ?>" class="back-link">&larr; Back to Insights</a>
            </footer>
        </article>

        <?php if (!empty($recentPosts)): ?>
        <aside class="recent-posts container">
            <h3>Recent Articles</h3>
            <ul>
                <?php foreach ($recentPosts as $recent): ?>
                <li><a href="<?= siteUrl('insights/' . htmlspecialchars($recent['slug'])) ?>"><?= htmlspecialchars($recent['title']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
        <?php endif; ?>
    </main>

    <?php include ROOT_PATH . '/views/components/footer.php'; ?>
</body>
</html>
