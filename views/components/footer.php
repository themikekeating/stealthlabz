<?php
/**
 * Site Footer Component
 */
?>
<footer class="site-footer">
    <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-flex align-items-center gap-3">
            <img src="<?= cdnUrl('images/logo.svg') ?>" alt="Stealth Labz" height="20">
            <span class="text-secondary small">&copy; <?= date('Y') ?> Stealth Labz LLC. All rights reserved.</span>
        </div>
        <div class="d-flex gap-4">
            <a href="<?= siteUrl('legal/privacy') ?>" class="small">Privacy</a>
            <a href="<?= siteUrl('legal/terms') ?>" class="small">Terms</a>
            <a href="<?= siteUrl('legal/cookies') ?>" class="small">Cookies</a>
            <a href="<?= siteUrl('legal/disclaimer') ?>" class="small">Disclaimer</a>
        </div>
    </div>
</footer>
