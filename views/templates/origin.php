<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#d90158">
    <title><?= htmlspecialchars($page['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page['description']) ?>">
    <link rel="canonical" href="https://stealthlabz.com/method/origin">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($page['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page['description']) ?>">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/method/origin">
    <meta property="og:type" content="article">
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
    <link rel="stylesheet" href="/cdn/css/cem.css">
    <link rel="stylesheet" href="/cdn/css/cem-origin.css">
</head>
<body>
    <div class="grid-bg"></div>

    <?php include ROOT_PATH . '/views/components/header.php'; ?>


    <!-- ════════════════════════════════════════
         HERO (Narrative — Light)
         ════════════════════════════════════════ -->
    <section class="origin-hero">
        <div class="container-xl">
            <div class="origin-hero-inner">
                <nav class="origin-breadcrumb">
                    <a href="<?= siteUrl('method') ?>">Method</a>
                    <svg viewBox="0 0 16 16" fill="none" width="12" height="12"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span>Origin Story</span>
                </nav>
                <h1>Built through execution.<br>Named in hindsight.</h1>
                <p class="origin-hero-sub">
                    Extracted from 18 years of building systems that had to work — across industries, continents, and real constraints.
                </p>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         01 — THE TIMELINE
         ════════════════════════════════════════ -->
    <section class="cem-section" data-section>
        <div class="container-xl">
            <div class="origin-reading-col">
                <div class="cem-section-label">01 — The Timeline</div>

                <div class="origin-timeline">

                    <!-- Phase 0 -->
                    <div class="origin-phase">
                        <div class="origin-phase-marker">
                            <div class="origin-phase-dot"></div>
                            <div class="origin-phase-line"></div>
                        </div>
                        <div class="origin-phase-content">
                            <div class="origin-phase-date">2007 – 2017</div>
                            <h3>The Systems Builder</h3>
                            <p>Founded, scaled to 50 people, acquired. One operating principle: systematize everything, then scale. Every engagement produced reusable assets. The pattern was there — unnamed.</p>
                            <div class="origin-evidence">
                                <span>70+ projects</span>
                                <span>Acquired 2017</span>
                                <span>11-50 employees</span>
                            </div>
                        </div>
                    </div>

                    <!-- Phase 1 -->
                    <div class="origin-phase">
                        <div class="origin-phase-marker">
                            <div class="origin-phase-dot"></div>
                            <div class="origin-phase-line"></div>
                        </div>
                        <div class="origin-phase-content">
                            <div class="origin-phase-date">2017 – 2024</div>
                            <h3>Funnel Architecture & Operations</h3>
                            <p>Direct response infrastructure across two countries. Every new brand launched faster because the infrastructure from the last one carried forward. Foundation before it was called Foundation.</p>
                            <div class="origin-evidence">
                                <span>16 domains</span>
                                <span>63 funnels</span>
                                <span>6+ brands</span>
                                <span>2 countries</span>
                            </div>
                        </div>
                    </div>

                    <!-- Phase 2 -->
                    <div class="origin-phase">
                        <div class="origin-phase-marker">
                            <div class="origin-phase-dot"></div>
                            <div class="origin-phase-line"></div>
                        </div>
                        <div class="origin-phase-content">
                            <div class="origin-phase-date">Jan 2024 – Sep 2025</div>
                            <h3>E-Commerce & Lead Gen at Scale</h3>
                            <p>Full operations across two continents. An external dev shop was engaged: $82,521 over 22 months, producing 22 database tables. That became the baseline.</p>
                            <div class="origin-evidence">
                                <span>71K+ transactions</span>
                                <span>11 verticals</span>
                                <span>$82K dev shop spend</span>
                            </div>
                        </div>
                    </div>

                    <!-- Phase 3 — The Build (Highlighted) -->
                    <div class="origin-phase origin-phase-highlight">
                        <div class="origin-phase-marker">
                            <div class="origin-phase-dot dot-pink"></div>
                            <div class="origin-phase-line"></div>
                        </div>
                        <div class="origin-phase-content">
                            <div class="origin-phase-date">Oct 2025 – Feb 2026</div>
                            <h3>The Build Period</h3>
                            <p>AI dissolved the constraints that had required teams. An operator with zero software engineering experience — who couldn't use git in September 2025 — shipped 10 production systems, 596K lines of code, and 2,561 commits in 119 days.</p>
                            <p>October: 70% external, 30% operator. January: 93% operator, 7% external. New projects at 100% solo. The dev shop's 22 tables in 4 months became 135 tables in 33 days. Velocity: 4.6 → 61.5 commits/day. Rework dropped 40%.</p>
                            <div class="origin-evidence">
                                <span>596K LOC</span>
                                <span>2,561 commits</span>
                                <span>10 systems</span>
                                <span>4.6 → 61.5 commits/day</span>
                            </div>
                        </div>
                    </div>

                    <!-- Phase 4 — Formalization -->
                    <div class="origin-phase">
                        <div class="origin-phase-marker">
                            <div class="origin-phase-dot dot-pink"></div>
                        </div>
                        <div class="origin-phase-content">
                            <div class="origin-phase-date">Feb 2026</div>
                            <h3>Formalization</h3>
                            <p>Recognized retroactively through forensic data analysis — two-server audit, 17 source documents, git-verified metrics across all 10 repositories. CEM wasn't invented. It was discovered.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         02 — THE PROOF
         ════════════════════════════════════════ -->
    <section class="cem-section section-alt" data-section>
        <div class="container-xl">
            <div class="cem-section-label">02 — The Proof</div>
            <h2>Validated in Production</h2>
            <p class="cem-section-desc">Every metric git-verified across 10 repositories. Forensically audited from 17 source documents across two servers.</p>

            <!-- OPERATOR PROGRESSION -->
            <div class="origin-proof-block">
                <h3>The Operator Progression</h3>
                <p class="origin-proof-desc">From team-dependent to near-solo in 4 months. An operator with no prior software engineering experience.</p>
                <div class="progression-strip">
                    <div class="prog-month">
                        <div class="prog-bar" style="--fill: 30%;"></div>
                        <div class="prog-data">
                            <span class="prog-pct">~30%</span>
                            <span class="prog-label">Oct 2025</span>
                        </div>
                    </div>
                    <div class="prog-month">
                        <div class="prog-bar" style="--fill: 55%;"></div>
                        <div class="prog-data">
                            <span class="prog-pct">~55%</span>
                            <span class="prog-label">Nov 2025</span>
                        </div>
                    </div>
                    <div class="prog-month">
                        <div class="prog-bar" style="--fill: 78%;"></div>
                        <div class="prog-data">
                            <span class="prog-pct">~78%</span>
                            <span class="prog-label">Dec 2025</span>
                        </div>
                    </div>
                    <div class="prog-month">
                        <div class="prog-bar" style="--fill: 93%;"></div>
                        <div class="prog-data">
                            <span class="prog-pct">~93%</span>
                            <span class="prog-label">Jan 2026</span>
                        </div>
                    </div>
                </div>
                <div class="prog-context">Operator share of commits. Remaining percentage = external dev shop. New projects launched at 100% solo.</div>
            </div>

            <!-- KEY METRICS -->
            <div class="proof-metrics">
                <div class="proof-metric">
                    <div class="proof-metric-val">13.4×</div>
                    <div class="proof-metric-label">Velocity Multiplier</div>
                    <div class="proof-metric-context">4.6 → 61.5 commits/day</div>
                </div>
                <div class="proof-metric">
                    <div class="proof-metric-val">5 days</div>
                    <div class="proof-metric-label">Fastest MVP</div>
                    <div class="proof-metric-context">100% solo, functional product with market test</div>
                </div>
                <div class="proof-metric">
                    <div class="proof-metric-val">785×</div>
                    <div class="proof-metric-label">Cost Reduction</div>
                    <div class="proof-metric-context">$82K dev shop → ~$105/mo AI tools</div>
                </div>
                <div class="proof-metric">
                    <div class="proof-metric-val">40%</div>
                    <div class="proof-metric-label">Rework Reduction</div>
                    <div class="proof-metric-context">45.2% → 27.0% as patterns solidified</div>
                </div>
                <div class="proof-metric">
                    <div class="proof-metric-val">89</div>
                    <div class="proof-metric-label">Peak Day Commits</div>
                    <div class="proof-metric-context">January 1, 2026</div>
                </div>
                <div class="proof-metric">
                    <div class="proof-metric-val">3.7%</div>
                    <div class="proof-metric-label">Cleanest Build Rework</div>
                    <div class="proof-metric-context">Client builds with 4-operator team structure</div>
                </div>
            </div>

            <!-- COMPARISON TABLE -->
            <div class="proof-comparison">
                <div class="proof-comparison-header">
                    <h3>Dev Shop vs. Operator + AI</h3>
                    <p>Same platform. Same database. Different methodology.</p>
                </div>
                <div class="comparison-grid">
                    <div class="comp-row comp-header-row">
                        <div class="comp-cell"></div>
                        <div class="comp-cell comp-old">External Dev Shop</div>
                        <div class="comp-cell comp-new">Operator + AI (CEM)</div>
                    </div>
                    <div class="comp-row">
                        <div class="comp-cell comp-label">Tables Built</div>
                        <div class="comp-cell comp-old">22</div>
                        <div class="comp-cell comp-new">135</div>
                    </div>
                    <div class="comp-row">
                        <div class="comp-cell comp-label">Cost</div>
                        <div class="comp-cell comp-old">$82,521</div>
                        <div class="comp-cell comp-new">~$105</div>
                    </div>
                    <div class="comp-row">
                        <div class="comp-cell comp-label">Time</div>
                        <div class="comp-cell comp-old">~4 months</div>
                        <div class="comp-cell comp-new">33 active days</div>
                    </div>
                    <div class="comp-row">
                        <div class="comp-cell comp-label">Leads Processed</div>
                        <div class="comp-cell comp-old">15,303</div>
                        <div class="comp-cell comp-new">606,886</div>
                    </div>
                    <div class="comp-row">
                        <div class="comp-cell comp-label">Users</div>
                        <div class="comp-cell comp-old">0</div>
                        <div class="comp-cell comp-new">64</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         03 — WHEN THINGS GO SIDEWAYS
         ════════════════════════════════════════ -->
    <section class="cem-section" data-section>
        <div class="container-xl">
            <div class="cem-section-label">03 — Tactical Escalation</div>
            <h2>When Things Go Sideways</h2>
            <p class="cem-section-desc">Three levels. Light fix → Medium fix → Nuclear reset. Know which one you need before you reach for it.</p>

            <div class="tactics-strip">
                <div class="tactic-item tactic-level-1">
                    <div class="tactic-level">Level 1</div>
                    <h4>SPR</h4>
                    <p>Stop. Pause. Reset. First-line interrupt. Use early, use often.</p>
                </div>
                <div class="tactic-item tactic-level-2">
                    <div class="tactic-level">Level 2</div>
                    <h4>Stop and Recap</h4>
                    <p>Context drifting but repairable. Force AI to restate shared reality.</p>
                </div>
                <div class="tactic-item tactic-level-3">
                    <div class="tactic-level">Level 3</div>
                    <h4>Stop. Run It Back</h4>
                    <p>Context poisoned. Nuclear option. New thread, clean slate. Foundation catches everything.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         CTA — Book Tease + Routing
         ════════════════════════════════════════ -->
    <section class="cem-cta">
        <div class="container-xl">
            <h2>The methodology has been formalized.<br>The book is <span class="cta-highlight">coming.</span></h2>
            <p>The complete CEM methodology — every mechanism, every failure mode, every application — documented from 18 years of execution and validated across 10 production systems.</p>

            <!-- Email capture -->
            <div class="origin-notify">
                <form class="newsletter-form" id="originNotifyForm">
                    <div class="newsletter-input-group">
                        <input type="email" placeholder="Get notified when it ships" required>
                        <button type="submit" class="btn-glow">Notify Me</button>
                    </div>
                    <div class="newsletter-message" id="originNotifyMsg"></div>
                </form>
            </div>

            <div class="cem-cta-actions">
                <a href="<?= siteUrl('method') ?>" class="cem-cta-btn cem-cta-btn-secondary">&larr; Back to the Framework</a>
                <a href="<?= siteUrl('ecosystem') ?>" class="cem-cta-btn cem-cta-btn-secondary">See It In Production <svg viewBox="0 0 16 16" fill="none" width="16" height="16"><path d="M4 12l8-8m0 0H6m6 0v6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                <a href="<?= siteUrl('contact') ?>" class="cem-cta-btn cem-cta-btn-secondary">Get In Touch <svg viewBox="0 0 16 16" fill="none" width="16" height="16"><path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include ROOT_PATH . '/views/components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Section reveal
        const sections = document.querySelectorAll('.cem-section');
        const sectionObs = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        sections.forEach(el => sectionObs.observe(el));
    </script>
</body>
</html>