<?php
/**
 * Site Header Component
 */
?>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?= siteUrl('/') ?>">
            <img src="<?= cdnUrl('images/logo.svg') ?>" alt="Stealth Labz" height="28">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center gap-1">
                <li class="nav-item"><a class="nav-link" href="<?= siteUrl('/') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= siteUrl('cem') ?>">CEM</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= siteUrl('brands') ?>">Brands</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= siteUrl('insights') ?>">Insights</a></li>
                <li class="nav-item"><a class="nav-link btn-nav" href="mailto:info@stealthlabz.com">Get in Touch</a></li>
            </ul>
        </div>
    </div>
</nav>
