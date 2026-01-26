<?php
/**
 * Site Header Component
 */
?>
<nav class="navbar">
    <div class="container-xl">
        <div class="navbar-inner">
            <a class="navbar-brand" href="<?= siteUrl('/') ?>">
                <div class="brand-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                </div>
                STEALTH LABZ
            </a>
            <div class="navbar-links">
                <a class="nav-link" href="<?= siteUrl('/') ?>#portfolio">Portfolio</a>
                <a class="nav-link" href="<?= siteUrl('/') ?>#methodology">Process</a>
                <a class="nav-link" href="<?= siteUrl('/') ?>#about">About</a>
                <a class="nav-link" href="<?= siteUrl('insights') ?>">Insights</a>
                <a class="nav-link btn-nav" href="<?= siteUrl('/') ?>#contact">Get in Touch</a>
            </div>
        </div>
    </div>
</nav>
