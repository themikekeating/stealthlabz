<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#d90158">
    <title><?= htmlspecialchars($page['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page['description']) ?>">
    <link rel="canonical" href="https://stealthlabz.com/method">

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
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="dot"></span>
                    Execution Framework
                </div>
                <h1>The <span class="highlight">Compounding Execution</span> Method</h1>
                <p class="cem-hero-sub">
                    Refined over 18 years of execution across 70+ projects, 8+ verticals, and 2 continents. Practiced for nearly two decades. Formalized in 2026. A framework for high-output execution in the AI era.
                </p>
                <p class="cem-hero-tagline">
                    You begin small. The system scales you.
                </p>
                <a href="#origin" class="btn-glow">
                    Read the Story
                    <svg viewBox="0 0 16 16" fill="none" width="16" height="16"><path d="M8 3v10m0 0l-4-4m4 4l4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>

            <!-- STATS BAR -->
            <div class="cem-stats-bar">
                <div class="cem-stat">
                    <div class="cem-stat-val">18</div>
                    <div class="cem-stat-lbl">Years Refined</div>
                </div>
                <div class="cem-stat">
                    <div class="cem-stat-val">70+</div>
                    <div class="cem-stat-lbl">Projects</div>
                </div>
                <div class="cem-stat">
                    <div class="cem-stat-val">10</div>
                    <div class="cem-stat-lbl">Production Systems</div>
                </div>
                <div class="cem-stat">
                    <div class="cem-stat-val">13.4×</div>
                    <div class="cem-stat-lbl">Compounding Multiplier</div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         01 — THE ORIGIN
         ════════════════════════════════════════ -->
    <section class="cem-section section-alt" id="origin" data-section>
        <div class="container-xl">
            <div class="cem-section-label">01 — Origin</div>
            <h2>Built through execution. Named in hindsight.</h2>
            <p class="cem-section-desc">CEM wasn't designed in a boardroom. It was extracted from 18 years of building systems that had to work — across industries, across continents, under real constraints. The methodology was practiced long before it had a name.</p>

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
                        <p>A company founded, scaled to 50 people, and acquired — built on a single operating principle: systematize everything, then scale. Scalable operational systems and technical infrastructure across local search, lead generation, and client services. The instinct that would become CEM was already operating: build systems, not projects. Every engagement produced reusable assets. Every process got documented and templated. The pattern was there — it just didn't have a name yet.</p>
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
                        <p>Post-acquisition, the operator moved into direct response infrastructure — building and operating across 16 domains, 63 funnels, and 6+ brands simultaneously across the US and South Africa. Tracking architecture, pixel implementation, postback systems, CRM integration, multi-brand fulfillment. The operational density kept compounding: every new brand launched faster because the infrastructure from the last one carried forward. Foundation before it was called Foundation.</p>
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
                        <p>Full operations across two continents. 71,000+ transaction log entries. 11-vertical lead generation. During this period, an external dev shop was engaged to build core platform infrastructure — $82,521 over 22 months, producing 22 database tables. That output became the baseline against which everything that followed would be measured.</p>
                        <div class="origin-evidence">
                            <span>71K+ transactions</span>
                            <span>11 verticals</span>
                            <span>$82K dev shop spend</span>
                        </div>
                    </div>
                </div>

                <!-- Phase 3 — The Build -->
                <div class="origin-phase origin-phase-highlight">
                    <div class="origin-phase-marker">
                        <div class="origin-phase-dot dot-pink"></div>
                        <div class="origin-phase-line"></div>
                    </div>
                    <div class="origin-phase-content">
                        <div class="origin-phase-date">Oct 2025 – Feb 2026</div>
                        <h3>The Build Period</h3>
                        <p>Everything changed. AI dissolved the constraints that had required teams of specialists. An operator with zero prior software engineering experience — who couldn't use git in September 2025 — shipped 10 production systems, 596K lines of code, and 2,561 commits in 119 days.</p>
                        <p>It didn't start clean. October was team-dependent — 70% external, 30% operator. By January, it had inverted: 93% operator, 7% external. New projects launched at 100% solo. The external dev shop's 22 tables in 4 months became 135 tables in 33 days at 785× lower cost.</p>
                        <p>Velocity compounded: 4.6 commits/day in the first phase → 61.5 commits/day at peak. Rework dropped 40% as patterns solidified. A 5-day MVP shipped a functional product with market validation — 100% solo. The patterns that had been operating unnamed for 18 years became visible, measurable, and undeniable.</p>
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
                        <p>The methodology was recognized retroactively through forensic data analysis — two-server audit, 17 source documents, git-verified metrics across all 10 repositories. The execution patterns that had been compounding since 2007 were extracted, named, and documented as a formal framework. CEM wasn't invented. It was discovered.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         02 — WHY CEM EXISTS
         ════════════════════════════════════════ -->
    <section class="cem-section" data-section>
        <div class="container-xl">
            <div class="cem-section-label">02 — The Shift</div>
            <h2>Why CEM Exists</h2>
            <p class="cem-section-desc">Five constraints shaped how software got built for decades. Between 2023 and 2025, all five dissolved. The frameworks designed for the old constraints — Scrum, Lean Startup, EOS — were built for a world that no longer exists.</p>

            <div class="constraint-stack">
                <div class="constraint-row">
                    <div class="constraint-num">01</div>
                    <div class="constraint-cell-old">
                        <h4>Context Switching Is Expensive</h4>
                        <p>23 minutes to resume an interrupted task. Sprints exist to protect context.</p>
                    </div>
                    <div class="constraint-arrow">
                        <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="constraint-cell-new">
                        <h4>Context Switching Becomes Cheap</h4>
                        <p>AI preserves context. Switching costs approach zero. Parallel execution becomes optimal.</p>
                    </div>
                </div>

                <div class="constraint-row">
                    <div class="constraint-num">02</div>
                    <div class="constraint-cell-old">
                        <h4>Expertise Is Scarce</h4>
                        <p>Knowledge concentrates in individuals. Accessing it requires coordinating with specialists.</p>
                    </div>
                    <div class="constraint-arrow">
                        <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="constraint-cell-new">
                        <h4>Expertise Bottlenecks Dissolve</h4>
                        <p>AI encodes cross-domain knowledge. The solo operator has a cross-functional team on demand.</p>
                    </div>
                </div>

                <div class="constraint-row">
                    <div class="constraint-num">03</div>
                    <div class="constraint-cell-old">
                        <h4>Learning Requires Time Away</h4>
                        <p>Study, practice, then apply. Onboarding takes months.</p>
                    </div>
                    <div class="constraint-arrow">
                        <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="constraint-cell-new">
                        <h4>Learning and Doing Merge</h4>
                        <p>Just-in-time knowledge replaces just-in-case. Ship while learning. Output and capability grow together.</p>
                    </div>
                </div>

                <div class="constraint-row">
                    <div class="constraint-num">04</div>
                    <div class="constraint-cell-old">
                        <h4>Building Is Expensive</h4>
                        <p>Skilled human time over extended periods. Validate before building because building wrong wastes resources.</p>
                    </div>
                    <div class="constraint-arrow">
                        <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
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
                    </div>
                    <div class="constraint-arrow">
                        <svg viewBox="0 0 24 24" fill="none" width="20" height="20"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
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
         03 — THE FRAMEWORK
         ════════════════════════════════════════ -->
    <section class="cem-section section-alt" id="framework" data-section>
        <div class="container-xl">
            <div class="cem-section-label">03 — The Framework</div>
            <h2>What CEM Is</h2>
            <p class="cem-section-desc">A framework for high-output execution. Solo operators and micro teams use AI as an enabling environment to produce compounding forward progress through accumulated assets, accelerating cycles, and binary decision-making against a defined target.</p>

            <!-- CORE RULES -->
            <div class="core-rules">
                <div class="core-rule">
                    <h4>No Backlog</h4>
                    <p>If it matters, it advances toward Target or stashes to Foundation. There is no queue.</p>
                </div>
                <div class="core-rule">
                    <h4>No Long Planning</h4>
                    <p>Planning beyond 14 days is waste. Structure emerges from execution, not roadmaps.</p>
                </div>
                <div class="core-rule">
                    <h4>The Drift Tax</h4>
                    <p>~12–15% of what AI reports as complete will need correction. The system absorbs this. The better you execute CEM, the lower the tax.</p>
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
                        <p>CEM targets 80% of the market's benchmark. The system closes the gap. Each cycle feeds the system. The next cycle starts further ahead.</p>
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

            <!-- THE 11 MECHANISMS -->
            <div class="mechanisms-overview">
                <h3 class="framework-group-title">The 11 Mechanisms</h3>

                <div class="mech-group">
                    <div class="mech-group-label">Core Engine</div>
                    <div class="mech-list">
                        <div class="mech-item">
                            <div class="mech-num">01</div>
                            <div class="mech-body">
                                <h4>Foundation</h4>
                                <p>Active fuel. Templates, patterns, stored work. Every cycle draws from it and feeds back into it.</p>
                            </div>
                        </div>
                        <div class="mech-item">
                            <div class="mech-num">02</div>
                            <div class="mech-body">
                                <h4>The Pendulum</h4>
                                <p>Binary filter. Does this advance Target? Yes = advance. No = stash retrievably. No limbo.</p>
                            </div>
                        </div>
                        <div class="mech-item">
                            <div class="mech-num">03</div>
                            <div class="mech-body">
                                <h4>Nested Cycles</h4>
                                <p>Self-similar timeboxed cycles: Micro (hours), Sprint (1–2 days), Build (1–7 days), Integration (1–14 days).</p>
                            </div>
                        </div>
                        <div class="mech-item">
                            <div class="mech-num">04</div>
                            <div class="mech-body">
                                <h4>Sweeps</h4>
                                <p>Background maintenance running parallel. Keeps Foundation retrievable.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mech-group">
                    <div class="mech-group-label">Growth</div>
                    <div class="mech-list">
                        <div class="mech-item">
                            <div class="mech-num">05</div>
                            <div class="mech-body">
                                <h4>Regroup</h4>
                                <p>Step back every 2 weeks (projects) and 30–45 days (ecosystem). Clear Foundation, clear mind.</p>
                            </div>
                        </div>
                        <div class="mech-item">
                            <div class="mech-num">06</div>
                            <div class="mech-body">
                                <h4>The Governor</h4>
                                <p>Macro awareness of system limits. Speed is capability; judgment is knowing when not to use it.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mech-group">
                    <div class="mech-group-label">Problem-Solving</div>
                    <div class="mech-list">
                        <div class="mech-item">
                            <div class="mech-num">07</div>
                            <div class="mech-body">
                                <h4>Micro-Triage</h4>
                                <p>Tactical loop: Reground → State → Mirror → Align → Diagnose → Path → Repeat. 15–30 min max.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mech-group">
                    <div class="mech-group-label">Execution Architecture</div>
                    <div class="mech-list">
                        <div class="mech-item">
                            <div class="mech-num">08</div>
                            <div class="mech-body">
                                <h4>Multi-Thread Workflow</h4>
                                <p>Physical screen layout for parallel execution. Left (research), Middle (primary), Right (AI).</p>
                            </div>
                        </div>
                        <div class="mech-item">
                            <div class="mech-num">09</div>
                            <div class="mech-body">
                                <h4>Bridge</h4>
                                <p>Connect information, tasks, and projects across the ecosystem. Build adds; Bridge multiplies.</p>
                            </div>
                        </div>
                        <div class="mech-item">
                            <div class="mech-num">10</div>
                            <div class="mech-body">
                                <h4>Scaffold</h4>
                                <p>Instant structure from Foundation. Every project builds on what already exists. Disposable if it fails.</p>
                            </div>
                        </div>
                        <div class="mech-item">
                            <div class="mech-num">11</div>
                            <div class="mech-body">
                                <h4>Burst</h4>
                                <p>Controlled explosion when stuck. Internalize → Explode → Scatter. Pendulum sorts the output.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WHEN THINGS GO SIDEWAYS -->
            <div class="tactics-overview">
                <h3 class="framework-group-title">When Things Go Sideways</h3>
                <p class="tactics-intro-text">Light fix → Medium fix → Nuclear reset.</p>
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

            <!-- REQUIREMENTS -->
            <div class="requirements-strip">
                <div class="req-item">
                    <div class="req-label">R1: AI as Enabler</div>
                    <p>AI is the environment, not a tool. It removes traditional constraints: context switching cost, expertise bottlenecks, linear effort scaling.</p>
                </div>
                <div class="req-item">
                    <div class="req-label">R2: The Operator</div>
                    <p>Deep understanding before action. Resourcefulness. Self-reliance. Risk acceptance. Sustained focus. No safety net.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         04 — PROOF
         ════════════════════════════════════════ -->
    <section class="cem-section" data-section>
        <div class="container-xl">
            <div class="cem-section-label">04 — Proof</div>
            <h2>Validated in Production</h2>
            <p class="cem-section-desc">CEM wasn't validated through theory. It was validated across 10 production systems, 2,561 commits, and 596K lines of code — with every metric git-verified and forensically audited.</p>

            <!-- OPERATOR PROGRESSION -->
            <div class="cem-proof-block">
                <h3>The Operator Progression</h3>
                <p class="proof-desc">From team-dependent to near-solo in 4 months. An operator with no prior software engineering experience.</p>
                <div class="progression-strip">
                    <div class="prog-month">
                        <div class="prog-bar" style="--fill: 30%;"></div>
                        <div class="prog-data">
                            <span class="prog-pct">~30%</span>
                            <span class="prog-label">Oct 2025</span>
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

            <!-- COMPARISON -->
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
         05 — WHAT'S COMING
         ════════════════════════════════════════ -->
    <section class="cem-section section-alt" data-section>
        <div class="container-xl">
            <div class="cem-section-label">05 — What's Next</div>
            <h2>CEM is just getting started.</h2>
            <p class="cem-section-desc">The methodology has been formalized. Now it's being packaged for operators, teams, and organizations ready to execute at this level.</p>

            <div class="coming-grid">
                <div class="coming-card">
                    <div class="coming-icon">
                        <svg viewBox="0 0 24 24" fill="none" width="28" height="28"><path d="M4 19.5A2.5 2.5 0 016.5 17H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="coming-status">Coming Soon</div>
                    <h3>The Book</h3>
                    <p>The complete methodology. Every mechanism, every application, every failure mode — documented from 18 years of execution and validated across 10 production systems. The definitive reference for CEM.</p>
                </div>

                <div class="coming-card">
                    <div class="coming-icon">
                        <svg viewBox="0 0 24 24" fill="none" width="28" height="28"><rect x="2" y="3" width="20" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                    </div>
                    <div class="coming-status">Coming Soon</div>
                    <h3>Training Course</h3>
                    <p>CEM applied to your team, your stack, your business model. Learn the framework, implement the mechanisms, and build the Foundation that makes everything after it faster.</p>
                </div>

                <div class="coming-card">
                    <div class="coming-icon">
                        <svg viewBox="0 0 24 24" fill="none" width="28" height="28"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><polyline points="14 2 14 8 20 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><polyline points="10 9 9 9 8 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="coming-status">Coming Soon</div>
                    <h3>Technical Research Paper</h3>
                    <p>The forensic analysis behind CEM. Git-verified metrics, two-server audit, commit velocity benchmarks, rework trajectory analysis, and industry comparisons — all sourced from 17 primary documents.</p>
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
            <div class="cem-cta-actions">
                <a href="<?= siteUrl('contact') ?>" class="cem-cta-btn cem-cta-btn-primary">Get In Touch <svg viewBox="0 0 16 16" fill="none" width="16" height="16"><path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                <a href="<?= siteUrl('ecosystem') ?>" class="cem-cta-btn cem-cta-btn-secondary">See It In Production <svg viewBox="0 0 16 16" fill="none" width="16" height="16"><path d="M4 12l8-8m0 0H6m6 0v6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
            </div>
        </div>
    </section>

    <div class="cem-footer">
        <div class="container-xl">CEM Framework — Production</div>
    </div>

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