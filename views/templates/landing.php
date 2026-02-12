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

    <!-- ════════════════════════════════════════
         HERO — What Stealth Labz IS
         ════════════════════════════════════════ -->
    <section class="home-hero">
        <div class="container-xl">
            <div class="home-hero-grid">
                <div class="hero-content">
                    <div class="hero-badge">
                        <span class="dot"></span>
                        AI-Native Operating Company
                    </div>

                    <h1>
                        We build, own, and operate<br>
                        <span class="highlight">revenue systems.</span>
                    </h1>

                    <p class="home-hero-sub">
                        Stealth Labz is the operating company behind 7 brands across lead generation, SaaS, DTC, and content — all in production, all generating revenue, across two continents. Built on 20+ years of compounding expertise in direct response, engineering, and product development.
                    </p>

                    <div class="hero-cta-row">
                        <a href="<?= siteUrl('ecosystem') ?>" class="btn-glow">
                            See the Ecosystem
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                        <a href="<?= siteUrl('cem') ?>" class="btn-outline-home">See the Method</a>
                    </div>

                    <div class="hero-stats-bar">
                        <div class="hero-stat-item">
                            <div class="hero-stat-val">$75M+</div>
                            <div class="hero-stat-lbl">Scaled Revenue</div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="hero-stat-val">10</div>
                            <div class="hero-stat-lbl">Production Systems</div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="hero-stat-val">20+</div>
                            <div class="hero-stat-lbl">Years Compounding</div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="hero-stat-val">2</div>
                            <div class="hero-stat-lbl">Continents</div>
                        </div>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="home-viz">

                        <!-- Floating Stat Cards — ecosystem-focused -->
                        <div class="float-card card-mvp">
                            <div class="fc-header">
                                <div class="fc-indicator"></div>
                                <span class="fc-tag">Lead Generation</span>
                            </div>
                            <div class="fc-val">22K+</div>
                            <div class="fc-sub">Leads generated</div>
                            <div class="fc-delta">12 verticals · US + ZA</div>
                        </div>

                        <div class="float-card card-multiplier">
                            <div class="fc-header">
                                <div class="fc-indicator"></div>
                                <span class="fc-tag">DTC &amp; Commerce</span>
                            </div>
                            <div class="fc-val">11K+</div>
                            <div class="fc-sub">Orders processed</div>
                            <div class="mini-spark">
                                <div class="spark-bar sb-1"></div>
                                <div class="spark-bar sb-2"></div>
                                <div class="spark-bar sb-3"></div>
                                <div class="spark-bar sb-4"></div>
                                <div class="spark-bar sb-5"></div>
                                <div class="spark-bar sb-6"></div>
                                <div class="spark-bar sb-7"></div>
                                <div class="spark-bar sb-8"></div>
                                <div class="spark-bar sb-9"></div>
                                <div class="spark-bar sb-10"></div>
                            </div>
                        </div>

                        <div class="float-card card-systems">
                            <div class="fc-header">
                                <div class="fc-indicator"></div>
                                <span class="fc-tag">Production Systems</span>
                            </div>
                            <div class="fc-val">10</div>
                            <div class="fc-sub">596K lines of code</div>
                            <div class="fc-delta">All live. All revenue-generating.</div>
                        </div>

                        <!-- Compounding Curve Chart -->
                        <div class="home-chart">
                            <svg viewBox="0 0 520 320" preserveAspectRatio="none">
                                <defs>
                                    <linearGradient id="homeGradient" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="rgba(229,2,93,0.18)" />
                                        <stop offset="50%" stop-color="rgba(109,74,140,0.06)" />
                                        <stop offset="100%" stop-color="transparent" />
                                    </linearGradient>
                                    <linearGradient id="homeStroke" x1="0" y1="0" x2="1" y2="0">
                                        <stop offset="0%" stop-color="#6d4a8c" />
                                        <stop offset="40%" stop-color="#a0386e" />
                                        <stop offset="100%" stop-color="#e5025d" />
                                    </linearGradient>
                                </defs>

                                <!-- Grid lines -->
                                <line class="grid-line" x1="0" y1="64"  x2="520" y2="64" />
                                <line class="grid-line" x1="0" y1="128" x2="520" y2="128" />
                                <line class="grid-line" x1="0" y1="192" x2="520" y2="192" />
                                <line class="grid-line" x1="0" y1="256" x2="520" y2="256" />
                                <line class="grid-line" x1="0" y1="320" x2="520" y2="320" />

                                <!-- Industry average -->
                                <path class="industry-line" d="M 0,285 C 130,278 260,270 390,262 C 450,258 500,255 520,252" />

                                <!-- Area fill -->
                                <path class="compound-area" d="M 0,300 C 25,298 52,295 78,290 C 130,280 170,265 210,244 C 260,216 300,180 340,140 C 380,100 420,58 460,28 C 490,10 510,4 520,2 L 520,320 L 0,320 Z" />

                                <!-- Compounding curve -->
                                <path class="compound-curve" d="M 0,300 C 25,298 52,295 78,290 C 130,280 170,265 210,244 C 260,216 300,180 340,140 C 380,100 420,58 460,28 C 490,10 510,4 520,2" />

                                <!-- System data points P1-P10 -->
                                <g class="system-marker sm-1">
                                    <circle class="pulse-ring" cx="26" cy="298" r="8" fill="rgba(109,74,140,0.12)" />
                                    <circle cx="26" cy="298" r="3" fill="#6d4a8c" opacity="0.6" />
                                </g>
                                <g class="system-marker sm-2">
                                    <circle class="pulse-ring" cx="78" cy="290" r="8" fill="rgba(109,74,140,0.12)" />
                                    <circle cx="78" cy="290" r="3" fill="#6d4a8c" opacity="0.65" />
                                </g>
                                <g class="system-marker sm-3">
                                    <circle class="pulse-ring" cx="130" cy="278" r="8" fill="rgba(140,55,115,0.12)" />
                                    <circle cx="130" cy="278" r="3" fill="#8c3773" opacity="0.7" />
                                </g>
                                <g class="system-marker sm-4">
                                    <circle class="pulse-ring" cx="182" cy="258" r="8" fill="rgba(160,45,105,0.12)" />
                                    <circle cx="182" cy="258" r="3" fill="#a02d69" />
                                </g>
                                <g class="system-marker sm-5">
                                    <circle class="pulse-ring" cx="234" cy="230" r="8" fill="rgba(180,35,95,0.12)" />
                                    <circle cx="234" cy="230" r="3" fill="#b4235f" />
                                </g>
                                <g class="system-marker sm-6">
                                    <circle class="pulse-ring" cx="286" cy="192" r="9" fill="rgba(200,20,85,0.12)" />
                                    <circle cx="286" cy="192" r="3.5" fill="#c81455" />
                                </g>
                                <g class="system-marker sm-7">
                                    <circle class="pulse-ring" cx="338" cy="145" r="9" fill="rgba(215,10,78,0.12)" />
                                    <circle cx="338" cy="145" r="3.5" fill="#d70a4e" />
                                </g>
                                <g class="system-marker sm-8">
                                    <circle class="pulse-ring" cx="390" cy="95" r="10" fill="rgba(229,2,93,0.12)" />
                                    <circle cx="390" cy="95" r="4" fill="#e5025d" />
                                </g>
                                <g class="system-marker sm-9">
                                    <circle class="pulse-ring" cx="442" cy="45" r="10" fill="rgba(229,2,93,0.14)" />
                                    <circle cx="442" cy="45" r="4" fill="#e5025d" />
                                </g>
                                <g class="system-marker sm-10">
                                    <circle class="pulse-ring" cx="505" cy="5" r="12" fill="rgba(229,2,93,0.15)" />
                                    <circle cx="505" cy="5" r="5" fill="#e5025d" />
                                </g>

                                <!-- X-axis labels -->
                                <text class="x-label xl-1"  x="26"  y="318" text-anchor="middle">P1</text>
                                <text class="x-label xl-2"  x="78"  y="318" text-anchor="middle">P2</text>
                                <text class="x-label xl-3"  x="130" y="318" text-anchor="middle">P3</text>
                                <text class="x-label xl-4"  x="182" y="318" text-anchor="middle">P4</text>
                                <text class="x-label xl-5"  x="234" y="318" text-anchor="middle">P5</text>
                                <text class="x-label xl-6"  x="286" y="318" text-anchor="middle">P6</text>
                                <text class="x-label xl-7"  x="338" y="318" text-anchor="middle">P7</text>
                                <text class="x-label xl-8"  x="390" y="318" text-anchor="middle">P8</text>
                                <text class="x-label xl-9"  x="442" y="318" text-anchor="middle">P9</text>
                                <text class="x-label xl-10" x="505" y="318" text-anchor="middle">P10</text>

                                <!-- Phase labels -->
                                <text class="phase-label pl-1" x="60"  y="275">FOUNDATION</text>
                                <text class="phase-label pl-2" x="240" y="195">LEVERAGE</text>
                                <text class="phase-label pl-3" x="410" y="75">COMPOUND</text>

                                <!-- Industry avg label -->
                                <text class="x-label xl-avg" x="520" y="248" text-anchor="end">INDUSTRY AVG</text>
                            </svg>
                        </div>

                        <!-- Velocity Strip -->
                        <div class="velocity-strip">
                            <div class="vel-block vb-1"></div>
                            <div class="vel-block vb-2"></div>
                            <div class="vel-block vb-3"></div>
                            <div class="vel-block vb-4"></div>
                            <div class="vel-block vb-5"></div>
                            <div class="vel-block vb-6"></div>
                            <div class="vel-block vb-7"></div>
                            <span class="vel-label">Execution Velocity</span>
                        </div>

                        <!-- System Output Ticks -->
                        <div class="sys-ticks">
                            <div class="sys-tick st-1"></div>
                            <div class="sys-tick st-2"></div>
                            <div class="sys-tick st-3"></div>
                            <div class="sys-tick st-4"></div>
                            <div class="sys-tick st-5"></div>
                            <div class="sys-tick st-6"></div>
                            <div class="sys-tick st-7"></div>
                            <div class="sys-tick st-8"></div>
                            <div class="sys-tick st-9"></div>
                            <div class="sys-tick st-10"></div>
                        </div>
                        <div class="sys-ticks-label">Output / System</div>

                    </div>
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
         ECOSYSTEM PROOF — What we built for ourselves
         ════════════════════════════════════════ -->
    <section class="about-section">
        <div class="container-xl">
            <div class="section-label">The Portfolio</div>
            <h2 class="section-title">Everything we build, we operate.</h2>

            <div class="about-grid">
                <div class="about-text">
                    <p>Every system in the Stealth Labz ecosystem was built to serve our own businesses — lead generation, DTC brands, SaaS platforms, and content properties running across the US and South Africa.</p>

                    <p>This isn't a services portfolio. It's a <strong>living infrastructure</strong> that generates revenue daily. 10 production systems, 596K+ lines of code, 11K+ orders processed, 22K+ leads generated across 12 verticals.</p>

                    <p>The ecosystem is the proof. <strong>Everything we offer, we run ourselves first.</strong></p>
                </div>

                <div class="capability-list">
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">Lead Generation</span>
                            <span class="capability-metric">22K+ leads · 12 verticals · US + ZA</span>
                        </div>
                    </div>
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">DTC &amp; E-Commerce</span>
                            <span class="capability-metric">$938K revenue · 11K+ orders</span>
                        </div>
                    </div>
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">SaaS Platforms</span>
                            <span class="capability-metric">Custom-built · Multi-tenant · Production</span>
                        </div>
                    </div>
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">Full-Stack Engineering</span>
                            <span class="capability-metric">596K+ LOC · Laravel/PHP · 10 systems</span>
                        </div>
                    </div>
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">International Operations</span>
                            <span class="capability-metric">US + ZA · Dual compliance · Dual currency</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         THE FOUNDATION — Experience as organizational DNA
         ════════════════════════════════════════ -->
    <section class="pillars-section">
        <div class="container-xl">
            <div class="section-label">The Foundation</div>
            <h2 class="section-title">20+ years of execution density.</h2>
            <p class="section-desc">Stealth Labz was built on a foundation that spans direct response marketing at $75M+ scale, full-stack engineering across 596K+ lines of production code, multi-vertical lead generation across 12 industries, subscription commerce with 300K+ paid subscribers, affiliate network management, and international operations. That depth compounds — it's why one team operates what normally requires 8–15 specialists.</p>

            <div class="about-stats-row" style="margin-top: 3rem;">
                <div class="about-stat-item">
                    <div class="about-stat-value">$75M+</div>
                    <div class="about-stat-label">Direct Response Scale</div>
                </div>
                <div class="about-stat-item">
                    <div class="about-stat-value">596K+</div>
                    <div class="about-stat-label">Lines of Production Code</div>
                </div>
                <div class="about-stat-item">
                    <div class="about-stat-value">300K+</div>
                    <div class="about-stat-label">Paid Subscribers</div>
                </div>
                <div class="about-stat-item">
                    <div class="about-stat-value">10+</div>
                    <div class="about-stat-label">Disciplines</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         THE METHOD — CEM
         ════════════════════════════════════════ -->
    <section class="about-section">
        <div class="container-xl">
            <div class="section-label">The Method</div>
            <h2 class="section-title">The Compounding Execution Method.</h2>

            <div class="about-grid">
                <div class="about-text">
                    <p>CEM is the operating system behind everything we build. 12 mechanisms, 4 applications, and a tactical escalation chain — AI-native, compounding-first, validated across every system in the ecosystem.</p>

                    <p>It's how <strong>596K lines of code shipped in 74 days</strong> at a <strong>9.6% defect rate</strong> while output multiplied <strong>13.4×</strong>. It's how one team builds and operates what traditional companies staff 8–15 specialists to handle.</p>

                    <p>The method isn't theoretical. It's extracted from the work — and the ecosystem is the proof it works.</p>
                </div>

                <div class="capability-list">
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">13.4× Velocity Multiplier</span>
                            <span class="capability-metric">Output compounds with each system shipped</span>
                        </div>
                    </div>
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">9.6% Defect Rate</span>
                            <span class="capability-metric">Quality maintained as velocity scaled</span>
                        </div>
                    </div>
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">5-Day Fastest MVP</span>
                            <span class="capability-metric">From concept to production deployment</span>
                        </div>
                    </div>
                    <div class="capability-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
                        <div class="capability-content">
                            <span class="capability-name">2,561 Production Commits</span>
                            <span class="capability-metric">Across 10 systems in 74 days</span>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 3rem;">
                <a href="<?= siteUrl('cem') ?>" class="btn-glow">
                    Explore CEM
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         WORK WITH US — Commercial offer
         ════════════════════════════════════════ -->
    <section class="pillars-section">
        <div class="container-xl">
            <div class="section-label">Work With Us</div>
            <h2 class="section-title">The same infrastructure, applied to your business.</h2>
            <p class="section-desc">The methodology and systems behind our ecosystem are available three ways.</p>

            <div class="pillars-grid">

                <!-- Custom Builds -->
                <div class="pillar-card">
                    <div class="pillar-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
                        </svg>
                    </div>
                    <div class="pillar-label">Build</div>
                    <div class="pillar-title">Custom Builds</div>
                    <div class="pillar-desc">We build it for you. Same method, same foundation, same velocity — applied to your project. Production-grade systems deployed in days, not months.</div>
                    <div class="pillar-stats">
                        <div>
                            <div class="pillar-stat-val">195K</div>
                            <div class="pillar-stat-lbl">Largest Build</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">74d</div>
                            <div class="pillar-stat-lbl">Full Ecosystem</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">13.4×</div>
                            <div class="pillar-stat-lbl">Velocity</div>
                        </div>
                    </div>
                    <a href="<?= siteUrl('solutions') ?>" class="pillar-link">
                        Learn More
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h10m0 0L9 4m4 4L9 12"/></svg>
                    </a>
                </div>

                <!-- White Label -->
                <div class="pillar-card">
                    <div class="pillar-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <div class="pillar-label">License</div>
                    <div class="pillar-title">White Label</div>
                    <div class="pillar-desc">License what we've already built. Proven systems across lead gen, DTC, and SaaS — deployed under your brand, backed by production-tested infrastructure.</div>
                    <div class="pillar-stats">
                        <div>
                            <div class="pillar-stat-val">10</div>
                            <div class="pillar-stat-lbl">Systems</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">596K</div>
                            <div class="pillar-stat-lbl">LOC</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">4</div>
                            <div class="pillar-stat-lbl">Verticals</div>
                        </div>
                    </div>
                    <a href="<?= siteUrl('solutions') ?>" class="pillar-link">
                        Learn More
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h10m0 0L9 4m4 4L9 12"/></svg>
                    </a>
                </div>

                <!-- Training -->
                <div class="pillar-card">
                    <div class="pillar-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div class="pillar-label">Learn</div>
                    <div class="pillar-title">Training</div>
                    <div class="pillar-desc">Learn the method. CEM applied to your team, your stack, your business model. The same operating system that drives our ecosystem — transferred to yours.</div>
                    <div class="pillar-stats">
                        <div>
                            <div class="pillar-stat-val">12</div>
                            <div class="pillar-stat-lbl">Mechanisms</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">4</div>
                            <div class="pillar-stat-lbl">Applications</div>
                        </div>
                        <div>
                            <div class="pillar-stat-val">$82K</div>
                            <div class="pillar-stat-lbl">vs $2.9M Build</div>
                        </div>
                    </div>
                    <a href="<?= siteUrl('solutions') ?>" class="pillar-link">
                        Learn More
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h10m0 0L9 4m4 4L9 12"/></svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         INSIGHTS — Blog
         ════════════════════════════════════════ -->
    <section id="blog" class="section-dark">
        <div class="container-xl">
            <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 fade-up">
                <div>
                    <h2 class="section-title">Insights</h2>
                    <p class="section-subtitle mb-0">Thoughts on building, scaling, and shipping.</p>
                </div>
                <a href="<?= siteUrl('insights') ?>" class="btn-outline">View All Posts</a>
            </div>

            <div class="blog-grid">
                <?php if (!empty($recentPosts)): ?>
                    <?php foreach ($recentPosts as $i => $post): ?>
                <a href="<?= siteUrl('insights/' . htmlspecialchars($post['slug'])) ?>" class="blog-card fade-up stagger-<?= $i + 1 ?>">
                    <div class="blog-card-image" style="background-image: url('<?= htmlspecialchars($post['featured_image']) ?>')">
                    </div>
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
