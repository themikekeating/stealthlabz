<?php
/**
 * Hub Template
 *
 * Content listing page with card grid and pagination.
 * Used for: Insights hub, Trends hub, category pages, etc.
 *
 * Variables:
 *   $page['title']       - Hub title
 *   $page['description'] - Hub description (shown in header)
 *   $page['metaDescription'] - SEO meta description
 *   $posts               - Array of posts
 *   $pagination          - Pagination data (current, total, count)
 */

$page['bodyClass'] = 'page-hub';
$page['description'] = $page['metaDescription'] ?? $page['description'] ?? '';

ob_start();
?>

<div class="container py-5 mt-5">
    <header class="mb-5">
        <h1 class="display-5 fw-bold mb-2"><?= htmlspecialchars($page['title'] ?? 'Articles') ?></h1>
        <?php if (!empty($page['description'])): ?>
        <p class="lead text-secondary"><?= htmlspecialchars($page['headerDescription'] ?? $page['description']) ?></p>
        <?php endif; ?>
        <?php if (isset($pagination['count'])): ?>
        <span class="text-muted small"><?= number_format($pagination['count']) ?> articles</span>
        <?php endif; ?>
    </header>

    <?php if (!empty($posts)): ?>
    <div class="row g-4">
        <?php foreach ($posts as $post): ?>
        <div class="col-md-6 col-lg-4">
            <article class="card h-100 bg-card border-subtle overflow-hidden">
                <?php if (!empty($post['featured_image'])): ?>
                <img src="<?= htmlspecialchars($post['featured_image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($post['title']) ?>" style="height: 180px; object-fit: cover;">
                <?php endif; ?>
                <div class="card-body d-flex flex-column">
                    <?php if (!empty($post['category'])): ?>
                    <span class="badge bg-tertiary text-accent-pink mb-2 align-self-start"><?= htmlspecialchars($post['category']) ?></span>
                    <?php endif; ?>
                    <h2 class="h5 card-title">
                        <a href="<?= siteUrl('insights/' . htmlspecialchars($post['slug'])) ?>" class="text-decoration-none text-white stretched-link">
                            <?= htmlspecialchars($post['title']) ?>
                        </a>
                    </h2>
                    <?php if (!empty($post['excerpt'])): ?>
                    <p class="card-text text-secondary small flex-grow-1"><?= htmlspecialchars(substr($post['excerpt'], 0, 120)) ?>...</p>
                    <?php endif; ?>
                    <?php if (!empty($post['published_at'])): ?>
                    <time datetime="<?= $post['published_at'] ?>" class="text-muted small mt-auto">
                        <?= date('F j, Y', strtotime($post['published_at'])) ?>
                    </time>
                    <?php endif; ?>
                </div>
            </article>
        </div>
        <?php endforeach; ?>
    </div>

    <?php if (isset($pagination) && $pagination['total'] > 1): ?>
    <nav class="d-flex justify-content-center align-items-center gap-4 mt-5 pt-4 border-top border-subtle">
        <?php if ($pagination['current'] > 1): ?>
        <a href="<?= siteUrl('insights?page=' . ($pagination['current'] - 1)) ?>" class="btn btn-outline-pink">
            &larr; Previous
        </a>
        <?php endif; ?>

        <span class="text-muted">Page <?= $pagination['current'] ?> of <?= $pagination['total'] ?></span>

        <?php if ($pagination['current'] < $pagination['total']): ?>
        <a href="<?= siteUrl('insights?page=' . ($pagination['current'] + 1)) ?>" class="btn btn-outline-pink">
            Next &rarr;
        </a>
        <?php endif; ?>
    </nav>
    <?php endif; ?>

    <?php else: ?>
    <p class="text-secondary">No articles found.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
include ROOT_PATH . '/views/layouts/base.php';
