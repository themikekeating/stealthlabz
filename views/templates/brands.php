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

    <!-- Landing Page Styles -->
    <link rel="stylesheet" href="/cdn/css/landing.css">
</head>
<body>
    <div class="grid-bg"></div>

    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <!-- Hero -->
    <section class="hero" style="padding: 7rem 0 2rem;">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="hero-title" style="margin-bottom: 1rem;">Our <span class="highlight">Brands</span></h1>
                <p class="hero-subtitle mx-auto" style="max-width: 580px; margin-bottom: 0;">
                    10 production systems across lead generation, content, DTC, and AI. All owned. All in production. All connected through Portal.
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="section-dark" style="padding-top: 0;">
        <div class="container-xl">
            <div class="portfolio-grid">
                <!-- Flagship: Stealth Portal -->
                <div class="portfolio-card flagship fade-up">
                    <div class="flagship-content">
                        <div>
                            <span class="portfolio-card-badge">Flagship</span>
                            <h3>Stealth Portal</h3>
                            <p>The operating system behind everything we build. CDP, affiliate network, lead distribution, e-commerce, and marketing automation — unified.</p>
                            <a href="https://portal.stealthlabz.com" class="portfolio-card-link" target="_blank">
                                portal.stealthlabz.com
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </a>
                        </div>
                        <div class="flagship-visual">
                            <div class="chart-header mb-3">
                                <span class="chart-title">Platform Capabilities</span>
                                <span class="chart-badge">9 Properties Connected</span>
                            </div>
                            <div class="flagship-chart">
                                <div class="flagship-bar"></div>
                                <div class="flagship-bar"></div>
                                <div class="flagship-bar"></div>
                                <div class="flagship-bar"></div>
                                <div class="flagship-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GoQuoteRocket US -->
                <div class="portfolio-card fade-up">
                    <div class="portfolio-card-image" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); height: 140px; border-radius: 8px 8px 0 0; display: flex; align-items: center; justify-content: center; margin: -1.5rem -1.5rem 1rem -1.5rem;">
                        <span style="color: #4a5568; font-size: 0.75rem;">Screenshot: 400×140</span>
                    </div>
                    <span class="portfolio-card-badge">Lead Gen • US</span>
                    <h3>GoQuoteRocket</h3>
                    <p>Insurance lead generation for the US market. Auto, life, medicare, credit cards.</p>
                    <a href="https://goquoterocket.com" class="portfolio-card-link" target="_blank">goquoterocket.com</a>
                </div>

                <!-- Quote Rocket ZA -->
                <div class="portfolio-card fade-up">
                    <div class="portfolio-card-image" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); height: 140px; border-radius: 8px 8px 0 0; display: flex; align-items: center; justify-content: center; margin: -1.5rem -1.5rem 1rem -1.5rem;">
                        <span style="color: #4a5568; font-size: 0.75rem;">Screenshot: 400×140</span>
                    </div>
                    <span class="portfolio-card-badge">Lead Gen • South Africa</span>
                    <h3>Quote Rocket ZA</h3>
                    <p>Full-market insurance lead gen for South Africa. 12 verticals live.</p>
                    <a href="https://quoterocket.co.za" class="portfolio-card-link" target="_blank">quoterocket.co.za</a>
                </div>

                <!-- Customer Reports -->
                <div class="portfolio-card fade-up">
                    <div class="portfolio-card-image" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); height: 140px; border-radius: 8px 8px 0 0; display: flex; align-items: center; justify-content: center; margin: -1.5rem -1.5rem 1rem -1.5rem;">
                        <span style="color: #4a5568; font-size: 0.75rem;">Screenshot: 400×140</span>
                    </div>
                    <span class="portfolio-card-badge">Content • Affiliate</span>
                    <h3>Customer Reports</h3>
                    <p>13K+ articles. Product reviews and comparison guides at scale.</p>
                    <a href="https://customer-reports.org" class="portfolio-card-link" target="_blank">customer-reports.org</a>
                </div>

                <!-- Go Customer Reports -->
                <div class="portfolio-card fade-up">
                    <div class="portfolio-card-image" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); height: 140px; border-radius: 8px 8px 0 0; display: flex; align-items: center; justify-content: center; margin: -1.5rem -1.5rem 1rem -1.5rem;">
                        <span style="color: #4a5568; font-size: 0.75rem;">Screenshot: 400×140</span>
                    </div>
                    <span class="portfolio-card-badge">Content • Affiliate</span>
                    <h3>Go Customer Reports</h3>
                    <p>Companion content site. Expanded affiliate coverage and SEO footprint.</p>
                    <a href="https://gocustomerreports.com" class="portfolio-card-link" target="_blank">gocustomerreports.com</a>
                </div>

                <!-- Videos From Santa -->
                <div class="portfolio-card fade-up">
                    <div class="portfolio-card-image" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); height: 140px; border-radius: 8px 8px 0 0; display: flex; align-items: center; justify-content: center; margin: -1.5rem -1.5rem 1rem -1.5rem;">
                        <span style="color: #4a5568; font-size: 0.75rem;">Screenshot: 400×140</span>
                    </div>
                    <span class="portfolio-card-badge">AI • DTC</span>
                    <h3>Videos From Santa</h3>
                    <p>AI-powered personalized video messages. Free funnel to paid packages.</p>
                    <a href="https://videosfromasanta.com" class="portfolio-card-link" target="_blank">videosfromasanta.com</a>
                </div>

                <!-- HOA Attorney Guide -->
                <div class="portfolio-card fade-up">
                    <div class="portfolio-card-image" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); height: 140px; border-radius: 8px 8px 0 0; display: flex; align-items: center; justify-content: center; margin: -1.5rem -1.5rem 1rem -1.5rem;">
                        <span style="color: #4a5568; font-size: 0.75rem;">Screenshot: 400×140</span>
                    </div>
                    <span class="portfolio-card-badge">Lead Gen • Legal</span>
                    <h3>HOA Attorney Guide</h3>
                    <p>Qualification funnel for HOA dispute leads. High-intent legal vertical.</p>
                    <a href="https://hoaattorneyguide.com" class="portfolio-card-link" target="_blank">hoaattorneyguide.com</a>
                </div>

                <!-- SageWise Finance -->
                <div class="portfolio-card fade-up">
                    <div class="portfolio-card-image" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); height: 140px; border-radius: 8px 8px 0 0; display: flex; align-items: center; justify-content: center; margin: -1.5rem -1.5rem 1rem -1.5rem;">
                        <span style="color: #4a5568; font-size: 0.75rem;">Screenshot: 400×140</span>
                    </div>
                    <span class="portfolio-card-badge">Content • Finance</span>
                    <h3>SageWise Finance</h3>
                    <p>Financial content and comparison platform. Personal finance guides.</p>
                    <a href="https://sagewisefinance.com" class="portfolio-card-link" target="_blank">sagewisefinance.com</a>
                </div>

                <!-- Evergreen Brands -->
                <div class="portfolio-card fade-up">
                    <div class="portfolio-card-image" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); height: 140px; border-radius: 8px 8px 0 0; display: flex; align-items: center; justify-content: center; margin: -1.5rem -1.5rem 1rem -1.5rem;">
                        <span style="color: #4a5568; font-size: 0.75rem;">Screenshot: 400×140</span>
                    </div>
                    <span class="portfolio-card-badge">DTC • Nutra</span>
                    <h3>Evergreen Brands</h3>
                    <p>14 funnels, 25+ SKUs across US and South Africa supplement markets.</p>
                    <a href="#" class="portfolio-card-link">Multiple Properties</a>
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
