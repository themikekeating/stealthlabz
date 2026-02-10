<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#e5025d">
    <title><?= htmlspecialchars($page['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page['description']) ?>">
    <link rel="canonical" href="https://stealthlabz.com/">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($page['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page['og_description'] ?? $page['description']) ?>">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Stealth Labz">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page['title']) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page['og_description'] ?? $page['description']) ?>">
    <meta name="twitter:image" content="https://stealthlabz.com/cdn/images/og-default.png">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/cdn/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/cdn/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Global Styles -->
    <link rel="stylesheet" href="/cdn/css/global.css">

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Stealth Labz",
        "url": "https://stealthlabz.com",
        "logo": "https://stealthlabz.com/cdn/images/logo.png",
        "description": "AI-native infrastructure company. Lead generation, SaaS platforms, DTC brands, and content systems.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1225 W Beaver St. Ste 205-1 #1135",
            "addressLocality": "Jacksonville",
            "addressRegion": "FL",
            "postalCode": "32204",
            "addressCountry": "US"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Sales",
            "email": "contact@stealthlabz.com"
        }
    }
    </script>

    <link rel="stylesheet" href="/cdn/css/landing.css">
</head>
<body>
    <div class="grid-bg"></div>

    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <!-- ════════════════════════════════════════
         HERO
         ════════════════════════════════════════ -->
    <section class="home-hero">
        <div class="container-xl">
            <div class="home-hero-grid">
                <div class="hero-content">
                    <div class="hero-badge">
                        <span class="dot"></span>
                        Execution Framework
                    </div>

                    <h1>
                        What happens when<br>
                        <span class="highlight">execution compounds.</span>
                    </h1>

                    <p class="home-hero-sub">
                        A methodology that turns AI-native builders into infrastructure companies. 10 production systems shipped in 74 days. A 9.6% defect rate while output multiplied 13.4×. This is what the Compounding Execution Method produces.
                    </p>

                    <div class="hero-cta-row">
                        <a href="<?= siteUrl('cem') ?>" class="btn-glow">
                            See the Method
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                        <a href="<?= siteUrl('ecosystem') ?>" class="btn-outline-home">See the Results</a>
                    </div>

                    <div class="hero-stats-bar">
                        <div class="hero-stat-item">
                            <div class="hero-stat-val">2,561</div>
                            <div class="hero-stat-lbl">Production Commits</div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="hero-stat-val">10</div>
                            <div class="hero-stat-lbl">Systems Shipped</div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="hero-stat-val">9.6%</div>
                            <div class="hero-stat-lbl">Defect Rate</div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="hero-stat-val">13.4×</div>
                            <div class="hero-stat-lbl">Compounding Multiplier</div>
                        </div>
                    </div>
                </div>

                <div class="hero-visual">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600" width="600" height="600">
                        <defs>
                            <linearGradient id="areaFill" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="rgba(214,51,108,0.14)"/>
                                <stop offset="100%" stop-color="rgba(214,51,108,0)"/>
                            </linearGradient>
                            <linearGradient id="curveGrad" x1="0" y1="0" x2="1" y2="0">
                                <stop offset="0%" stop-color="#ae3ec9"/>
                                <stop offset="100%" stop-color="#d6336c"/>
                            </linearGradient>
                            <radialGradient id="glowTR" cx="85%" cy="15%" r="45%">
                                <stop offset="0%" stop-color="rgba(214,51,108,0.08)"/>
                                <stop offset="100%" stop-color="rgba(214,51,108,0)"/>
                            </radialGradient>
                            <radialGradient id="glowBL" cx="10%" cy="90%" r="35%">
                                <stop offset="0%" stop-color="rgba(174,62,201,0.06)"/>
                                <stop offset="100%" stop-color="rgba(174,62,201,0)"/>
                            </radialGradient>
                            <filter id="dotGlow">
                                <feGaussianBlur stdDeviation="4" result="b"/>
                                <feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge>
                            </filter>
                            <filter id="termGlow">
                                <feGaussianBlur stdDeviation="8" result="b"/>
                                <feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge>
                            </filter>
                        </defs>

                        <!-- Background -->
                        <rect width="600" height="600" fill="#08080a"/>
                        <rect width="600" height="600" fill="url(#glowTR)"/>
                        <rect width="600" height="600" fill="url(#glowBL)"/>

                        <!-- Subtle grid dots -->
                        <g opacity="0.12">
                            <circle cx="100" cy="100" r="1" fill="#e5e5e9"/><circle cx="200" cy="100" r="1" fill="#e5e5e9"/><circle cx="300" cy="100" r="1" fill="#e5e5e9"/><circle cx="400" cy="100" r="1" fill="#e5e5e9"/><circle cx="500" cy="100" r="1" fill="#e5e5e9"/>
                            <circle cx="100" cy="200" r="1" fill="#e5e5e9"/><circle cx="200" cy="200" r="1" fill="#e5e5e9"/><circle cx="300" cy="200" r="1" fill="#e5e5e9"/><circle cx="400" cy="200" r="1" fill="#e5e5e9"/><circle cx="500" cy="200" r="1" fill="#e5e5e9"/>
                            <circle cx="100" cy="300" r="1" fill="#e5e5e9"/><circle cx="200" cy="300" r="1" fill="#e5e5e9"/><circle cx="300" cy="300" r="1" fill="#e5e5e9"/><circle cx="400" cy="300" r="1" fill="#e5e5e9"/><circle cx="500" cy="300" r="1" fill="#e5e5e9"/>
                            <circle cx="100" cy="400" r="1" fill="#e5e5e9"/><circle cx="200" cy="400" r="1" fill="#e5e5e9"/><circle cx="300" cy="400" r="1" fill="#e5e5e9"/><circle cx="400" cy="400" r="1" fill="#e5e5e9"/><circle cx="500" cy="400" r="1" fill="#e5e5e9"/>
                        </g>

                        <!-- Area fill under curve -->
                        <path d="M70,480 C120,475 170,465 220,445 C280,418 330,375 380,320 C420,275 460,220 500,165 L530,120 L530,520 L70,520 Z" fill="url(#areaFill)"/>

                        <!-- The curve -->
                        <path d="M70,480 C120,475 170,465 220,445 C280,418 330,375 380,320 C420,275 460,220 500,165 L530,120" stroke="url(#curveGrad)" stroke-width="3" fill="none" stroke-linecap="round"/>

                        <!-- P1 -->
                        <circle cx="70" cy="480" r="4" fill="#ae3ec9" opacity="0.5"/>
                        <text x="70" y="502" text-anchor="middle" fill="#737378" font-family="'DM Mono', monospace" font-size="13" font-weight="500">P1</text>

                        <!-- P3 -->
                        <circle cx="220" cy="445" r="5" fill="#ae3ec9" opacity="0.6"/>
                        <text x="220" y="467" text-anchor="middle" fill="#737378" font-family="'DM Mono', monospace" font-size="13" font-weight="500">P3</text>

                        <!-- P6 -->
                        <circle cx="380" cy="320" r="6" fill="#d6336c" opacity="0.75" filter="url(#dotGlow)"/>
                        <text x="380" y="310" text-anchor="middle" fill="#a3a3a9" font-family="'DM Mono', monospace" font-size="13" font-weight="500">P6</text>

                        <!-- P8 -->
                        <circle cx="470" cy="195" r="7" fill="#d6336c" opacity="0.85" filter="url(#dotGlow)"/>
                        <text x="470" y="185" text-anchor="middle" fill="#a3a3a9" font-family="'DM Mono', monospace" font-size="13" font-weight="500">P8</text>

                        <!-- P10 terminal -->
                        <circle cx="530" cy="120" r="10" fill="#d6336c" opacity="0.2" filter="url(#termGlow)"/>
                        <circle cx="530" cy="120" r="6" fill="#d6336c" opacity="0.4"/>
                        <circle cx="530" cy="120" r="3.5" fill="#d6336c"/>
                        <text x="530" y="108" text-anchor="middle" fill="#e5e5e9" font-family="'DM Mono', monospace" font-size="14" font-weight="600">P10</text>

                        <!-- Terminal callout -->
                        <rect x="440" y="72" width="120" height="28" rx="4" fill="rgba(214,51,108,0.08)" stroke="rgba(214,51,108,0.2)" stroke-width="1"/>
                        <text x="500" y="91" text-anchor="middle" fill="#d6336c" font-family="'DM Mono', monospace" font-size="13" font-weight="600">5-day MVP</text>

                        <!-- Origin callout -->
                        <text x="70" y="525" text-anchor="start" fill="#737378" font-family="'DM Mono', monospace" font-size="12">WEEKS</text>
                        <text x="140" y="525" text-anchor="start" fill="#525257" font-family="'DM Mono', monospace" font-size="12">→</text>
                        <text x="165" y="525" text-anchor="start" fill="#d6336c" font-family="'DM Mono', monospace" font-size="12" font-weight="500">DAYS</text>

                        <!-- Top left label -->
                        <text x="40" y="45" fill="#737378" font-family="'DM Mono', monospace" font-size="11" letter-spacing="0.1em">COMPOUNDING EXECUTION</text>
                        <text x="40" y="65" fill="#525257" font-family="'DM Mono', monospace" font-size="11">10 production systems</text>

                        <!-- Bottom stat -->
                        <rect x="390" y="540" width="180" height="36" rx="6" fill="rgba(229,229,233,0.02)" stroke="#2a2a31" stroke-width="1"/>
                        <text x="480" y="563" text-anchor="middle" fill="#a3a3a9" font-family="'DM Mono', monospace" font-size="12">Foundation compounds</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         INTEGRATIONS MARQUEE
         ════════════════════════════════════════ -->
    <section class="integrations-section">
        <div class="integrations-label">Integrated Stack</div>
        <div class="integrations-track">
            <div class="integration-item"><img src="/cdn/images/integrations/29next.svg" alt="29 Next"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/checkoutchamp.svg" alt="CheckoutChamp"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/codeclouds.svg" alt="CodeClouds"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/everflow.svg" alt="Everflow"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/sendgrid.svg" alt="SendGrid"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/shopify.svg" alt="Shopify"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/sticky.svg" alt="Sticky"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/stripe.svg" alt="Stripe"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/telegram.svg" alt="Telegram"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/trackdesk.svg" alt="Trackdesk"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/zapier.svg" alt="Zapier"></div>
            <!-- Duplicate for seamless loop -->
            <div class="integration-item"><img src="/cdn/images/integrations/29next.svg" alt="29 Next"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/checkoutchamp.svg" alt="CheckoutChamp"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/codeclouds.svg" alt="CodeClouds"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/everflow.svg" alt="Everflow"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/sendgrid.svg" alt="SendGrid"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/shopify.svg" alt="Shopify"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/sticky.svg" alt="Sticky"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/stripe.svg" alt="Stripe"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/telegram.svg" alt="Telegram"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/trackdesk.svg" alt="Trackdesk"></div>
            <div class="integration-item"><img src="/cdn/images/integrations/zapier.svg" alt="Zapier"></div>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         THREE PILLARS
         ════════════════════════════════════════ -->
    <section class="pillars-section">
        <div class="container-xl">
            <div class="section-label">What We Do</div>
            <h2 class="section-title">Three Pillars</h2>
            <p class="section-desc">A methodology, a portfolio, and a way to work with us.</p>

            <div class="pillars-grid">

                <!-- CEM -->
                <div class="pillar-card">
                    <div class="pillar-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <div class="pillar-label">Methodology</div>
                    <div class="pillar-title">The Compounding Execution Method</div>
                    <div class="pillar-desc">The operating system behind everything we build. 12 mechanisms, 4 applications, and a tactical escalation chain — AI-native, compounding-first, validated across 10 production systems.</div>
                    <div class="pillar-stats">
                        <div>
                            <div class="pillar-stat-val">2,561</div>
                            <div class="pillar-stat-lbl">Commits</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">9.6%</div>
                            <div class="pillar-stat-lbl">Defect Rate</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">5 days</div>
                            <div class="pillar-stat-lbl">Fastest MVP</div>
                        </div>
                    </div>
                    <a href="<?= siteUrl('cem') ?>" class="pillar-link">
                        Explore CEM
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h10m0 0L9 4m4 4L9 12"/></svg>
                    </a>
                </div>

                <!-- ECOSYSTEM -->
                <div class="pillar-card">
                    <div class="pillar-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
                        </svg>
                    </div>
                    <div class="pillar-label">Portfolio</div>
                    <div class="pillar-title">The Ecosystem</div>
                    <div class="pillar-desc">7 owned brands across lead gen, content, DTC, and SaaS. All in production, all connected through one platform, all generating revenue across two continents.</div>
                    <div class="pillar-stats">
                        <div>
                            <div class="pillar-stat-val">7</div>
                            <div class="pillar-stat-lbl">Brands</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">$938K</div>
                            <div class="pillar-stat-lbl">Revenue</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">4</div>
                            <div class="pillar-stat-lbl">Verticals</div>
                        </div>
                    </div>
                    <a href="<?= siteUrl('ecosystem') ?>" class="pillar-link">
                        View Ecosystem
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h10m0 0L9 4m4 4L9 12"/></svg>
                    </a>
                </div>

                <!-- SOLUTIONS -->
                <div class="pillar-card">
                    <div class="pillar-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div class="pillar-label">Services</div>
                    <div class="pillar-title">Solutions</div>
                    <div class="pillar-desc">Custom builds and proven systems — deployed in days. The same methodology and Foundation behind our portfolio, available for your project. Same methodology. Same Foundation. Applied to your project.</div>
                    <div class="pillar-stats">
                        <div>
                            <div class="pillar-stat-val">195K</div>
                            <div class="pillar-stat-lbl">Largest Build</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">74d</div>
                            <div class="pillar-stat-lbl">Full Platform</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">13.4×</div>
                            <div class="pillar-stat-lbl">Velocity</div>
                        </div>
                    </div>
                    <a href="<?= siteUrl('solutions') ?>" class="pillar-link">
                        Explore Solutions
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h10m0 0L9 4m4 4L9 12"/></svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         HOW WE WORK
         ════════════════════════════════════════ -->
    <section class="about-section">
        <div class="container-xl">
            <div class="section-label">About</div>
            <h2 class="section-title">How We Work</h2>

            <div class="about-grid">
                <div class="about-text">
                    <p>Stealth Labz is the operating company behind a portfolio of SaaS platforms, lead generation systems, and DTC brands — all in production, all connected through Portal.</p>

                    <p>The playbook took <strong>15+ years</strong> to develop across affiliate networks, DTC scale-ups, subscription brands, and SEO — <strong>$35M+ in revenue impact</strong> and <strong>300K+ paid subscribers</strong> across multiple ventures.</p>

                    <p>Then AI changed the math. What used to require teams now ships at <strong>13.4× velocity</strong> — <strong>10 production systems</strong>, <strong>596,903 lines of code</strong>, two continents. The methodology behind it: the Compounding Execution Method.</p>

                    <p>This isn't an agency. <strong>It's infrastructure for scale.</strong></p>
                </div>

                <div class="capability-list">
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">Affiliate &amp; Lead Gen</span>
                            <span class="capability-metric">22K+ leads · 16 verticals</span>
                        </div>
                    </div>
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">Full-Stack Development</span>
                            <span class="capability-metric">Laravel/PHP · 596K+ LOC</span>
                        </div>
                    </div>
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">AI-Native Development</span>
                            <span class="capability-metric">13.4× velocity · 10 systems</span>
                        </div>
                    </div>
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">Global Operations</span>
                            <span class="capability-metric">US + ZA · 24/7</span>
                        </div>
                    </div>
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">DTC &amp; E-Commerce</span>
                            <span class="capability-metric">$938K revenue · 11K+ orders</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-stats-row">
                <div class="about-stat-item">
                    <div class="about-stat-value">$35M+</div>
                    <div class="about-stat-label">Career Revenue Impact</div>
                </div>
                <div class="about-stat-item">
                    <div class="about-stat-value">596K+</div>
                    <div class="about-stat-label">Lines of Production Code</div>
                </div>
                <div class="about-stat-item">
                    <div class="about-stat-value">13.4×</div>
                    <div class="about-stat-label">Velocity Multiplier</div>
                </div>
                <div class="about-stat-item">
                    <div class="about-stat-value">$938K</div>
                    <div class="about-stat-label">Revenue Through Systems</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         BLOG
         ════════════════════════════════════════ -->
    <section class="blog-section">
        <div class="container-xl">
            <div class="blog-header">
                <div>
                    <div class="section-label">Insights</div>
                    <h2 class="section-title">From the Build</h2>
                    <p class="section-desc mb-0">Thoughts on building, scaling, and shipping.</p>
                </div>
                <a href="<?= siteUrl('insights') ?>" class="btn-outline-home">
                    View All
                    <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h10m0 0L9 4m4 4L9 12"/></svg>
                </a>
            </div>

            <div class="blog-grid">
                <?php if (!empty($recentPosts)): ?>
                    <?php foreach ($recentPosts as $i => $post): ?>
                <a href="<?= siteUrl('insights/' . $post['slug']) ?>" class="blog-card">
                    <div class="blog-card-image" style="background-image: url('<?= htmlspecialchars($post['featured_image']) ?>')"></div>
                    <div class="blog-card-body">
                        <div class="blog-card-date"><?= date('Y-m-d', strtotime($post['published_at'])) ?></div>
                        <h4><?= htmlspecialchars($post['title']) ?></h4>
                        <p><?= htmlspecialchars(substr($post['excerpt'] ?? '', 0, 100)) ?>...</p>
                    </div>
                </a>
                    <?php endforeach; ?>
                <?php else: ?>
                <p class="text-secondary">No posts yet.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         CTA
         ════════════════════════════════════════ -->
    <section class="home-cta">
        <div class="container-xl">
            <h2>Stay in the <span class="highlight">Loop.</span></h2>
            <p>New platforms, builds, and insights — straight to your inbox.</p>

            <form id="cta-newsletter-form" class="newsletter-form">
                <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off" aria-hidden="true">
                <div class="newsletter-input-group">
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <button type="submit" class="btn-glow">
                        Subscribe
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </button>
                </div>
                <div class="newsletter-message"></div>
            </form>

            <div class="cta-contact">
                Or reach out directly: <a href="mailto:info@stealthlabz.com">info@stealthlabz.com</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ROOT_PATH . '/views/components/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (navbar && window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else if (navbar) {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        // Fade in on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('visible');
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.fade-up, .pillar-card, .capability-item, .blog-card').forEach(el => observer.observe(el));

        // Newsletter form
        const WEBHOOK_URL = 'https://portal.stealthlabz.com/source/internal/f0ece97b-9673-4eff-911b-4eed1e4ba1dd';

        function handleNewsletterSubmit(form, messageEl, isCompact = false) {
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                const honeypot = form.querySelector('input[name="website"]');
                if (honeypot && honeypot.value) return;
                const email = form.querySelector('input[name="email"]').value;
                const button = form.querySelector('button[type="submit"]');
                const originalHTML = button.innerHTML;
                button.disabled = true;
                button.style.opacity = '0.6';
                if (!isCompact) button.innerHTML = 'Sending...';
                messageEl.textContent = '';
                messageEl.className = messageEl.className.replace(/success|error/g, '').trim();
                try {
                    const response = await fetch(WEBHOOK_URL, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ email })
                    });
                    if (response.ok) {
                        messageEl.textContent = isCompact ? 'Subscribed!' : 'You\'re in! We\'ll be in touch.';
                        messageEl.classList.add('success');
                        form.reset();
                    } else { throw new Error('Failed'); }
                } catch (err) {
                    messageEl.textContent = isCompact ? 'Error. Try again.' : 'Something went wrong. Try again.';
                    messageEl.classList.add('error');
                }
                button.innerHTML = originalHTML;
                button.disabled = false;
                button.style.opacity = '1';
            });
        }

        const ctaForm = document.getElementById('cta-newsletter-form');
        const ctaMessage = ctaForm?.querySelector('.newsletter-message');
        if (ctaForm && ctaMessage) handleNewsletterSubmit(ctaForm, ctaMessage, false);

        const footerForm = document.getElementById('footer-newsletter-form');
        const footerMessage = footerForm?.parentElement.querySelector('.newsletter-message-compact');
        if (footerForm && footerMessage) handleNewsletterSubmit(footerForm, footerMessage, true);
    </script>
</body>
</html>
