<?php
/**
 * Article Template
 *
 * Two-column layout with sidebar for CTAs and related content.
 *
 * Variables:
 *   $post         - Post data (title, content, slug, excerpt, published_at, updated_at)
 *   $relatedPosts - Array of related posts for sidebar
 *   $page         - Page metadata (auto-populated from $post)
 */

use App\Models\Post;

$page['title'] = htmlspecialchars($post['title']) . ' | Stealth Labz';
$page['description'] = $post['excerpt'] ?? '';
$page['bodyClass'] = 'page-article';
$page['image'] = $post['featured_image'] ?? '';
$page['type'] = 'article';

$readTime = Post::getReadTime($post['content'] ?? '');

// CSS + Article + BreadcrumbList Schema
$page['head'] = '
<link rel="stylesheet" href="' . cdnUrl('css/insights.css') . '">
<link rel="stylesheet" href="' . cdnUrl('css/article.css') . '">
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
        "url": "https://stealthlabz.com",
        "logo": {
            "@type": "ImageObject",
            "url": "https://stealthlabz.com/cdn/images/logo.png"
        }
    },
    "datePublished": "' . ($post['published_at'] ?? '') . '",
    "dateModified": "' . ($post['updated_at'] ?? $post['published_at'] ?? '') . '",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "' . canonicalUrl() . '"
    },
    "inLanguage": "en-US"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://stealthlabz.com"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Insights",
            "item": "https://stealthlabz.com/insights"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "' . htmlspecialchars($post['title'], ENT_QUOTES) . '",
            "item": "' . canonicalUrl() . '"
        }
    ]
}
</script>
';

ob_start();
?>

<article class="art-page">
    <div class="container-xl">

        <!-- Breadcrumb -->
        <nav class="art-breadcrumb mono">
            <a href="<?= siteUrl('insights') ?>">Insights</a>
            <?php if (!empty($post['category'])): ?>
            <span class="art-breadcrumb-sep">/</span>
            <a href="<?= siteUrl('insights/category/' . htmlspecialchars($post['category']['slug'])) ?>">
                <?= htmlspecialchars($post['category']['name']) ?>
            </a>
            <?php endif; ?>
        </nav>

        <!-- Hero Image -->
        <?php if (!empty($post['featured_image'])): ?>
        <div class="art-hero-image">
            <img src="<?= htmlspecialchars($post['featured_image']) ?>"
                 alt="<?= htmlspecialchars($post['title']) ?>"
                 loading="eager"
                 fetchpriority="high">
        </div>
        <?php endif; ?>

        <div class="art-layout">
            <!-- Main Content -->
            <div class="art-main">
                <header class="art-header">
                    <?php if (!empty($post['category'])): ?>
                    <span class="ins-card-badge"><?= htmlspecialchars($post['category']['name']) ?></span>
                    <?php endif; ?>
                    <h1 class="art-title"><?= htmlspecialchars($post['title']) ?></h1>
                    <div class="art-meta mono">
                        <?php if (!empty($post['published_at'])): ?>
                        <time datetime="<?= $post['published_at'] ?>">
                            <?= date('F j, Y', strtotime($post['published_at'])) ?>
                        </time>
                        <?php endif; ?>
                        <span class="art-meta-sep">&middot;</span>
                        <span><?= $readTime ?> min read</span>
                    </div>
                </header>

                <div class="post-content">
                    <?= $post['content'] ?>
                </div>

                <footer class="art-footer">
                    <a href="<?= siteUrl('insights') ?>" class="art-back">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                        Back to Insights
                    </a>
                </footer>
            </div>

            <!-- Sidebar -->
            <aside class="art-sidebar">
                <div class="art-sidebar-inner">
                    <?php include ROOT_PATH . '/views/components/newsletter-signup.php'; ?>
                    <?php
                    if (!empty($relatedPosts)) {
                        include ROOT_PATH . '/views/components/related-posts.php';
                    }
                    ?>
                    <?php include ROOT_PATH . '/views/components/cta-card.php'; ?>
                </div>
            </aside>
        </div>
    </div>
</article>

<!-- More Articles -->
<?php if (!empty($relatedPosts)): ?>
<section class="art-more">
    <div class="container-xl">
        <h2 class="art-more-title">More Articles</h2>
        <div class="ins-grid ins-grid-3">
            <?php foreach (array_slice($relatedPosts, 0, 3) as $related): ?>
            <a href="<?= siteUrl('insights/' . htmlspecialchars($related['slug'])) ?>"
               class="ins-card">
                <div class="ins-card-image">
                    <img src="<?= htmlspecialchars($related['featured_image']) ?>"
                         alt="<?= htmlspecialchars($related['title']) ?>"
                         loading="lazy">
                </div>
                <div class="ins-card-body">
                    <?php if (!empty($related['category'])): ?>
                    <span class="ins-card-badge"><?= htmlspecialchars($related['category']['name']) ?></span>
                    <?php endif; ?>
                    <h3 class="ins-card-title"><?= htmlspecialchars($related['title']) ?></h3>
                    <?php if (!empty($related['published_at'])): ?>
                    <time class="ins-card-date" datetime="<?= $related['published_at'] ?>">
                        <?= date('M j, Y', strtotime($related['published_at'])) ?>
                    </time>
                    <?php endif; ?>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$content = ob_get_clean();
include ROOT_PATH . '/views/layouts/base.php';
