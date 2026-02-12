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
                        Hands-on training applied to your real projects. You'll work inside the same environment, using the same mechanisms, with the operator who built 10 production systems.
                    </p>
                    <div class="hero-facts">
                        <div class="hero-fact">
                            <svg class="hero-fact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Full framework in 4–8 weeks
                        </div>
                        <div class="hero-fact">
                            <svg class="hero-fact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Applied to your real projects
                        </div>
                        <div class="hero-fact">
                            <svg class="hero-fact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Both formats hands-on
                        </div>
                    </div>
                </div>

                <!-- Multi-Thread Workflow Visual -->
                <div class="hero-visual">
                    <div class="mtw-mockup">
                        <!-- Left: Research pane -->
                        <div class="mtw-pane">
                            <div class="mtw-pane-header">
                                <span class="mtw-pane-dot research"></span>
                                <span class="mtw-pane-label">Research</span>
                            </div>
                            <div class="mtw-pane-body">
                                <div class="mtw-mechanism purple">Foundation</div>
                                <div class="mtw-line purple" style="width:90%"></div>
                                <div class="mtw-line purple" style="width:70%"></div>
                                <div class="mtw-line" style="width:85%"></div>
                                <div class="mtw-line purple" style="width:60%"></div>
                                <div class="mtw-line" style="width:75%"></div>
                                <div class="mtw-line purple" style="width:50%"></div>
                            </div>
                        </div>

                        <!-- Middle: Primary (code) pane -->
                        <div class="mtw-pane">
                            <div class="mtw-pane-header">
                                <span class="mtw-pane-dot primary"></span>
                                <span class="mtw-pane-label">Primary</span>
                            </div>
                            <div class="mtw-pane-body">
                                <div class="mtw-mechanism pink">Nested Cycle — Sprint</div>
                                <div class="mtw-code-block">
                                    <div class="mtw-code-line"><span class="cm">// scaffold from foundation</span></div>
                                    <div class="mtw-code-line"><span class="kw">import</span> { scaffold } <span class="kw">from</span> <span class="str">'./foundation'</span></div>
                                    <div class="mtw-code-line"><span class="kw">const</span> mvp = <span class="fn">scaffold</span>(<span class="str">'checkout'</span>)</div>
                                    <div class="mtw-code-line"></div>
                                    <div class="mtw-code-line"><span class="cm">// pendulum: advance target</span></div>
                                    <div class="mtw-code-line">mvp.<span class="fn">deploy</span>({ target: <span class="str">'v1'</span> })</div>
                                    <div class="mtw-code-line"><span class="cm">// → stash to foundation</span></div>
                                </div>
                                <div class="mtw-pendulum">
                                    <svg class="mtw-pendulum-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                                    <span class="mtw-pendulum-text">Pendulum → Advance</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right: AI pane -->
                        <div class="mtw-pane">
                            <div class="mtw-pane-header">
                                <span class="mtw-pane-dot ai"></span>
                                <span class="mtw-pane-label">AI</span>
                            </div>
                            <div class="mtw-pane-body">
                                <div class="mtw-mechanism cyan">Micro-Triage</div>
                                <div class="mtw-ai-response">
                                    <div class="mtw-ai-line" style="width:95%"></div>
                                    <div class="mtw-ai-line" style="width:80%"></div>
                                    <div class="mtw-ai-line" style="width:90%"></div>
                                    <div class="mtw-ai-line" style="width:65%"></div>
                                    <div class="mtw-ai-line" style="width:85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating overlays -->
                    <div class="mtw-overlay top-right">
                        <div class="mtw-overlay-val">3 panes</div>
                        <div class="mtw-overlay-lbl">Parallel execution</div>
                    </div>
                    <div class="mtw-overlay bottom-left">
                        <div class="mtw-overlay-val">Live session</div>
                        <div class="mtw-overlay-lbl">Your project, your code</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         01 — HOW IT WORKS
         ════════════════════════════════════════ -->
    <section class="t-section alt">
        <div class="container-xl">
            <div class="section-label">01 — How It Works</div>
            <h2 class="section-title">Two Formats. Both Hands-On.</h2>
            <p class="section-desc">You learn by building, not by watching slides. Pick the format that fits how you work.</p>

            <div class="formats-grid">
                <div class="format-card coaching">
                    <div class="format-icon pink">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#e5025d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="format-label">Format 01</div>
                    <div class="format-title">1-on-1 Coaching</div>
                    <div class="format-desc">
                        Direct sessions with the operator who built all 10 systems. You bring your project — we apply the method to it in real time.
                    </div>
                    <div class="format-meta">
                        <div class="format-meta-item">
                            <div class="format-meta-val">4–8 wks</div>
                            <div class="format-meta-lbl">Duration</div>
                        </div>
                        <div class="format-meta-item">
                            <div class="format-meta-val">2×/wk</div>
                            <div class="format-meta-lbl">Sessions</div>
                        </div>
                        <div class="format-meta-item">
                            <div class="format-meta-val">Full CEM</div>
                            <div class="format-meta-lbl">Deliverable</div>
                        </div>
                    </div>
                    <div class="format-details">
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Full framework transfer — architecture through failure modes</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>AI-as-Enabler setup: prompt architecture, Multi-Thread Workflow, parallel execution</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Live mechanism drills on your real project</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Governor calibration and failure mode recognition</span></div>
                    </div>
                </div>

                <div class="format-card embedded">
                    <div class="format-icon purple">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#6d4a8c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>
                        </svg>
                    </div>
                    <div class="format-label">Format 02</div>
                    <div class="format-title">Embedded Team Training</div>
                    <div class="format-desc">
                        I work alongside your team. Same tools, same codebase, same daily rhythm. The method transfers through shared execution.
                    </div>
                    <div class="format-meta">
                        <div class="format-meta-item">
                            <div class="format-meta-val">2–6 wks</div>
                            <div class="format-meta-lbl">Duration</div>
                        </div>
                        <div class="format-meta-item">
                            <div class="format-meta-val">Daily</div>
                            <div class="format-meta-lbl">Cadence</div>
                        </div>
                        <div class="format-meta-item">
                            <div class="format-meta-val">Team CEM</div>
                            <div class="format-meta-lbl">Deliverable</div>
                        </div>
                    </div>
                    <div class="format-details">
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Layer ownership model applied to your people</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Foundation architecture built from your existing codebase</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Sweeps cadence, Regroup rhythms, Routing between members</span></div>
                        <div class="format-detail"><span class="format-detail-dot"></span><span>Measurable benchmarks — rework rate, cycle duration, Foundation reuse</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         02 — WHAT YOU WALK AWAY WITH
         ════════════════════════════════════════ -->
    <section class="t-section">
        <div class="container-xl">
            <div class="section-label">02 — Deliverables</div>
            <h2 class="section-title">What You Walk Away With</h2>
            <p class="section-desc">Not a certificate. Not a PDF. Tangible outputs you'll use the day after training ends.</p>

            <div class="deliverables-grid">
                <div class="deliverable-item">
                    <div class="deliverable-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
                    </div>
                    <div>
                        <div class="deliverable-title">A configured Foundation</div>
                        <div class="deliverable-desc">Templates, stored assets, and reusable patterns built from your actual project — ready to compound from day one.</div>
                    </div>
                </div>
                <div class="deliverable-item">
                    <div class="deliverable-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    </div>
                    <div>
                        <div class="deliverable-title">Calibrated cycle rhythms</div>
                        <div class="deliverable-desc">Nested Cycle structure tuned to your work — Micro, Sprint, Build, and Integration timeboxes you can run independently.</div>
                    </div>
                </div>
                <div class="deliverable-item">
                    <div class="deliverable-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg>
                    </div>
                    <div>
                        <div class="deliverable-title">Multi-Thread Workflow setup</div>
                        <div class="deliverable-desc">Your physical execution environment configured — research, primary, and AI panes running in parallel.</div>
                    </div>
                </div>
                <div class="deliverable-item">
                    <div class="deliverable-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <div>
                        <div class="deliverable-title">Governor + failure mode recognition</div>
                        <div class="deliverable-desc">The judgment layer calibrated to your risk profile. You'll know when to push and when to stop before it costs you cycles.</div>
                    </div>
                </div>
                <div class="deliverable-item">
                    <div class="deliverable-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                    <div>
                        <div class="deliverable-title">AI prompt architecture</div>
                        <div class="deliverable-desc">Structured prompts, escalation chains (SPR → Stop and Recap → Run It Back), and drift management built for your stack.</div>
                    </div>
                </div>
                <div class="deliverable-item">
                    <div class="deliverable-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <div>
                        <div class="deliverable-title">Compounding benchmarks</div>
                        <div class="deliverable-desc">Baseline measurements and targets for rework rate, cycle duration, and Foundation reuse — so you can track acceleration.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         03 — MVP TRAINING (Flagship)
         ════════════════════════════════════════ -->
    <section class="t-section alt">
        <div class="container-xl">
            <div class="section-label">03 — Flagship Program</div>
            <h2 class="section-title">MVP Deployment Training</h2>
            <p class="section-desc">The most concrete application of CEM. Learn the method by shipping an actual MVP.</p>

            <div class="mvp-card">
                <div class="mvp-card-top"></div>
                <div class="mvp-card-inner">
                    <div class="mvp-grid">
                        <div>
                            <div class="mvp-badge">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                                Flagship
                            </div>
                            <div class="mvp-title">Ship your MVP using CEM</div>
                            <div class="mvp-desc">
                                You don't learn the method in the abstract — you learn it by deploying a production MVP. Every mechanism gets applied to a real build: Foundation setup, Pendulum decisions, Nested Cycles, Scaffold from existing assets, and the full tactical escalation chain.
                            </div>
                            <div class="mvp-details">
                                <div class="mvp-detail"><span class="mvp-detail-dot"></span><span>Define Vision and Target for your specific product</span></div>
                                <div class="mvp-detail"><span class="mvp-detail-dot"></span><span>Build Foundation from scratch — templates, components, stored patterns</span></div>
                                <div class="mvp-detail"><span class="mvp-detail-dot"></span><span>Execute Nested Cycles against a real deployment timeline</span></div>
                                <div class="mvp-detail"><span class="mvp-detail-dot"></span><span>Apply the 80% Premise — ship at 80%, let the system close the gap</span></div>
                                <div class="mvp-detail"><span class="mvp-detail-dot"></span><span>Manage AI drift in production: SPR, Stop and Recap, Run It Back</span></div>
                                <div class="mvp-detail"><span class="mvp-detail-dot"></span><span>Walk away with a deployed MVP and a Foundation that compounds into your next build</span></div>
                            </div>
                        </div>
                        <div class="mvp-sidebar">
                            <div class="mvp-stat-block">
                                <div class="mvp-stat-val">4–6 wks</div>
                                <div class="mvp-stat-lbl">Typical duration</div>
                            </div>
                            <div class="mvp-stat-block">
                                <div class="mvp-stat-val">Deployed</div>
                                <div class="mvp-stat-lbl">MVP at completion</div>
                            </div>
                            <div class="mvp-stat-block">
                                <div class="mvp-stat-val">Full CEM</div>
                                <div class="mvp-stat-lbl">Framework transfer</div>
                            </div>
                            <div class="mvp-stat-block">
                                <div class="mvp-stat-val">Reusable</div>
                                <div class="mvp-stat-lbl">Foundation for next build</div>
                            </div>
                            <a href="#cta-section" class="mvp-cta-btn">
                                Start Here
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         04 — WHO IT'S FOR
         ════════════════════════════════════════ -->
    <section class="t-section">
        <div class="container-xl">
            <div class="section-label">04 — Who It's For</div>
            <h2 class="section-title">Is This Right for You?</h2>
            <p class="section-desc">This isn't a beginner course. It's for people already building who want to build faster and better.</p>

            <div class="audience-grid">
                <div class="audience-card">
                    <div class="audience-card-type">Solo / Founder</div>
                    <div class="audience-card-title">Solo Developers &amp; Technical Founders</div>
                    <div class="audience-card-desc">You're already shipping code. You want to 10&times; your output using AI-native workflow and structured execution instead of brute force.</div>
                    <div class="audience-card-route">→ MVP Training or 1-on-1 Coaching</div>
                </div>
                <div class="audience-card">
                    <div class="audience-card-type">Team</div>
                    <div class="audience-card-title">Engineering Teams (2–10)</div>
                    <div class="audience-card-desc">Your team ships, but coordination overhead kills compounding. CEM eliminates the friction between planning and execution so every cycle feeds the next.</div>
                    <div class="audience-card-route">→ Embedded Team Training</div>
                </div>
                <div class="audience-card">
                    <div class="audience-card-type">Leadership</div>
                    <div class="audience-card-title">Technical Leaders &amp; CTOs</div>
                    <div class="audience-card-desc">You need a framework for AI-augmented development that scales. Not ad-hoc prompting — a structured methodology with measurable compounding benchmarks.</div>
                    <div class="audience-card-route">→ Any format, scoped to your org</div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         05 — WHAT THIS IS / ISN'T
         ════════════════════════════════════════ -->
    <section class="t-section alt">
        <div class="container-xl">
            <div class="section-label">05 — Expectations</div>
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
                            <span>A production-validated system backed by 596K+ LOC</span>
                        </div>
                        <div class="contrast-row">
                            <svg class="contrast-icon check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Applied to your stack, your codebase, your problems</span>
                        </div>
                        <div class="contrast-row">
                            <svg class="contrast-icon check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>You leave with a deployed MVP and reusable Foundation</span>
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
    <section class="t-cta" id="cta-section">
        <div class="container-xl">
            <h2>Ready to <span class="highlight">start?</span></h2>
            <p>Tell us what you're building and how you work. We'll scope the right engagement.</p>

            <a href="mailto:info@stealthlabz.com" class="cta-btn">
                Let's Talk
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"/><path d="M12 5l7 7-7 7"/>
                </svg>
            </a>

            <div class="cta-proof">
                <div class="cta-proof-item"><span>10</span> production systems</div>
                <div class="cta-proof-item"><span>596K+</span> LOC</div>
                <div class="cta-proof-item"><span>12</span> mechanisms</div>
                <div class="cta-proof-item"><span>18</span> years refined</div>
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
            if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
    </script>
</body>
</html>