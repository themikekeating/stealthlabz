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

// Article + BreadcrumbList Schema
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

<div class="container py-5 mt-5">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <article>
                <img src="<?= htmlspecialchars($post['featured_image']) ?>"
                     class="w-100 rounded mb-4 img-h-400 img-cover"
                     alt="<?= htmlspecialchars($post['title']) ?>"
                     loading="eager"
                     fetchpriority="high">

                <header class="mb-4 pb-4 border-bottom border-subtle">
                    <?php if (!empty($post['categories'])): ?>
                    <div class="mb-3 d-flex flex-wrap gap-2">
                        <?php foreach ($post['categories'] as $cat): ?>
                        <a href="<?= siteUrl('insights/category/' . htmlspecialchars($cat['slug'])) ?>"
                           class="badge bg-tertiary text-secondary text-decoration-none">
                            <?= htmlspecialchars($cat['name']) ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <h1 class="display-5 fw-bold mb-3"><?= htmlspecialchars($post['title']) ?></h1>
                    <div class="d-flex align-items-center gap-3 text-muted small">
                        <?php if (!empty($post['published_at'])): ?>
                        <time datetime="<?= $post['published_at'] ?>">
                            <?= date('F j, Y', strtotime($post['published_at'])) ?>
                        </time>
                        <?php endif; ?>
                        <span><?= $readTime ?> min read</span>
                    </div>
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
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 mt-5 mt-lg-0">
            <div class="article-sidebar">
                <?php include ROOT_PATH . '/views/components/newsletter-signup.php'; ?>
                <?php
                if (!empty($relatedPosts)) {
                    include ROOT_PATH . '/views/components/related-posts.php';
                }
                ?>
                <?php include ROOT_PATH . '/views/components/cta-card.php'; ?>
            </div>
        </div>
    </div>
</div>

<!-- More Articles -->
<?php if (!empty($relatedPosts)): ?>
<section class="container pb-5">
    <h2 class="h4 text-accent-pink mb-4">More Articles</h2>
    <div class="row g-4">
        <?php foreach (array_slice($relatedPosts, 0, 3) as $related): ?>
        <div class="col-md-4">
            <article class="card h-100 bg-card border-subtle overflow-hidden">
                <img src="<?= htmlspecialchars($related['featured_image']) ?>"
                     class="card-img-top img-h-160 img-cover"
                     alt="<?= htmlspecialchars($related['title']) ?>"
                     loading="lazy">
                <div class="card-body d-flex flex-column">
                    <h3 class="h6 card-title">
                        <a href="<?= siteUrl('insights/' . htmlspecialchars($related['slug'])) ?>" class="text-decoration-none text-white stretched-link">
                            <?= htmlspecialchars($related['title']) ?>
                        </a>
                    </h3>
                    <?php if (!empty($related['published_at'])): ?>
                    <time datetime="<?= $related['published_at'] ?>" class="text-muted small mt-auto">
                        <?= date('M j, Y', strtotime($related['published_at'])) ?>
                    </time>
                    <?php endif; ?>
                </div>
            </article>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<?php
$content = ob_get_clean();
include ROOT_PATH . '/views/layouts/base.php';
