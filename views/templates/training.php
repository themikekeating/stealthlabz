<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#e5025d">
    <title><?= htmlspecialchars($page['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page['description']) ?>">
    <link rel="canonical" href="https://stealthlabz.com/training">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($page['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page['description']) ?>">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/training">
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

    <link rel="stylesheet" href="/cdn/css/training.css">
</head>
<body>
    <div class="grid-bg"></div>

    <!-- Header -->
    <?php include ROOT_PATH . '/views/components/header.php'; ?>


    <!-- ════════════════════════════════════════
         HERO
         ════════════════════════════════════════ -->
    <section class="t-hero">
        <div class="container-xl">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="hero-badge">
                        <span class="dot"></span>
                        Training &amp; Coaching
                    </div>
                    <h1>Learn the <span class="highlight">method.</span><br>Ship like we do.</h1>
                    <p class="t-hero-sub">
                        The same methodology behind 2,561 commits and 10 production systems — transferred to you or your team. Not theory. The actual operating system.
                    </p>

                    <div class="hero-proof">
                        <div class="hero-proof-item">
                            <div class="hero-proof-val">12</div>
                            <div class="hero-proof-lbl">Core Mechanisms</div>
                        </div>
                        <div class="hero-proof-item">
                            <div class="hero-proof-val">13.4&times;</div>
                            <div class="hero-proof-lbl">Compounding Multiplier</div>
                        </div>
                        <div class="hero-proof-item">
                            <div class="hero-proof-val">9.6%</div>
                            <div class="hero-proof-lbl">Defect Rate</div>
                        </div>
                        <div class="hero-proof-item">
                            <div class="hero-proof-val">10</div>
                            <div class="hero-proof-lbl">Systems Built</div>
                        </div>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="train-viz">
                        <!-- 13.4x callout -->
                        <div class="multiplier-callout">
                            <div class="mult-val">13.4<span>&times;</span></div>
                            <div class="mult-lbl">Compounding Multiplier</div>
                        </div>

                        <!-- Acceleration card -->
                        <div class="accel-card">
                            <div class="accel-val">12</div>
                            <div class="accel-lbl">Mechanisms Stacked</div>
                            <div class="accel-bar"><div class="accel-fill"></div></div>
                        </div>

                        <!-- Defect card -->
                        <div class="defect-card">
                            <div class="stat-val">9.6%</div>
                            <div class="stat-lbl">Defect Rate</div>
                        </div>

                        <!-- Compounding growth curve -->
                        <div class="train-chart">
                            <svg viewBox="0 0 500 300" preserveAspectRatio="none">
                                <defs>
                                    <linearGradient id="trainGradient" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="rgba(229,2,93,0.15)" />
                                        <stop offset="60%" stop-color="rgba(109,74,140,0.05)" />
                                        <stop offset="100%" stop-color="transparent" />
                                    </linearGradient>
                                    <linearGradient id="trainStroke" x1="0" y1="0" x2="1" y2="0">
                                        <stop offset="0%" stop-color="#6d4a8c" />
                                        <stop offset="60%" stop-color="#e5025d" />
                                        <stop offset="100%" stop-color="#e5025d" />
                                    </linearGradient>
                                </defs>

                                <!-- Grid -->
                                <line class="grid-line" x1="0" y1="60" x2="500" y2="60" />
                                <line class="grid-line" x1="0" y1="120" x2="500" y2="120" />
                                <line class="grid-line" x1="0" y1="180" x2="500" y2="180" />
                                <line class="grid-line" x1="0" y1="240" x2="500" y2="240" />
                                <line class="grid-line" x1="0" y1="300" x2="500" y2="300" />

                                <!-- Linear growth comparison -->
                                <path class="linear-path" d="M 0,280 L 500,100" />

                                <!-- Exponential compounding curve -->
                                <path class="compound-fill" d="M 0,280 C 40,278 80,274 120,268 C 160,260 200,250 240,232 C 280,210 320,175 360,130 C 400,80 440,30 500,5 L 500,300 L 0,300 Z" fill="url(#trainGradient)" />
                                <path class="compound-path" d="M 0,280 C 40,278 80,274 120,268 C 160,260 200,250 240,232 C 280,210 320,175 360,130 C 400,80 440,30 500,5" />

                                <!-- Mechanism markers (12 ticks) -->
                                <g class="mech-tick mech-tick-1"><line x1="42" y1="295" x2="42" y2="300"/><text x="42" y="310" text-anchor="middle">M1</text></g>
                                <g class="mech-tick mech-tick-2"><line x1="83" y1="295" x2="83" y2="300"/><text x="83" y="310" text-anchor="middle">M2</text></g>
                                <g class="mech-tick mech-tick-3"><line x1="125" y1="295" x2="125" y2="300"/><text x="125" y="310" text-anchor="middle">M3</text></g>
                                <g class="mech-tick mech-tick-4"><line x1="167" y1="295" x2="167" y2="300"/><text x="167" y="310" text-anchor="middle">M4</text></g>
                                <g class="mech-tick mech-tick-5"><line x1="208" y1="295" x2="208" y2="300"/><text x="208" y="310" text-anchor="middle">M5</text></g>
                                <g class="mech-tick mech-tick-6"><line x1="250" y1="295" x2="250" y2="300"/><text x="250" y="310" text-anchor="middle">M6</text></g>
                                <g class="mech-tick mech-tick-7"><line x1="292" y1="295" x2="292" y2="300"/><text x="292" y="310" text-anchor="middle">M7</text></g>
                                <g class="mech-tick mech-tick-8"><line x1="333" y1="295" x2="333" y2="300"/><text x="333" y="310" text-anchor="middle">M8</text></g>
                                <g class="mech-tick mech-tick-9"><line x1="375" y1="295" x2="375" y2="300"/><text x="375" y="310" text-anchor="middle">M9</text></g>
                                <g class="mech-tick mech-tick-10"><line x1="417" y1="293" x2="417" y2="300"/><text x="417" y="310" text-anchor="middle">M10</text></g>
                                <g class="mech-tick mech-tick-11"><line x1="458" y1="293" x2="458" y2="300"/><text x="458" y="310" text-anchor="middle">M11</text></g>
                                <g class="mech-tick mech-tick-12"><line x1="500" y1="293" x2="500" y2="300"/><text x="495" y="310" text-anchor="middle">M12</text></g>

                                <!-- Key inflection markers on curve -->
                                <g class="curve-marker curve-marker-1">
                                    <circle cx="120" cy="268" r="6" fill="rgba(109,74,140,0.15)" />
                                    <circle cx="120" cy="268" r="2.5" fill="#6d4a8c" />
                                </g>
                                <g class="curve-marker curve-marker-2">
                                    <circle cx="240" cy="232" r="6" fill="rgba(162,50,110,0.15)" />
                                    <circle cx="240" cy="232" r="2.5" fill="#a2326e" />
                                </g>
                                <g class="curve-marker curve-marker-3">
                                    <circle cx="360" cy="130" r="6" fill="rgba(229,2,93,0.15)" />
                                    <circle cx="360" cy="130" r="3" fill="#e5025d" />
                                </g>
                                <g class="curve-marker curve-marker-4">
                                    <circle cx="485" cy="10" r="8" fill="rgba(229,2,93,0.15)" />
                                    <circle cx="485" cy="10" r="3.5" fill="#e5025d" />
                                </g>

                                <!-- Linear label -->
                                <text class="axis-label-dim" x="505" y="98">LINEAR</text>
                            </svg>
                        </div>

                        <!-- Cycle velocity strip -->
                        <div class="cycle-strip">
                            <div class="cycle-block cycle-block-1"></div>
                            <div class="cycle-block cycle-block-2"></div>
                            <div class="cycle-block cycle-block-3"></div>
                            <div class="cycle-block cycle-block-4"></div>
                            <div class="cycle-block cycle-block-5"></div>
                            <div class="cycle-block cycle-block-6"></div>
                            <span class="cycle-lbl">Cycle Velocity</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         01 — WHAT YOU LEARN
         ════════════════════════════════════════ -->
    <section class="t-section alt">
        <div class="container-xl">
            <div class="section-label">01 — Curriculum</div>
            <h2 class="section-title">What You Learn</h2>
            <p class="section-desc">Three domains. Each one compounds on the last.</p>

            <div class="learn-grid">
                <div class="learn-card">
                    <div class="learn-card-num">01</div>
                    <div class="learn-card-title">Framework Architecture</div>
                    <div class="learn-card-desc">Above the System (Vision, Target, 80% Premise), Requirements (AI as Enabler, The Operator), Team Structure from solo to optimal 4-person layer stacks, the Death Traps (No Backlog, No Long Planning), and the five architectural layers that connect everything.</div>
                </div>
                <div class="learn-card">
                    <div class="learn-card-num">02</div>
                    <div class="learn-card-title">12 Mechanisms + Tactics</div>
                    <div class="learn-card-desc">The operating system: Foundation, Pendulum, Nested Cycles, Sweeps, Patterns, Regroup, Governor, Micro-Triage, Multi-Thread Workflow, Bridge, Scaffold, Burst. Plus the tactical escalation chain: SPR, Stop and Recap, Stop. Run It Back.</div>
                </div>
                <div class="learn-card">
                    <div class="learn-card-num">03</div>
                    <div class="learn-card-title">Applications + Failure Modes</div>
                    <div class="learn-card-desc">Four applications (Build-as-Validation, Parallel MVP, Time Compression, Routing), supporting concepts (Storage Discipline, Breadcrumbs, Spiral Anatomy, Environmental Control), and the 8 failure patterns — Foundation Rot, Cycle Stall, Governor Blindness, Compounding Reversal, and more.</div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         02 — FORMATS
         ════════════════════════════════════════ -->
    <section class="t-section">
        <div class="container-xl">
            <div class="section-label">02 — Formats</div>
            <h2 class="section-title">How It Works</h2>
            <p class="section-desc">Two formats, both hands-on. You learn by building, not by watching slides.</p>

            <div class="formats-grid">

                <!-- 1-on-1 -->
                <div class="format-card coaching">
                    <div class="format-icon pink">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="format-label">Format 01</div>
                    <div class="format-title">1-on-1 Coaching</div>
                    <div class="format-desc">
                        Direct, structured sessions with the operator who built all 10 systems. You bring your project, we apply the method to it in real time.
                    </div>
                    <div class="format-details">
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Full framework transfer — Above the System through Failure Modes</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>AI as Enabler (R1) setup — prompt architecture, Multi-Thread Workflow, parallel execution</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Live mechanism drills — Pendulum decisions, Nested Cycles, Micro-Triage on your real projects</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Governor calibration and failure mode recognition</span></div>
                    </div>
                </div>

                <!-- Embedded -->
                <div class="format-card embedded">
                    <div class="format-icon purple">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#6d4a8c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>
                        </svg>
                    </div>
                    <div class="format-label">Format 02</div>
                    <div class="format-title">Embedded Team Training</div>
                    <div class="format-desc">
                        I work alongside your team for a defined period. Same tools, same codebase, same daily rhythm. The method transfers through shared execution, not documentation.
                    </div>
                    <div class="format-details">
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Embedded in your team's workflow — layer ownership model applied to your people</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Foundation architecture built from your existing codebase and assets</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Team-wide adoption: Sweeps cadence, Regroup rhythms, Routing between team members</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Measurable compounding benchmarks — rework rate, cycle duration, Foundation reuse</span></div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         03 — WHO IT'S FOR
         ════════════════════════════════════════ -->
    <section class="t-section alt">
        <div class="container-xl">
            <div class="section-label">03 — Who It's For</div>
            <h2 class="section-title">Is This Right for You?</h2>
            <p class="section-desc">This isn't a beginner course. It's for people already building who want to build faster and better.</p>

            <div class="audience-grid">
                <div class="audience-card">
                    <div class="audience-card-title">Solo Developers &amp; Technical Founders</div>
                    <div class="audience-card-desc">You're already shipping code. You want to 10&times; your output using AI-native workflow and structured execution patterns instead of brute force.</div>
                </div>
                <div class="audience-card">
                    <div class="audience-card-title">Engineering Teams (2-10)</div>
                    <div class="audience-card-desc">Your team ships, but coordination overhead kills compounding. CEM eliminates the friction between planning and execution so every cycle feeds the next.</div>
                </div>
                <div class="audience-card">
                    <div class="audience-card-title">Technical Leaders &amp; CTOs</div>
                    <div class="audience-card-desc">You need a framework for AI-augmented development that scales. Not ad-hoc prompting — a structured methodology with measurable compounding benchmarks.</div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         04 — WHAT THIS ISN'T
         ════════════════════════════════════════ -->
    <section class="t-section">
        <div class="container-xl">
            <div class="section-label">04 — Expectations</div>
            <h2 class="section-title">What This Is — and Isn't</h2>
            <p class="section-desc">Clear expectations. No fluff, no ambiguity.</p>

            <div class="contrast-grid">
                <div class="contrast-col not">
                    <div class="contrast-col-header">
                        <div class="contrast-col-title">This Is Not</div>
                    </div>
                    <div class="contrast-rows">
                        <div class="contrast-row">
                            <svg class="contrast-icon x" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                            <span>A passive video course</span>
                        </div>
                        <div class="contrast-row">
                            <svg class="contrast-icon x" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                            <span>Generic "how to use ChatGPT" training</span>
                        </div>
                        <div class="contrast-row">
                            <svg class="contrast-icon x" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                            <span>Theoretical frameworks with no production evidence</span>
                        </div>
                        <div class="contrast-row">
                            <svg class="contrast-icon x" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                            <span>Motivation or mindset coaching</span>
                        </div>
                        <div class="contrast-row">
                            <svg class="contrast-icon x" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                            <span>One-size-fits-all curriculum</span>
                        </div>
                    </div>
                </div>

                <div class="contrast-col is">
                    <div class="contrast-col-header">
                        <div class="contrast-col-title">This Is</div>
                    </div>
                    <div class="contrast-rows">
                        <div class="contrast-row">
                            <svg class="contrast-icon check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Hands-on methodology transfer through real projects</span>
                        </div>
                        <div class="contrast-row">
                            <svg class="contrast-icon check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>A production-validated system backed by 596K+ LOC of evidence</span>
                        </div>
                        <div class="contrast-row">
                            <svg class="contrast-icon check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Applied to your stack, your codebase, your problems</span>
                        </div>
                        <div class="contrast-row">
                            <svg class="contrast-icon check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Measurable before-and-after compounding benchmarks</span>
                        </div>
                        <div class="contrast-row">
                            <svg class="contrast-icon check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Direct access to the operator who built 10 systems in under 2 years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         CTA
         ════════════════════════════════════════ -->
    <section class="t-cta">
        <div class="container-xl">
            <h2>Ready to <span class="highlight">compound?</span></h2>
            <p>Tell us about your team and what you're building. We'll design the right engagement.</p>
            <a href="mailto:info@stealthlabz.com" class="cta-btn">
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
