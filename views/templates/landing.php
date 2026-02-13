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

    <!-- Styles -->
    <link rel="stylesheet" href="/cdn/css/global.css">
    <link rel="stylesheet" href="/cdn/css/landing.css">

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Stealth Labz",
        "url": "https://stealthlabz.com",
        "logo": "https://stealthlabz.com/cdn/images/logo.png",
        "description": "AI-native operating company. We build, own, and operate revenue-generating systems across lead generation, SaaS, DTC, and content — spanning two continents.",
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
</head>
<body>
    <div class="grid-bg"></div>

    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <!-- ═══════════════════════════════════════
         HERO
         ═══════════════════════════════════════ -->
    <section class="home-hero">
        <div class="container-xl">
            <div class="hero-center">
                <div class="hero-badge">
                    <span class="dot"></span>
                    AI-Native Operating Company
                </div>

                <h1>Built on AI.<br><span class="highlight">Operating at scale.</span></h1>

                <p class="home-hero-sub">
                    Stealth Labz builds, owns, and operates $4.5M in proprietary revenue systems — across lead generation, SaaS, DTC, and content, spanning 12 verticals and two continents. Built on 20+ years of compounding execution depth. This is what an AI-native operating company looks like.
                </p>

                <div class="hero-cta-row">
                    <a href="<?= siteUrl('ecosystem') ?>" class="btn-glow">
                        See the Ecosystem
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="<?= siteUrl('method') ?>" class="btn-outline-home">See the Method</a>
                </div>

                <div class="hero-stats-bar">
                    <div class="hero-stat-item">
                        <div class="hero-stat-val">$4.5M</div>
                        <div class="hero-stat-lbl">Proprietary IP</div>
                    </div>
                    <div class="hero-stat-item">
                        <div class="hero-stat-val">$75M+</div>
                        <div class="hero-stat-lbl">Revenue Scaled</div>
                    </div>
                    <div class="hero-stat-item">
                        <div class="hero-stat-val">20+</div>
                        <div class="hero-stat-lbl">Years Executing</div>
                    </div>
                    <div class="hero-stat-item">
                        <div class="hero-stat-val">2</div>
                        <div class="hero-stat-lbl">Continents Conquered</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-hint">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════
         INTEGRATIONS MARQUEE
         ═══════════════════════════════════════ -->
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

    <!-- ═══════════════════════════════════════
         ECOSYSTEM
         ═══════════════════════════════════════ -->
    <section class="ecosystem-section">
        <div class="container-xl">
            <div class="section-label">The Ecosystem</div>
            <h2 class="section-title">Everything we build, we operate.</h2>
            <p class="section-desc">Every system in the Stealth Labz ecosystem was built to serve its own businesses. This isn't a services portfolio. It's <strong>living infrastructure</strong> that generates revenue daily — and the proof that the model works.</p>

            <div class="eco-layout">

                <!-- Vertical stack -->
                <div class="vertical-stack">
                    <div class="vertical-card">
                        <div class="vc-icon pink">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                        </div>
                        <div class="vc-info">
                            <span class="vc-name">Lead Generation</span>
                            <span class="vc-detail">12 verticals · US + ZA</span>
                        </div>
                        <div class="vc-status"><div class="vc-dot"></div><span class="vc-live">Live</span></div>
                    </div>
                    <div class="vertical-card">
                        <div class="vc-icon purple">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
                        </div>
                        <div class="vc-info">
                            <span class="vc-name">DTC &amp; Commerce</span>
                            <span class="vc-detail">Multi-brand · Subscription + one-time</span>
                        </div>
                        <div class="vc-status"><div class="vc-dot"></div><span class="vc-live">Live</span></div>
                    </div>
                    <div class="vertical-card">
                        <div class="vc-icon pink">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                        </div>
                        <div class="vc-info">
                            <span class="vc-name">SaaS Platforms</span>
                            <span class="vc-detail">Custom-built · Multi-tenant</span>
                        </div>
                        <div class="vc-status"><div class="vc-dot"></div><span class="vc-live">Live</span></div>
                    </div>
                    <div class="vertical-card">
                        <div class="vc-icon purple">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                        </div>
                        <div class="vc-info">
                            <span class="vc-name">Content</span>
                            <span class="vc-detail">Publishing · SEO · Authority sites</span>
                        </div>
                        <div class="vc-status"><div class="vc-dot"></div><span class="vc-live">Live</span></div>
                    </div>
                    <div class="vertical-card">
                        <div class="vc-icon pink">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                        </div>
                        <div class="vc-info">
                            <span class="vc-name">Full-Stack Engineering</span>
                            <span class="vc-detail">596K+ LOC · Laravel/PHP · 10 systems</span>
                        </div>
                        <div class="vc-status"><div class="vc-dot"></div><span class="vc-live">Live</span></div>
                    </div>
                </div>

                <!-- Network visual -->
                <div class="eco-visual">
                    <div class="eco-network-svg">
                        <svg viewBox="0 0 600 480" preserveAspectRatio="xMidYMid meet">
                            <defs>
                                <radialGradient id="hubG" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="rgba(229,2,93,0.2)" />
                                    <stop offset="100%" stop-color="transparent" />
                                </radialGradient>
                                <radialGradient id="nGp" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="rgba(229,2,93,0.18)" />
                                    <stop offset="100%" stop-color="transparent" />
                                </radialGradient>
                                <radialGradient id="nGv" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="rgba(109,74,140,0.18)" />
                                    <stop offset="100%" stop-color="transparent" />
                                </radialGradient>
                            </defs>

                            <!-- Connections -->
                            <line class="net-line-accent nl-1" x1="300" y1="240" x2="480" y2="90" />
                            <line class="net-line-accent nl-2" x1="300" y1="240" x2="120" y2="110" />
                            <line class="net-line nl-3" x1="300" y1="240" x2="510" y2="260" />
                            <line class="net-line nl-4" x1="300" y1="240" x2="100" y2="320" />
                            <line class="net-line nl-5" x1="300" y1="240" x2="340" y2="410" />
                            <line class="net-line nl-6" x1="480" y1="90" x2="510" y2="260" />
                            <line class="net-line nl-7" x1="120" y1="110" x2="100" y2="320" />
                            <line class="net-line nl-8" x1="510" y1="260" x2="340" y2="410" />
                            <line class="net-line nl-9" x1="100" y1="320" x2="340" y2="410" />
                            <line class="net-line nl-10" x1="120" y1="110" x2="480" y2="90" />

                            <!-- Hub -->
                            <g class="hub-node">
                                <circle class="hub-pulse-outer" cx="300" cy="240" r="44" fill="none" stroke="rgba(229,2,93,0.12)" stroke-width="1.5" />
                                <circle class="hub-pulse-inner" cx="300" cy="240" r="30" fill="none" stroke="rgba(229,2,93,0.18)" stroke-width="1.5" />
                                <circle cx="300" cy="240" r="20" fill="url(#hubG)" stroke="rgba(229,2,93,0.25)" stroke-width="1" />
                                <circle cx="300" cy="240" r="5.5" fill="#e5025d" />
                                <text class="hub-label" x="300" y="215" text-anchor="middle">STEALTH LABZ</text>
                            </g>

                            <!-- Nodes -->
                            <g class="eco-node en-1">
                                <circle class="node-ring" cx="480" cy="90" r="18" fill="url(#nGp)" />
                                <circle cx="480" cy="90" r="4.5" fill="#e5025d" />
                            </g>
                            <text class="node-label lb-1" x="480" y="66" text-anchor="middle">Lead Gen</text>

                            <g class="eco-node en-2">
                                <circle class="node-ring" cx="120" cy="110" r="18" fill="url(#nGv)" />
                                <circle cx="120" cy="110" r="4.5" fill="#6d4a8c" />
                            </g>
                            <text class="node-label lb-2" x="120" y="86" text-anchor="middle">DTC</text>

                            <g class="eco-node en-3">
                                <circle class="node-ring" cx="510" cy="260" r="18" fill="url(#nGp)" />
                                <circle cx="510" cy="260" r="4.5" fill="#c81455" />
                            </g>
                            <text class="node-label lb-3" x="510" y="240" text-anchor="middle">SaaS</text>

                            <g class="eco-node en-4">
                                <circle class="node-ring" cx="100" cy="320" r="18" fill="url(#nGv)" />
                                <circle cx="100" cy="320" r="4.5" fill="#6d4a8c" />
                            </g>
                            <text class="node-label lb-4" x="100" y="348" text-anchor="middle">Content</text>

                            <g class="eco-node en-5">
                                <circle class="node-ring" cx="340" cy="410" r="18" fill="url(#nGp)" />
                                <circle cx="340" cy="410" r="4.5" fill="#b4235f" />
                            </g>
                            <text class="node-label lb-5" x="340" y="438" text-anchor="middle">Engineering</text>

                            <!-- Particles -->
                            <circle r="2" fill="#e5025d">
                                <animateMotion dur="4s" repeatCount="indefinite" begin="1.5s" path="M 300,240 L 480,90" />
                                <animate attributeName="opacity" values="0;0.8;0.8;0" dur="4s" repeatCount="indefinite" begin="1.5s" />
                            </circle>
                            <circle r="2" fill="#6d4a8c">
                                <animateMotion dur="4.5s" repeatCount="indefinite" begin="2s" path="M 300,240 L 120,110" />
                                <animate attributeName="opacity" values="0;0.7;0.7;0" dur="4.5s" repeatCount="indefinite" begin="2s" />
                            </circle>
                            <circle r="2" fill="#c81455">
                                <animateMotion dur="3.8s" repeatCount="indefinite" begin="2.5s" path="M 300,240 L 510,260" />
                                <animate attributeName="opacity" values="0;0.8;0.8;0" dur="3.8s" repeatCount="indefinite" begin="2.5s" />
                            </circle>
                            <circle r="2" fill="#6d4a8c">
                                <animateMotion dur="5s" repeatCount="indefinite" begin="3s" path="M 300,240 L 100,320" />
                                <animate attributeName="opacity" values="0;0.7;0.7;0" dur="5s" repeatCount="indefinite" begin="3s" />
                            </circle>
                            <circle r="2" fill="#b4235f">
                                <animateMotion dur="4.2s" repeatCount="indefinite" begin="1.8s" path="M 300,240 L 340,410" />
                                <animate attributeName="opacity" values="0;0.7;0.7;0" dur="4.2s" repeatCount="indefinite" begin="1.8s" />
                            </circle>
                        </svg>
                    </div>

                    <!-- Geography badges -->
                    <div class="geo-badge geo-us">
                        <div class="geo-dot"></div>
                        <span>United States — Live</span>
                    </div>
                    <div class="geo-badge geo-za">
                        <div class="geo-dot"></div>
                        <span>South Africa — Live</span>
                    </div>
                </div>
            </div>

            <!-- Summary strip -->
            <div class="eco-summary">
                <div class="eco-summary-item">
                    <div class="eco-summary-val">10</div>
                    <div class="eco-summary-lbl">Production Systems</div>
                </div>
                <div class="eco-summary-item">
                    <div class="eco-summary-val">596K+</div>
                    <div class="eco-summary-lbl">Lines of Code</div>
                </div>
                <div class="eco-summary-item">
                    <div class="eco-summary-val">12</div>
                    <div class="eco-summary-lbl">Verticals</div>
                </div>
                <div class="eco-summary-item">
                    <div class="eco-summary-val">7</div>
                    <div class="eco-summary-lbl">Brands Live</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════
         FOUNDATION
         ═══════════════════════════════════════ -->
    <section class="foundation-section section-dark">
        <div class="container-xl">
            <div class="section-label">The Foundation</div>
            <h2 class="section-title">20+ years of execution density.</h2>
            <p class="section-desc">Ten disciplines. Each at production depth. All compounding inside one operating company.</p>

            <div class="discipline-grid">
                <div class="discipline-cell">
                    <div class="dc-top">
                        <div class="dc-domain">Direct Response</div>
                        <div class="dc-depth">Performance marketing at institutional scale</div>
                    </div>
                    <div class="dc-metric">$75M+</div>
                </div>
                <div class="discipline-cell">
                    <div class="dc-top">
                        <div class="dc-domain">Full-Stack Engineering</div>
                        <div class="dc-depth">10 production systems, deployed &amp; revenue-generating</div>
                    </div>
                    <div class="dc-metric">596K LOC</div>
                </div>
                <div class="discipline-cell">
                    <div class="dc-top">
                        <div class="dc-domain">E-Commerce</div>
                        <div class="dc-depth">Subscription + one-time, multi-processor, churn &amp; LTV</div>
                    </div>
                    <div class="dc-metric">300K+</div>
                </div>
                <div class="discipline-cell">
                    <div class="dc-top">
                        <div class="dc-domain">Lead Generation</div>
                        <div class="dc-depth">Multi-vertical, multi-buyer, compliance per vertical</div>
                    </div>
                    <div class="dc-metric">12 verticals</div>
                </div>
                <div class="discipline-cell">
                    <div class="dc-top">
                        <div class="dc-domain">Affiliate &amp; Network</div>
                        <div class="dc-depth">Both sides — running offers and managing affiliates</div>
                    </div>
                    <div class="dc-metric">Multi-CPA</div>
                </div>
                <div class="discipline-cell">
                    <div class="dc-top">
                        <div class="dc-domain">International Ops</div>
                        <div class="dc-depth">Dual currency, compliance, payment rails, partnerships</div>
                    </div>
                    <div class="dc-metric">US + ZA</div>
                </div>
                <div class="discipline-cell">
                    <div class="dc-top">
                        <div class="dc-domain">Product Development</div>
                        <div class="dc-depth">Zero to market — pricing, positioning, packaging, fulfillment</div>
                    </div>
                    <div class="dc-metric">20+ brands</div>
                </div>
                <div class="discipline-cell">
                    <div class="dc-top">
                        <div class="dc-domain">Unit Economics</div>
                        <div class="dc-depth">P&amp;L across entities, revenue attribution, AOV/LTV modeling</div>
                    </div>
                    <div class="dc-metric">Multi-entity</div>
                </div>
                <div class="discipline-cell">
                    <div class="dc-top">
                        <div class="dc-domain">Business Formation</div>
                        <div class="dc-depth">Entity structure, merchant accounts, processor relationships</div>
                    </div>
                    <div class="dc-metric">6 entities</div>
                </div>
                <div class="discipline-cell">
                    <div class="dc-top">
                        <div class="dc-domain">AI-Native Development</div>
                        <div class="dc-depth">Pioneering CEM — documented, systematized, with evidence</div>
                    </div>
                    <div class="dc-metric">$82K vs $2.9M</div>
                </div>
            </div>

            <div class="foundation-summary">
                <div class="fs-text">
                    Sequentially, these disciplines represent <strong>41–64 years</strong> of professional experience. Compounded inside Stealth Labz, they operate as <span class="pink">20+ years of execution density</span> — and the reason one operating company does what normally requires 8–15 specialists.
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════
         METHOD (CEM)
         ═══════════════════════════════════════ -->
    <section class="method-section">
        <div class="container-xl">
            <div class="section-label">The Method</div>
            <h2 class="section-title">The Compounding Execution Method.</h2>
            <p class="section-desc">CEM is the operating system behind every system in the ecosystem. 12 mechanisms, 4 applications, and a tactical escalation chain — <strong>AI-native, compounding-first, validated in production.</strong></p>

            <div class="proof-strip">
                <div class="proof-block">
                    <div class="pb-value">13.4×</div>
                    <div class="pb-label">Velocity Multiplier</div>
                    <div class="pb-context">Output compounds with each system shipped</div>
                </div>
                <div class="proof-block">
                    <div class="pb-value">9.6%</div>
                    <div class="pb-label">Defect Rate</div>
                    <div class="pb-context">Quality maintained as velocity scaled</div>
                </div>
                <div class="proof-block">
                    <div class="pb-value">74d</div>
                    <div class="pb-label">Full Ecosystem</div>
                    <div class="pb-context">10 systems to production</div>
                </div>
                <div class="proof-block">
                    <div class="pb-value">5 days</div>
                    <div class="pb-label">Fastest MVP</div>
                    <div class="pb-context">Concept to production deployment</div>
                </div>
                <div class="proof-block">
                    <div class="pb-value">$82K</div>
                    <div class="pb-label">Actual Build Cost</div>
                    <div class="pb-context">vs $2.9M traditional estimate</div>
                </div>
            </div>

            <div class="method-context">
                <div class="mc-block pink">
                    <div class="mc-eyebrow">What it does</div>
                    <div class="mc-statement">CEM turns 20+ years of compounding expertise into a repeatable execution system. It's how <strong>596K lines of code shipped in 74 days</strong> at a 9.6% defect rate — and how one operating company builds and runs what traditional companies staff 8–15 specialists to handle.</div>
                </div>
                <div class="mc-block purple">
                    <div class="mc-eyebrow">Why it matters</div>
                    <div class="mc-statement">The method isn't theoretical. It's extracted from the work — validated across every system in the ecosystem. <strong>$4.5M in proprietary software built for $82K.</strong> The ecosystem is the proof CEM works.</div>
                </div>
            </div>

            <div class="method-cta">
                <a href="<?= siteUrl('method') ?>" class="btn-glow">
                    Explore the Full Method
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <span class="method-cta-note">12 mechanisms · 4 applications · Full documentation</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════
         WORK WITH US
         ═══════════════════════════════════════ -->
    <section class="offer-section section-dark">
        <div class="container-xl">
            <div class="section-label">Work With Us</div>
            <h2 class="section-title">The same infrastructure, applied to your business.</h2>
            <p class="section-desc">The methodology and systems behind the ecosystem are available three ways.</p>

            <div class="offer-grid">
                <div class="offer-card">
                    <div class="oc-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    </div>
                    <div class="oc-type">Build</div>
                    <div class="oc-title">Custom Builds</div>
                    <div class="oc-desc">Same method, same foundation, same velocity — applied to your project. Production-grade systems deployed in days, not months.</div>
                    <a href="<?= siteUrl('solutions') ?>" class="oc-link">
                        Learn More
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h10m0 0L9 4m4 4L9 12"/></svg>
                    </a>
                </div>
                <div class="offer-card">
                    <div class="oc-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                    </div>
                    <div class="oc-type">License</div>
                    <div class="oc-title">White Label</div>
                    <div class="oc-desc">License what's already built. Proven systems across lead gen, DTC, and SaaS — deployed under your brand, backed by production-tested infrastructure.</div>
                    <a href="<?= siteUrl('solutions') ?>" class="oc-link">
                        Learn More
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h10m0 0L9 4m4 4L9 12"/></svg>
                    </a>
                </div>
                <div class="offer-card">
                    <div class="oc-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                    </div>
                    <div class="oc-type">Learn</div>
                    <div class="oc-title">Training</div>
                    <div class="oc-desc">CEM applied to your team, your stack, your business model. The same operating system that drives the ecosystem — transferred to yours.</div>
                    <a href="<?= siteUrl('solutions') ?>" class="oc-link">
                        Learn More
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h10m0 0L9 4m4 4L9 12"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════
         INSIGHTS
         ═══════════════════════════════════════ -->
    <section class="insights-section">
        <div class="container-xl">
            <div class="insights-header">
                <div>
                    <div class="section-label">Insights</div>
                    <h2 class="section-title">From the build.</h2>
                    <p class="section-sub-text">Thoughts on building, scaling, and shipping.</p>
                </div>
                <a href="<?= siteUrl('insights') ?>" class="btn-outline">View All Posts</a>
            </div>

            <div class="blog-grid">
                <?php if (!empty($recentPosts)): ?>
                    <?php foreach ($recentPosts as $i => $post): ?>
                <a href="<?= siteUrl('insights/' . htmlspecialchars($post['slug'])) ?>" class="blog-card fade-up stagger-<?= $i + 1 ?>">
                    <div class="blog-card-image" style="background-image: url('<?= htmlspecialchars($post['featured_image']) ?>')"></div>
                    <div class="blog-card-body">
                        <div class="blog-card-date"><?= date('Y-m-d', strtotime($post['published_at'])) ?></div>
                        <h4 class="blog-card-title"><?= htmlspecialchars($post['title']) ?></h4>
                        <p class="blog-card-excerpt"><?= htmlspecialchars(substr($post['excerpt'] ?? '', 0, 100)) ?>...</p>
                    </div>
                </a>
                    <?php endforeach; ?>
                <?php else: ?>
                <p class="text-secondary">No posts yet.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════
         CTA
         ═══════════════════════════════════════ -->
    <section class="home-cta">
        <div class="container-xl">
            <h2 class="cta-title">Stay in the <span class="highlight">Loop.</span></h2>
            <p class="cta-sub">New platforms, builds, and insights — straight to your inbox.</p>

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
        document.querySelectorAll('.fade-up, .offer-card, .vertical-card, .discipline-cell, .blog-card').forEach(el => observer.observe(el));

        // Newsletter
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
