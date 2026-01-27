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

            <div class="footer-newsletter">
                <form id="footer-newsletter-form" class="newsletter-form-compact">
                    <input type="email" name="email" placeholder="Stay updated" required>
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </button>
                </form>
                <div class="newsletter-message-compact"></div>
            </div>

            <div class="footer-links">
                <a href="<?= siteUrl('tech') ?>" class="small">Our Tech</a>
                <a href="<?= siteUrl('legal/privacy') ?>" class="small">Privacy</a>
                <a href="<?= siteUrl('legal/terms') ?>" class="small">Terms</a>
                <a href="<?= siteUrl('legal/cookies') ?>" class="small">Cookies</a>
                <a href="<?= siteUrl('legal/disclaimer') ?>" class="small">Disclaimer</a>
            </div>
        </div>
    </div>
</footer>
