<?php
/**
 * Legal Template
 *
 * Simple text page for legal documents.
 * Used for: Privacy Policy, Terms of Service, etc.
 *
 * Variables:
 *   $page['title']         - Page title
 *   $page['description']   - Meta description
 *   $page['effectiveDate'] - Effective date string
 *   $page['sections']      - Array of ['title' => ..., 'content' => ...]
 */

$page['bodyClass'] = 'page-legal';

ob_start();
?>

<div class="container py-5 mt-5" style="max-width: 800px;">
    <header class="mb-5">
        <h1 class="display-5 fw-bold mb-2"><?= htmlspecialchars($page['title'] ?? 'Legal') ?></h1>
        <?php if (!empty($page['effectiveDate'])): ?>
        <p class="text-muted">Effective Date: <?= htmlspecialchars($page['effectiveDate']) ?></p>
        <?php endif; ?>
    </header>

    <?php if (!empty($page['sections'])): ?>
        <?php foreach ($page['sections'] as $section): ?>
        <section class="mb-5">
            <h2 class="h5 text-accent-pink mb-3"><?= htmlspecialchars($section['title']) ?></h2>
            <div class="text-secondary">
                <?php if (is_array($section['content'])): ?>
                    <?php foreach ($section['content'] as $paragraph): ?>
                    <p><?= htmlspecialchars($paragraph) ?></p>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p><?= htmlspecialchars($section['content']) ?></p>
                <?php endif; ?>
            </div>
        </section>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
include ROOT_PATH . '/views/layouts/base.php';
