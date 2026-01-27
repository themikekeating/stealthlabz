<?php
/**
 * Site Footer Component
 */
?>
<footer class="site-footer">
    <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <div class="text-secondary small">&copy; <?= date('Y') ?> Stealth Labz LLC. All rights reserved.</div>
        <div class="d-flex gap-4">
            <a href="<?= siteUrl('legal/privacy') ?>" class="small">Privacy</a>
            <a href="<?= siteUrl('legal/terms') ?>" class="small">Terms</a>
        </div>
    </div>
</footer>
