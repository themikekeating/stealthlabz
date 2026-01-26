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
        <div class="container">
            <header class="blog-header">
                <h1>Insights</h1>
                <p>Technical deep-dives on AI development, lead generation, and performance marketing.</p>
            </header>

            <div class="blog-grid">
                <?php foreach ($posts as $slug => $post): ?>
                <article class="blog-card">
                    <span class="blog-category"><?= htmlspecialchars($post['category']) ?></span>
                    <h2><a href="<?= siteUrl('insights/' . $slug) ?>"><?= htmlspecialchars($post['title']) ?></a></h2>
                    <p><?= htmlspecialchars($post['description']) ?></p>
                    <time datetime="<?= $post['date'] ?>"><?= date('F j, Y', strtotime($post['date'])) ?></time>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <?php include ROOT_PATH . '/views/components/footer.php'; ?>
</body>
</html>
