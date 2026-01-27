<?php
/**
 * Article Template
 *
 * Single blog post/article page with schema markup.
 *
 * Variables:
 *   $post         - Post data (title, content, slug, excerpt, published_at, updated_at)
 *   $recentPosts  - Array of recent posts for sidebar
 *   $page         - Page metadata (auto-populated from $post)
 */

$page['title'] = htmlspecialchars($post['title']) . ' | Stealth Labz';
$page['description'] = $post['excerpt'] ?? '';
$page['bodyClass'] = 'page-article';

// Article Schema
$page['head'] = '
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "' . htmlspecialchars($post['title'], ENT_QUOTES) . '",
    "description": "' . htmlspecialchars($post['excerpt'] ?? '', ENT_QUOTES) . '",
    "image": "' . htmlspecialchars($post['featured_image'] ?? '', ENT_QUOTES) . '",
    "author": {
        "@type": "Organization",
        "name": "Stealth Labz"
    },
    "publisher": {
        "@type": "Organization",
        "name": "Stealth Labz",
        "url": "https://stealthlabz.com"
    },
    "datePublished": "' . ($post['published_at'] ?? '') . '",
    "dateModified": "' . ($post['updated_at'] ?? $post['published_at'] ?? '') . '",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "' . canonicalUrl() . '"
    }
}
</script>';

ob_start();
?>

<article class="container py-5 mt-5" style="max-width: 800px;">
    <?php
    $fallbackSeed = abs(crc32($post['slug'])) % 12 + 1;
    $fallbackUrl = "https://picsum.photos/seed/stealth{$fallbackSeed}/1200/630?grayscale";
    ?>
    <img src="<?= htmlspecialchars($post['featured_image'] ?? $fallbackUrl) ?>"
         class="w-100 rounded mb-4"
         alt="<?= htmlspecialchars($post['title']) ?>"
         style="max-height: 400px; object-fit: cover;"
         data-fallback="<?= $fallbackUrl ?>"
         onerror="this.onerror=null; this.src=this.dataset.fallback"
         onload="if(this.naturalWidth<100)this.src=this.dataset.fallback">

    <header class="mb-4 pb-4 border-bottom border-subtle">
        <h1 class="display-5 fw-bold mb-3"><?= htmlspecialchars($post['title']) ?></h1>
        <?php if (!empty($post['published_at'])): ?>
        <time datetime="<?= $post['published_at'] ?>" class="text-muted">
            <?= date('F j, Y', strtotime($post['published_at'])) ?>
        </time>
        <?php endif; ?>
    </header>

    <div class="post-content text-secondary">
        <?= $post['content'] ?>
    </div>

    <footer class="mt-5 pt-4 border-top border-subtle">
        <a href="<?= siteUrl('insights') ?>" class="text-accent-pink text-decoration-none fw-medium">
            &larr; Back to Insights
        </a>
    </footer>
</article>

<?php if (!empty($recentPosts)): ?>
<aside class="container pb-5" style="max-width: 800px;">
    <div class="card bg-card border-subtle">
        <div class="card-body">
            <h3 class="h6 text-accent-pink mb-3">Recent Articles</h3>
            <ul class="list-unstyled mb-0">
                <?php foreach ($recentPosts as $recent): ?>
                <li class="mb-2">
                    <a href="<?= siteUrl('insights/' . htmlspecialchars($recent['slug'])) ?>" class="text-secondary text-decoration-none small">
                        <?= htmlspecialchars($recent['title']) ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</aside>
<?php endif; ?>

<?php
$content = ob_get_clean();
include ROOT_PATH . '/views/layouts/base.php';
