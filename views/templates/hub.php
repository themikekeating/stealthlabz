<?php
/**
 * Hub Template
 *
 * Content listing page with card grid and pagination.
 * Used for: Insights hub, category pages, etc.
 *
 * Variables:
 *   $page['title']       - Hub title
 *   $page['description'] - Hub description (shown in header)
 *   $page['metaDescription'] - SEO meta description
 *   $posts               - Array of posts
 *   $pagination          - Pagination data (current, total, count)
 *   $categories          - Array of all categories (optional)
 *   $currentCategory     - Current category being viewed (optional)
 */

$page['bodyClass'] = 'page-hub';
$page['description'] = $page['metaDescription'] ?? $page['description'] ?? '';

// Determine base URL for pagination
$paginationBase = isset($currentCategory)
    ? 'insights/category/' . $currentCategory['slug']
    : 'insights';

ob_start();
?>

<div class="container py-5 mt-5">
    <header class="mb-4">
        <h1 class="display-5 fw-bold mb-2"><?= htmlspecialchars($page['heading'] ?? 'Insights') ?></h1>
        <?php if (!empty($page['headerDescription'])): ?>
        <p class="lead text-secondary"><?= htmlspecialchars($page['headerDescription']) ?></p>
        <?php endif; ?>
    </header>

    <?php if (!empty($categories)): ?>
    <nav class="mb-4 pb-4 border-bottom border-subtle">
        <div class="d-flex flex-wrap gap-2 align-items-center">
            <a href="<?= siteUrl('insights') ?>"
               class="btn btn-sm <?= !isset($currentCategory) ? 'btn-outline-pink' : 'btn-outline-secondary' ?>">
                All
            </a>
            <?php foreach ($categories as $cat): ?>
            <a href="<?= siteUrl('insights/category/' . htmlspecialchars($cat['slug'])) ?>"
               class="btn btn-sm <?= (isset($currentCategory) && $currentCategory['id'] === $cat['id']) ? 'btn-outline-pink' : 'btn-outline-secondary' ?>">
                <?= htmlspecialchars($cat['name']) ?>
            </a>
            <?php endforeach; ?>
        </div>
        <?php if (isset($pagination['count'])): ?>
        <span class="text-muted small mt-2 d-block"><?= number_format($pagination['count']) ?> articles</span>
        <?php endif; ?>
    </nav>
    <?php endif; ?>

    <?php if (!empty($posts)): ?>
    <div class="row g-4">
        <?php foreach ($posts as $post): ?>
        <div class="col-md-6 col-lg-4">
            <article class="card h-100 bg-card border-subtle overflow-hidden">
                <img src="<?= htmlspecialchars($post['featured_image']) ?>"
                     class="card-img-top img-h-180 img-cover"
                     alt="<?= htmlspecialchars($post['title']) ?>"
                     loading="lazy">
                <div class="card-body d-flex flex-column">
                    <?php if (!empty($post['category'])): ?>
                    <div class="mb-2 z-above">
                        <a href="<?= siteUrl('insights/category/' . htmlspecialchars($post['category']['slug'])) ?>"
                           class="badge badge-category text-decoration-none">
                            <?= htmlspecialchars($post['category']['name']) ?>
                        </a>
                    </div>
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
        <a href="<?= siteUrl($paginationBase . '?page=' . ($pagination['current'] - 1)) ?>" class="btn btn-outline-pink">
            &larr; Previous
        </a>
        <?php endif; ?>

        <span class="text-muted">Page <?= $pagination['current'] ?> of <?= $pagination['total'] ?></span>

        <?php if ($pagination['current'] < $pagination['total']): ?>
        <a href="<?= siteUrl($paginationBase . '?page=' . ($pagination['current'] + 1)) ?>" class="btn btn-outline-pink">
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
