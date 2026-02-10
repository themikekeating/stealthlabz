<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#d90158">
    <title>The Ecosystem | Stealth Labz</title>
    <meta name="description" content="7 brands across lead generation, consumer products, content, and AI — all owned, all in production, all connected through one platform.">
    <link rel="canonical" href="https://stealthlabz.com/ecosystem">

    <meta property="og:title" content="The Ecosystem | Stealth Labz">
    <meta property="og:description" content="7 brands across lead generation, consumer products, content, and AI.">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/ecosystem">
    <meta property="og:type" content="website">

    <link rel="icon" type="image/x-icon" href="/cdn/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/cdn/css/global.css">

    <style>
        /* ========================================
           Ecosystem Page
           ======================================== */

        .eco-hero {
            padding: 10rem 0 4rem;
            text-align: center;
            position: relative;
        }
        .eco-hero::before {
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
        .eco-hero h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 700;
            letter-spacing: -0.03em;
            margin-bottom: 1rem;
        }
        .eco-hero h1 .highlight {
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .eco-hero-sub {
            font-size: 1.15rem;
            color: var(--text-secondary);
            max-width: 580px;
            margin: 0 auto;
            line-height: 1.7;
        }
        .eco-hero-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 2.5rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
        }
        .eco-hero-stat-val {
            display: block;
            font-family: var(--font-mono);
            font-size: 2rem;
            font-weight: 700;
            color: var(--accent-pink);
            line-height: 1.2;
        }
        .eco-hero-stat-lbl {
            display: block;
            font-size: 0.7rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-top: 0.25rem;
        }

        /* --- Grid --- */
        .eco-section {
            padding: 2rem 0 6rem;
        }
        .eco-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        /* --- Card --- */
        .eco-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        .eco-card:hover {
            border-color: var(--accent-pink-border-strong);
            box-shadow: var(--shadow-card-hover);
            transform: translateY(-5px);
        }

        /* Browser mockup */
        .eco-screenshot {
            position: relative;
            overflow: hidden;
            background: var(--bg-browser-chrome);
        }
        .eco-titlebar {
            display: flex;
            align-items: center;
            padding: 10px 14px;
            background: var(--bg-browser-chrome);
            border-bottom: 1px solid var(--border-browser);
            gap: 10px;
        }
        .eco-dots {
            display: flex;
            gap: 5px;
            flex-shrink: 0;
        }
        .eco-dots span {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            display: block;
        }
        .eco-dots span:nth-child(1) { background: #FF5F57; }
        .eco-dots span:nth-child(2) { background: #FFBD2E; }
        .eco-dots span:nth-child(3) { background: #28C840; }
        .eco-url {
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
        .eco-viewport {
            position: relative;
            overflow: hidden;
            height: 200px;
        }
        .eco-viewport img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            display: block;
        }
        .eco-viewport::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40px;
            background: linear-gradient(to top, var(--bg-browser-chrome) 0%, transparent 100%);
            pointer-events: none;
        }

        /* Content */
        .eco-content {
            padding: 1.5rem 2rem 2rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        .eco-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--accent-pink-bg-medium);
            color: var(--accent-pink);
            padding: 0.3rem 0.75rem;
            border-radius: 100px;
            font-size: 0.65rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            width: fit-content;
            margin-bottom: 0.75rem;
        }
        .eco-title {
            font-size: 1.35rem;
            font-weight: 700;
            letter-spacing: -0.03em;
            margin-bottom: 0.35rem;
        }
        .eco-tagline {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin-bottom: 1.25rem;
            line-height: 1.6;
        }

        /* Stats row */
        .eco-stats {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1.25rem;
        }
        .eco-stat {
            flex: 1;
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 0.6rem 0.75rem;
            text-align: center;
        }
        .eco-stat-val {
            font-family: var(--font-mono);
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-primary);
            line-height: 1.2;
        }
        .eco-stat-lbl {
            font-size: 0.6rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-top: 0.1rem;
        }

        /* Link */
        .eco-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--accent-pink);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.85rem;
            transition: gap 0.2s ease;
            margin-top: auto;
        }
        .eco-link:hover {
            color: var(--accent-pink);
            gap: 0.75rem;
        }

        /* --- Responsive --- */
        @media (max-width: 991px) {
            .eco-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 768px) {
            .eco-hero { padding: 8rem 0 3rem; }
            .eco-hero h1 { font-size: 2.25rem; }
            .eco-hero-stats { gap: 1.5rem; flex-wrap: wrap; }
            .eco-hero-stat-val { font-size: 1.5rem; }
            .eco-section { padding: 1.5rem 0 4rem; }
        }
        @media (max-width: 576px) {
            .eco-stats { flex-direction: column; }
        }
    </style>
</head>
<body>
    <div class="grid-bg"></div>

    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <!-- ════ HERO ════ -->
    <section class="eco-hero">
        <div class="container-xl">
            <div class="hero-badge">
                <span class="dot"></span>
                Live Production Systems
            </div>
            <h1>The <span class="highlight">Ecosystem</span></h1>
            <p class="eco-hero-sub">
                7 owned brands across insurance, legal, health, content, and AI — all in production, all connected through one platform.
            </p>
            <div class="eco-hero-stats">
                <div>
                    <span class="eco-hero-stat-val">7</span>
                    <span class="eco-hero-stat-lbl">Brands</span>
                </div>
                <div>
                    <span class="eco-hero-stat-val">4</span>
                    <span class="eco-hero-stat-lbl">Verticals</span>
                </div>
                <div>
                    <span class="eco-hero-stat-val">3</span>
                    <span class="eco-hero-stat-lbl">Countries</span>
                </div>
                <div>
                    <span class="eco-hero-stat-val">$938K</span>
                    <span class="eco-hero-stat-lbl">Revenue</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ GRID ════ -->
    <section class="eco-section">
        <div class="container-xl">
            <div class="eco-grid">

                <!-- 1. STEALTH PORTAL -->
                <div class="eco-card fade-up">
                    <div class="eco-screenshot">
                        <div class="eco-titlebar">
                            <div class="eco-dots"><span></span><span></span><span></span></div>
                            <div class="eco-url">portalstealth.com</div>
                        </div>
                        <div class="eco-viewport">
                            <img src="/cdn/images/brands/stealth-portal.png" alt="Stealth Portal" loading="lazy">
                        </div>
                    </div>
                    <div class="eco-content">
                        <div class="eco-badge">Platform • The Hub</div>
                        <h3 class="eco-title">Stealth Portal</h3>
                        <p class="eco-tagline">Customer data platform with identity resolution, lead enrichment, multi-buyer distribution, and real-time analytics. The engine behind every brand in the ecosystem.</p>
                        <div class="eco-stats">
                            <div class="eco-stat"><div class="eco-stat-val">12</div><div class="eco-stat-lbl">Source Types</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">5</div><div class="eco-stat-lbl">Dashboards</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">8+</div><div class="eco-stat-lbl">Integrations</div></div>
                        </div>
                        <a href="https://portal.stealthlabz.com" class="eco-link" target="_blank">
                            portal.stealthlabz.com
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- 2. QUOTE ROCKET ZA -->
                <div class="eco-card fade-up">
                    <div class="eco-screenshot">
                        <div class="eco-titlebar">
                            <div class="eco-dots"><span></span><span></span><span></span></div>
                            <div class="eco-url">quoterocket.co.za</div>
                        </div>
                        <div class="eco-viewport">
                            <img src="/cdn/images/brands/quote-rocket-sa.png" alt="Quote Rocket South Africa" loading="lazy">
                        </div>
                    </div>
                    <div class="eco-content">
                        <div class="eco-badge">Insurance • South Africa</div>
                        <h3 class="eco-title">Quote Rocket ZA</h3>
                        <p class="eco-tagline">Compare insurance quotes across 12 verticals — car, life, medical, funeral, pet, business, and more. South Africa's broadest insurance comparison platform.</p>
                        <div class="eco-stats">
                            <div class="eco-stat"><div class="eco-stat-val">12</div><div class="eco-stat-lbl">Verticals</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">10</div><div class="eco-stat-lbl">Guides</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">ZA</div><div class="eco-stat-lbl">Market</div></div>
                        </div>
                        <a href="https://quoterocket.co.za" class="eco-link" target="_blank">
                            quoterocket.co.za
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- 3. GOQUOTEROCKET US -->
                <div class="eco-card fade-up">
                    <div class="eco-screenshot">
                        <div class="eco-titlebar">
                            <div class="eco-dots"><span></span><span></span><span></span></div>
                            <div class="eco-url">goquoterocket.com</div>
                        </div>
                        <div class="eco-viewport">
                            <img src="/cdn/images/brands/quote-rocket-usa.png" alt="GoQuoteRocket US" loading="lazy">
                        </div>
                    </div>
                    <div class="eco-content">
                        <div class="eco-badge">Insurance • United States</div>
                        <h3 class="eco-title">GoQuoteRocket US</h3>
                        <p class="eco-tagline">Fast insurance quotes for American consumers. Auto, life, medicare, credit cards — step-by-step qualification with eligibility-based carrier matching.</p>
                        <div class="eco-stats">
                            <div class="eco-stat"><div class="eco-stat-val">4</div><div class="eco-stat-lbl">Funnels</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">11</div><div class="eco-stat-lbl">SEO Pages</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">US</div><div class="eco-stat-lbl">Market</div></div>
                        </div>
                        <a href="https://goquoterocket.com" class="eco-link" target="_blank">
                            goquoterocket.com
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- 4. CUSTOMER REPORTS -->
                <div class="eco-card fade-up">
                    <div class="eco-screenshot">
                        <div class="eco-titlebar">
                            <div class="eco-dots"><span></span><span></span><span></span></div>
                            <div class="eco-url">customer-reports.org</div>
                        </div>
                        <div class="eco-viewport">
                            <img src="/cdn/images/brands/customer-reports.png" alt="Customer Reports" loading="lazy">
                        </div>
                    </div>
                    <div class="eco-content">
                        <div class="eco-badge">Reviews • Affiliate</div>
                        <h3 class="eco-title">Customer Reports</h3>
                        <p class="eco-tagline">Independent product reviews, comparison guides, and buying advice across 14 categories. 13,000+ articles with expert ratings, pros/cons, and price tracking.</p>
                        <div class="eco-stats">
                            <div class="eco-stat"><div class="eco-stat-val">13K+</div><div class="eco-stat-lbl">Articles</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">148</div><div class="eco-stat-lbl">Reviews</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">14</div><div class="eco-stat-lbl">Categories</div></div>
                        </div>
                        <a href="https://customer-reports.org" class="eco-link" target="_blank">
                            customer-reports.org
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- 5. VIDEOS FROM SANTA -->
                <div class="eco-card fade-up">
                    <div class="eco-screenshot">
                        <div class="eco-titlebar">
                            <div class="eco-dots"><span></span><span></span><span></span></div>
                            <div class="eco-url">videosfromsanta.com</div>
                        </div>
                        <div class="eco-viewport">
                            <img src="/cdn/images/brands/videos-from-santa.png" alt="Videos From Santa" loading="lazy">
                        </div>
                    </div>
                    <div class="eco-content">
                        <div class="eco-badge">AI Video • DTC</div>
                        <h3 class="eco-title">Videos From Santa</h3>
                        <p class="eco-tagline">Personalized AI video messages from Santa, Mrs. Claus, and Elfie. Each video speaks your child's name, mentions their achievements, and feels completely real.</p>
                        <div class="eco-stats">
                            <div class="eco-stat"><div class="eco-stat-val">3</div><div class="eco-stat-lbl">Characters</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">90s</div><div class="eco-stat-lbl">Max Length</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">$29</div><div class="eco-stat-lbl">From</div></div>
                        </div>
                        <a href="https://videosfromsanta.com" class="eco-link" target="_blank">
                            videosfromsanta.com
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- 6. HOA ATTORNEY GUIDE -->
                <div class="eco-card fade-up">
                    <div class="eco-screenshot">
                        <div class="eco-titlebar">
                            <div class="eco-dots"><span></span><span></span><span></span></div>
                            <div class="eco-url">hoaattorneyguide.com</div>
                        </div>
                        <div class="eco-viewport">
                            <img src="/cdn/images/brands/hoa-attorney.png" alt="HOA Attorney Guide" loading="lazy">
                        </div>
                    </div>
                    <div class="eco-content">
                        <div class="eco-badge">Legal • Lead Gen</div>
                        <h3 class="eco-title">HOA Attorney Guide</h3>
                        <p class="eco-tagline">Connect with HOA attorneys who specialize in fines, fees, property disputes, and board conflicts. Qualified matching based on location, issue type, and urgency.</p>
                        <div class="eco-stats">
                            <div class="eco-stat"><div class="eco-stat-val">6</div><div class="eco-stat-lbl">Step Qualifier</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">HOA</div><div class="eco-stat-lbl">Specialty</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">US</div><div class="eco-stat-lbl">Market</div></div>
                        </div>
                        <a href="https://hoaattorneyguide.com" class="eco-link" target="_blank">
                            hoaattorneyguide.com
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- 7. EVERGREEN BRANDS -->
                <div class="eco-card fade-up">
                    <div class="eco-screenshot">
                        <div class="eco-titlebar">
                            <div class="eco-dots"><span></span><span></span><span></span></div>
                            <div class="eco-url">evergreenevolutions.com</div>
                        </div>
                        <div class="eco-viewport">
                            <img src="/cdn/images/brands/evergreen.png" alt="Evergreen Evolutions" loading="lazy">
                        </div>
                    </div>
                    <div class="eco-content">
                        <div class="eco-badge">Health • DTC</div>
                        <h3 class="eco-title">Evergreen Brands</h3>
                        <p class="eco-tagline">Direct-to-consumer health and wellness supplements across the US and South African markets. 25+ products with subscription and one-time purchase options.</p>
                        <div class="eco-stats">
                            <div class="eco-stat"><div class="eco-stat-val">25+</div><div class="eco-stat-lbl">Products</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">14</div><div class="eco-stat-lbl">Funnels</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">2</div><div class="eco-stat-lbl">Markets</div></div>
                        </div>
                        <span class="eco-link" style="cursor:default;">Multiple Properties</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include ROOT_PATH . '/views/components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const fadeEls = document.querySelectorAll('.fade-up');
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        fadeEls.forEach(el => obs.observe(el));
    </script>
</body>
</html>
