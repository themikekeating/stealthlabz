<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#e5025d">
    <title>CEM — The Compounding Execution Method | Stealth Labz</title>
    <meta name="description" content="A universal execution operating system for AI-native builders. The methodology behind 596,903 lines of production code and 10 systems shipped.">
    <link rel="canonical" href="https://stealthlabz.com/cem">

    <meta property="og:title" content="CEM — The Compounding Execution Method | Stealth Labz">
    <meta property="og:description" content="A universal execution operating system for AI-native builders. 596,903 lines of code. 10 production systems. One methodology.">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/cem">
    <meta property="og:type" content="article">

    <link rel="icon" type="image/x-icon" href="/cdn/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/cdn/css/global.css">

    <style>
        /* ========================================
           CEM Page — Styles
           ======================================== */

        /* --- Hero --- */
        .cem-hero {
            padding: 10rem 0 6rem;
            position: relative;
            overflow: hidden;
        }
        .cem-hero::before {
            content: '';
            position: absolute;
            top: -200px;
            right: -200px;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, var(--accent-pink-glow) 0%, transparent 70%);
            pointer-events: none;
        }
        .cem-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-family: var(--font-mono);
            font-size: 0.8rem;
            color: var(--accent-pink);
            background: var(--accent-pink-bg-light);
            border: 1px solid var(--accent-pink-border-strong);
            border-radius: 100px;
            padding: 0.4rem 1rem;
            margin-bottom: 2rem;
        }
        .cem-hero-badge .dot {
            width: 6px;
            height: 6px;
            background: var(--accent-pink);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }
        .cem-hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: -0.03em;
        }
        .cem-hero h1 .highlight {
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .cem-hero-sub {
            font-size: 1.15rem;
            color: var(--text-secondary);
            max-width: 640px;
            line-height: 1.8;
            margin-bottom: 2.5rem;
        }

        /* Hero stats — dominant number */
        .cem-hero-stats {
            display: flex;
            align-items: flex-end;
            gap: 3rem;
            flex-wrap: wrap;
        }
        .cem-stat-hero {
            /* The dominant stat */
        }
        .cem-stat-hero .cem-stat-value {
            font-family: var(--font-mono);
            font-size: clamp(3.5rem, 7vw, 5.5rem);
            font-weight: 800;
            color: var(--text-primary);
            line-height: 1;
            letter-spacing: -0.03em;
        }
        .cem-stat-hero .cem-stat-value .accent {
            color: var(--accent-pink);
        }
        .cem-stat-hero .cem-stat-label {
            font-family: var(--font-mono);
            font-size: 0.8rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-top: 0.5rem;
        }
        .cem-stats-secondary {
            display: flex;
            gap: 2.5rem;
            flex-wrap: wrap;
        }
        .cem-stats-secondary .cem-stat-value {
            font-family: var(--font-mono);
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
        }
        .cem-stats-secondary .cem-stat-value .accent {
            color: var(--accent-pink);
        }
        .cem-stats-secondary .cem-stat-label {
            font-size: 0.7rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-top: 0.15rem;
        }

        /* --- Sections --- */
        .cem-section {
            padding: 6rem 0;
            position: relative;
        }
        .cem-section.alt {
            background: var(--bg-secondary);
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }
        .cem-section.evidence-section {
            padding: 8rem 0;
        }
        .cem-section.pillars-section {
            padding: 8rem 0;
        }
        .cem-section-label {
            font-family: var(--font-mono);
            font-size: 0.75rem;
            color: var(--accent-pink);
            text-transform: uppercase;
            letter-spacing: 0.12em;
            margin-bottom: 1rem;
        }
        .cem-section h2 {
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
        }
        .cem-section-intro {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 720px;
            line-height: 1.8;
            margin-bottom: 3rem;
        }

        /* --- Cards (Requirements) --- */
        .cem-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 2.5rem;
            transition: all 0.3s;
            height: 100%;
        }
        .cem-card:hover {
            background: var(--bg-hover);
            border-color: var(--accent-pink-border-strong);
            transform: translateY(-2px);
        }
        .cem-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--accent-pink-bg-light);
            border: 1px solid var(--accent-pink-border-strong);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: var(--accent-pink);
            font-size: 1.25rem;
        }
        .cem-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }
        .cem-card p {
            color: var(--text-secondary);
            font-size: 0.95rem;
            line-height: 1.7;
        }

        /* --- Framework Cards (Pillars) --- */
        .pillars-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }
        .framework-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
        }
        .framework-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--accent-pink), transparent);
        }
        .framework-card:hover {
            border-color: var(--accent-pink-border-strong);
            transform: translateY(-2px);
        }
        .framework-card .fc-number {
            font-family: var(--font-mono);
            font-size: 0.85rem;
            color: var(--accent-pink);
            text-transform: uppercase;
            letter-spacing: 0.15em;
            margin-bottom: 0.75rem;
            font-weight: 500;
        }
        .framework-card h3 {
            font-size: 1.35rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }
        .framework-card .fc-desc {
            color: var(--text-secondary);
            font-size: 0.95rem;
            line-height: 1.7;
        }
        .framework-card .fc-evidence {
            margin-top: 1.25rem;
            padding: 1rem;
            background: var(--accent-pink-bg);
            border: 1px solid var(--accent-pink-border);
            border-radius: 10px;
            font-family: var(--font-mono);
            font-size: 0.8rem;
            color: var(--text-secondary);
            line-height: 1.6;
        }
        .framework-card .fc-evidence strong {
            color: var(--accent-pink);
        }

        /* --- Evidence Hero Callout --- */
        .evidence-callout {
            padding: 3rem 0 4rem;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 4rem;
        }
        .evidence-callout-number {
            font-family: var(--font-mono);
            font-size: clamp(1.5rem, 3vw, 2.25rem);
            font-weight: 700;
            color: var(--accent-pink);
            line-height: 1.3;
            margin-bottom: 0.75rem;
        }
        .evidence-callout-context {
            font-size: 1rem;
            color: var(--text-muted);
            max-width: 600px;
        }

        /* --- Tables --- */
        .cem-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 1.5rem 0;
        }
        .cem-table th {
            font-family: var(--font-mono);
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-muted);
            padding: 0.75rem 1rem;
            border-bottom: 1px solid var(--border-color);
            text-align: left;
        }
        .cem-table td {
            padding: 0.85rem 1rem;
            border-bottom: 1px solid var(--border-browser);
            font-size: 0.95rem;
            color: var(--text-secondary);
        }
        .cem-table tr:hover td {
            background: var(--bg-subtle);
        }
        .cem-table .val {
            font-family: var(--font-mono);
            color: var(--text-primary);
            font-weight: 600;
        }
        .cem-table .accent { color: var(--accent-pink); }
        .cem-table .green { color: var(--accent-green); }

        .table-label {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .table-footnote {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-top: 0.75rem;
        }

        /* --- Visual containers --- */
        .cem-visual {
            margin: 4rem 0;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid var(--border-browser);
        }
        .cem-visual img {
            width: 100%;
            height: auto;
            display: block;
        }
        .cem-visual-caption {
            padding: 0.75rem 1.25rem;
            font-family: var(--font-mono);
            font-size: 0.75rem;
            color: var(--text-muted);
            background: var(--bg-subtle);
            border-top: 1px solid var(--border-browser);
        }
        .cem-visual.compact {
            max-width: 720px;
        }
        .cem-visual.centered {
            margin-left: auto;
            margin-right: auto;
        }

        /* --- Not Grid --- */
        .not-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        .not-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 14px;
            padding: 2rem;
        }
        .not-card h4 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--text-primary);
        }
        .not-card h4 span { color: var(--accent-pink); }
        .not-card p {
            font-size: 0.9rem;
            color: var(--text-secondary);
            line-height: 1.7;
            margin: 0;
        }

        /* --- CTA --- */
        .cem-cta {
            padding: 6rem 0;
            text-align: center;
        }
        .cem-cta h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .cem-cta p {
            color: var(--text-secondary);
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        /* --- Responsive --- */
        @media (max-width: 991px) {
            .pillars-grid {
                grid-template-columns: 1fr;
            }
        }
        @media (max-width: 768px) {
            .cem-hero { padding: 8rem 0 4rem; }
            .cem-hero-stats { gap: 2rem; }
            .cem-stat-hero .cem-stat-value { font-size: 3rem; }
            .cem-stats-secondary { gap: 1.5rem; }
            .framework-card { padding: 2rem; }
            .cem-section { padding: 4rem 0; }
            .cem-section.evidence-section { padding: 5rem 0; }
            .cem-section.pillars-section { padding: 5rem 0; }
            .evidence-callout { padding: 2rem 0 3rem; margin-bottom: 3rem; }
            .cem-visual { margin: 3rem 0; }
        }
    </style>
</head>
<body>
    <div class="grid-bg"></div>

    <?php include ROOT_PATH . '/views/components/header.php'; ?>

    <!-- ============================================
         HERO
         ============================================ -->
    <section class="cem-hero">
        <div class="container-xl">
            <div class="fade-up">
                <div class="cem-hero-badge">
                    <span class="dot"></span>
                    Methodology
                </div>
                <h1>The Compounding<br><span class="highlight">Execution Method</span></h1>
                <p class="cem-hero-sub">
                    An execution operating system for AI-native builders. The methodology behind 596,903 lines of production code and 10 shipped systems.
                </p>
                <div class="cem-hero-stats">
                    <!-- Dominant stat -->
                    <div class="cem-stat-hero">
                        <div class="cem-stat-value">70<span class="accent">→</span>5</div>
                        <div class="cem-stat-label">Days to Production</div>
                    </div>
                    <!-- Supporting stats -->
                    <div class="cem-stats-secondary">
                        <div class="cem-stat">
                            <div class="cem-stat-value">596<span class="accent">,</span>903</div>
                            <div class="cem-stat-label">Lines of Code</div>
                        </div>
                        <div class="cem-stat">
                            <div class="cem-stat-value">10</div>
                            <div class="cem-stat-label">Production Systems</div>
                        </div>
                        <div class="cem-stat">
                            <div class="cem-stat-value">4.9<span class="accent">x</span></div>
                            <div class="cem-stat-label">Velocity Increase</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         WHAT IS CEM
         ============================================ -->
    <section class="cem-section alt">
        <div class="container-xl">
            <div class="row align-items-center">
                <div class="col-lg-6 fade-up">
                    <div class="cem-section-label">Overview</div>
                    <h2>What Is CEM?</h2>
                    <p class="cem-section-intro" style="margin-bottom:0;">
                        The Compounding Execution Method is an execution framework for the AI era. Not project management. Not agile with a new name. An operating system for how a single operator — or a small team — ships production software at a pace that was previously impossible.
                    </p>
                </div>
                <div class="col-lg-6 fade-up stagger-1">
                    <div class="cem-visual" style="margin:0;">
                        <img src="/cdn/images/cem/cem_core_loop.svg"
                             alt="The CEM Core Loop: Vision, Target, Foundation, and Pendulum forming a compounding cycle"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         REQUIREMENTS
         ============================================ -->
    <section class="cem-section">
        <div class="container-xl">
            <div class="fade-up">
                <div class="cem-section-label">Prerequisites</div>
                <h2>Requirements</h2>
                <p class="cem-section-intro">CEM operates within two prerequisites. Without both, the methodology doesn't function.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 fade-up stagger-1">
                    <div class="cem-card">
                        <div class="cem-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83"/></svg>
                        </div>
                        <h3>AI as Enabling Environment</h3>
                        <p>AI is not a tool within CEM — it is the container that makes the system possible. An environment changes what tasks are possible. Context switching cost approaches zero. Parallel execution becomes practical.</p>
                    </div>
                </div>
                <div class="col-md-6 fade-up stagger-2">
                    <div class="cem-card">
                        <div class="cem-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h3>The Operator</h3>
                        <p>CEM is operator-dependent. It amplifies domain knowledge, decision-making speed, and accumulated patterns — it does not replace them. Deep domain understanding, resourcefulness, and sustained focus are prerequisites.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         FOUR PILLARS
         ============================================ -->
    <section class="cem-section alt pillars-section">
        <div class="container-xl">
            <div class="fade-up">
                <div class="cem-section-label">Core Framework</div>
                <h2>The Four Pillars</h2>
                <p class="cem-section-intro">Vision sets direction. Target defines scope. Foundation provides fuel. The Pendulum makes decisions.</p>
            </div>

            <!-- Core Triangle Visual — section anchor -->
            <div class="cem-visual compact centered fade-up" style="margin-bottom:3.5rem;margin-top:0;">
                <img src="/cdn/images/cem/cem_core_triangle.svg"
                     alt="The Core Triangle: Vision at apex, Foundation and Pendulum at base, Target in center"
                     loading="lazy">
            </div>

            <!-- 2x2 Grid -->
            <div class="pillars-grid">
                <div class="framework-card fade-up">
                    <div class="fc-number">Pillar 01</div>
                    <h3>Vision</h3>
                    <p class="fc-desc">The future state. Undefined by design — not a spec, not a wireframe. The confidence that the operator, working within the AI environment, will reach a destination that can't be fully described in advance.</p>
                </div>

                <div class="framework-card fade-up">
                    <div class="fc-number">Pillar 02</div>
                    <h3>Target</h3>
                    <p class="fc-desc">The operational filter. Defined at 80% of a known reference — a market leader, a proven competitor. Execute to functional completeness, then let the remaining 20% emerge as differentiation.</p>
                    <div class="fc-evidence">
                        <strong>80% Premise →</strong> This is why CEM produces 2–5 day MVPs in the mature phase.
                    </div>
                </div>

                <div class="framework-card fade-up">
                    <div class="fc-number">Pillar 03</div>
                    <h3>Foundation</h3>
                    <p class="fc-desc">The accumulated asset base. Templates, patterns, code libraries, solved problems. Every completed cycle feeds back into the Foundation. This is where the compounding happens.</p>
                    <div class="fc-evidence">
                        <strong>Evidence →</strong> First vertical: 70 days. By month four: 9 verticals deployed in a single day. Same operator. Larger Foundation.
                    </div>
                </div>

                <div class="framework-card fade-up">
                    <div class="fc-number">Pillar 04</div>
                    <h3>The Pendulum</h3>
                    <p class="fc-desc">The binary decision mechanism. Every piece of work gets one question: does this advance the Target? Yes → execute immediately. No → stash retrievably in the Foundation. No backlog.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         EVIDENCE
         ============================================ -->
    <section class="cem-section evidence-section">
        <div class="container-xl">
            <div class="fade-up">
                <div class="cem-section-label">Evidence</div>
                <h2>Git-Audited Proof</h2>
                <p class="cem-section-intro">Every claim is backed by production data — commits, timestamps, database records, transaction logs.</p>
            </div>

            <!-- Hero Callout — the number that stops the scroll -->
            <div class="evidence-callout fade-up">
                <div class="evidence-callout-number">
                    1 operator. 23.1 commits/day.<br>
                    A 4-person team did 13.5.
                </div>
                <div class="evidence-callout-context">
                    71% higher daily velocity. 75% fewer contributors. Git-audited across 64 days of production.
                </div>
            </div>

            <!-- Velocity + Production Output -->
            <div class="row g-4 mb-5">
                <div class="col-lg-6 fade-up">
                    <div class="table-label">Velocity Comparison</div>
                    <table class="cem-table">
                        <thead>
                            <tr><th>Period</th><th>Commits</th><th>Days</th><th>Commits/Day</th><th>Contributors</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pre-CEM</td>
                                <td class="val">702</td>
                                <td class="val">52</td>
                                <td class="val">13.5</td>
                                <td class="val">4</td>
                            </tr>
                            <tr>
                                <td>Post-CEM</td>
                                <td class="val accent">1,480</td>
                                <td class="val">64</td>
                                <td class="val accent">23.1</td>
                                <td class="val green">1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6 fade-up">
                    <div class="table-label">Production Output</div>
                    <table class="cem-table">
                        <thead>
                            <tr><th>Metric</th><th>Value</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Production systems</td><td class="val">10</td></tr>
                            <tr><td>Git-tracked LOC</td><td class="val accent">596,903</td></tr>
                            <tr><td>Leads processed</td><td class="val">22,406</td></tr>
                            <tr><td>Webhook events</td><td class="val">46,878</td></tr>
                            <tr><td>E-commerce orders</td><td class="val">11,686</td></tr>
                            <tr><td>Revenue through systems</td><td class="val green">$938,624</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Inversion Visual -->
            <div class="cem-visual fade-up">
                <img src="/cdn/images/cem/cem_inversion.svg"
                     alt="The Inversion: consumption collapsed while output exploded — the X-pattern"
                     loading="lazy">
                <div class="cem-visual-caption">
                    The Inversion — As consumption dropped to near-zero, production output exploded to 545 commits/month
                </div>
            </div>

            <!-- Time Compression + Git Projects -->
            <div class="row g-4">
                <div class="col-lg-6 fade-up">
                    <div class="table-label">Time Compression</div>
                    <table class="cem-table">
                        <thead>
                            <tr><th>Project</th><th>Days to Production</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>First vertical (auto_rocket)</td><td class="val">70 days</td></tr>
                            <tr><td>Second vertical (health_rocket)</td><td class="val">57 days</td></tr>
                            <tr><td>January 20, 2025 batch</td><td class="val accent">9 verticals, 1 day</td></tr>
                            <tr><td>Go Customer Reports</td><td class="val green">5 days</td></tr>
                            <tr><td>HOA Attorneys</td><td class="val green">8 days</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6 fade-up">
                    <div class="table-label">Git-Tracked Projects</div>
                    <table class="cem-table">
                        <thead>
                            <tr><th>Project</th><th>LOC</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Portal Stealth</td><td class="val">194,954</td></tr>
                            <tr><td>Videos From Santa</td><td class="val">61,359</td></tr>
                            <tr><td>GoQuoteRocket US</td><td class="val">39,750</td></tr>
                            <tr><td>Go Customer Reports</td><td class="val">29,193</td></tr>
                            <tr><td><strong>Total (9 projects)</strong></td><td class="val accent"><strong>469,071</strong></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Compounding Trajectory Visual -->
            <div class="cem-visual fade-up">
                <img src="/cdn/images/cem/cem_compounding.svg"
                     alt="Compounding Trajectory: velocity accelerating from Project 1 (70 days) to Project 10 (5 days)"
                     loading="lazy">
                <div class="cem-visual-caption">
                    Time Compression — Project 1 took 70 days. Project 10 took 5. Same operator, larger Foundation.
                </div>
            </div>

            <!-- Inflection Window Visual -->
            <div class="cem-visual fade-up">
                <img src="/cdn/images/cem/cem_inflection.svg"
                     alt="The Inflection Window: 7-day gap followed by explosion to 44.6 commits/day"
                     loading="lazy">
                <div class="cem-visual-caption">
                    The Inflection Window — A 7-day gap preceded an explosion to 44.6 commits/day, establishing a permanent new baseline
                </div>
            </div>

            <!-- Traditional Equivalent -->
            <div class="traditional-summary fade-up">
                <div class="traditional-summary-label">Traditional Equivalent</div>
                <div class="traditional-summary-value"><span class="accent">$600K – $900K+</span> in development costs</div>
                <div class="traditional-summary-context">
                    At industry rates ($150–$200/hr), this output would require a 4-6 person team working 12–18 months.
                    Produced with ~$1,500 in direct costs.
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         CEM IS NOT
         ============================================ -->
    <section class="cem-section alt">
        <div class="container-xl">
            <div class="fade-up">
                <div class="cem-section-label">Positioning</div>
                <h2>CEM Is Not</h2>
            </div>
            <div class="not-grid fade-up">
                <div class="not-card">
                    <h4>Not <span>Agile</span></h4>
                    <p>Agile coordinates teams around user stories and sprints. CEM eliminates coordination overhead by concentrating execution in a single operator amplified by AI.</p>
                </div>
                <div class="not-card">
                    <h4>Not <span>Lean Startup</span></h4>
                    <p>Lean validates before building. CEM builds as validation — when build cost is low enough, the build is the experiment.</p>
                </div>
                <div class="not-card">
                    <h4>Not <span>No-Code</span></h4>
                    <p>CEM produces real code — 596,903 lines of it. The operator uses AI to translate domain expertise directly into production systems.</p>
                </div>
                <div class="not-card">
                    <h4>Not <span>Theoretical</span></h4>
                    <p>Every mechanism was extracted from observed practice. The evidence is in the git history — 2,182 commits across 10 production systems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         CTA
         ============================================ -->
    <section class="cem-cta">
        <div class="container-xl">
            <div class="fade-up">
                <h2>Interested in CEM?</h2>
                <p>See the methodology in action through the production systems it produced.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="/cdn-cgi/l/email-protection#d1b8bfb7be91a2a5b4b0bda5b9bdb0b3abffb2bebc" class="btn-glow">
                        Get in Touch
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="<?= siteUrl('brands') ?>" class="btn-outline">See Our Brands →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ROOT_PATH . '/views/components/footer.php'; ?>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
        const fadeEls = document.querySelectorAll('.fade-up');
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        fadeEls.forEach(el => obs.observe(el));
    </script>
</body>
</html>
