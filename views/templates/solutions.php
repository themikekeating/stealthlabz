<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#e5025d">
    <title><?= htmlspecialchars($page['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page['description']) ?>">
    <link rel="canonical" href="https://stealthlabz.com/solutions">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($page['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page['description']) ?>">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/solutions">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Stealth Labz">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page['title']) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page['description']) ?>">
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

    <link rel="stylesheet" href="/cdn/css/solutions.css">
</head>
<body>
    <div class="grid-bg"></div>

    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <!-- ════════════════════════════════════════
         HERO
         ════════════════════════════════════════ -->
    <section class="sol-hero">
        <div class="container-xl">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="hero-badge">
                        <span class="dot"></span>
                        Build &amp; Deploy
                    </div>
                    <h1>Built on <span class="highlight">Foundation.</span><br>Not from scratch.</h1>
                    <p class="sol-hero-sub">
                        Custom software, proven systems, and production-ready platforms — built with the same methodology behind 2,561 commits and 10 shipped systems.
                    </p>

                    <div class="hero-proof">
                        <div class="hero-proof-item">
                            <div class="hero-proof-val">5 days</div>
                            <div class="hero-proof-lbl">Fastest MVP</div>
                        </div>
                        <div class="hero-proof-item">
                            <div class="hero-proof-val">195K</div>
                            <div class="hero-proof-lbl">Largest Build (LOC)</div>
                        </div>
                        <div class="hero-proof-item">
                            <div class="hero-proof-val">10</div>
                            <div class="hero-proof-lbl">Systems Shipped</div>
                        </div>
                        <div class="hero-proof-item">
                            <div class="hero-proof-val">9.6%</div>
                            <div class="hero-proof-lbl">Defect Rate</div>
                        </div>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="sol-viz">
                        <!-- Stat cards -->
                        <div class="stat-card stat-card-1">
                            <div class="stat-val">195K</div>
                            <div class="stat-lbl">Lines of Code</div>
                            <div class="stat-delta">across 10 systems</div>
                        </div>
                        <div class="stat-card stat-card-2">
                            <div class="stat-val">5d</div>
                            <div class="stat-lbl">MVP to Production</div>
                            <div class="stat-delta">&darr; 87% vs industry avg</div>
                        </div>
                        <div class="stat-card stat-card-3">
                            <div class="stat-val">9.6%</div>
                            <div class="stat-lbl">Defect Rate</div>
                            <div class="stat-delta">&darr; from ~25% industry</div>
                        </div>

                        <!-- Shipping velocity curve -->
                        <div class="sol-chart">
                            <svg viewBox="0 0 500 280" preserveAspectRatio="none">
                                <defs>
                                    <linearGradient id="solGradient" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="rgba(229,2,93,0.2)" />
                                        <stop offset="100%" stop-color="rgba(229,2,93,0)" />
                                    </linearGradient>
                                </defs>

                                <!-- Grid -->
                                <line class="grid-line" x1="0" y1="70" x2="500" y2="70" />
                                <line class="grid-line" x1="0" y1="140" x2="500" y2="140" />
                                <line class="grid-line" x1="0" y1="210" x2="500" y2="210" />
                                <line class="grid-line" x1="0" y1="280" x2="500" y2="280" />

                                <!-- Industry average -->
                                <path class="avg-path" d="M 0,220 C 100,215 200,210 300,205 C 400,200 450,195 500,190" />

                                <!-- Velocity curve -->
                                <path class="velocity-fill" d="M 0,260 C 50,255 100,240 150,220 C 200,195 250,160 300,115 C 350,70 400,35 500,10 L 500,280 L 0,280 Z" fill="url(#solGradient)" />
                                <path class="velocity-path" d="M 0,260 C 50,255 100,240 150,220 C 200,195 250,160 300,115 C 350,70 400,35 500,10" />

                                <!-- System ship markers -->
                                <g class="data-point data-point-1">
                                    <circle cx="50" cy="255" r="6" fill="rgba(229,2,93,0.15)" />
                                    <circle cx="50" cy="255" r="3" fill="#e5025d" />
                                </g>
                                <g class="data-point data-point-2">
                                    <circle cx="150" cy="220" r="6" fill="rgba(229,2,93,0.15)" />
                                    <circle cx="150" cy="220" r="3" fill="#e5025d" />
                                </g>
                                <g class="data-point data-point-3">
                                    <circle cx="250" cy="160" r="6" fill="rgba(229,2,93,0.15)" />
                                    <circle cx="250" cy="160" r="3" fill="#e5025d" />
                                </g>
                                <g class="data-point data-point-4">
                                    <circle cx="350" cy="70" r="6" fill="rgba(229,2,93,0.15)" />
                                    <circle cx="350" cy="70" r="3" fill="#e5025d" />
                                </g>
                                <g class="data-point data-point-5">
                                    <circle cx="480" cy="15" r="6" fill="rgba(229,2,93,0.15)" />
                                    <circle cx="480" cy="15" r="3" fill="#e5025d" />
                                </g>

                                <!-- Axis labels -->
                                <text class="axis-label axis-delay-1" x="4" y="278">S1</text>
                                <text class="axis-label axis-delay-2" x="95" y="278">S3</text>
                                <text class="axis-label axis-delay-3" x="195" y="278">S5</text>
                                <text class="axis-label axis-delay-4" x="295" y="278">S7</text>
                                <text class="axis-label axis-delay-5" x="395" y="278">S9</text>
                                <text class="axis-label axis-delay-6" x="470" y="278">S10</text>

                                <!-- Avg label -->
                                <text class="axis-label-avg axis-delay-7" x="505" y="188">INDUSTRY AVG</text>
                            </svg>
                        </div>

                        <!-- Throughput bars -->
                        <div class="throughput-bar-group">
                            <div class="throughput-bar"></div>
                            <div class="throughput-bar"></div>
                            <div class="throughput-bar"></div>
                            <div class="throughput-bar"></div>
                            <div class="throughput-bar"></div>
                            <div class="throughput-bar"></div>
                            <div class="throughput-bar"></div>
                            <div class="throughput-bar"></div>
                            <div class="throughput-bar"></div>
                            <div class="throughput-bar"></div>
                        </div>
                        <div class="throughput-label">THROUGHPUT / SYSTEM</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         01 — THREE TRACKS
         ════════════════════════════════════════ -->
    <section class="sol-section alt">
        <div class="container-xl">
            <div class="section-label">01 — What We Do</div>
            <h2 class="section-title">Three Ways to Work With Us</h2>
            <p class="section-desc">Tell us what you need built, deploy something we've already shipped, or learn the method behind it all.</p>

            <div class="tracks-grid">

                <!-- CUSTOM BUILD -->
                <div class="track-card">
                    <div class="track-icon pink">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <div class="track-label">Track 01</div>
                    <div class="track-title">We Build It For You</div>
                    <div class="track-desc">
                        You describe the problem. We ship production software — fast. MVPs, platforms, internal tools, SaaS products. Project-based pricing with optional retainer for ongoing support.
                    </div>
                    <div class="track-points">
                        <div class="track-point"><span class="track-point-dot"></span><span>Full-stack development powered by the Compounding Execution Method</span></div>
                        <div class="track-point"><span class="track-point-dot"></span><span>Source code handoff, hosted for you, or both — your call</span></div>
                        <div class="track-point"><span class="track-point-dot"></span><span>Production-deployed. Not prototypes, not wireframes.</span></div>
                    </div>
                </div>

                <!-- DEPLOY PROVEN -->
                <div class="track-card purple">
                    <div class="track-icon purple">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#6d4a8c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div class="track-label">Track 02</div>
                    <div class="track-title">Deploy a Proven System</div>
                    <div class="track-desc">
                        Production-tested platforms already in market. Your brand, your domain, your customers. We package it, configure it, and hand you the keys — or manage it on retainer.
                    </div>
                    <div class="track-points">
                        <div class="track-point"><span class="track-point-dot"></span><span>Systems already running in production with real users and real revenue</span></div>
                        <div class="track-point"><span class="track-point-dot"></span><span>Multi-tenant or single-tenant configurations</span></div>
                        <div class="track-point"><span class="track-point-dot"></span><span>Your branding, your market — built on proven Foundation</span></div>
                    </div>
                </div>

                <!-- LEARN THE METHOD -->
                <div class="track-card">
                    <div class="track-icon pink">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/>
                        </svg>
                    </div>
                    <div class="track-label">Track 03</div>
                    <div class="track-title">Learn the Method</div>
                    <div class="track-desc">
                        1-on-1 coaching or embedded with your team. The full Compounding Execution Method — AI workflow, execution patterns, and the methodology behind 10 production systems.
                    </div>
                    <div class="track-points">
                        <div class="track-point"><span class="track-point-dot"></span><span>Full methodology transfer — not theory, the actual system</span></div>
                        <div class="track-point"><span class="track-point-dot"></span><span>AI-native development workflow and execution patterns</span></div>
                        <div class="track-point"><span class="track-point-dot"></span><span>1-on-1 coaching or embedded alongside your team</span></div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         02 — READY TO DEPLOY
         ════════════════════════════════════════ -->
    <section class="sol-section">
        <div class="container-xl">
            <div class="section-label">02 — Proven Systems</div>
            <h2 class="section-title">Ready to Deploy</h2>
            <p class="section-desc">Every system below is live in production. Battle-tested, revenue-generating, and ready to run under your brand.</p>

            <div class="deploy-grid">

                <!-- Digital Command Center -->
                <div class="deploy-card">
                    <div class="deploy-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8"/><path d="M12 17v4"/><path d="M7 8h2"/><path d="M7 11h4"/>
                        </svg>
                    </div>
                    <div class="deploy-card-title">AI-Powered Digital Command Center</div>
                    <div class="deploy-card-desc">Multi-tenant SaaS platform — admin, partner, affiliate, and business dashboards. Real-time analytics, funnel builder, audience segmentation, merchant billing, autoresponders, CI/CD.</div>
                    <div class="deploy-card-tags">
                        <span class="deploy-tag">Multi-Tenant</span>
                        <span class="deploy-tag">SaaS</span>
                        <span class="deploy-tag">Analytics</span>
                        <span class="deploy-tag">Billing</span>
                    </div>
                </div>

                <!-- Multi-Tenant Lead Gen -->
                <div class="deploy-card">
                    <div class="deploy-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>
                        </svg>
                    </div>
                    <div class="deploy-card-title">Multi-Tenant Lead Gen Systems</div>
                    <div class="deploy-card-desc">Qualifier funnels, multi-step forms, lead routing, and CRM integration. Multiple markets and verticals running on shared infrastructure with isolated data.</div>
                    <div class="deploy-card-tags">
                        <span class="deploy-tag">Lead Gen</span>
                        <span class="deploy-tag">Multi-Tenant</span>
                        <span class="deploy-tag">CRM</span>
                        <span class="deploy-tag">Routing</span>
                    </div>
                </div>

                <!-- Reporting & Analytics -->
                <div class="deploy-card">
                    <div class="deploy-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 20V10"/><path d="M12 20V4"/><path d="M6 20v-6"/>
                        </svg>
                    </div>
                    <div class="deploy-card-title">Reporting &amp; Analytics Platforms</div>
                    <div class="deploy-card-desc">Automated data aggregation, stat rollups, visual dashboards, and exportable reports. Connects to ad networks, CRMs, merchant processors, and custom data sources.</div>
                    <div class="deploy-card-tags">
                        <span class="deploy-tag">Dashboards</span>
                        <span class="deploy-tag">Rollups</span>
                        <span class="deploy-tag">Integrations</span>
                    </div>
                </div>

                <!-- E-Commerce / DTC -->
                <div class="deploy-card">
                    <div class="deploy-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/>
                        </svg>
                    </div>
                    <div class="deploy-card-title">DTC &amp; E-Commerce Systems</div>
                    <div class="deploy-card-desc">Product catalogs, checkout flows, subscription management, and fulfillment integration. Single-brand storefronts or multi-brand portfolios.</div>
                    <div class="deploy-card-tags">
                        <span class="deploy-tag">E-Commerce</span>
                        <span class="deploy-tag">Subscriptions</span>
                        <span class="deploy-tag">Fulfillment</span>
                    </div>
                </div>

                <!-- Content Platforms -->
                <div class="deploy-card">
                    <div class="deploy-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/>
                        </svg>
                    </div>
                    <div class="deploy-card-title">Content &amp; Media Platforms</div>
                    <div class="deploy-card-desc">Personalized content delivery, media generation, seasonal campaigns, and user-facing experiences. Video, image, and interactive content pipelines.</div>
                    <div class="deploy-card-tags">
                        <span class="deploy-tag">Content</span>
                        <span class="deploy-tag">Media</span>
                        <span class="deploy-tag">Personalization</span>
                    </div>
                </div>

                <!-- Vertical-Specific Qualifiers -->
                <div class="deploy-card">
                    <div class="deploy-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </div>
                    <div class="deploy-card-title">Vertical-Specific Qualifier Systems</div>
                    <div class="deploy-card-desc">Pre-built qualifier flows for specific industries — legal, insurance, home services, and more. Multi-step forms, lead scoring, and buyer-intent routing baked in.</div>
                    <div class="deploy-card-tags">
                        <span class="deploy-tag">Qualifiers</span>
                        <span class="deploy-tag">Lead Scoring</span>
                        <span class="deploy-tag">Vertical</span>
                    </div>
                </div>

                <!-- Foundation Row -->
                <div class="deploy-foundation">
                    <div class="deploy-foundation-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#6d4a8c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 002 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>
                        </svg>
                    </div>
                    <div class="deploy-foundation-content">
                        <div class="deploy-foundation-title">Funnels, Prelanders &amp; Foundation Library</div>
                        <div class="deploy-foundation-desc">Dozens of production-tested funnels, prelanders, landing pages, and conversion-optimized templates across nutra, lead gen, and direct response. Plug into any system above or deploy standalone.</div>
                    </div>
                    <div class="deploy-foundation-stats">
                        <div>
                            <div class="deploy-foundation-stat-val">Dozens</div>
                            <div class="deploy-foundation-stat-lbl">Templates</div>
                        </div>
                        <div>
                            <div class="deploy-foundation-stat-val">Multi</div>
                            <div class="deploy-foundation-stat-lbl">Verticals</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         03 — US VS OTHERS
         ════════════════════════════════════════ -->
    <section class="sol-section alt">
        <div class="container-xl">
            <div class="section-label">03 — Comparison</div>
            <h2 class="section-title">Us vs. Everyone Else</h2>
            <p class="section-desc">Same deliverable. Different universe of execution.</p>

            <div class="sol-compare-grid">

                <!-- THEM -->
                <div class="sol-compare-col them">
                    <div class="sol-compare-col-header">
                        <div class="sol-compare-col-title">Traditional Dev Shop</div>
                        <span class="sol-compare-col-tag">Industry Standard</span>
                    </div>
                    <div class="sol-compare-rows">
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Timeline</div><div class="sol-compare-row-val">4–8 months for MVP. 12+ months for full platform.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Cost</div><div class="sol-compare-row-val">$150K–$750K+ depending on scope.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Team</div><div class="sol-compare-row-val">5–15 people. PM, designers, frontend, backend, QA, DevOps.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Process</div><div class="sol-compare-row-val">Discovery → wireframes → design → sprint planning → development → QA → deploy. Sequential.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Rework</div><div class="sol-compare-row-val">High. Requirements drift, scope creep, handoff friction between roles.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Ownership</div><div class="sol-compare-row-val">You pay for the hours. Code quality varies by team.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Post-Launch</div><div class="sol-compare-row-val">New SOW for every change. Retainer for maintenance at agency rates.</div></div>
                    </div>
                </div>

                <!-- US -->
                <div class="sol-compare-col us">
                    <div class="sol-compare-col-header">
                        <div class="sol-compare-col-title">Stealth Labz</div>
                        <span class="sol-compare-col-tag">CEM-Powered</span>
                    </div>
                    <div class="sol-compare-rows">
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Timeline</div><div class="sol-compare-row-val">5 days to MVP. Full platforms in weeks.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Cost</div><div class="sol-compare-row-val">Project-based. A fraction of traditional quotes.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Team</div><div class="sol-compare-row-val">Lean execution. AI-augmented workflow eliminates coordination overhead.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Process</div><div class="sol-compare-row-val">Scope → build → ship. Parallel execution, not sequential phases.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Rework</div><div class="sol-compare-row-val">Sub-10% defect rate across 10 production systems. Patterns compound, quality increases.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Ownership</div><div class="sol-compare-row-val">Full source code. Your infrastructure or ours. No lock-in.</div></div>
                        <div class="sol-compare-row"><div class="sol-compare-row-label">Post-Launch</div><div class="sol-compare-row-val">Optional retainer for support and iteration. Same methodology, same quality.</div></div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         04 — HOW IT WORKS
         ════════════════════════════════════════ -->
    <section class="sol-section">
        <div class="container-xl">
            <div class="section-label">04 — Process</div>
            <h2 class="section-title">How It Works</h2>
            <p class="section-desc">Four steps. No bloated discovery phases, no committee approvals.</p>

            <div class="process-steps">
                <div class="process-step">
                    <div class="process-step-num">01</div>
                    <div class="process-step-title">Scope</div>
                    <div class="process-step-desc">You tell us what you need. We define the target, timeline, and deliverable. No ambiguity.</div>
                    <span class="process-arrow">→</span>
                </div>
                <div class="process-step">
                    <div class="process-step-num">02</div>
                    <div class="process-step-title">Build</div>
                    <div class="process-step-desc">We execute. Foundation patterns, AI-augmented development, compounding output. You see progress daily.</div>
                    <span class="process-arrow">→</span>
                </div>
                <div class="process-step">
                    <div class="process-step-num">03</div>
                    <div class="process-step-title">Ship</div>
                    <div class="process-step-desc">Production-deployed. Not a staging link. Not a demo. Live software your users can touch.</div>
                    <span class="process-arrow">→</span>
                </div>
                <div class="process-step">
                    <div class="process-step-num">04</div>
                    <div class="process-step-title">Support</div>
                    <div class="process-step-desc">Walk away with source code, or stay on retainer for iteration and maintenance. Your choice.</div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         CTA
         ════════════════════════════════════════ -->
    <section class="sol-cta">
        <div class="container-xl">
            <h2>Stop waiting.<br>Start <span class="highlight">shipping.</span></h2>
            <p>Tell us what you need. We'll tell you how fast we can deliver it.</p>
            <a href="mailto:info@stealthlabz.com" class="sol-cta-btn">
                Let's Talk
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"/><path d="M12 5l7 7-7 7"/>
                </svg>
            </a>
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
            if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
    </script>
</body>
</html>
