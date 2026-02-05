<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#e5025d">
    <title>Our Tech | Stealth Labz</title>
    <meta name="description" content="The technology stack behind 10 production systems, 596,903 lines of code, and $938K in revenue. Built by a solo operator using the Compounding Execution Method.">
    <link rel="canonical" href="https://stealthlabz.com/stack">

    <!-- Open Graph -->
    <meta property="og:title" content="Our Tech | Stealth Labz">
    <meta property="og:description" content="10 production systems. 596,903 lines of code. $938K revenue. The technology stack behind Stealth Labz.">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/stack">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Stealth Labz">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Our Tech | Stealth Labz">
    <meta name="twitter:description" content="10 production systems. 596,903 lines of code. $938K revenue. The technology stack behind Stealth Labz.">
    <meta name="twitter:image" content="https://stealthlabz.com/cdn/images/og-default.png">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/cdn/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/cdn/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Landing Page Styles -->
    <link rel="stylesheet" href="/cdn/css/landing.css">

    <style>
        /* Tech Page Specific Styles */
        .tech-hero {
            padding: 140px 0 80px;
            text-align: center;
            position: relative;
        }

        .tech-hero::before {
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

        .tech-hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            letter-spacing: -0.03em;
            margin-bottom: 1rem;
        }

        .tech-hero-title .highlight {
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .tech-hero-subtitle {
            font-size: 1.25rem;
            color: var(--text-secondary);
            max-width: 700px;
            margin: 0 auto 3rem;
        }

        .tech-hero-stats {
            display: flex;
            justify-content: center;
            gap: 4rem;
            flex-wrap: wrap;
        }

        .tech-hero-stat {
            text-align: center;
        }

        .tech-hero-stat-value {
            font-family: 'DM Mono', monospace;
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .tech-hero-stat-label {
            font-size: 0.85rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Case Studies Section */
        .case-studies-section {
            padding: 60px 0;
        }

        .case-studies-grid {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        /* Case Study Card */
        .case-study-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            overflow: hidden;
            min-height: 550px;
            transition: all 0.3s ease;
        }

        .case-study-card:hover {
            border-color: rgba(229, 2, 93, 0.3);
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.5);
            transform: translateY(-5px);
        }

        .case-study-card.flagship {
            border-color: rgba(229, 2, 93, 0.3);
            background: linear-gradient(135deg, var(--bg-card) 0%, rgba(229, 2, 93, 0.05) 100%);
        }

        .case-study-row {
            height: 100%;
            min-height: 550px;
        }

        /* Screenshot Side */
        .case-study-screenshot {
            background: var(--bg-tertiary);
            height: 100%;
            min-height: 550px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            font-size: 0.875rem;
            position: relative;
            overflow: hidden;
        }

        .case-study-screenshot img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .screenshot-placeholder {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .screenshot-placeholder svg {
            opacity: 0.3;
        }

        /* Content Side */
        .case-study-content {
            padding: 2.5rem;
            display: flex;
            flex-direction: column;
            height: 100%;
            min-height: 550px;
        }

        /* Badge */
        .case-study-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(229, 2, 93, 0.15);
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

        .case-study-badge.flagship-badge {
            background: var(--gradient-pink);
            color: white;
        }

        /* Title */
        .case-study-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: -0.03em;
        }

        .case-study-tagline {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 1.75rem;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-bottom: 1.75rem;
        }

        .stat-box {
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1rem;
            text-align: center;
        }

        .stat-value {
            font-family: 'DM Mono', monospace;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--accent-pink);
            line-height: 1.2;
        }

        .stat-label {
            font-size: 0.7rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-top: 0.25rem;
        }

        /* Traditional Estimate */
        .traditional-block {
            background: var(--bg-secondary);
            border-left: 3px solid var(--accent-pink);
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
            border-radius: 0 8px 8px 0;
        }

        .traditional-label {
            font-size: 0.65rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-bottom: 0.25rem;
        }

        .traditional-value {
            font-family: 'DM Mono', monospace;
            font-size: 1.1rem;
            color: var(--text-primary);
        }

        .traditional-timeline {
            font-size: 0.85rem;
            color: var(--text-secondary);
        }

        /* Tech Pills */
        .tech-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .tech-pill {
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            color: var(--text-secondary);
            padding: 0.3rem 0.75rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-family: 'DM Mono', monospace;
        }

        /* Features */
        .features-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1.5rem 0;
            flex-grow: 1;
        }

        .features-list li {
            font-size: 0.9rem;
            color: var(--text-secondary);
            padding: 0.35rem 0;
            padding-left: 1.25rem;
            position: relative;
        }

        .features-list li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.7rem;
            width: 6px;
            height: 6px;
            background: var(--accent-pink);
            border-radius: 50%;
        }

        /* Link */
        .case-study-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--accent-pink);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: gap 0.2s ease;
        }

        .case-study-link:hover {
            color: var(--accent-pink);
            gap: 0.75rem;
        }

        /* Ecosystem Section */
        .ecosystem-section {
            padding: 100px 0;
            background: var(--bg-secondary);
            border-top: 1px solid var(--border-color);
        }

        .ecosystem-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .ecosystem-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .ecosystem-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Ecosystem Diagram */
        .ecosystem-diagram {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 3rem;
            margin-bottom: 4rem;
        }

        .hub-box {
            background: var(--gradient-pink);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        .hub-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .hub-desc {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .properties-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1rem;
        }

        .property-box {
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.25rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .property-box:hover {
            border-color: var(--accent-pink);
            transform: translateY(-3px);
        }

        .property-name {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .property-type {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        .connector-line {
            width: 2px;
            height: 30px;
            background: var(--accent-pink);
            margin: 0 auto;
            position: relative;
        }

        .connector-line::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 8px solid var(--accent-pink);
        }

        /* Summary Stats */
        .summary-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .summary-box {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
        }

        .summary-value {
            font-family: 'DM Mono', monospace;
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .summary-label {
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        /* CTA Section */
        .tech-cta {
            padding: 80px 0;
            text-align: center;
        }

        .tech-cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .tech-cta-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
        }

        .cta-options {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
            margin-bottom: 3rem;
        }

        .cta-option {
            text-align: left;
            max-width: 280px;
        }

        .cta-option-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--accent-pink);
        }

        .cta-option-desc {
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .tech-hero-title {
                font-size: 2.5rem;
            }

            .tech-hero-stats {
                gap: 2rem;
            }

            .case-study-card {
                min-height: auto;
            }

            .case-study-row {
                min-height: auto;
            }

            .case-study-screenshot {
                min-height: 300px;
            }

            .case-study-content {
                min-height: auto;
            }
        }
    </style>
</head>
<body>
    <div class="grid-bg"></div>

    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <!-- Hero Section -->
    <section class="tech-hero">
        <div class="container-xl">
            <div class="hero-badge">
                <span class="dot"></span>
                Live Production Systems
            </div>
            <h1 class="tech-hero-title">The <span class="highlight">Ecosystem</span></h1>
            <p class="tech-hero-subtitle">
                10 production systems. 596,903 lines of code. $938K revenue. Two continents. One operator.
            </p>
            <div class="tech-hero-stats">
                <div class="tech-hero-stat">
                    <div class="tech-hero-stat-value">10</div>
                    <div class="tech-hero-stat-label">Production Systems</div>
                </div>
                <div class="tech-hero-stat">
                    <div class="tech-hero-stat-value">596K+</div>
                    <div class="tech-hero-stat-label">Lines of Code</div>
                </div>
                <div class="tech-hero-stat">
                    <div class="tech-hero-stat-value">$938K</div>
                    <div class="tech-hero-stat-label">Revenue</div>
                </div>
                <div class="tech-hero-stat">
                    <div class="tech-hero-stat-value">4.9x</div>
                    <div class="tech-hero-stat-label">Velocity Increase</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="case-studies-section">
        <div class="container-xl">
            <div class="case-studies-grid">

                <!-- 1. STEALTH PORTAL (Flagship) -->
                <div class="case-study-card flagship">
                    <div class="row g-0 case-study-row">
                        <div class="col-lg-5">
                            <div class="case-study-screenshot">
                                <div class="screenshot-placeholder">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    <span>Screenshot</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="case-study-content">
                                <div class="case-study-badge flagship-badge">Flagship • The Hub</div>
                                <h3 class="case-study-title">Stealth Portal</h3>
                                <p class="case-study-tagline">5 Platforms. 1 Codebase. 60 Days.</p>

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

                                <a href="https://portal.stealthlabz.com" class="case-study-link" target="_blank">
                                    portal.stealthlabz.com
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. QUOTE ROCKET ZA -->
                <div class="case-study-card">
                    <div class="row g-0 case-study-row">
                        <div class="col-lg-5">
                            <div class="case-study-screenshot">
                                <div class="screenshot-placeholder">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    <span>Screenshot</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="case-study-content">
                                <div class="case-study-badge">Lead Gen • South Africa</div>
                                <h3 class="case-study-title">Quote Rocket ZA</h3>
                                <p class="case-study-tagline">12 Verticals. 5 Days. $100.</p>

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

                                <a href="https://quoterocket.co.za" class="case-study-link" target="_blank">
                                    quoterocket.co.za
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. GOQUOTEROCKET US -->
                <div class="case-study-card">
                    <div class="row g-0 case-study-row">
                        <div class="col-lg-5">
                            <div class="case-study-screenshot">
                                <div class="screenshot-placeholder">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    <span>Screenshot</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="case-study-content">
                                <div class="case-study-badge">Lead Gen • United States</div>
                                <h3 class="case-study-title">GoQuoteRocket US</h3>
                                <p class="case-study-tagline">Config-Driven. Infinite Verticals. 17 Days.</p>

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

                                <a href="https://goquoterocket.com" class="case-study-link" target="_blank">
                                    goquoterocket.com
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. CUSTOMER REPORTS -->
                <div class="case-study-card">
                    <div class="row g-0 case-study-row">
                        <div class="col-lg-5">
                            <div class="case-study-screenshot">
                                <div class="screenshot-placeholder">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    <span>Screenshot</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="case-study-content">
                                <div class="case-study-badge">Content • Affiliate</div>
                                <h3 class="case-study-title">Customer Reports</h3>
                                <p class="case-study-tagline">13,000 Articles. 2 Days. Zero Dependencies.</p>

                                <div class="stats-grid">
                                    <div class="stat-box">
                                        <div class="stat-value">2</div>
                                        <div class="stat-label">Days</div>
                                    </div>
                                    <div class="stat-box">
                                        <div class="stat-value">$100</div>
                                        <div class="stat-label">Cost</div>
                                    </div>
                                    <div class="stat-box">
                                        <div class="stat-value">5.9K</div>
                                        <div class="stat-label">Lines</div>
                                    </div>
                                </div>

                                <div class="traditional-block">
                                    <div class="traditional-label">Traditional Estimate</div>
                                    <div class="traditional-value">$15,000 – $25,000</div>
                                    <div class="traditional-timeline">6 weeks with dev team</div>
                                </div>

                                <div class="tech-pills">
                                    <span class="tech-pill">PHP MVC</span>
                                    <span class="tech-pill">Zero Dependencies</span>
                                    <span class="tech-pill">CI/CD</span>
                                </div>

                                <ul class="features-list">
                                    <li>13,000+ articles migrated from WordPress</li>
                                    <li>Product reviews with ratings, pros/cons, affiliate CTAs</li>
                                    <li>148 reviews, 100+ listicles, 14 categories</li>
                                    <li>SEO-optimized URL structure with 301 redirects</li>
                                </ul>

                                <a href="https://customer-reports.org" class="case-study-link" target="_blank">
                                    customer-reports.org
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. VIDEOS FROM SANTA -->
                <div class="case-study-card">
                    <div class="row g-0 case-study-row">
                        <div class="col-lg-5">
                            <div class="case-study-screenshot">
                                <div class="screenshot-placeholder">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    <span>Screenshot</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="case-study-content">
                                <div class="case-study-badge">AI Video • DTC</div>
                                <h3 class="case-study-title">Videos From Santa</h3>
                                <p class="case-study-tagline">AI Video Platform. 32 Days. $1M/30 Day Potential.</p>

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

                                <a href="https://videosfromsanta.com" class="case-study-link" target="_blank">
                                    videosfromsanta.com
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. HOA ATTORNEY GUIDE -->
                <div class="case-study-card">
                    <div class="row g-0 case-study-row">
                        <div class="col-lg-5">
                            <div class="case-study-screenshot">
                                <div class="screenshot-placeholder">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    <span>Screenshot</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="case-study-content">
                                <div class="case-study-badge">Legal • Lead Gen</div>
                                <h3 class="case-study-title">HOA Attorney Guide</h3>
                                <p class="case-study-tagline">Legal Lead Gen. 10 Days. Zero Dependencies.</p>

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

                                <a href="https://hoa-attorneys.com" class="case-study-link" target="_blank">
                                    hoa-attorneys.com
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Ecosystem Section -->
    <section class="ecosystem-section">
        <div class="container-xl">

            <div class="ecosystem-header">
                <h2 class="ecosystem-title">The Machine</h2>
                <p class="ecosystem-subtitle">Every property connects through Portal. Every lead flows through. Every customer tracked. Every dollar attributed.</p>
            </div>

            <!-- Diagram -->
            <div class="ecosystem-diagram">
                <div class="hub-box">
                    <div class="hub-title">STEALTH PORTAL</div>
                    <div class="hub-desc">CDP + Affiliate Network + Lead Distribution + E-Commerce + Automation</div>
                </div>
                <div class="connector-line"></div>
                <div class="properties-grid">
                    <div class="property-box">
                        <div class="property-name">Quote Rocket ZA</div>
                        <div class="property-type">Insurance • ZA</div>
                    </div>
                    <div class="property-box">
                        <div class="property-name">GoQuoteRocket</div>
                        <div class="property-type">Insurance • US</div>
                    </div>
                    <div class="property-box">
                        <div class="property-name">Customer Reports</div>
                        <div class="property-type">Content • Affiliate</div>
                    </div>
                    <div class="property-box">
                        <div class="property-name">Videos From Santa</div>
                        <div class="property-type">AI Video • DTC</div>
                    </div>
                    <div class="property-box">
                        <div class="property-name">HOA Attorneys</div>
                        <div class="property-type">Legal • Lead Gen</div>
                    </div>
                </div>
            </div>

            <!-- Summary -->
            <div class="summary-grid">
                <div class="summary-box">
                    <div class="summary-value">10</div>
                    <div class="summary-label">Production Systems</div>
                </div>
                <div class="summary-box">
                    <div class="summary-value">596K+</div>
                    <div class="summary-label">Lines of Code</div>
                </div>
                <div class="summary-box">
                    <div class="summary-value">$938K</div>
                    <div class="summary-label">Revenue Through Systems</div>
                </div>
                <div class="summary-box">
                    <div class="summary-value">2</div>
                    <div class="summary-label">Continents Live</div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="tech-cta">
        <div class="container-xl">
            <h2 class="tech-cta-title">Want In?</h2>
            <p class="tech-cta-subtitle">The door is open.</p>

            <div class="cta-options">
                <div class="cta-option">
                    <div class="cta-option-title">Custom Builds</div>
                    <div class="cta-option-desc">We build your platform. Same AI-accelerated process. Days and weeks, not months and years.</div>
                </div>
                <div class="cta-option">
                    <div class="cta-option-title">White-Label</div>
                    <div class="cta-option-desc">License any property. Your brand, proven architecture.</div>
                </div>
                <div class="cta-option">
                    <div class="cta-option-title">Portal Access</div>
                    <div class="cta-option-desc">Come swing in the big leagues. Full infrastructure — your brand, our engine.</div>
                </div>
            </div>

            <div class="cta-buttons">
                <a href="https://portal.stealthlabz.com/register" class="btn-glow" target="_blank">
                    Sign Up for Portal
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="mailto:mike@stealthlabz.com" class="btn-outline">
                    Contact for Quote
                </a>
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
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
