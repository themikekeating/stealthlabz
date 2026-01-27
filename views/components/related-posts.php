<?php
/**
 * Related Posts Component
 *
 * Variables:
 *   $relatedPosts - Array of posts to display
 *   $currentSlug  - Current post slug to exclude (optional)
 */

$relatedPosts = $relatedPosts ?? [];
?>
<?php if (!empty($relatedPosts)): ?>
<div class="card bg-card border-subtle mb-4">
    <div class="card-body">
        <h5 class="text-accent-pink mb-3">Related Articles</h5>
        <ul class="list-unstyled mb-0">
            <?php foreach ($relatedPosts as $related): ?>
            <li class="mb-3 pb-3 border-bottom border-subtle last-child-no-border">
                <a href="<?= siteUrl('insights/' . htmlspecialchars($related['slug'])) ?>" class="text-decoration-none">
                    <span class="text-white small fw-medium d-block mb-1"><?= htmlspecialchars($related['title']) ?></span>
                    <?php if (!empty($related['published_at'])): ?>
                    <span class="text-muted small"><?= date('M j, Y', strtotime($related['published_at'])) ?></span>
                    <?php endif; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
