<?php
/**
 * Site Footer Component
 */
?>
<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <img src="<?= cdnUrl('images/logo.svg') ?>" alt="Stealth Labz" height="20">
                <span class="text-secondary small">&copy; <?= date('Y') ?> Stealth Labz LLC. All rights reserved.</span>
            </div>

            <div class="footer-links">
                <a href="<?= siteUrl('process') ?>" class="small">Process</a>
                <a href="<?= siteUrl('stack') ?>" class="small">Stack</a>
                <a href="<?= siteUrl('brands') ?>" class="small">Brands</a>
                <a href="<?= siteUrl('insights') ?>" class="small">Insights</a>
                <a href="<?= siteUrl('legal/privacy') ?>" class="small">Privacy</a>
                <a href="<?= siteUrl('legal/terms') ?>" class="small">Terms</a>
            </div>
        </div>
    </div>
</footer>
