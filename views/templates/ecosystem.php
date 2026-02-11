<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#d90158">
    <title><?= htmlspecialchars($page['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page['description']) ?>">
    <link rel="canonical" href="https://stealthlabz.com/ecosystem">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($page['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page['description']) ?>">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/ecosystem">
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/cdn/css/global.css">

    <link rel="stylesheet" href="/cdn/css/ecosystem.css">
</head>
<body>
    <div class="grid-bg"></div>

    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <!-- ════ HERO ════ -->
    <section class="eco-hero">
        <div class="container-xl">
            <div class="hero-badge">
                <span class="dot"></span>
                Live Systems
            </div>
            <h1>The <span class="highlight">Ecosystem</span></h1>
            <p class="eco-hero-sub">
                7 owned brands across insurance, legal, health, content, supplements, and Ai.
            </p>
            <div class="eco-hero-stats">
                <div>
                    <span class="eco-hero-stat-val">7</span>
                    <span class="eco-hero-stat-lbl">Brands</span>
                </div>
                <div>
                    <span class="eco-hero-stat-val">24</span>
                    <span class="eco-hero-stat-lbl">Verticals</span>
                </div>
                <div>
                    <span class="eco-hero-stat-val">3</span>
                    <span class="eco-hero-stat-lbl">Countries</span>
                </div>
                <div>
                    <span class="eco-hero-stat-val">2</span>
                    <span class="eco-hero-stat-lbl">Operators</span>
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
                            <div class="eco-url">portal.stealthlabz.com</div>
                        </div>
                        <div class="eco-viewport">
                            <img src="/cdn/images/brands/stealth-portal.png" alt="Stealth Portal" loading="lazy">
                        </div>
                    </div>
                    <div class="eco-content">
                        <div class="eco-badge">Performance Marketing CDP</div>
                        <h3 class="eco-title">Stealth Portal</h3>
                        <p class="eco-tagline">Customer data platform with identity resolution, lead enrichment, distribution, and real-time de-anonymization. The engine behind every brand we touch.</p>
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
                        <div class="eco-badge">Insurance</div>
                        <h3 class="eco-title">Quote Rocket</h3>
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
                        <div class="eco-badge">Insurance</div>
                        <h3 class="eco-title">Quote Rocket</h3>
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
                        <div class="eco-badge">Reviews</div>
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
                            <div class="eco-url">videosfromasanta.com</div>
                        </div>
                        <div class="eco-viewport">
                            <img src="/cdn/images/brands/videos-from-santa.png" alt="Videos From Santa" loading="lazy">
                        </div>
                    </div>
                    <div class="eco-content">
                        <div class="eco-badge">AI Video</div>
                        <h3 class="eco-title">Videos From Santa</h3>
                        <p class="eco-tagline">Personalized AI video messages from Santa, Mrs. Claus, and Elfie. Each video speaks your child's name, mentions their achievements, and feels completely real.</p>
                        <div class="eco-stats">
                            <div class="eco-stat"><div class="eco-stat-val">3</div><div class="eco-stat-lbl">Characters</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">90s</div><div class="eco-stat-lbl">Max Length</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">$29</div><div class="eco-stat-lbl">From</div></div>
                        </div>
                        <a href="https://videosfromasanta.com" class="eco-link" target="_blank">
                            videosfromasanta.com
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
                        <div class="eco-badge">Legal</div>
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
                        <div class="eco-badge">Health</div>
                        <h3 class="eco-title">Evergreen Brands</h3>
                        <p class="eco-tagline">Direct-to-consumer health and wellness supplements across the US and South African markets. 25+ products with subscription and one-time purchase options.</p>
                        <div class="eco-stats">
                            <div class="eco-stat"><div class="eco-stat-val">25+</div><div class="eco-stat-lbl">Products</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">14</div><div class="eco-stat-lbl">Funnels</div></div>
                            <div class="eco-stat"><div class="eco-stat-val">2</div><div class="eco-stat-lbl">Markets</div></div>
                        </div>
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
