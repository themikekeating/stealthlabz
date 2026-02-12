<?php
/**
 * Hub Template (Insights Listing)
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

$page['bodyClass'] = 'page-insights';
$page['description'] = $page['metaDescription'] ?? $page['description'] ?? '';
$page['head'] = ($page['head'] ?? '') . '<link rel="stylesheet" href="' . cdnUrl('css/insights.css') . '">';

// Determine base URL for pagination
$paginationBase = isset($currentCategory)
    ? 'insights/category/' . $currentCategory['slug']
    : 'insights';

ob_start();
?>

<!-- ════ HERO ════ -->
<section class="ins-hero">
    <div class="container-xl">
        <h1><?= htmlspecialchars($page['heading'] ?? 'Insights') ?></h1>
        <?php if (!empty($page['headerDescription'])): ?>
        <p class="ins-hero-sub"><?= htmlspecialchars($page['headerDescription']) ?></p>
        <?php endif; ?>

        <!-- Category Filter -->
        <?php if (!empty($categories)): ?>
        <div class="ins-filters">
            <a href="<?= siteUrl('insights') ?>"
               class="ins-filter <?= !isset($currentCategory) ? 'active' : '' ?>">All</a>
            <?php foreach ($categories as $cat): ?>
            <a href="<?= siteUrl('insights/category/' . htmlspecialchars($cat['slug'])) ?>"
               class="ins-filter <?= (isset($currentCategory) && $currentCategory['id'] === $cat['id']) ? 'active' : '' ?>">
                <?= htmlspecialchars($cat['name']) ?>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if (isset($pagination['count'])): ?>
        <div class="ins-count mono"><?= number_format($pagination['count']) ?> articles</div>
        <?php endif; ?>
    </div>
</section>

<!-- ════ GRID ════ -->
<section class="ins-section">
    <div class="container-xl">
        <?php if (!empty($posts)): ?>
        <div class="ins-grid">
            <?php foreach ($posts as $i => $post): ?>
            <a href="<?= siteUrl('insights/' . htmlspecialchars($post['slug'])) ?>"
               class="ins-card fade-up">
                <div class="ins-card-image">
                    <img src="<?= htmlspecialchars($post['featured_image']) ?>"
                         alt="<?= htmlspecialchars($post['title']) ?>"
                         loading="<?= $i < 6 ? 'eager' : 'lazy' ?>">
                </div>
                <div class="ins-card-body">
                    <?php if (!empty($post['category'])): ?>
                    <span class="ins-card-badge"><?= htmlspecialchars($post['category']['name']) ?></span>
                    <?php endif; ?>
                    <h2 class="ins-card-title"><?= htmlspecialchars($post['title']) ?></h2>
                    <?php if (!empty($post['excerpt'])): ?>
                    <p class="ins-card-excerpt"><?= htmlspecialchars(substr($post['excerpt'], 0, 120)) ?>...</p>
                    <?php endif; ?>
                    <?php if (!empty($post['published_at'])): ?>
                    <time class="ins-card-date" datetime="<?= $post['published_at'] ?>">
                        <?= date('F j, Y', strtotime($post['published_at'])) ?>
                    </time>
                    <?php endif; ?>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <?php if (isset($pagination) && $pagination['total'] > 1): ?>
        <nav class="ins-pagination">
            <?php if ($pagination['current'] > 1): ?>
            <a href="<?= siteUrl($paginationBase . '?page=' . ($pagination['current'] - 1)) ?>"
               class="ins-pagination-btn">&larr; Previous</a>
            <?php endif; ?>

            <span class="ins-pagination-info mono">
                Page <?= $pagination['current'] ?> of <?= $pagination['total'] ?>
            </span>

            <?php if ($pagination['current'] < $pagination['total']): ?>
            <a href="<?= siteUrl($paginationBase . '?page=' . ($pagination['current'] + 1)) ?>"
               class="ins-pagination-btn btn-glow">Next &rarr;</a>
            <?php endif; ?>
        </nav>
        <?php endif; ?>

        <?php else: ?>
        <p class="text-secondary text-center py-5">No articles found.</p>
        <?php endif; ?>
    </div>
</section>

<script>
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>

<?php
$content = ob_get_clean();
include ROOT_PATH . '/views/layouts/base.php';
