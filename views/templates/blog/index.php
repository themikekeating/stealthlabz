<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <title><?= htmlspecialchars($page['title'] ?? 'Insights') ?></title>
    <link rel="canonical" href="<?= canonicalUrl() ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= cdnUrl('css/global.css') ?>">
</head>
<body>
    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <main class="blog-index">
        <div class="container-xl">
            <header class="blog-header">
                <h1>Insights</h1>
                <p>Technical deep-dives on AI development, lead generation, and performance marketing.</p>
                <?php if (isset($pagination['count'])): ?>
                <span class="post-count"><?= number_format($pagination['count']) ?> articles</span>
                <?php endif; ?>
            </header>

            <div class="blog-grid">
                <?php foreach ($posts as $post): ?>
                <article class="blog-card">
                    <h2><a href="<?= siteUrl('insights/' . htmlspecialchars($post['slug'])) ?>"><?= htmlspecialchars($post['title']) ?></a></h2>
                    <?php if (!empty($post['excerpt'])): ?>
                    <p><?= htmlspecialchars(substr($post['excerpt'], 0, 160)) ?>...</p>
                    <?php endif; ?>
                    <?php if (!empty($post['published_at'])): ?>
                    <time datetime="<?= $post['published_at'] ?>"><?= date('F j, Y', strtotime($post['published_at'])) ?></time>
                    <?php endif; ?>
                </article>
                <?php endforeach; ?>
            </div>

            <?php if (isset($pagination) && $pagination['total'] > 1): ?>
            <nav class="pagination">
                <?php if ($pagination['current'] > 1): ?>
                <a href="<?= siteUrl('insights?page=' . ($pagination['current'] - 1)) ?>" class="pagination-prev">&larr; Previous</a>
                <?php endif; ?>

                <span class="pagination-info">Page <?= $pagination['current'] ?> of <?= $pagination['total'] ?></span>

                <?php if ($pagination['current'] < $pagination['total']): ?>
                <a href="<?= siteUrl('insights?page=' . ($pagination['current'] + 1)) ?>" class="pagination-next">Next &rarr;</a>
                <?php endif; ?>
            </nav>
            <?php endif; ?>
        </div>
    </main>

    <?php include ROOT_PATH . '/views/components/footer.php'; ?>
</body>
</html>
