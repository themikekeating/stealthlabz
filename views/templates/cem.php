<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#d90158">
    <title><?= htmlspecialchars($page['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page['description']) ?>">
    <link rel="canonical" href="https://stealthlabz.com/cem">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($page['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page['description']) ?>">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/cem">
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

            <div class="hero-grid">
                <!-- LEFT: Content -->
                <div class="hero-content">
                    <div class="hero-badge">
                        <span class="dot"></span>
                        Execution Framework
                    </div>
                    <h1>The <span class="highlight">Compounding Execution</span> Method</h1>
                    <p class="cem-hero-sub">
                        A universal operating system for AI-native builders. The methodology behind 2,561 production commits and 10 systems shipped.
                    </p>
                    <a href="#framework" class="hero-cta">
                        Explore the Framework
                        <svg viewBox="0 0 16 16" fill="none"><path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>

                <!-- RIGHT: Abstract Geometric -->
                <div class="hero-geometric">
                    <div class="geo-glow"></div>

                    <!-- Rotating rings -->
                    <div class="geo-ring-outer"></div>
                    <div class="geo-ring-mid"></div>
                    <div class="geo-ring-inner"></div>

                    <!-- Core hexagonal shape -->
                    <div class="geo-core">
                        <svg viewBox="0 0 200 200" fill="none">
                            <!-- Outer hex — purple -->
                            <polygon points="100,20 175,60 175,140 100,180 25,140 25,60"
                                     fill="none"
                                     stroke="rgba(109, 74, 140, 0.25)"
                                     stroke-width="1.5"/>
                            <!-- Inner hex — pink -->
                            <polygon points="100,50 150,75 150,125 100,150 50,125 50,75"
                                     fill="rgba(229, 2, 93, 0.03)"
                                     stroke="rgba(229, 2, 93, 0.12)"
                                     stroke-width="1"/>
                            <!-- Core dot — pink -->
                            <circle cx="100" cy="100" r="4" fill="#e5025d" opacity="0.9"/>
                            <circle cx="100" cy="100" r="12" fill="none" stroke="rgba(229, 2, 93, 0.15)" stroke-width="1"/>
                            <!-- Pulse ring — purple -->
                            <circle cx="100" cy="100" r="20" fill="none" stroke="rgba(109, 74, 140, 0.08)" stroke-width="0.5"/>
                            <!-- Connecting lines — alternating pink/purple -->
                            <line x1="100" y1="100" x2="100" y2="50" stroke="rgba(109, 74, 140, 0.1)" stroke-width="1"/>
                            <line x1="100" y1="100" x2="150" y2="75" stroke="rgba(229, 2, 93, 0.06)" stroke-width="1"/>
                            <line x1="100" y1="100" x2="150" y2="125" stroke="rgba(109, 74, 140, 0.1)" stroke-width="1"/>
                            <line x1="100" y1="100" x2="100" y2="150" stroke="rgba(229, 2, 93, 0.06)" stroke-width="1"/>
                            <line x1="100" y1="100" x2="50" y2="125" stroke="rgba(109, 74, 140, 0.1)" stroke-width="1"/>
                            <line x1="100" y1="100" x2="50" y2="75" stroke="rgba(229, 2, 93, 0.06)" stroke-width="1"/>
                            <!-- Outer vertex dots — purple -->
                            <circle cx="100" cy="20" r="3" fill="rgba(109, 74, 140, 0.5)"/>
                            <circle cx="175" cy="60" r="3" fill="rgba(109, 74, 140, 0.4)"/>
                            <circle cx="175" cy="140" r="3" fill="rgba(109, 74, 140, 0.5)"/>
                            <circle cx="100" cy="180" r="3" fill="rgba(109, 74, 140, 0.4)"/>
                            <circle cx="25" cy="140" r="3" fill="rgba(109, 74, 140, 0.5)"/>
                            <circle cx="25" cy="60" r="3" fill="rgba(109, 74, 140, 0.4)"/>
                            <!-- Inner vertex dots — pink -->
                            <circle cx="100" cy="50" r="2.5" fill="rgba(229, 2, 93, 0.35)"/>
                            <circle cx="150" cy="75" r="2.5" fill="rgba(229, 2, 93, 0.35)"/>
                            <circle cx="150" cy="125" r="2.5" fill="rgba(229, 2, 93, 0.35)"/>
                            <circle cx="100" cy="150" r="2.5" fill="rgba(229, 2, 93, 0.35)"/>
                            <circle cx="50" cy="125" r="2.5" fill="rgba(229, 2, 93, 0.35)"/>
                            <circle cx="50" cy="75" r="2.5" fill="rgba(229, 2, 93, 0.35)"/>
                        </svg>
                    </div>

                    <!-- Connector lines from nodes to rings -->
                    <svg class="geo-connectors" viewBox="0 0 520 520"><line x1="45" y1="42" x2="130" y2="130"/><line x1="520" y1="182" x2="390" y2="220"/><line x1="520" y1="390" x2="390" y2="350"/><line x1="78" y1="520" x2="180" y2="400"/><line x1="-10" y1="114" x2="130" y2="180"/></svg>

                    <!-- Floating CEM layer labels -->
                    <div class="geo-node geo-node-1 left">Tactics</div>
                    <div class="geo-node geo-node-2 left">Mechanisms</div>
                    <div class="geo-node geo-node-3 left">Applications</div>
                    <div class="geo-node geo-node-4 top">Governor</div>
                    <div class="geo-node geo-node-5 right">Pendulum</div>
                </div>
            </div>

            <!-- STATS BAR — Full width -->
            <div class="hero-stats-bar">
                <div class="hero-stat">
                    <div class="hero-stat-val">2,561</div>
                    <div class="hero-stat-lbl">Production Commits</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-val">10</div>
                    <div class="hero-stat-lbl">Systems Shipped</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-val">74</div>
                    <div class="hero-stat-lbl">Days in Production</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-val">13.4×</div>
                    <div class="hero-stat-lbl">Compounding Multiplier</div>
                </div>
            </div>

        </div>
    </section>


    <!-- ════════════════════════════════════════
         01 — SYSTEM ARCHITECTURE
         ════════════════════════════════════════ -->
    <section class="cem-section section-alt cem-section-glow-left cem-section-glow-right" data-section>
        <div class="container-xl">
            <div class="cem-section-label">01 — Architecture</div>
            <h2>System Architecture</h2>
            <p class="cem-section-desc">How every mechanism connects. The Core Triangle drives execution. Four operational layers surround it. Eight feedback loops sustain the system.</p>

            <!-- ── THE CORE TRIANGLE ── -->
            <div class="core-triangle">
                <div class="core-triangle-label">The Core Triangle</div>
                <div class="core-triangle-flow">
                    <div class="core-node">
                        <div class="core-node-role">Defines the Why</div>
                        <h3>Vision</h3>
                        <p>The future state. Undefined but believed. The destination the entire ecosystem compounds toward.</p>
                    </div>

                    <div class="core-connector">
                        <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>

                    <div class="core-node">
                        <div class="core-node-role">Defines the What</div>
                        <h3>Target</h3>
                        <p>Concrete. Measurable. Every decision passes through it. The operational filter for the entire system.</p>
                    </div>

                    <div class="core-connector">
                        <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>

                    <div class="core-node">
                        <div class="core-node-role">Provides the Fuel</div>
                        <h3>Foundation</h3>
                        <p>Templates, patterns, stored work. Everything feeds back into it. Every cycle starts further ahead than the last.</p>
                    </div>

                    <div class="core-connector">
                        <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>

                    <div class="core-node">
                        <div class="core-node-role">Filters Every Decision</div>
                        <h3>Pendulum</h3>
                        <p>Binary filter. Every output either advances the Target or stashes to Foundation. No middle state.</p>
                    </div>
                </div>
            </div>

            <!-- ── LAYER STACK ── -->
            <div class="arch-layers-header">Operational Layers</div>
            <div class="arch-stack">
                <div class="arch-layer">
                    <div class="arch-layer-name">
                        <div class="arch-layer-num">Layer 01</div>
                        <div class="arch-layer-title">Execution</div>
                    </div>
                    <div class="arch-layer-body">
                        <div class="arch-layer-components">
                            <span class="arch-component">Nested Cycles</span>
                            <span class="arch-component">Sweeps</span>
                        </div>
                        <div class="arch-layer-flow-label">Flow</div>
                        <div class="arch-layer-flow">Nested Cycles and Sweeps run in parallel. Both feed Foundation. Cycles produce output. Sweeps maintain retrievability. Without Sweeps, Foundation degrades and cycles slow.</div>
                    </div>
                </div>

                <div class="arch-layer">
                    <div class="arch-layer-name">
                        <div class="arch-layer-num">Layer 02</div>
                        <div class="arch-layer-title">Governance</div>
                    </div>
                    <div class="arch-layer-body">
                        <div class="arch-layer-components">
                            <span class="arch-component">Regroup</span>
                            <span class="arch-component">Governor</span>
                        </div>
                        <div class="arch-layer-flow-label">Flow</div>
                        <div class="arch-layer-flow">Regroup is periodic — clears Foundation and clears the mind. Governor is continuous — throttles output and protects focus. Together they prevent the system from destroying itself through overextension.</div>
                    </div>
                </div>

                <div class="arch-layer">
                    <div class="arch-layer-name">
                        <div class="arch-layer-num">Layer 03</div>
                        <div class="arch-layer-title">Problem-Solving</div>
                    </div>
                    <div class="arch-layer-body">
                        <div class="arch-layer-components">
                            <span class="arch-component">Micro-Triage</span>
                            <span class="arch-component">Stop and Recap</span>
                            <span class="arch-component">Stop. Run It Back</span>
                        </div>
                        <div class="arch-layer-flow-label">Flow</div>
                        <div class="arch-layer-flow">Micro-Triage clears blockages through the 7-step loop. If unresolved in 15–30 minutes, escalate: Stop and Recap for repairable context, Stop. Run It Back when context is poisoned.</div>
                    </div>
                </div>

                <div class="arch-layer">
                    <div class="arch-layer-name">
                        <div class="arch-layer-num">Layer 04</div>
                        <div class="arch-layer-title">Acceleration</div>
                    </div>
                    <div class="arch-layer-body">
                        <div class="arch-layer-components">
                            <span class="arch-component">Scaffold</span>
                            <span class="arch-component">Bridge</span>
                            <span class="arch-component">Burst</span>
                        </div>
                        <div class="arch-layer-flow-label">Flow</div>
                        <div class="arch-layer-flow">Scaffold spins up instant structure from Foundation. Bridge multiplies by connecting across the ecosystem. Burst scatters when stuck. All three feed Foundation. Scaffold creates. Bridge connects. Burst unsticks.</div>
                    </div>
                </div>
            </div>

            <!-- ── FEEDBACK LOOPS ── -->
            <div class="loops-header">Key Feedback Loops — 8 Self-Sustaining Cycles</div>
            <div class="loops-grid">
                <div class="loop-card">
                    <div class="loop-name">Build Loop</div>
                    <div class="loop-flow">Vision <span class="loop-flow-arrow">→</span> Target <span class="loop-flow-arrow">→</span> Foundation <span class="loop-flow-arrow">→</span> Pendulum <span class="loop-flow-arrow">→</span> Cycles <span class="loop-flow-arrow">→</span> Output <span class="loop-flow-arrow">→</span> Foundation</div>
                </div>

                <div class="loop-card">
                    <div class="loop-name">Maintenance Loop</div>
                    <div class="loop-flow">Sweeps <span class="loop-flow-arrow">→</span> Foundation <span class="loop-flow-arrow">→</span> Cycles <span class="loop-flow-arrow">→</span> Sweeps</div>
                </div>

                <div class="loop-card">
                    <div class="loop-name">Reset Loop</div>
                    <div class="loop-flow">Regroup <span class="loop-flow-arrow">→</span> Foundation cleared <span class="loop-flow-arrow">→</span> Mind cleared <span class="loop-flow-arrow">→</span> Vision reassessed</div>
                </div>

                <div class="loop-card">
                    <div class="loop-name">Throttle Loop</div>
                    <div class="loop-flow">Governor <span class="loop-flow-arrow">→</span> Output throttled <span class="loop-flow-arrow">→</span> Focus protected <span class="loop-flow-arrow">→</span> Cycles sustained</div>
                </div>

                <div class="loop-card">
                    <div class="loop-name">Acceleration Loop</div>
                    <div class="loop-flow">Scaffold <span class="loop-flow-arrow">→</span> Build/Bridge <span class="loop-flow-arrow">→</span> Output <span class="loop-flow-arrow">→</span> Foundation <span class="loop-flow-arrow">→</span> Faster Scaffold</div>
                </div>

                <div class="loop-card">
                    <div class="loop-name">Problem-Solving Loop</div>
                    <div class="loop-flow">Blockage <span class="loop-flow-arrow">→</span> Micro-Triage <span class="loop-flow-arrow">→</span> Resolution or Escalate <span class="loop-flow-arrow">→</span> Continue</div>
                </div>

                <div class="loop-card">
                    <div class="loop-name">Burst Loop</div>
                    <div class="loop-flow">Stuck <span class="loop-flow-arrow">→</span> Internalize <span class="loop-flow-arrow">→</span> Explode <span class="loop-flow-arrow">→</span> Scatter <span class="loop-flow-arrow">→</span> Pendulum sorts <span class="loop-flow-arrow">→</span> Foundation catches</div>
                </div>

                <div class="loop-card">
                    <div class="loop-name">Spiral Recovery Loop</div>
                    <div class="loop-flow">Context corrupts <span class="loop-flow-arrow">→</span> Drift compounds <span class="loop-flow-arrow">→</span> Recognition fires <span class="loop-flow-arrow">→</span> Severity assessed <span class="loop-flow-arrow">→</span> Graduated response</div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         02 — DEEP DIVE (Tabbed)
         ════════════════════════════════════════ -->
    <section class="cem-section" data-section>
        <div class="container-xl">
            <div class="cem-section-label">02 — Deep Dive</div>
            <h2>The Framework</h2>
            <p class="cem-section-desc">Each layer of CEM serves a distinct function. Explore the components that make the system work.</p>

            <!-- Tab Bar -->
            <div class="tab-bar">
                <button class="tab-btn active" data-tab="above">Above the System</button>
                <button class="tab-btn" data-tab="requirements">Requirements</button>
                <button class="tab-btn" data-tab="tactics">Tactics</button>
                <button class="tab-btn" data-tab="mechanisms">Mechanisms</button>
                <button class="tab-btn" data-tab="applications">Applications</button>
                <button class="tab-btn" data-tab="supporting">Supporting</button>
            </div>

            <!-- ═══ ABOVE THE SYSTEM ═══ -->
            <div class="tab-panel active" id="tab-above">
                <div class="above-grid">
                    <div class="above-card">
                        <div class="icon-wrap icon-vision">
                            <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M12 2v3m0 14v3m10-10h-3M5 12H2m15.07-7.07l-2.12 2.12M9.05 14.95l-2.12 2.12m12.14 0l-2.12-2.12M9.05 9.05L6.93 6.93" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                        </div>
                        <div class="dd-badge dd-badge-purple">North Star</div>
                        <h3>Vision</h3>
                        <p>The future state. Undefined but believed. The destination the entire ecosystem compounds toward. Without Vision, execution has no meaning. With Vision, even failures compound toward the destination.</p>
                    </div>
                    <div class="above-card">
                        <div class="icon-wrap icon-target">
                            <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg>
                        </div>
                        <div class="dd-badge dd-badge-pink">Operational Filter</div>
                        <h3>Target</h3>
                        <p>Concrete. Measurable. Every decision passes through it. You know where you're going before you take a single step. Target can be built or found — when you recognize what you need already exists, you Bridge instead of rebuild.</p>
                    </div>
                    <div class="above-card">
                        <div class="icon-wrap icon-compound">
                            <svg viewBox="0 0 24 24" fill="none"><path d="M3 17l4-4 4 4 4-8 6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 11l4 0 0-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <div class="dd-badge dd-badge-green">Compounding Engine</div>
                        <h3>80% Premise</h3>
                        <p>Each cycle feeds Foundation. Foundation grows. The next cycle starts further ahead. Project one takes weeks because Foundation is empty. Project ten takes days because Foundation carries the weight.</p>
                    </div>
                </div>

                <!-- DEATH TRAPS -->
                <div class="death-traps">
                    <div class="death-traps-header">
                        <svg class="death-traps-icon" viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><line x1="12" y1="9" x2="12" y2="13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><line x1="12" y1="17" x2="12.01" y2="17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                        <span>The Truths — Death Traps</span>
                    </div>
                    <div class="death-traps-grid">
                        <div class="death-trap-card">
                            <h4>No Backlog</h4>
                            <p>Time spent grooming is time not executing. If something matters, it advances toward Target or stashes to Foundation. The Foundation is maintained, which means stashed work resurfaces stronger through compounding. There is no queue.</p>
                        </div>
                        <div class="death-trap-card">
                            <h4>No Long Planning</h4>
                            <p>Planning beyond 14 days is waste in an AI-enabled ecosystem. Structure emerges from execution and compounding progress, not from hypothetical roadmaps. By the time the roadmap is finished, the project could be shipped.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ═══ REQUIREMENTS ═══ -->
            <div class="tab-panel" id="tab-requirements">
                <div class="req-grid">
                    <div class="req-card">
                        <div class="dd-badge dd-badge-pink">R1 — Environment</div>
                        <h3>AI as Enabler</h3>
                        <p>AI is not a tool inside the methodology — it is the environment that makes it possible. Removes traditional constraints: context switching cost, expertise bottlenecks, linear effort scaling. The operator and AI form a system capable of output neither achieves alone.</p>
                    </div>
                    <div class="req-card">
                        <div class="dd-badge dd-badge-pink">R2 — Load-Bearing</div>
                        <h3>The Operator</h3>
                        <p>This methodology has no safety net. Deep understanding before action. Resourcefulness. Self-reliance. Risk acceptance. Sustained focus. Know your cycles. Know your limits. Build the Foundation or the system will expose the gaps.</p>
                    </div>
                </div>

                <!-- TEAM STRUCTURE -->
                <div class="team-structure">
                    <div class="team-structure-header">
                        <h4>Team Structure — Validated Configurations</h4>
                        <p>CEM scales from solo operators to micro teams through vertical specialization. Each operator owns a layer, not a parallel workstream. Zero role overlap. Domain boundaries are absolute.</p>
                    </div>
                    <div class="team-table">
                        <div class="team-table-header-row">
                            <div class="team-table-cell team-table-header">Size</div>
                            <div class="team-table-cell team-table-header">Configuration</div>
                            <div class="team-table-cell team-table-header">Rework Rate</div>
                            <div class="team-table-cell team-table-header">Status</div>
                        </div>
                        <div class="team-table-row">
                            <div class="team-table-cell team-size-cell">
                                <span class="team-size-num">1</span>
                                <span class="team-size-label">Solo</span>
                            </div>
                            <div class="team-table-cell">Operator + AI</div>
                            <div class="team-table-cell team-rework">~16% baseline</div>
                            <div class="team-table-cell"><span class="team-status validated">Validated</span></div>
                        </div>
                        <div class="team-table-row">
                            <div class="team-table-cell team-size-cell">
                                <span class="team-size-num">2</span>
                                <span class="team-size-label">Pair</span>
                            </div>
                            <div class="team-table-cell">Handoff model with clear boundaries</div>
                            <div class="team-table-cell team-rework">0–43% variance</div>
                            <div class="team-table-cell"><span class="team-status validated">Validated</span></div>
                        </div>
                        <div class="team-table-row team-table-row-highlight">
                            <div class="team-table-cell team-size-cell">
                                <span class="team-size-num">4</span>
                                <span class="team-size-label">Optimal</span>
                            </div>
                            <div class="team-table-cell">Each person owns a distinct layer</div>
                            <div class="team-table-cell team-rework team-rework-best">3.7–3.9%</div>
                            <div class="team-table-cell"><span class="team-status validated">Validated</span></div>
                        </div>
                        <div class="team-table-row">
                            <div class="team-table-cell team-size-cell">
                                <span class="team-size-num">5–10</span>
                                <span class="team-size-label">Extended</span>
                            </div>
                            <div class="team-table-cell">Additional layers or layer depth</div>
                            <div class="team-table-cell team-rework">Projected 3–5%</div>
                            <div class="team-table-cell"><span class="team-status projected">Projected</span></div>
                        </div>
                    </div>

                    <div class="team-layer-stack">
                        <div class="team-layer-stack-title">Validated Optimal Layer Stack (4 Operators)</div>
                        <div class="team-layers">
                            <div class="team-layer">
                                <div class="team-layer-name">Product</div>
                                <div class="team-layer-desc">Features, business logic, user-facing</div>
                            </div>
                            <div class="team-layer">
                                <div class="team-layer-name">Dashboard / UI</div>
                                <div class="team-layer-desc">Interface systems, shared components</div>
                            </div>
                            <div class="team-layer">
                                <div class="team-layer-name">Deployment</div>
                                <div class="team-layer-desc">Pipeline, environments, releases</div>
                            </div>
                            <div class="team-layer">
                                <div class="team-layer-name">Infrastructure</div>
                                <div class="team-layer-desc">Git, servers, foundational tooling</div>
                            </div>
                        </div>
                        <div class="team-layer-note">Beyond 10 people, the methodology transitions to traditional team structures. CEM is optimized for micro teams where AI absorbs coordination overhead.</div>
                    </div>
                </div>
            </div>

            <!-- ═══ TACTICS — Escalation Flow ═══ -->
            <div class="tab-panel" id="tab-tactics">
                <p class="tactics-intro">Graduated escalation chain when execution drifts. Each level increases the intervention intensity. Start light. Escalate only when needed.</p>

                <div class="tactics-flow">
                    <div class="tactic-card tactic-level-1">
                        <div class="tactic-severity">Level 1 — Lightest Touch</div>
                        <h3>SPR</h3>
                        <div class="tactic-action">Stop → Pause → Redirect</div>
                        <p>First-line interrupt. Catches drift before it compounds. Costs seconds. You notice you've lost focus, you SPR — stop what you're doing, pause to reorient, redirect to what matters.</p>
                    </div>

                    <div class="tactic-arrow tactic-arrow-1">
                        <div class="tactic-arrow-inner">
                            <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <span class="tactic-arrow-label">Escalate</span>
                        </div>
                    </div>

                    <div class="tactic-card tactic-level-2">
                        <div class="tactic-severity">Level 2 — Context Repair</div>
                        <h3>Stop and Recap</h3>
                        <div class="tactic-action">Full context rebuild</div>
                        <p>When SPR isn't enough. You've lost the thread entirely. Stop. Rebuild context from scratch. Restate the Target. Restate what you've done. Restate what's next. Then proceed.</p>
                    </div>

                    <div class="tactic-arrow tactic-arrow-2">
                        <div class="tactic-arrow-inner">
                            <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <span class="tactic-arrow-label">Escalate</span>
                        </div>
                    </div>

                    <div class="tactic-card tactic-level-3">
                        <div class="tactic-severity">Level 3 — Full Reset</div>
                        <h3>Stop. Run It Back</h3>
                        <div class="tactic-action">Nuclear option → restart from Foundation</div>
                        <p>The nuclear option. Something is fundamentally wrong. The approach is flawed. The context is poisoned. You stop everything, go back to Foundation, and rebuild the approach from scratch.</p>
                    </div>
                </div>
            </div>

            <!-- ═══ MECHANISMS — 12 cards ═══ -->
            <div class="tab-panel" id="tab-mechanisms">
                <div class="mech-grid" id="mechGrid">
                    <div class="mech-card" data-mech="foundation">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><rect x="3" y="14" width="18" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="5" y="7" width="14" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="7" y="3" width="10" height="4" rx="1" stroke="currentColor" stroke-width="1.5"/></svg></div>
                        <div class="mech-subtitle">Active Fuel</div>
                        <h3>Foundation</h3>
                        <p>Every cycle draws from Foundation. Every completed cycle feeds back into it. Templates, patterns, stored work — all of it feeds upward. This is how project one takes weeks and project ten takes hours.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="pendulum">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M3 12h18M12 3v18M7.5 7.5l9 9m0-9l-9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                        <div class="mech-subtitle">Binary Filter</div>
                        <h3>Pendulum</h3>
                        <p>Every decision is binary — advance the Target or stash in retrievable state. No middle state where work accumulates without resolution.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="nested-cycles">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg></div>
                        <div class="mech-subtitle">Timeboxed Execution</div>
                        <h3>Nested Cycles</h3>
                        <p>Work operates in self-similar cycles timeboxed by complexity. Micro (15 min–3 hr), Sprint (1–2 days), Build (1–7 days), Integration (1–14 days). Nesting is emergent, not imposed.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="sweeps">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M19 3l2 3-2 3M19 9l2 3-2 3M19 15l2 3-2 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div class="mech-subtitle">Continuous Maintenance</div>
                        <h3>Sweeps</h3>
                        <p>Background maintenance running parallel to primary work. Update drives, documentation, storage. Without Sweeps, Foundation degrades and the system slows.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="patterns">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><rect x="3" y="3" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="14" y="3" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="3" y="14" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="14" y="14" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/></svg></div>
                        <div class="mech-subtitle">Reusable Solutions</div>
                        <h3>Patterns</h3>
                        <p>Building blocks stored in Foundation. Each pattern captures: problem, context, implementation, variations, failure modes. Living and continuously refined through use.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="regroup">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M1 4v6h6M23 20v-6h-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M20.49 9A9 9 0 005.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 013.51 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div class="mech-subtitle">Ecosystem Review</div>
                        <h3>Regroup</h3>
                        <p>Regular intervals to step back. Every 2 weeks: review active projects, check Foundation. Every 30–45 days: technical debt, Vision reassessment, Target recalibration.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="governor">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><path d="M8 12h8M12 8v8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                        <div class="mech-subtitle">System Awareness</div>
                        <h3>Governor</h3>
                        <p>Macro-level awareness of system limits. The system is capable of more than you can sustain. Judgment is knowing when to throttle. Always present, always continuous.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="micro-triage">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                        <div class="mech-subtitle">Tactical Problem-Solving</div>
                        <h3>Micro-Triage</h3>
                        <p>7-step loop when execution spirals: Reground, State, Mirror, Align, Diagnose, Path, Repeat. Timeboxed 15–30 minutes. If unresolved, escalate to Tactics.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="multi-thread">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><rect x="2" y="3" width="6" height="18" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="3" width="6" height="18" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="16" y="3" width="6" height="18" rx="1" stroke="currentColor" stroke-width="1.5"/></svg></div>
                        <div class="mech-subtitle">Parallel Execution</div>
                        <h3>Multi-Thread Workflow</h3>
                        <p>Physical environment architecture. Left screen: research. Middle: primary execution. Right: AI/tools. This is how 60% of active days involve parallel work across systems.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="bridge">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M4 16V8M20 16V8M4 12h16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M7 12c0-3 2.5-5 5-5s5 2 5 5" stroke="currentColor" stroke-width="1.5"/></svg></div>
                        <div class="mech-subtitle">System Connector</div>
                        <h3>Bridge</h3>
                        <p>Connect information, tasks, and projects across the ecosystem. When something reaches 80%: Recognize, Reflect, Connect, Accelerate. Build adds to Foundation. Bridge multiplies it.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="scaffold">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M6 3v18M18 3v18M6 8h12M6 16h12M2 3h8M14 3h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                        <div class="mech-subtitle">Instant Structure</div>
                        <h3>Scaffold</h3>
                        <p>You never start from zero. Foundation provides the skeleton. Spin up fast, build on top. Disposable — if it fails, spin down just as fast. Scaffold creates. Bridge connects.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="burst">
                        <div class="mech-icon"><svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div class="mech-subtitle">Survival Mechanism</div>
                        <h3>Burst</h3>
                        <p>Controlled explosion when stuck. Internalize, explode, scatter 80% of projects/concepts toward Target. Foundation catches what doesn't advance. Pendulum sorts.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-expanded" id="mech-detail">
                        <div class="mech-expanded-header">
                            <h3 id="mech-detail-title"></h3>
                            <button class="mech-close" onclick="closeMechDetail()">← Back to grid</button>
                        </div>
                        <div class="mech-expanded-body">
                            <div class="mech-detail-text" id="mech-detail-text"></div>
                            <div class="mech-props" id="mech-detail-props"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ═══ APPLICATIONS — 2-col ═══ -->
            <div class="tab-panel" id="tab-applications">
                <div class="app-grid">
                    <div class="app-card">
                        <div class="app-num">Application 01</div>
                        <h3>Build-as-Validation</h3>
                        <p>When building costs approach zero, building becomes the validation method. Traditional Lean Startup assumes building is expensive, so you validate before you build. CEM inverts this — 5-day MVPs versus weeks of customer interviews. The artifact is the experiment.</p>
                    </div>
                    <div class="app-card">
                        <div class="app-num">Application 02</div>
                        <h3>Parallel MVP</h3>
                        <p>Running Engineering, Development, and Marketing MVPs simultaneously. Can we build it? Do users want it? Will they pay? Traditional wisdom enforces sequential validation. CEM removes those constraints and validates all three dimensions at once.</p>
                    </div>
                    <div class="app-card">
                        <div class="app-num">Application 03</div>
                        <h3>Time Compression</h3>
                        <p>Cycles shrink as Foundation grows. Early cycles: longer duration, smaller output. Later cycles: shorter duration, larger output. This is efficiency itself compressing as each cycle draws from a larger Foundation than the one before.</p>
                    </div>
                    <div class="app-card">
                        <div class="app-num">Application 04</div>
                        <h3>Routing</h3>
                        <p>Bidirectional task assignment keeps the operator in motion. Upward patches escalate to subject matter experts when you hit your ceiling. Downward patches delegate to VAs or agents when the task is below your level. Never blocked. Never slowed.</p>
                    </div>
                </div>
            </div>

            <!-- ═══ SUPPORTING CONCEPTS — 2×2 ═══ -->
            <div class="tab-panel" id="tab-supporting">
                <div class="support-grid">
                    <div class="support-card">
                        <div class="support-type">Asset Management</div>
                        <h3>Storage Discipline</h3>
                        <p>Keeping assets organized, retrievable, and usable. Two requirements: Organized (clear structure, consistent naming) and Retrievable (anything in Foundation found within minutes). Storage Discipline is pull — you go find the asset.</p>
                    </div>
                    <div class="support-card">
                        <div class="support-type">Connection Seeds</div>
                        <h3>Breadcrumbs</h3>
                        <p>Deliberate traces left across the ecosystem. Comments, links, naming conventions that trigger associations. Breadcrumbs are push — the asset finds you. Low-cost, high-optionality deposits. Most never trigger. The few that do compress days of search into seconds.</p>
                    </div>
                    <div class="support-card">
                        <div class="support-type">Failure-Recovery Pattern</div>
                        <h3>Spiral Anatomy</h3>
                        <p>Universal pattern at every scale: context corrupts, drift compounds, recognition fires, severity assessed, graduated response. At task level: Stop and Recap or Stop. Run It Back. At project level: Realign or Tear Down. At ecosystem level: Recalibrate or Hard Reset.</p>
                    </div>
                    <div class="support-card">
                        <div class="support-type">Operator Sovereignty</div>
                        <h3>Environmental Control</h3>
                        <p>The operator's sovereignty over their own execution state. The measurable signal: how early drift is caught. Strong Environmental Control catches drift early at every scale. When it slips, Governor fires, SPR deploys, Micro-Triage activates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         03 — CASE STUDIES
         ════════════════════════════════════════ -->
    <section class="cem-section section-alt" data-section>
        <div class="container-xl">
            <div class="cem-section-label">03 — In Practice</div>
            <h2>Case Studies</h2>
            <p class="cem-section-desc">Three applications of CEM across different problem types. Each demonstrates different mechanisms in action.</p>

            <div class="case-stack">

                <!-- Case 1: MVP Execution -->
                <div class="case-card expanded" id="case-1">
                    <div class="case-header" onclick="toggleCase(1)">
                        <div class="case-num">01</div>
                        <div class="case-header-content">
                            <h3>MVP Execution — Customer Reports</h3>
                            <div class="case-tagline">Functional product shipped with market test in 5 calendar days</div>
                        </div>
                        <div class="case-stats-preview">
                            <div class="case-stat-chip"><div class="case-stat-chip-val">5d</div><div class="case-stat-chip-lbl">Days to MVP</div></div>
                            <div class="case-stat-chip"><div class="case-stat-chip-val">31K</div><div class="case-stat-chip-lbl">LOC</div></div>
                            <div class="case-stat-chip"><div class="case-stat-chip-val">443</div><div class="case-stat-chip-lbl">Files</div></div>
                        </div>
                        <div class="case-toggle"><svg viewBox="0 0 16 16" fill="none"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                    </div>
                    <div class="case-body">
                        <div class="case-body-inner">
                            <div class="case-narrative">
                                <p>Customer Reports was the proof case for Build-as-Validation. Traditional approach: weeks of customer interviews, landing page tests, then build. CEM approach: ship a functional product and find out. Engineering feasibility, user validation, and commercial viability proven in parallel — not sequentially.</p>
                                <p>312-point complexity score across 443 files and 31K LOC with 3 integrations, delivered in 5 calendar days. This was only possible because Foundation provided scaffold reuse and pattern recognition at scale. The artifact was the experiment.</p>
                                <p>Burst windows of 12–16 hours produced the core application logic. The Governor kept scope locked to the 80% premise — no feature creep, no "nice to haves." The Pendulum filtered ruthlessly — only net-new functionality advanced. Everything else Bridged from existing systems.</p>
                            </div>
                            <div class="case-sidebar">
                                <div class="case-stats-full">
                                    <div class="case-stat-block"><div class="case-stat-block-val">5</div><div class="case-stat-block-lbl">Days to MVP</div></div>
                                    <div class="case-stat-block"><div class="case-stat-block-val">31K</div><div class="case-stat-block-lbl">Lines of Code</div></div>
                                    <div class="case-stat-block"><div class="case-stat-block-val">443</div><div class="case-stat-block-lbl">Files</div></div>
                                    <div class="case-stat-block"><div class="case-stat-block-val-accent">62.5</div><div class="case-stat-block-lbl">Complexity / Day</div></div>
                                </div>
                                <div class="case-mechs-label">Mechanisms Used</div>
                                <div class="case-mechs-list">
                                    <span class="case-mech-tag">Build-as-Validation</span>
                                    <span class="case-mech-tag">Parallel MVP</span>
                                    <span class="case-mech-tag">Scaffold</span>
                                    <span class="case-mech-tag">Foundation</span>
                                    <span class="case-mech-tag">Time Compression</span>
                                    <span class="case-mech-tag">Bridge</span>
                                </div>
                                <div class="case-phase-label">Complexity Score Distribution</div>
                                <div class="case-phase-bar"><div class="case-phase-fill fill-w-85"></div></div>
                                <div class="case-phase-labels"><span>0</span><span>312 / 443 files — highest complexity/day across all 10 projects</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case 2: Operational Rebuild -->
                <div class="case-card" id="case-2">
                    <div class="case-header" onclick="toggleCase(2)">
                        <div class="case-num">02</div>
                        <div class="case-header-content">
                            <h3>Operational Rebuild — Portal Stealth</h3>
                            <div class="case-tagline">Legacy system rebuilt into a unified platform across 195K LOC</div>
                        </div>
                        <div class="case-stats-preview">
                            <div class="case-stat-chip"><div class="case-stat-chip-val">195K</div><div class="case-stat-chip-lbl">LOC</div></div>
                            <div class="case-stat-chip"><div class="case-stat-chip-val">74d</div><div class="case-stat-chip-lbl">Active Dev</div></div>
                            <div class="case-stat-chip"><div class="case-stat-chip-val">6</div><div class="case-stat-chip-lbl">Mechanisms</div></div>
                        </div>
                        <div class="case-toggle"><svg viewBox="0 0 16 16" fill="none"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                    </div>
                    <div class="case-body">
                        <div class="case-body-inner">
                            <div class="case-narrative">
                                <p>Portal Stealth was the first project — Foundation was empty. Every pattern, every component, every pipeline had to be built from scratch. The Pendulum swung left constantly in early cycles — depositing infrastructure into Foundation rather than advancing the Target.</p>
                                <p>Phase 1 averaged 4.6 commits/day building Laravel scaffolding and dashboard foundations. Phase 2 hit 6.4/day on versioned staging and role-based patterns. After a 22-day Regroup gap, output permanently shifted — Phase 3 hit 24.1 commits/day, and the peak sprint sustained 61.5 commits/day with 89 commits on a single day.</p>
                                <p>Rework dropped from 45.2% at first production deploy to 27.0% at launch — a 40% reduction as patterns solidified in Foundation. Only 8 reverts across 1,394 commits (0.6%). Traditional equivalent: 4–6 person team, 8–12 months, $400K–$750K.</p>
                            </div>
                            <div class="case-sidebar">
                                <div class="case-stats-full">
                                    <div class="case-stat-block"><div class="case-stat-block-val">195K</div><div class="case-stat-block-lbl">Lines of Code</div></div>
                                    <div class="case-stat-block"><div class="case-stat-block-val">74</div><div class="case-stat-block-lbl">Active Dev Days</div></div>
                                    <div class="case-stat-block"><div class="case-stat-block-val">2,635</div><div class="case-stat-block-lbl">LOC / Day Avg</div></div>
                                    <div class="case-stat-block"><div class="case-stat-block-val-accent">13.4×</div><div class="case-stat-block-lbl">Compounding Multiplier</div></div>
                                </div>
                                <div class="case-mechs-label">Mechanisms Used</div>
                                <div class="case-mechs-list">
                                    <span class="case-mech-tag">Pendulum</span>
                                    <span class="case-mech-tag">Governor</span>
                                    <span class="case-mech-tag">Burst</span>
                                    <span class="case-mech-tag">Scaffold</span>
                                    <span class="case-mech-tag">Spiral Anatomy</span>
                                    <span class="case-mech-tag">Foundation</span>
                                </div>
                                <div class="case-phase-label">Build Acceleration</div>
                                <div class="case-phase-stack">
                                    <div class="case-phase-row">
                                        <div class="case-phase-row-label">Wk 1–3: Foundation fill</div>
                                        <div class="case-phase-bar"><div class="case-phase-fill fill-w-30"></div></div>
                                    </div>
                                    <div class="case-phase-row">
                                        <div class="case-phase-row-label">Wk 4–6: Compound kicks in</div>
                                        <div class="case-phase-bar"><div class="case-phase-fill fill-w-65"></div></div>
                                    </div>
                                    <div class="case-phase-row">
                                        <div class="case-phase-row-label">Wk 7+: Full compounding</div>
                                        <div class="case-phase-bar"><div class="case-phase-fill fill-w-95"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case 3: Constraint Dissolution — The Operator -->
                <div class="case-card" id="case-3">
                    <div class="case-header" onclick="toggleCase(3)">
                        <div class="case-num">03</div>
                        <div class="case-header-content">
                            <h3>Constraint Dissolution — The Operator</h3>
                            <div class="case-tagline">From zero engineering experience to 596K LOC — capability acquired through execution</div>
                        </div>
                        <div class="case-stats-preview">
                            <div class="case-stat-chip"><div class="case-stat-chip-val">596K</div><div class="case-stat-chip-lbl">Total LOC</div></div>
                            <div class="case-stat-chip"><div class="case-stat-chip-val">-82%</div><div class="case-stat-chip-lbl">Search Vol</div></div>
                            <div class="case-stat-chip"><div class="case-stat-chip-val">-100%</div><div class="case-stat-chip-lbl">Entertainment</div></div>
                        </div>
                        <div class="case-toggle"><svg viewBox="0 0 16 16" fill="none"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                    </div>
                    <div class="case-body">
                        <div class="case-body-inner">
                            <div class="case-narrative">
                                <p>The operator couldn't use git in September 2025. By January 2026: a 195K LOC platform with 627 routes. Capability was acquired through execution, not prerequisites. Learning and doing merged completely.</p>
                                <p>The behavioral signature tells the story: search volume dropped 82%, location movement dropped 90%, YouTube consumption hit zero — while code output exploded. Constraint dissolution doesn't add capacity. It subtracts everything except output.</p>
                                <p>3.3 years of behavioral data from a single operator who shipped 596K LOC with no prior software engineering experience. The transformation from employment-constrained to AI-native execution — measurable across every dimension.</p>
                            </div>
                            <div class="case-sidebar">
                                <div class="case-stats-full">
                                    <div class="case-stat-block"><div class="case-stat-block-val">596K</div><div class="case-stat-block-lbl">Total LOC</div></div>
                                    <div class="case-stat-block"><div class="case-stat-block-val">0→2,561</div><div class="case-stat-block-lbl">Commits</div></div>
                                    <div class="case-stat-block"><div class="case-stat-block-val">-82%</div><div class="case-stat-block-lbl">Search Volume</div></div>
                                    <div class="case-stat-block"><div class="case-stat-block-val-accent">-100%</div><div class="case-stat-block-lbl">Entertainment</div></div>
                                </div>
                                <div class="case-mechs-label">Mechanisms Used</div>
                                <div class="case-mechs-list">
                                    <span class="case-mech-tag">Environmental Control</span>
                                    <span class="case-mech-tag">Governor</span>
                                    <span class="case-mech-tag">Foundation</span>
                                    <span class="case-mech-tag">Learning-Doing Merge</span>
                                    <span class="case-mech-tag">AI as Enabler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         04 — FAILURE MODES
         ════════════════════════════════════════ -->
    <section class="cem-section section-alt cem-section-glow-right" data-section>
        <div class="container-xl">
            <div class="cem-section-label">04 — Failure Modes</div>
            <h2>How the System Breaks</h2>
            <p class="cem-section-desc">CEM fails in predictable ways. Nine patterns across four categories. Recognizing failure patterns enables faster recovery.</p>

            <!-- ── FOUNDATION FAILURES ── -->
            <div class="failure-category failure-cat-foundation">
                <div class="failure-category-header">
                    <div class="failure-category-icon">
                        <svg viewBox="0 0 24 24" fill="none" width="18" height="18"><rect x="3" y="14" width="18" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="5" y="7" width="14" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="7" y="3" width="10" height="4" rx="1" stroke="currentColor" stroke-width="1.5"/></svg>
                    </div>
                    <div class="failure-category-title">Foundation Failures</div>
                </div>
                <div class="failure-modes-grid">
                    <div class="failure-card">
                        <div class="failure-card-header">
                            <div class="failure-name">Foundation Rot</div>
                        </div>
                        <div class="failure-card-body">
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-symptoms">Symptoms</div>
                                <p>Can't find assets. Sweeps stopped running. Stashed work is unretrievable. Foundation exists but doesn't accelerate anything.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-cause">Cause</div>
                                <p>Storage Discipline collapsed. Sweeps deprioritized. Assets accumulated without organization.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-recovery">Recovery</div>
                                <p>Stop execution. Run a major Regroup. Rebuild retrieval systems before resuming. Foundation must be retrievable before it can be useful.</p>
                            </div>
                        </div>
                    </div>

                    <div class="failure-card">
                        <div class="failure-card-header">
                            <div class="failure-name">Foundation Bloat</div>
                        </div>
                        <div class="failure-card-body">
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-symptoms">Symptoms</div>
                                <p>Foundation is huge but nothing is usable. Assets exist but don't accelerate cycles. Searching takes longer than rebuilding.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-cause">Cause</div>
                                <p>Left-swinging without proper organization. Stashing without cleaning. Quantity over retrievability.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-recovery">Recovery</div>
                                <p>Audit Foundation. Delete or archive what hasn't been touched in 30+ days. Tighten Storage Discipline. Quality of retrieval over quantity of storage.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── CYCLE FAILURES ── -->
            <div class="failure-category failure-cat-cycle">
                <div class="failure-category-header">
                    <div class="failure-category-icon">
                        <svg viewBox="0 0 24 24" fill="none" width="18" height="18"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg>
                    </div>
                    <div class="failure-category-title">Cycle Failures</div>
                </div>
                <div class="failure-modes-grid">
                    <div class="failure-card">
                        <div class="failure-card-header">
                            <div class="failure-name">Cycle Stall</div>
                        </div>
                        <div class="failure-card-body">
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-symptoms">Symptoms</div>
                                <p>Same task spans multiple cycles. No completion. Endless "almost done." Work keeps expanding instead of resolving.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-cause">Cause</div>
                                <p>Target unclear. Pendulum not being applied. No binary decision forcing resolution. The cycle has no exit condition.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-recovery">Recovery</div>
                                <p>Deploy SPR. Re-lock Target. Define what "done" looks like in concrete, measurable terms. Resume only when the exit condition is binary.</p>
                            </div>
                        </div>
                    </div>

                    <div class="failure-card">
                        <div class="failure-card-header">
                            <div class="failure-name">Cycle Fragmentation</div>
                        </div>
                        <div class="failure-card-body">
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-symptoms">Symptoms</div>
                                <p>Starting many cycles, finishing none. High activity, low output. Feels productive but nothing ships.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-cause">Cause</div>
                                <p>Burst overuse without Pendulum discipline. Governor not engaged. Starting feels like progress. Finishing requires discipline.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-recovery">Recovery</div>
                                <p>Stop all cycles. Pick one. Complete it. Rebuild momentum from a single thread. Only resume parallel execution after single-thread discipline is restored.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── OPERATOR FAILURES ── -->
            <div class="failure-category failure-cat-operator">
                <div class="failure-category-header">
                    <div class="failure-category-icon">
                        <svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="1.5"/></svg>
                    </div>
                    <div class="failure-category-title">Operator Failures</div>
                </div>
                <div class="failure-modes-grid">
                    <div class="failure-card">
                        <div class="failure-card-header">
                            <div class="failure-name">Governor Blindness</div>
                        </div>
                        <div class="failure-card-body">
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-symptoms">Symptoms</div>
                                <p>Shipping broken work. Redoing completed work. Exhaustion without output. Moving faster than depth. The operator can't see their own limits.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-cause">Cause</div>
                                <p>Moving faster than depth. Not recognizing personal limits. The Governor exists but the operator has stopped listening to it.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-recovery">Recovery</div>
                                <p>Forced stop. Major Regroup. Recalibrate Governor triggers through honest assessment. Recognition is not failure — it is the system working.</p>
                            </div>
                        </div>
                    </div>

                    <div class="failure-card">
                        <div class="failure-card-header">
                            <div class="failure-name">Pendulum Paralysis</div>
                        </div>
                        <div class="failure-card-body">
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-symptoms">Symptoms</div>
                                <p>Work accumulates in limbo. Neither advanced nor stashed. Decision avoidance. Growing pile of "undecided" items that never resolve.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-cause">Cause</div>
                                <p>Fear of wrong decision. Target unclear. Attachment to options. The binary filter requires conviction the operator doesn't have.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-recovery">Recovery</div>
                                <p>Deploy SPR. Verify Target is locked. Force binary decision on the oldest limbo item. Repeat until the queue is clear. Speed of decision matters more than perfection of decision.</p>
                            </div>
                        </div>
                    </div>

                    <div class="failure-card">
                        <div class="failure-card-header">
                            <div class="failure-name">Triage Loops</div>
                        </div>
                        <div class="failure-card-body">
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-symptoms">Symptoms</div>
                                <p>Running Micro-Triage repeatedly with no resolution. Same problem resurfaces after each attempt. The loop becomes the work itself.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-cause">Cause</div>
                                <p>Problem is upstream. Vision or Target unclear. Triage can't fix foundation-level issues — it's a tactical tool being applied to a strategic problem.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-recovery">Recovery</div>
                                <p>Stop Triage. Step back to Vision and Target. Re-lock both. The problem isn't execution — it's direction. Fix direction first, then resume execution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── SYSTEM FAILURES ── -->
            <div class="failure-category failure-cat-system">
                <div class="failure-category-header">
                    <div class="failure-category-icon">
                        <svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><line x1="12" y1="9" x2="12" y2="13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><line x1="12" y1="17" x2="12.01" y2="17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                    </div>
                    <div class="failure-category-title">System Failures</div>
                </div>
                <div class="failure-modes-grid">
                    <div class="failure-card">
                        <div class="failure-card-header">
                            <div class="failure-name">Compounding Reversal</div>
                        </div>
                        <div class="failure-card-body">
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-symptoms">Symptoms</div>
                                <p>Later projects take longer than earlier ones. Efficiency decreasing instead of increasing. The compounding curve inverts.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-cause">Cause</div>
                                <p>Foundation not being fed. Outputs not returning to Foundation. Bridge opportunities missed. The feedback loop is broken.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-recovery">Recovery</div>
                                <p>Audit the feedback loop. Identify where outputs are leaking instead of feeding Foundation. Restore the Build Loop. Every output must return.</p>
                            </div>
                        </div>
                    </div>

                    <div class="failure-card">
                        <div class="failure-card-header">
                            <div class="failure-name">Parallel Collapse</div>
                        </div>
                        <div class="failure-card-body">
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-symptoms">Symptoms</div>
                                <p>Multi-Thread Workflow breaks down. Projects collide. Context lost between screens. Switching costs return despite AI support.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-cause">Cause</div>
                                <p>Too many active projects. Governor not engaged. Routing not being used. The operator exceeded Multi-Thread capacity.</p>
                            </div>
                            <div class="failure-detail">
                                <div class="failure-detail-label failure-detail-label-recovery">Recovery</div>
                                <p>Reduce to single thread. Complete one project fully. Re-establish Multi-Thread with fewer active projects. The Governor must be recalibrated for parallel limits.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── RECOVERY PRINCIPLE ── -->
            <div class="recovery-principle">
                <div class="recovery-principle-header">
                    <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M22 11.08V12a10 10 0 11-5.93-9.14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><polyline points="22 4 12 14.01 9 11.01" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span>Recovery Principle</span>
                </div>
                <div class="recovery-principle-body">
                    <div class="recovery-steps">
                        <div class="recovery-step">
                            <div class="recovery-step-num">01</div>
                            <div class="recovery-step-action">Stop</div>
                            <div class="recovery-step-desc">SPR or Governor intervention. Halt execution before the failure compounds further.</div>
                            <div class="recovery-step-arrow"><svg viewBox="0 0 24 24" fill="none" width="16" height="16"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        </div>
                        <div class="recovery-step">
                            <div class="recovery-step-num">02</div>
                            <div class="recovery-step-action">Identify</div>
                            <div class="recovery-step-desc">Which layer failed? Foundation, Cycle, Operator, or System. The symptom reveals the source.</div>
                            <div class="recovery-step-arrow"><svg viewBox="0 0 24 24" fill="none" width="16" height="16"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        </div>
                        <div class="recovery-step">
                            <div class="recovery-step-num">03</div>
                            <div class="recovery-step-action">Address</div>
                            <div class="recovery-step-desc">Fix the failed layer directly. Do not resume execution while the layer is broken.</div>
                            <div class="recovery-step-arrow"><svg viewBox="0 0 24 24" fill="none" width="16" height="16"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        </div>
                        <div class="recovery-step">
                            <div class="recovery-step-num">04</div>
                            <div class="recovery-step-action">Resume</div>
                            <div class="recovery-step-desc">Only after the layer is restored. The system is resilient because Foundation catches everything.</div>
                        </div>
                    </div>
                    <div class="recovery-note"><strong>Failures cost time, not work.</strong> Foundation catches everything. Nothing is lost.</div>
                </div>
            </div>

        </div>
    </section>


    <!-- ════════════════════════════════════════
         05 — EVIDENCE
         ════════════════════════════════════════ -->
    <section class="cem-section cem-section-glow-left cem-section-glow-right" data-section>
        <div class="container-xl">
            <div class="cem-section-label">05 — Validation</div>
            <h2>Evidence</h2>
            <p class="cem-section-desc">Validated through git commit analysis across 10 production systems built between October 2025 and January 2026.</p>

            <div class="evidence-grid">
                <div class="evidence-card"><div class="evidence-val">2,561</div><div class="evidence-lbl">Total Commits</div></div>
                <div class="evidence-card"><div class="evidence-val">10</div><div class="evidence-lbl">Production Systems</div></div>
                <div class="evidence-card"><div class="evidence-val">195K</div><div class="evidence-lbl">Largest Codebase LOC</div></div>
                <div class="evidence-card"><div class="evidence-val">9.6%</div><div class="evidence-lbl">Defect Rate</div></div>
                <div class="evidence-card"><div class="evidence-val">5 days</div><div class="evidence-lbl">Mature Phase MVP</div></div>
                <div class="evidence-card"><div class="evidence-val">89</div><div class="evidence-lbl">Peak Daily Commits</div></div>
                <div class="evidence-card"><div class="evidence-val">60%</div><div class="evidence-lbl">Parallel Work Days</div></div>
                <div class="evidence-card"><div class="evidence-val">5</div><div class="evidence-lbl">Max Concurrent Projects</div></div>
            </div>

            <div class="compression-layout">
                <div class="compression-panel">
                    <div class="compression-title">Time Compression</div>
                    <div class="compression-subtitle">How CEM's compounding effect accelerates delivery over time</div>

                    <div class="phase-row phase-early">
                        <div class="phase-header">
                            <div class="phase-label">Early<span class="phase-label-sub">Projects 1–3</span></div>
                            <div class="phase-days">14–21 days</div>
                        </div>
                        <div class="phase-bar"><div class="phase-fill"><span>Foundation filling — every pattern is new</span><span class="phase-fill-loc">~3K LOC/day</span></div></div>
                    </div>

                    <div class="phase-row phase-mid">
                        <div class="phase-header">
                            <div class="phase-label">Mid<span class="phase-label-sub">Projects 4–7</span></div>
                            <div class="phase-days">5–10 days</div>
                        </div>
                        <div class="phase-bar"><div class="phase-fill"><span>Compounding kicks</span><span class="phase-fill-loc">~6K LOC/day</span></div></div>
                    </div>

                    <div class="phase-row phase-mature">
                        <div class="phase-header">
                            <div class="phase-label">Mature<span class="phase-label-sub">Projects 8–10</span></div>
                            <div class="phase-days">5 days</div>
                        </div>
                        <div class="phase-bar"><div class="phase-fill"><span>Full compounding</span><span class="phase-fill-loc">8K+</span></div></div>
                    </div>

                    <div class="compression-annotation">
                        <svg viewBox="0 0 20 20" fill="none"><path d="M10 16V4m0 0l4 4m-4-4L6 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Early-phase projects take 14–21 days. Mature-phase projects ship in 5. <span class="annotation-highlight">Foundation carries the difference.</span></span>
                    </div>
                </div>

                <div class="metric-stack">
                    <div class="metric-card">
                        <div class="metric-icon"><svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M3 17l4-4 4 4 4-8 6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div><div class="metric-val">61.5</div><div class="metric-lbl">Peak Commits / Day</div><div class="metric-context">Jan 1–6 peak sprint. Up from 4.6/day in October. 89 commits on the single highest day.</div></div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-icon"><svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M21 12a9 9 0 11-6.22-8.56" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M21 3v6h-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div><div class="metric-val">13.4×</div><div class="metric-lbl">Compounding Multiplier</div><div class="metric-context">Portal Stealth peak sprint hit 61.5 commits/day — up from 4.6/day in the first phase. Each cycle fed Foundation. Foundation fed the next cycle.</div></div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-icon"><svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div><div class="metric-val">60%</div><div class="metric-lbl">Parallel Execution Days</div><div class="metric-context">Over half of all development days involved work on multiple systems simultaneously.</div></div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-icon"><svg viewBox="0 0 24 24" fill="none" width="20" height="20"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg></div>
                        <div><div class="metric-val">9.6%</div><div class="metric-lbl">Defect Rate</div><div class="metric-context">Sub-10% across 10 systems. Governor's scope control prevents quality collapse as output compounds.</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         06 — THEORETICAL FOUNDATION
         ════════════════════════════════════════ -->
    <section class="cem-section section-alt cem-section-glow-right" data-section>
        <div class="container-xl">
            <div class="cem-section-label">06 — Theoretical Foundation</div>
            <h2>Why CEM Exists</h2>
            <p class="cem-section-desc">Five constraints shaped software development for decades. Between 2023 and 2025, all five dissolved. The methodologies built for the old constraints were designed for a world that no longer exists.</p>

            <div class="constraint-headers">
                <div></div>
                <div class="constraint-col-old">The Old Constraint</div>
                <div></div>
                <div class="constraint-col-new">The New Physics</div>
            </div>

            <div class="constraint-stack">
                <div class="constraint-row">
                    <div class="constraint-num">01</div>
                    <div class="constraint-cell-old">
                        <h4>Context Switching Is Expensive</h4>
                        <p>23 min to resume an interrupted task. Sprints exist to protect context.</p>
                        <div class="dissolved-badge">Dissolved</div>
                    </div>
                    <div class="constraint-arrow">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="constraint-cell-new">
                        <h4>Context Switching Becomes Cheap</h4>
                        <p>AI preserves context. Switching costs approach zero. Parallel execution inverts from pathological to optimal.</p>
                    </div>
                </div>

                <div class="constraint-row">
                    <div class="constraint-num">02</div>
                    <div class="constraint-cell-old">
                        <h4>Expertise Is Scarce</h4>
                        <p>Knowledge concentrates in individuals. Accessing it requires coordinating with specialists.</p>
                        <div class="dissolved-badge">Dissolved</div>
                    </div>
                    <div class="constraint-arrow">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="constraint-cell-new">
                        <h4>Expertise Bottlenecks Dissolve</h4>
                        <p>AI encodes knowledge across domains. The solo operator has a cross-functional team in their pocket.</p>
                    </div>
                </div>

                <div class="constraint-row">
                    <div class="constraint-num">03</div>
                    <div class="constraint-cell-old">
                        <h4>Learning Requires Time Away</h4>
                        <p>Study, practice, then apply. Onboarding takes months.</p>
                        <div class="dissolved-badge">Dissolved</div>
                    </div>
                    <div class="constraint-arrow">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="constraint-cell-new">
                        <h4>Learning and Doing Merge</h4>
                        <p>Just-in-time knowledge replaces just-in-case knowledge. Ship while learning. Output and capability grow together.</p>
                    </div>
                </div>

                <div class="constraint-row">
                    <div class="constraint-num">04</div>
                    <div class="constraint-cell-old">
                        <h4>Building Is Expensive</h4>
                        <p>Skilled human time over extended periods. Validate before building because building wrong wastes resources.</p>
                        <div class="dissolved-badge">Dissolved</div>
                    </div>
                    <div class="constraint-arrow">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="constraint-cell-new">
                        <h4>Building Costs Collapse</h4>
                        <p>Tasks requiring days now take hours. Build to validate. The artifact is the experiment.</p>
                    </div>
                </div>

                <div class="constraint-row">
                    <div class="constraint-num">05</div>
                    <div class="constraint-cell-old">
                        <h4>Coordination Scales Quadratically</h4>
                        <p>Brooks's Law: communication channels grow n(n-1)/2. Teams spend more time coordinating than building.</p>
                        <div class="dissolved-badge">Dissolved</div>
                    </div>
                    <div class="constraint-arrow">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="constraint-cell-new">
                        <h4>Coordination Overhead Evaporates</h4>
                        <p>Solo operators: zero coordination overhead. AI extends capacity far enough that solo execution covers what previously required teams.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         07 — CEM vs. EOS
         ════════════════════════════════════════ -->
    <section class="cem-section cem-section-glow-left" data-section>
        <div class="container-xl">
            <div class="cem-section-label">07 — Comparison</div>
            <h2>CEM vs. EOS</h2>
            <p class="cem-section-desc">EOS was designed for leadership teams in growing organizations. CEM was designed for operators building with AI. Different constraints, different solutions.</p>

            <div class="compare-layout">
                <div class="compare-col compare-col-eos">
                    <div class="compare-header"><h3>EOS</h3><span class="compare-tag compare-tag-muted">Traditional</span></div>
                    <div class="compare-rows">
                        <div class="compare-row"><div class="compare-row-label">Implementation</div><div class="compare-row-val">Implementer-guided</div></div>
                        <div class="compare-row"><div class="compare-row-label">Team Structure</div><div class="compare-row-val">Leadership team + organization</div></div>
                        <div class="compare-row"><div class="compare-row-label">Planning Horizon</div><div class="compare-row-val">90-day Rocks</div></div>
                        <div class="compare-row"><div class="compare-row-label">Meeting Cadence</div><div class="compare-row-val">Weekly L10, Quarterly, Annual</div></div>
                        <div class="compare-row"><div class="compare-row-label">Decision Method</div><div class="compare-row-val">IDS (Identify, Discuss, Solve)</div></div>
                        <div class="compare-row"><div class="compare-row-label">Maintenance</div><div class="compare-row-val">Ongoing via meetings</div></div>
                        <div class="compare-row"><div class="compare-row-label">Throttle</div><div class="compare-row-val">None explicit</div></div>
                        <div class="compare-row"><div class="compare-row-label">Problem-Solving</div><div class="compare-row-val">IDS process</div></div>
                        <div class="compare-row"><div class="compare-row-label">Parallel Execution</div><div class="compare-row-val">Not addressed</div></div>
                        <div class="compare-row"><div class="compare-row-label">Backlog</div><div class="compare-row-val">Maintained</div></div>
                    </div>
                </div>

                <div class="compare-col compare-col-cem">
                    <div class="compare-header"><h3>CEM</h3><span class="compare-tag compare-tag-pink">AI-Native</span></div>
                    <div class="compare-rows">
                        <div class="compare-row"><div class="compare-row-label">Implementation</div><div class="compare-row-val">Self-implemented</div></div>
                        <div class="compare-row"><div class="compare-row-label">Team Structure</div><div class="compare-row-val">Solo operator or micro team (1–4) + AI</div></div>
                        <div class="compare-row"><div class="compare-row-label">Planning Horizon</div><div class="compare-row-val">Nested cycles (emergent)</div></div>
                        <div class="compare-row"><div class="compare-row-label">Meeting Cadence</div><div class="compare-row-val">Bi-weekly + Monthly Regroups</div></div>
                        <div class="compare-row"><div class="compare-row-label">Decision Method</div><div class="compare-row-val">Pendulum (binary: advance or stash)</div></div>
                        <div class="compare-row"><div class="compare-row-label">Maintenance</div><div class="compare-row-val">Sweeps (continuous parallel)</div></div>
                        <div class="compare-row"><div class="compare-row-label">Throttle</div><div class="compare-row-val">Governor</div></div>
                        <div class="compare-row"><div class="compare-row-label">Problem-Solving</div><div class="compare-row-val">Micro-Triage</div></div>
                        <div class="compare-row"><div class="compare-row-label">Parallel Execution</div><div class="compare-row-val">Multi-Thread Workflow</div></div>
                        <div class="compare-row"><div class="compare-row-label">Backlog</div><div class="compare-row-val">Does not exist</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         CTA
         ════════════════════════════════════════ -->
    <section class="cem-cta">
        <div class="container-xl">
            <h2>You begin small.<br>The system <span class="cta-highlight">scales you.</span></h2>
            <p>The Compounding Execution Method compounds output, capability, and returns over time.</p>
            <div class="cta-actions">
                <a href="#framework" class="cta-btn cta-btn-primary">Explore the Framework <svg viewBox="0 0 16 16" fill="none"><path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                <a href="<?= siteUrl('ecosystem') ?>" class="cta-btn cta-btn-secondary">See It In Production <svg viewBox="0 0 16 16" fill="none"><path d="M4 12l8-8m0 0H6m6 0v6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
            </div>
        </div>
    </section>

    <div class="cem-footer">
        <div class="container-xl">CEM Framework v4.0 — Production</div>
    </div>

    <!-- Footer -->
    <?php include ROOT_PATH . '/views/components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // ── Navbar scroll ──
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 50);
        });

        // ── Section reveal on scroll ──
        const sections = document.querySelectorAll('.cem-section');
        const sectionObs = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        sections.forEach(el => sectionObs.observe(el));

        // ── Tab switching ──
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
                btn.classList.add('active');
                document.getElementById('tab-' + btn.dataset.tab).classList.add('active');
                closeMechDetail();
            });
        });

        // ── Mechanism expand/collapse ──
        const mechData = {
            foundation: {
                title: 'Foundation',
                text: '<p>The Foundation is not a passive archive. It is active fuel. Templates, patterns, stored work, retrievable stash. All of it feeds upward into every cycle.</p><p>The system is self-feeding: Foundation grows, cycles accelerate, output increases, output feeds Foundation, Foundation grows again. This is how project one takes weeks and project ten takes hours.</p><p>Organization is by retrievability, not taxonomy. Medium does not matter. Accessibility does. The Foundation lives distributed across repos, docs, conversation history — anywhere AI can access.</p>',
                props: [
                    { label: 'Type', val: 'Active fuel — not passive archive' },
                    { label: 'Belongs', val: 'Cross-project transfer value, reusable, validated' },
                    { label: 'Does Not Belong', val: 'One-off solutions, context-dependent, unvalidated' },
                    { label: 'Key Rule', val: 'Organized by retrievability, not taxonomy' },
                ]
            },
            pendulum: {
                title: 'Pendulum',
                text: '<p>The Pendulum is the binary decision engine at the core of CEM. Every output from every cycle faces one question: does this advance the Target, or does it go to Foundation?</p><p>There is no middle state. No "maybe later." Right swing means it advances. Left swing means it gets stashed retrievably. The amplitude increases within cycles — each right swing swings further than the last. Compounding happens inside cycles, not just between them.</p><p>The Pendulum is fractal. It applies at task level, cycle level, and strategic level.</p>',
                props: [
                    { label: 'Type', val: 'Binary filter — advance or stash' },
                    { label: 'Trigger', val: 'Every decision point' },
                    { label: 'Output', val: 'Right swing → Target / Left swing → Foundation' },
                    { label: 'Key Rule', val: 'No middle state. Fractal across all scales.' },
                ]
            },
            'nested-cycles': {
                title: 'Nested Cycles',
                text: '<p>Work operates in self-similar cycles timeboxed by complexity. Micro (15 min–3 hours, task-level), Sprint (1–2 days, component), Build (1–7 days, system piece), Integration (1–14 days, full system).</p><p>Each cycle follows the same rhythm: Build, Clean, Improve, Document, Complete, Repeat. The nesting is emergent from execution, not imposed by planning.</p>',
                props: [
                    { label: 'Micro', val: '15 min – 3 hours (task)' },
                    { label: 'Sprint', val: '1–2 days (component)' },
                    { label: 'Build', val: '1–7 days (system piece)' },
                    { label: 'Integration', val: '1–14 days (full system)' },
                ]
            },
            sweeps: {
                title: 'Sweeps',
                text: '<p>Background maintenance running parallel to primary work. Update drives, documentation, storage. Keep everything retrievable. Without Sweeps, the Foundation degrades and the system slows.</p><p>Sweeps can surface items that need routing. Sweeps don\'t route — that\'s a separate decision. Sweeps are fractal: they apply at task, sprint, and project level.</p>',
                props: [
                    { label: 'Type', val: 'Continuous parallel maintenance' },
                    { label: 'Scope', val: 'Drives, documentation, storage, Foundation hygiene' },
                    { label: 'Relationship', val: 'Sweeps maintain Storage Discipline → enables Foundation → enables compounding' },
                    { label: 'Key Rule', val: 'Fractal — task, sprint, and project level' },
                ]
            },
            patterns: {
                title: 'Patterns',
                text: '<p>Reusable solutions stored in Foundation. Each pattern captured includes: Problem (what it solves), Context (where it applies and doesn\'t), Implementation (how to execute), Variations (known alternatives), Failure modes (how it breaks).</p><p>Patterns are living. Continuously refined through use. Every time a pattern is applied, it gets better. Patterns that are superseded are naturally deprecated through Regroup (recognition) and Sweeps (removal).</p>',
                props: [
                    { label: 'Captures', val: 'Problem, Context, Implementation, Variations, Failure Modes' },
                    { label: 'Lifecycle', val: 'Living — continuously refined through use' },
                    { label: 'Deprecation', val: 'Via Regroup (recognition) + Sweeps (removal)' },
                    { label: 'Key Rule', val: 'Every application makes the pattern better' },
                ]
            },
            regroup: {
                title: 'Regroup',
                text: '<p>Regular intervals to step back and review the entire ecosystem. Every 2 weeks: review active projects, check Foundation, identify what slipped, clear the mind. Every 30–45 days: technical debt elimination, Vision reassessment, Target recalibration, Foundation audit.</p><p>Due to the pace of the ecosystem, problems compound fast. If you aren\'t regrouping holistically, you will miss something. Sweeps keep Foundation clean. Regroup keeps you aware.</p>',
                props: [
                    { label: 'Bi-weekly', val: 'Review projects, check Foundation, clear the mind' },
                    { label: 'Monthly', val: 'Tech debt, Vision reassessment, Target recalibration' },
                    { label: 'Relationship', val: 'Sweeps = Foundation hygiene / Regroup = operator awareness' },
                    { label: 'Key Rule', val: 'Problems compound fast — regroup or miss them' },
                ]
            },
            governor: {
                title: 'Governor',
                text: '<p>Macro-level awareness of system limits. The system is built for compounding. But compounding without awareness creates fragility. You will build too much too fast. You will outpace yourself.</p><p>When that happens, slow down. This is recognition, not failure. Focus is load-bearing. Too fast fractures focus. The Governor is always present — a continuous macro-level awareness that improves through experience. It is not triggered; it is continuous.</p>',
                props: [
                    { label: 'Type', val: 'Continuous system awareness' },
                    { label: 'Triggers', val: 'Nothing working, repeating tasks, confused in real-time, building faster than understanding' },
                    { label: 'Calibrated', val: 'Recognize triggers before crises, throttle without prompts' },
                    { label: 'Miscalibrated', val: 'Ship broken work, redo completed work, exhausted without output' },
                ]
            },
            'micro-triage': {
                title: 'Micro-Triage',
                text: '<p>Tactical problem-solving loop deployed when execution spirals. When multiple systems, parallel threads, and overwhelming complexity hit — deploy SPR first, then enter the loop:</p><p>1. Reground (what are we making?) → 2. State (explain to AI) → 3. Mirror (AI explains what it sees) → 4. Align (discuss the gap) → 5. Diagnose (what AI did vs. asked) → 6. Path (what to fix) → 7. Repeat until resolved.</p><p>Timeboxed 15–30 minutes max. If unresolved: escalate to Stop and Recap or Stop. Run It Back. Micro-Triage sits below the Governor — Governor is macro awareness, Micro-Triage is tactical intervention.</p>',
                props: [
                    { label: 'Steps', val: 'Reground → State → Mirror → Align → Diagnose → Path → Repeat' },
                    { label: 'Timebox', val: '15–30 minutes max' },
                    { label: 'Escalation', val: 'Stop and Recap (repairable) → Stop. Run It Back (poisoned)' },
                    { label: 'Key Rule', val: 'Sits below Governor — tactical, not strategic' },
                ]
            },
            'multi-thread': {
                title: 'Multi-Thread Workflow',
                text: '<p>Physical environment architecture for parallel execution. Left screen: research, slower tasks — can divert attention, return without getting lost. Middle screen: primary work, high activity, actual execution. Right screen: AI/tools, the AI interaction layer.</p><p>The unison creates a looping workflow. Projects don\'t need to relate but can if needed. This is how parallel execution becomes operationally real — 60% of active days involve work on multiple systems simultaneously.</p>',
                props: [
                    { label: 'Left Screen', val: 'Research, slower tasks' },
                    { label: 'Middle Screen', val: 'Primary execution' },
                    { label: 'Right Screen', val: 'AI / tools interaction' },
                    { label: 'Evidence', val: '60% of active days show parallel work across repos' },
                ]
            },
            bridge: {
                title: 'Bridge',
                text: '<p>The ability to connect information, tasks, relationships, and projects across the ecosystem. Bridge is concept and action. Everything can connect to something else.</p><p>When something reaches 80%, built by you or found externally, it becomes a bridge candidate: Recognize (80% reached) → Reflect (look for connection points) → Connect (bridge to another project) → Accelerate (connection compounds growth, feeds Foundation).</p><p>Build adds to Foundation. Bridge multiplies it. You scale without always building from scratch.</p>',
                props: [
                    { label: 'Steps', val: 'Recognize → Reflect → Connect → Accelerate' },
                    { label: 'Trigger', val: 'Something reaches 80% — built or found' },
                    { label: 'vs Foundation', val: 'Build adds to Foundation / Bridge multiplies it' },
                    { label: 'Key Rule', val: 'Recognition over reinvention' },
                ]
            },
            scaffold: {
                title: 'Scaffold',
                text: '<p>Instant structure for any project, task, or idea. You never start from zero. Foundation provides the skeleton: templates, patterns, stored work, prior context. Scaffold auto-generates the basic frame.</p><p>Spin up fast, build on top. Scaffold isn\'t precious. It\'s disposable structure. If it fails, spin down just as fast. Scaffold creates. Bridge connects. Scaffold can become a bridge point.</p>',
                props: [
                    { label: 'Type', val: 'Instant structure from Foundation' },
                    { label: 'Source', val: 'Templates, patterns, stored work, prior context' },
                    { label: 'Relationship', val: 'Scaffold creates / Bridge connects' },
                    { label: 'Key Rule', val: 'Disposable — spin up fast, spin down fast' },
                ]
            },
            burst: {
                title: 'Burst',
                text: '<p>Survival mechanism. Controlled explosion when stuck or lost in possibilities. When stuck, lost, overwhelmed: Internalize (contract, gather energy), Explode (release outward), Scatter (splatter 80% projects/concepts/ideas toward Target).</p><p>The ecosystem absorbs the scatter. Foundation catches what doesn\'t advance. Pendulum sorts: advance or stash. Nothing is lost.</p>',
                props: [
                    { label: 'Steps', val: 'Internalize → Explode → Scatter toward Target' },
                    { label: 'Deploy When', val: 'Paralyzed by options, energy present but unfocused' },
                    { label: 'Do NOT Deploy', val: 'Target unclear, already overwhelmed (use Micro-Triage)' },
                    { label: 'Evidence', val: '3–5 iterations come out fast, at least one near 80%' },
                ]
            }
        };

        document.querySelectorAll('.mech-card').forEach(card => {
            card.addEventListener('click', () => {
                const key = card.dataset.mech;
                const data = mechData[key];
                if (!data) return;
                document.getElementById('mech-detail-title').textContent = data.title;
                document.getElementById('mech-detail-text').innerHTML = data.text;
                document.getElementById('mech-detail-props').innerHTML = data.props.map(p =>
                    '<div class="mech-prop"><span class="mech-prop-label">' + p.label + '</span><span class="mech-prop-val">' + p.val + '</span></div>'
                ).join('');
                document.getElementById('mech-detail').classList.add('active');
                document.getElementById('mech-detail').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            });
        });

        function closeMechDetail() {
            const el = document.getElementById('mech-detail');
            if (el) el.classList.remove('active');
        }

        // ── Case Study Expand/Collapse ──
        function toggleCase(num) {
            const card = document.getElementById('case-' + num);
            card.classList.toggle('expanded');
        }
    </script>
</body>
</html>
