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
                <a href="<?= siteUrl('cem') ?>" class="small">CEM</a>
                <a href="<?= siteUrl('solutions') ?>" class="small">Solutions</a>
                <a href="<?= siteUrl('training') ?>" class="small">Training</a>
                <a href="<?= siteUrl('ecosystem') ?>" class="small">Ecosystem</a>
                <a href="<?= siteUrl('insights') ?>" class="small">Insights</a>
                <a href="<?= siteUrl('privacy') ?>" class="small">Privacy</a>
                <a href="<?= siteUrl('terms') ?>" class="small">Terms</a>
                <a href="<?= siteUrl('cookies') ?>" class="small">Cookies</a>
                <a href="<?= siteUrl('disclaimer') ?>" class="small">Disclaimer</a>
            </div>
        </div>
    </div>
</footer>
