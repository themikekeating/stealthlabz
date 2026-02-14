<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#e5025d">
    <title><?= htmlspecialchars($page['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page['description']) ?>">
    <link rel="canonical" href="https://stealthlabz.com/method">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($page['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page['description']) ?>">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/method">
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
</head>
<body>
    <div class="grid-bg"></div>

    <?php include ROOT_PATH . '/views/components/header.php'; ?>


    <!-- ════════════════════════════════════════
         HERO
         ════════════════════════════════════════ -->
    <section class="cem-hero">
        <div class="container-xl">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="dot"></span>
                    Execution Framework
                </div>
                <h1>The <span class="highlight">Compounding Execution</span> Method</h1>
                <p class="cem-hero-sub">
                    A framework for compounding execution in the AI era. How solo operators and micro teams produce output that used to require full departments.
                </p>
                <p class="cem-hero-tagline">
                    You begin small. The system scales you.
                </p>
                <a href="#framework" class="btn-glow">
                    See How It Works
                    <svg viewBox="0 0 16 16" fill="none" width="16" height="16"><path d="M8 3v10m0 0l-4-4m4 4l4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         01 — THE SHIFT (Compressed)
         ════════════════════════════════════════ -->
    <section class="cem-section section-alt" data-section>
        <div class="container-xl">
            <div class="cem-section-label">01 — The Shift</div>
            <h2>Five constraints dissolved. Frameworks haven't caught up.</h2>
            <p class="cem-section-desc">The frameworks designed for the old constraints — Scrum, Lean Startup, EOS — were built for a world that no longer exists.</p>

            <div class="shift-list">
                <div class="shift-item">
                    <div class="shift-num">01</div>
                    <div class="shift-text">Context switching cost → <strong>near zero.</strong> AI holds context across threads.</div>
                </div>
                <div class="shift-item">
                    <div class="shift-num">02</div>
                    <div class="shift-text">Expertise bottleneck → <strong>dissolved.</strong> Cross-domain knowledge on demand.</div>
                </div>
                <div class="shift-item">
                    <div class="shift-num">03</div>
                    <div class="shift-text">Learning and building → <strong>merged.</strong> Ship while you learn. Output and capability grow together.</div>
                </div>
                <div class="shift-item">
                    <div class="shift-num">04</div>
                    <div class="shift-text">Build cost → <strong>collapsed.</strong> Tasks requiring days now take hours. The artifact is the experiment.</div>
                </div>
                <div class="shift-item">
                    <div class="shift-num">05</div>
                    <div class="shift-text">Coordination overhead → <strong>eliminated.</strong> Solo operators cover team-scale output.</div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         02 — THE FRAMEWORK
         ════════════════════════════════════════ -->
    <section class="cem-section" id="framework" data-section>
        <div class="container-xl">
            <div class="cem-section-label">02 — The Framework</div>
            <h2>What CEM Is</h2>
            <p class="cem-section-desc">A framework for high-output execution. Solo operators and micro teams use AI as an enabling environment to produce compounding forward progress through accumulated assets, accelerating cycles, and binary decision-making against a defined target.</p>

            <!-- CORE RULES -->
            <div class="core-rules">
                <div class="core-rule">
                    <h4>No Backlog</h4>
                    <p>Advance toward Target or stash to Foundation. No queue.</p>
                </div>
                <div class="core-rule">
                    <h4>No Long Planning</h4>
                    <p>Planning beyond 14 days is waste. Structure emerges from execution.</p>
                </div>
                <div class="core-rule">
                    <h4>The Drift Tax</h4>
                    <p>12–15% of AI output needs correction. The system absorbs this.</p>
                </div>
            </div>

            <!-- ABOVE THE SYSTEM -->
            <div class="framework-above">
                <h3 class="framework-group-title">Above the System</h3>
                <div class="framework-cards-3">
                    <div class="fw-card">
                        <div class="fw-card-label">North Star</div>
                        <h4>Vision</h4>
                        <p>The future state. Why you're doing this. Aspirational and directional. Constant.</p>
                    </div>
                    <div class="fw-card">
                        <div class="fw-card-label">Operational Filter</div>
                        <h4>Target</h4>
                        <p>The current build. What you're making right now. Concrete, measurable, time-bound.</p>
                    </div>
                    <div class="fw-card">
                        <div class="fw-card-label">Compounding Engine</div>
                        <h4>The 80% Premise</h4>
                        <p>CEM targets 80% of the market's benchmark. The system closes the gap. Each cycle feeds the system.</p>
                    </div>
                </div>
            </div>

            <!-- SYSTEM FLOW -->
            <div class="system-flow">
                <div class="system-flow-label">System Flow</div>
                <div class="system-flow-chain">
                    <span class="flow-node">Vision</span>
                    <span class="flow-arrow">→</span>
                    <span class="flow-node">Target</span>
                    <span class="flow-arrow">→</span>
                    <span class="flow-node">Foundation</span>
                    <span class="flow-arrow">→</span>
                    <span class="flow-node">Pendulum</span>
                    <span class="flow-arrow">→</span>
                    <span class="flow-node">Nested Cycles</span>
                    <span class="flow-arrow">→</span>
                    <span class="flow-node">Output</span>
                    <span class="flow-arrow">→</span>
                    <span class="flow-node">Foundation</span>
                </div>
                <div class="system-flow-note">Every mechanism feeds the system. The system accelerates everything. That's the compounding.</div>
            </div>

            <!-- THE 11 MECHANISMS — Compact Map -->
            <div class="mechanisms-compact">
                <h3 class="framework-group-title">The 11 Mechanisms</h3>
                <p class="mechanisms-compact-intro">CEM requires two things: AI as an enabling environment and an operator with deep understanding and sustained focus. The 11 mechanisms below are the system's moving parts.</p>

                <div class="mech-map">
                    <div class="mech-map-group">
                        <div class="mech-map-group-label">Core Engine</div>
                        <div class="mech-map-items">
                            <button class="mech-map-pill" data-desc="Active fuel. Templates, patterns, stored work. Every cycle draws from it and feeds back into it.">
                                <span class="mech-map-num">01</span> Foundation
                            </button>
                            <button class="mech-map-pill" data-desc="Binary filter. Does this advance Target? Yes = advance. No = stash retrievably. No limbo.">
                                <span class="mech-map-num">02</span> The Pendulum
                            </button>
                            <button class="mech-map-pill" data-desc="Self-similar timeboxed cycles: Micro (hours), Sprint (1–2 days), Build (1–7 days), Integration (1–14 days).">
                                <span class="mech-map-num">03</span> Nested Cycles
                            </button>
                            <button class="mech-map-pill" data-desc="Background maintenance running parallel. Keeps Foundation retrievable.">
                                <span class="mech-map-num">04</span> Sweeps
                            </button>
                        </div>
                    </div>
                    <div class="mech-map-group">
                        <div class="mech-map-group-label">Growth</div>
                        <div class="mech-map-items">
                            <button class="mech-map-pill" data-desc="Step back every 2 weeks (projects) and 30–45 days (ecosystem). Clear Foundation, clear mind.">
                                <span class="mech-map-num">05</span> Regroup
                            </button>
                            <button class="mech-map-pill" data-desc="Macro awareness of system limits. Speed is capability; judgment is knowing when not to use it.">
                                <span class="mech-map-num">06</span> The Governor
                            </button>
                        </div>
                    </div>
                    <div class="mech-map-group">
                        <div class="mech-map-group-label">Problem-Solving</div>
                        <div class="mech-map-items">
                            <button class="mech-map-pill" data-desc="Tactical loop: Reground → State → Mirror → Align → Diagnose → Path → Repeat. 15–30 min max.">
                                <span class="mech-map-num">07</span> Micro-Triage
                            </button>
                        </div>
                    </div>
                    <div class="mech-map-group">
                        <div class="mech-map-group-label">Execution Architecture</div>
                        <div class="mech-map-items">
                            <button class="mech-map-pill" data-desc="Physical screen layout for parallel execution. Left (research), Middle (primary), Right (AI).">
                                <span class="mech-map-num">08</span> Multi-Thread
                            </button>
                            <button class="mech-map-pill" data-desc="Connect information, tasks, and projects across the ecosystem. Build adds; Bridge multiplies.">
                                <span class="mech-map-num">09</span> Bridge
                            </button>
                            <button class="mech-map-pill" data-desc="Instant structure from Foundation. Every project builds on what already exists. Disposable if it fails.">
                                <span class="mech-map-num">10</span> Scaffold
                            </button>
                            <button class="mech-map-pill" data-desc="Controlled explosion when stuck. Internalize → Explode → Scatter. Pendulum sorts the output.">
                                <span class="mech-map-num">11</span> Burst
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tooltip for mechanism descriptions (JS-powered) -->
                <div class="mech-map-tooltip" id="mechTooltip"></div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         03 — PROOF + CTA
         ════════════════════════════════════════ -->
    <section class="cem-section section-alt" data-section>
        <div class="container-xl">
            <div class="cem-section-label">03 — Proof</div>
            <h2>Validated in Production</h2>
            <p class="cem-section-desc">Same platform. Same database. One built by an external dev shop over 4 months. The other built by a solo operator using CEM.</p>

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
                        <div class="comp-cell comp-old">$65,054</div>
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

            <p class="proof-footnote">All metrics git-verified across 10 repositories. Forensically audited from 17 source documents.</p>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         CTA
         ════════════════════════════════════════ -->
    <section class="cem-cta">
        <div class="container-xl">
            <h2>You begin small.<br>The system <span class="cta-highlight">scales you.</span></h2>
            <p>The Compounding Execution Method compounds output, capability, and returns over time.</p>
            <div class="cem-cta-actions">
                <a href="<?= siteUrl('method/origin') ?>" class="cem-cta-btn cem-cta-btn-primary">Read the Full Story <svg viewBox="0 0 16 16" fill="none" width="16" height="16"><path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
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

        // Mechanism pill tooltips
        const pills = document.querySelectorAll('.mech-map-pill');
        const tooltip = document.getElementById('mechTooltip');
        let activeTooltip = null;

        pills.forEach(pill => {
            pill.addEventListener('click', function(e) {
                e.stopPropagation();
                const desc = this.getAttribute('data-desc');
                const name = this.textContent.trim().replace(/^\d+\s*/, '');

                if (activeTooltip === this) {
                    tooltip.classList.remove('visible');
                    activeTooltip = null;
                    this.classList.remove('active');
                    return;
                }

                // Remove active from all pills
                pills.forEach(p => p.classList.remove('active'));
                this.classList.add('active');

                tooltip.innerHTML = '<strong>' + name + '</strong> — ' + desc;
                tooltip.classList.add('visible');
                activeTooltip = this;

                // Position tooltip below the pill
                const rect = this.getBoundingClientRect();
                const containerRect = this.closest('.mechanisms-compact').getBoundingClientRect();
                tooltip.style.top = (rect.bottom - containerRect.top + 8) + 'px';
            });
        });

        document.addEventListener('click', function() {
            tooltip.classList.remove('visible');
            pills.forEach(p => p.classList.remove('active'));
            activeTooltip = null;
        });
    </script>
</body>
</html>