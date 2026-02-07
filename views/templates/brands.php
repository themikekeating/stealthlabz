<?php
/**
 * Brands Page - Portfolio of live platforms
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#e5025d">
    <title><?= htmlspecialchars($page['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page['description']) ?>">
    <link rel="canonical" href="https://stealthlabz.com/brands">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($page['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page['description']) ?>">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/brands">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/cdn/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Global Styles -->
    <link rel="stylesheet" href="/cdn/css/global.css">

    <style>
        /* Brands Page Specific Styles */
        .brands-hero {
            padding: 120px 0 40px;
            text-align: center;
            position: relative;
        }

        .brands-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 150%;
            height: 100%;
            background: radial-gradient(ellipse at center top, var(--accent-pink-glow) 0%, transparent 60%);
            opacity: 0.15;
            pointer-events: none;
        }

        .brands-hero-title {
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: -0.03em;
            margin-bottom: 1rem;
        }

        .brands-hero-title .highlight {
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .brands-hero-subtitle {
            font-size: 1.15rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Hero Stats */
        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 2.5rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
        }

        .hero-stat {
            text-align: center;
        }

        .hero-stat-value {
            display: block;
            font-family: 'DM Mono', monospace;
            font-size: 2rem;
            font-weight: 700;
            color: var(--accent-pink);
            line-height: 1.2;
        }

        .hero-stat-label {
            display: block;
            font-size: 0.75rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-top: 0.25rem;
        }

        @media (max-width: 576px) {
            .hero-stats {
                gap: 1.5rem;
                flex-wrap: wrap;
            }
            .hero-stat-value {
                font-size: 1.5rem;
            }
        }

        /* Brands Grid Section */
        .brands-section {
            padding: 40px 0 80px;
        }

        .brands-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2.5rem;
        }

        @media (max-width: 991px) {
            .brands-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Brand Card */
        .brand-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .brand-card:hover {
            border-color: var(--accent-pink-border-strong);
            box-shadow: var(--shadow-card-hover);
            transform: translateY(-5px);
        }

        .brand-card.flagship {
            border-color: var(--accent-pink-border-strong);
            background: linear-gradient(135deg, var(--bg-card) 0%, var(--accent-pink-bg-subtle) 100%);
            grid-column: span 2;
        }

        @media (max-width: 991px) {
            .brand-card.flagship {
                grid-column: span 1;
            }
        }

        .brand-card-row {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .brand-card.flagship .brand-card-row {
            flex-direction: row;
        }

        @media (max-width: 991px) {
            .brand-card.flagship .brand-card-row {
                flex-direction: column;
            }
        }

        /* ============================================
           BROWSER MOCKUP FRAME
           ============================================ */
        .brand-screenshot {
            position: relative;
            overflow: hidden;
            background: var(--bg-browser-chrome);
        }

        /* Standard card screenshot area */
        .brand-card:not(.flagship) .brand-screenshot {
            height: auto;
        }

        /* Flagship screenshot area */
        .brand-card.flagship .brand-screenshot {
            width: 40%;
            height: auto;
            min-height: 450px;
            display: flex;
            flex-direction: column;
        }

        @media (max-width: 991px) {
            .brand-card.flagship .brand-screenshot {
                width: 100%;
                height: auto;
                min-height: auto;
            }
        }

        /* Browser chrome titlebar */
        .browser-titlebar {
            display: flex;
            align-items: center;
            padding: 10px 14px;
            background: var(--bg-browser-chrome);
            border-bottom: 1px solid var(--border-browser);
            gap: 10px;
        }

        .browser-dots {
            display: flex;
            gap: 5px;
            flex-shrink: 0;
        }

        .browser-dots span {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            display: block;
        }

        .browser-dots span:nth-child(1) { background: #FF5F57; }
        .browser-dots span:nth-child(2) { background: #FFBD2E; }
        .browser-dots span:nth-child(3) { background: #28C840; }

        .browser-url {
            flex: 1;
            background: var(--border-browser);
            border: 1px solid var(--border-browser);
            border-radius: 5px;
            padding: 4px 10px;
            font-family: var(--font-mono);
            font-size: 0.65rem;
            color: var(--text-muted);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Screenshot image container */
        .browser-viewport {
            position: relative;
            overflow: hidden;
        }

        /* Standard cards: fixed crop height */
        .brand-card:not(.flagship) .browser-viewport {
            height: 220px;
        }

        /* Flagship: fill remaining height */
        .brand-card.flagship .browser-viewport {
            flex: 1;
            min-height: 0;
        }

        .browser-viewport img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            display: block;
        }

        /* Bottom fade gradient — blends screenshot into card bg */
        .browser-viewport::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50px;
            background: linear-gradient(to top, var(--bg-browser-chrome) 0%, transparent 100%);
            pointer-events: none;
        }

        /* Content Side */
        .brand-content {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .brand-card.flagship .brand-content {
            width: 60%;
            padding: 2rem;
        }

        @media (max-width: 991px) {
            .brand-card.flagship .brand-content {
                width: 100%;
                padding: 2rem;
            }
        }

        /* Badge */
        .brand-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--accent-pink-bg-medium);
            color: var(--accent-pink);
            padding: 0.35rem 0.85rem;
            border-radius: 100px;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            width: fit-content;
            margin-bottom: 1rem;
        }

        .brand-badge.flagship-badge {
            background: var(--gradient-pink);
            color: white;
        }

        /* Title */
        .brand-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.35rem;
            letter-spacing: -0.03em;
        }

        .brand-card.flagship .brand-title {
            font-size: 2rem;
        }

        .brand-tagline {
            font-size: 0.95rem;
            color: var(--text-secondary);
            margin-bottom: 1.25rem;
        }

        .brand-card.flagship .brand-tagline {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }

        /* Stats Grid - page-specific overrides */
        .brand-card.flagship .stat-value {
            font-size: 1.5rem;
        }

        /* Link */
        .brand-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--accent-pink);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: gap 0.2s ease;
        }

        .brand-link:hover {
            color: var(--accent-pink);
            gap: 0.75rem;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .brand-card[style*="grid-column: span 2"] {
                grid-column: span 1;
            }
            .brand-card[style*="grid-column: span 2"] .brand-card-row {
                flex-direction: column !important;
            }
            .brand-card[style*="grid-column: span 2"] .brand-screenshot {
                width: 100% !important;
                min-height: auto !important;
            }
            .brand-card[style*="grid-column: span 2"] .brand-content {
                width: 100% !important;
            }
        }

        @media (max-width: 768px) {
            .brands-hero-title {
                font-size: 2.25rem;
            }
        }
    </style>
</head>
<body>
    <div class="grid-bg"></div>

    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <!-- Hero -->
    <section class="brands-hero">
        <div class="container-xl">
            <div class="hero-badge">
                <span class="dot"></span>
                Live Production Systems
            </div>
            <h1 class="brands-hero-title">Our <span class="highlight">Brands</span></h1>
            <p class="brands-hero-subtitle">
                10 production systems across lead generation, content, DTC, and AI. All owned. All in production. All connected through Portal.
            </p>

            <!-- Hero Stats -->
            <div class="hero-stats">
                <div class="hero-stat">
                    <span class="hero-stat-value">10</span>
                    <span class="hero-stat-label">Systems</span>
                </div>
                <div class="hero-stat">
                    <span class="hero-stat-value">596K+</span>
                    <span class="hero-stat-label">LOC</span>
                </div>
                <div class="hero-stat">
                    <span class="hero-stat-value">$938K</span>
                    <span class="hero-stat-label">Revenue</span>
                </div>
                <div class="hero-stat">
                    <span class="hero-stat-value">4.9x</span>
                    <span class="hero-stat-label">Velocity</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Grid -->
    <section class="brands-section">
        <div class="container-xl">
            <div class="brands-grid">

                <!-- 1. STEALTH PORTAL (Flagship) -->
                <div class="brand-card flagship fade-up">
                    <div class="brand-card-row">
                        <div class="brand-screenshot">
                            <div class="browser-titlebar">
                                <div class="browser-dots"><span></span><span></span><span></span></div>
                                <div class="browser-url">portalstealth.com</div>
                            </div>
                            <div class="browser-viewport">
                                <img src="/cdn/images/brands/stealth-portal.png" alt="Stealth Portal - SaaS Dashboard" loading="lazy">
                            </div>
                        </div>
                        <div class="brand-content">
                            <div class="brand-badge flagship-badge">Flagship • The Hub</div>
                            <h3 class="brand-title">Stealth Portal</h3>
                            <p class="brand-tagline">5 Platforms. 1 Codebase. 60 Days.</p>

                            <div class="stats-grid">
                                <div class="stat-box">
                                    <div class="stat-value">60</div>
                                    <div class="stat-label">Days</div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-value">$500</div>
                                    <div class="stat-label">Cost</div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-value">150K</div>
                                    <div class="stat-label">Lines</div>
                                </div>
                            </div>

                            <div class="traditional-block">
                                <div class="traditional-label">Traditional Estimate</div>
                                <div class="traditional-value">$300,000 – $450,000</div>
                                <div class="traditional-timeline">6-12 months with 4-6 person team</div>
                            </div>

                            <div class="tech-pills">
                                <span class="tech-pill">Laravel 10</span>
                                <span class="tech-pill">PHP 8.1+</span>
                                <span class="tech-pill">MySQL</span>
                                <span class="tech-pill">Tabler UI</span>
                                <span class="tech-pill">Vite</span>
                            </div>

                            <ul class="features-list">
                                <li>CDP with identity resolution across 12 source types</li>
                                <li>Affiliate Network: 55 publishers, 35 offers</li>
                                <li>Lead Distribution: 7 outbound integrations</li>
                                <li>E-Commerce: 12 merchant accounts</li>
                                <li>Marketing Automation: SMS/Email via Dripcel, Twilio, SendGrid</li>
                            </ul>

                            <a href="https://portal.stealthlabz.com" class="brand-link" target="_blank">
                                portal.stealthlabz.com
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. QUOTE ROCKET ZA -->
                <div class="brand-card fade-up">
                    <div class="brand-screenshot">
                        <div class="browser-titlebar">
                            <div class="browser-dots"><span></span><span></span><span></span></div>
                            <div class="browser-url">quoterocket.co.za</div>
                        </div>
                        <div class="browser-viewport">
                            <img src="/cdn/images/brands/quote-rocket-sa.png" alt="Quote Rocket South Africa - Insurance Comparison" loading="lazy">
                        </div>
                    </div>
                    <div class="brand-content">
                        <div class="brand-badge">Lead Gen • South Africa</div>
                        <h3 class="brand-title">Quote Rocket ZA</h3>
                        <p class="brand-tagline">12 Verticals. 5 Days. $100.</p>

                        <div class="stats-grid">
                            <div class="stat-box">
                                <div class="stat-value">5</div>
                                <div class="stat-label">Days</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">$100</div>
                                <div class="stat-label">Cost</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">92.5K</div>
                                <div class="stat-label">Lines</div>
                            </div>
                        </div>

                        <div class="traditional-block">
                            <div class="traditional-label">Traditional Estimate</div>
                            <div class="traditional-value">$45,000 – $75,000</div>
                            <div class="traditional-timeline">12-16 weeks with dev team</div>
                        </div>

                        <div class="tech-pills">
                            <span class="tech-pill">PHP MVC</span>
                            <span class="tech-pill">Composer</span>
                            <span class="tech-pill">CI/CD</span>
                        </div>

                        <ul class="features-list">
                            <li>Car, life, health, funeral, pet + 7 more verticals</li>
                            <li>Step-by-step qualification funnels</li>
                            <li>Admin dashboard with per-vertical views</li>
                            <li>Lead backup and logging</li>
                        </ul>

                        <a href="https://quoterocket.co.za" class="brand-link" target="_blank">
                            quoterocket.co.za
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- 3. GOQUOTEROCKET US -->
                <div class="brand-card fade-up">
                    <div class="brand-screenshot">
                        <div class="browser-titlebar">
                            <div class="browser-dots"><span></span><span></span><span></span></div>
                            <div class="browser-url">goquoterocket.com</div>
                        </div>
                        <div class="browser-viewport">
                            <img src="/cdn/images/brands/quote-rocket-usa.png" alt="GoQuoteRocket US - Insurance Quotes" loading="lazy">
                        </div>
                    </div>
                    <div class="brand-content">
                        <div class="brand-badge">Lead Gen • United States</div>
                        <h3 class="brand-title">GoQuoteRocket US</h3>
                        <p class="brand-tagline">Config-Driven. Infinite Verticals. 17 Days.</p>

                        <div class="stats-grid">
                            <div class="stat-box">
                                <div class="stat-value">17</div>
                                <div class="stat-label">Days</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">$100</div>
                                <div class="stat-label">Cost</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">40K</div>
                                <div class="stat-label">Lines</div>
                            </div>
                        </div>

                        <div class="traditional-block">
                            <div class="traditional-label">Traditional Estimate</div>
                            <div class="traditional-value">$38,000 – $60,000</div>
                            <div class="traditional-timeline">12 weeks with dev team</div>
                        </div>

                        <div class="tech-pills">
                            <span class="tech-pill">PHP MVC</span>
                            <span class="tech-pill">FunnelEngine.js</span>
                            <span class="tech-pill">CI/CD</span>
                        </div>

                        <ul class="features-list">
                            <li>Auto, life, medicare, credit card funnels</li>
                            <li>Add new vertical in 5 minutes with ONE config file</li>
                            <li>11 organic SEO pages for Google traffic</li>
                            <li>Multi-buyer lead routing, white-label ready</li>
                        </ul>

                        <a href="https://goquoterocket.com" class="brand-link" target="_blank">
                            goquoterocket.com
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>


                <!-- 4. CUSTOMER REPORTS NETWORK -->
                <div class="brand-card flagship fade-up">
                    <div class="brand-card-row">
                        <div class="brand-screenshot">
                            <div class="browser-titlebar">
                                <div class="browser-dots"><span></span><span></span><span></span></div>
                                <div class="browser-url">customer-reports.org</div>
                            </div>
                            <div class="browser-viewport">
                                <img src="/cdn/images/brands/customer-reports.png" alt="Customer Reports - Product Reviews and Buying Guides" loading="lazy">
                            </div>
                        </div>
                        <div class="brand-content">
                            <div class="brand-badge">Content Network • Affiliate</div>
                            <h3 class="brand-title">Customer Reports</h3>
                            <p class="brand-tagline">13,000+ Articles. 2 Properties. 5 Days Total Build.</p>

                            <div class="stats-grid">
                                <div class="stat-box">
                                    <div class="stat-value">5</div>
                                    <div class="stat-label">Days Total</div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-value">$200</div>
                                    <div class="stat-label">Cost</div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-value">35K</div>
                                    <div class="stat-label">Lines</div>
                                </div>
                            </div>

                            <div class="traditional-block">
                                <div class="traditional-label">Traditional Estimate</div>
                                <div class="traditional-value">$25,000 – $45,000</div>
                                <div class="traditional-timeline">8-12 weeks with dev team</div>
                            </div>

                            <div class="tech-pills">
                                <span class="tech-pill">PHP MVC</span>
                                <span class="tech-pill">Zero Dependencies</span>
                                <span class="tech-pill">CI/CD</span>
                                <span class="tech-pill">Shared Admin</span>
                            </div>

                            <ul class="features-list">
                                <li>13,000+ articles migrated from WordPress across 2 domains</li>
                                <li>Product reviews with ratings, pros/cons, affiliate CTAs</li>
                                <li>148 reviews, 100+ listicles, 14 categories</li>
                                <li>SEO-optimized URL structure with 301 redirects</li>
                                <li>Companion site (gocustomerreports.com) for expanded coverage</li>
                            </ul>

                            <div style="display:flex;gap:1.5rem;flex-wrap:wrap;">
                                <a href="https://customer-reports.org" class="brand-link" target="_blank">
                                    customer-reports.org
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </a>
                                <a href="https://gocustomerreports.com" class="brand-link" target="_blank">
                                    gocustomerreports.com
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 6. VIDEOS FROM SANTA -->
                <div class="brand-card fade-up">
                    <div class="brand-screenshot">
                        <div class="browser-titlebar">
                            <div class="browser-dots"><span></span><span></span><span></span></div>
                            <div class="browser-url">videosfromsanta.com</div>
                        </div>
                        <div class="browser-viewport">
                            <img src="/cdn/images/brands/videos-from-santa.png" alt="Videos From Santa - AI Personalized Santa Videos" loading="lazy">
                        </div>
                    </div>
                    <div class="brand-content">
                        <div class="brand-badge">AI Video • DTC</div>
                        <h3 class="brand-title">Videos From Santa</h3>
                        <p class="brand-tagline">AI Video Platform. 32 Days. $1M/30 Day Potential.</p>

                        <div class="stats-grid">
                            <div class="stat-box">
                                <div class="stat-value">32</div>
                                <div class="stat-label">Days</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">$200</div>
                                <div class="stat-label">Cost</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">54K</div>
                                <div class="stat-label">Lines</div>
                            </div>
                        </div>

                        <div class="traditional-block">
                            <div class="traditional-label">Traditional Estimate</div>
                            <div class="traditional-value">$80,000 – $150,000</div>
                            <div class="traditional-timeline">16-20 weeks with dev team</div>
                        </div>

                        <div class="tech-pills">
                            <span class="tech-pill">Laravel 10</span>
                            <span class="tech-pill">HeyGen API</span>
                            <span class="tech-pill">Stripe</span>
                            <span class="tech-pill">Trackdesk</span>
                        </div>

                        <ul class="features-list">
                            <li>5-step paid checkout with Apple/Google Pay</li>
                            <li>Free lead funnel with share-to-unlock viral mechanic</li>
                            <li>3 AI characters: Santa, Mrs. Claus, Elfie</li>
                            <li>Admin dashboard: orders, customers, videos, analytics</li>
                        </ul>

                        <a href="https://videosfromsanta.com" class="brand-link" target="_blank">
                            videosfromsanta.com
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- 7. HOA ATTORNEY GUIDE -->
                <div class="brand-card fade-up">
                    <div class="brand-screenshot">
                        <div class="browser-titlebar">
                            <div class="browser-dots"><span></span><span></span><span></span></div>
                            <div class="browser-url">hoaattorneyguide.com</div>
                        </div>
                        <div class="browser-viewport">
                            <img src="/cdn/images/brands/hoa-attorney.png" alt="HOA Attorney Guide - Legal Lead Generation" loading="lazy">
                        </div>
                    </div>
                    <div class="brand-content">
                        <div class="brand-badge">Legal • Lead Gen</div>
                        <h3 class="brand-title">HOA Attorney Guide</h3>
                        <p class="brand-tagline">Legal Lead Gen. 10 Days. Zero Dependencies.</p>

                        <div class="stats-grid">
                            <div class="stat-box">
                                <div class="stat-value">10</div>
                                <div class="stat-label">Days</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">$100</div>
                                <div class="stat-label">Cost</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">8.8K</div>
                                <div class="stat-label">Lines</div>
                            </div>
                        </div>

                        <div class="traditional-block">
                            <div class="traditional-label">Traditional Estimate</div>
                            <div class="traditional-value">$18,000 – $35,000</div>
                            <div class="traditional-timeline">8 weeks with dev team</div>
                        </div>

                        <div class="tech-pills">
                            <span class="tech-pill">PHP MVC</span>
                            <span class="tech-pill">Zero Dependencies</span>
                            <span class="tech-pill">CI/CD</span>
                        </div>

                        <ul class="features-list">
                            <li>6-step qualification funnel</li>
                            <li>Attorney offer wall with featured firm</li>
                            <li>Case results display</li>
                            <li>Lead backup and logging, GTM tracking</li>
                        </ul>

                        <a href="https://hoaattorneyguide.com" class="brand-link" target="_blank">
                            hoaattorneyguide.com
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- 8. EVERGREEN BRANDS -->
                <div class="brand-card fade-up">
                    <div class="brand-screenshot">
                        <div class="browser-titlebar">
                            <div class="browser-dots"><span></span><span></span><span></span></div>
                            <div class="browser-url">evergreenevolutions.com</div>
                        </div>
                        <div class="browser-viewport">
                            <img src="/cdn/images/brands/evergreen.png" alt="Evergreen Evolutions - Natural Health Products" loading="lazy">
                        </div>
                    </div>
                    <div class="brand-content">
                        <div class="brand-badge">DTC • Nutra</div>
                        <h3 class="brand-title">Evergreen Brands</h3>
                        <p class="brand-tagline">14 Funnels. 25+ SKUs. Two Continents.</p>

                        <div class="stats-grid">
                            <div class="stat-box">
                                <div class="stat-value">14</div>
                                <div class="stat-label">Funnels</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">25+</div>
                                <div class="stat-label">SKUs</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">2</div>
                                <div class="stat-label">Markets</div>
                            </div>
                        </div>

                        <div class="traditional-block">
                            <div class="traditional-label">Traditional Estimate</div>
                            <div class="traditional-value">$50,000 – $100,000</div>
                            <div class="traditional-timeline">Per funnel with agency</div>
                        </div>

                        <div class="tech-pills">
                            <span class="tech-pill">ClickFunnels</span>
                            <span class="tech-pill">Sticky.io</span>
                            <span class="tech-pill">Portal Integration</span>
                        </div>

                        <ul class="features-list">
                            <li>US and South Africa supplement markets</li>
                            <li>Multiple subscription and one-time offers</li>
                            <li>Full order management through Portal</li>
                            <li>Integrated with affiliate network</li>
                        </ul>

                        <span class="brand-link">Multiple Properties</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include ROOT_PATH . '/views/components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fade in on scroll
        const fadeElements = document.querySelectorAll('.fade-up');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });
        fadeElements.forEach(el => observer.observe(el));
    </script>
</body>
</html>
