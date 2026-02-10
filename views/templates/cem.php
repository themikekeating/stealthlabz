<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#d90158">
    <title>CEM — The Compounding Execution Method | Stealth Labz</title>
    <meta name="description" content="A universal execution operating system for AI-native builders. The methodology behind 2,500+ production commits and 10 systems shipped.">
    <link rel="canonical" href="https://stealthlabz.com/cem">

    <meta property="og:title" content="CEM — The Compounding Execution Method | Stealth Labz">
    <meta property="og:description" content="A universal execution operating system for AI-native builders. 2,500+ commits. 10 production systems. One methodology.">
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
           CEM Page — Styles (v5)
           ======================================== */

        /* --- Gold accent vars --- */
        :root {
            --accent-gold: #C6A050;
            --accent-gold-glow: rgba(198,160,80,0.4);
            --gradient-gold: linear-gradient(135deg, #C6A050, #E8C96D);
        }

        /* --- Hero --- */
        .cem-hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 7rem 0 0;
            position: relative;
            overflow: hidden;
        }
        .cem-hero::before {
            content: '';
            position: absolute;
            top: -30%; right: -10%;
            width: 70%; height: 140%;
            background:
                radial-gradient(ellipse at 40% 50%, var(--accent-pink-glow) 0%, transparent 50%),
                radial-gradient(ellipse at 70% 30%, var(--accent-gold-glow) 0%, transparent 50%);
            opacity: 0.1;
            pointer-events: none;
        }
        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            width: 100%;
        }
        .hero-content { position: relative; z-index: 2; }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            padding: 0.5rem 1rem;
            border-radius: 100px;
            font-size: 0.8rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
            width: fit-content;
            font-family: var(--font-mono);
            letter-spacing: 0.02em;
        }
        .hero-badge .dot {
            width: 8px; height: 8px;
            background: var(--accent-green);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }
        .cem-hero h1 {
            font-size: clamp(2.75rem, 5vw, 4.25rem);
            font-weight: 800;
            line-height: 1.08;
            letter-spacing: -0.035em;
            margin-bottom: 1.5rem;
        }
        .cem-hero h1 .highlight {
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .cem-hero-sub {
            font-size: 1.125rem;
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: 2rem;
        }
        .hero-cta {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--gradient-pink);
            color: #fff;
            padding: 0.875rem 1.75rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border: none;
            cursor: pointer;
        }
        .hero-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(217,1,88,0.3);
        }
        .hero-cta svg { width: 16px; height: 16px; }

        /* Geometric element */
        .hero-geometric {
            position: relative;
            width: 100%;
            aspect-ratio: 1;
            max-width: 520px;
            justify-self: end;
        }
        .geo-ring-outer {
            position: absolute;
            inset: 0;
            border: 1px solid rgba(198,160,80,0.18);
            border-radius: 50%;
            animation: spinSlow 60s linear infinite;
        }
        .geo-ring-outer::before {
            content: '';
            position: absolute;
            top: -4px; left: 50%; transform: translateX(-50%);
            width: 8px; height: 8px;
            background: var(--accent-gold);
            border-radius: 50%;
            box-shadow: 0 0 14px var(--accent-gold), 0 0 30px rgba(198,160,80,0.3);
        }
        .geo-ring-mid {
            position: absolute;
            inset: 12%;
            border: 1px solid rgba(198,160,80,0.1);
            border-radius: 50%;
            animation: spinSlow 45s linear infinite reverse;
        }
        .geo-ring-mid::before {
            content: '';
            position: absolute;
            bottom: -3px; right: 20%;
            width: 6px; height: 6px;
            background: rgba(198,160,80,0.7);
            border-radius: 50%;
            box-shadow: 0 0 8px rgba(198,160,80,0.3);
        }
        .geo-ring-mid::after {
            content: '';
            position: absolute;
            top: 30%; left: -3px;
            width: 5px; height: 5px;
            background: rgba(217,1,88,0.5);
            border-radius: 50%;
            box-shadow: 0 0 8px rgba(217,1,88,0.2);
        }
        .geo-ring-inner {
            position: absolute;
            inset: 25%;
            border: 1px dashed rgba(198,160,80,0.08);
            border-radius: 50%;
            animation: spinSlow 30s linear infinite;
        }
        .geo-core {
            position: absolute;
            inset: 35%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .geo-core svg { width: 100%; height: 100%; }
        .geo-node {
            position: absolute;
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            padding: 0.4rem 0.75rem;
            border-radius: 6px;
            font-family: var(--font-mono);
            font-size: 0.65rem;
            color: var(--text-muted);
            letter-spacing: 0.04em;
            text-transform: uppercase;
            white-space: nowrap;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            opacity: 0;
            animation: fadeInUp 0.5s ease forwards;
        }
        .geo-node::before {
            content: '';
            position: absolute;
            width: 4px; height: 4px;
            background: var(--accent-gold);
            border-radius: 50%;
            top: 50%; transform: translateY(-50%);
            box-shadow: 0 0 6px rgba(198,160,80,0.4);
        }
        .geo-node.left::before { left: -8px; }
        .geo-node.right::before { right: -8px; }
        .geo-node.top::before { left: 50%; top: -8px; transform: translateX(-50%); }
        .geo-node.bottom::before { left: 50%; bottom: -8px; top: auto; transform: translateX(-50%); }
        .geo-node-1 { top: 8%; right: 5%; animation-delay: 0.3s; }
        .geo-node-2 { top: 35%; right: -5%; animation-delay: 0.5s; }
        .geo-node-3 { bottom: 25%; right: 0; animation-delay: 0.7s; }
        .geo-node-4 { bottom: 8%; left: 15%; animation-delay: 0.9s; }
        .geo-node-5 { top: 22%; left: -2%; animation-delay: 1.1s; }
        .geo-glow {
            position: absolute;
            inset: 15%;
            background:
                radial-gradient(circle at 40% 40%, rgba(217,1,88,0.06) 0%, transparent 60%),
                radial-gradient(circle at 65% 65%, rgba(198,160,80,0.06) 0%, transparent 60%);
            border-radius: 50%;
            filter: blur(40px);
            pointer-events: none;
        }
        @keyframes spinSlow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Stats bar */
        .hero-stats-bar {
            margin-top: 4rem;
            padding-top: 2.5rem;
            border-top: 1px solid var(--border-color);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }
        .hero-stat-val {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            font-family: var(--font-mono);
            line-height: 1.1;
        }
        .hero-stat:nth-child(even) .hero-stat-val {
            color: var(--accent-gold);
        }
        .hero-stat-lbl {
            font-size: 0.7rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.06em;
            margin-top: 0.35rem;
        }

        /* --- Sections --- */
        .cem-section {
            padding: 6rem 0;
            position: relative;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        .cem-section.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .cem-section.alt {
            background: var(--bg-secondary);
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }
        .cem-section-label {
            font-family: var(--font-mono);
            font-size: 0.75rem;
            color: var(--accent-pink);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 0.75rem;
        }
        .cem-section h2 {
            font-size: 2.25rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 0.75rem;
        }
        .cem-section-desc {
            font-size: 1rem;
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 2rem;
            max-width: 600px;
        }

        /* --- Tab Bar --- */
        .tab-bar {
            display: flex;
            gap: 0.25rem;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 2.5rem;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }
        .tab-bar::-webkit-scrollbar { display: none; }
        .tab-btn {
            background: none;
            border: none;
            padding: 0.75rem 1.25rem;
            font-family: var(--font-body, 'Inter', sans-serif);
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--text-muted);
            cursor: pointer;
            white-space: nowrap;
            position: relative;
            transition: color 0.2s ease;
        }
        .tab-btn::after {
            content: '';
            position: absolute;
            bottom: -1px; left: 0; right: 0;
            height: 2px;
            background: var(--accent-pink);
            transform: scaleX(0);
            transition: transform 0.2s ease;
        }
        .tab-btn:hover { color: var(--text-secondary); }
        .tab-btn.active { color: var(--text-primary); }
        .tab-btn.active::after { transform: scaleX(1); }

        /* --- Tab Panels --- */
        .tab-panel { display: none; }
        .tab-panel.active { display: block; animation: fadeIn 0.3s ease; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }

        /* --- Above the System — 3-col cards with icon glow --- */
        .above-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.75rem;
        }
        .above-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 1.5rem;
            transition: all 0.25s ease;
            position: relative;
            overflow: hidden;
        }
        .above-card:hover { border-color: var(--border-subtle); transform: translateY(-2px); }
        .above-card .card-icon-wrap {
            width: 64px; height: 64px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.25rem;
            position: relative;
        }
        .above-card .card-icon-wrap::before {
            content: '';
            position: absolute;
            inset: -8px;
            border-radius: 20px;
            filter: blur(16px);
            opacity: 0.5;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }
        .above-card:hover .card-icon-wrap::before { opacity: 0.75; }
        .above-card .card-icon-wrap svg {
            width: 28px; height: 28px;
            position: relative;
            z-index: 1;
        }
        .icon-vision {
            background: var(--accent-pink-bg-medium);
            border: 1px solid var(--accent-pink-border);
        }
        .icon-vision::before { background: rgba(229, 2, 93, 0.2); }
        .icon-vision svg { color: var(--accent-pink); }
        .icon-target {
            background: rgba(109, 74, 140, 0.12);
            border: 1px solid rgba(109, 74, 140, 0.2);
        }
        .icon-target::before { background: rgba(109, 74, 140, 0.2); }
        .icon-target svg { color: var(--accent-purple); }
        .icon-compound {
            background: rgba(34, 197, 94, 0.08);
            border: 1px solid rgba(34, 197, 94, 0.15);
        }
        .icon-compound::before { background: rgba(34, 197, 94, 0.15); }
        .icon-compound svg { color: var(--accent-green); }
        .above-card .card-badge {
            font-family: var(--font-mono);
            font-size: 0.6rem;
            color: var(--accent-purple);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            background: rgba(109, 74, 140, 0.08);
            border: 1px solid rgba(109, 74, 140, 0.12);
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 0.5rem;
        }
        .above-card h3 {
            font-size: 1.05rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .above-card p {
            font-size: 0.8rem;
            color: var(--text-secondary);
            line-height: 1.6;
        }

        /* --- Requirements — 2-col cards --- */
        .req-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .req-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 1.5rem;
            transition: all 0.25s ease;
            position: relative;
        }
        .req-card:hover { border-color: var(--border-subtle); transform: translateY(-2px); }
        .req-tag {
            font-family: var(--font-mono);
            font-size: 0.65rem;
            color: var(--accent-pink);
            letter-spacing: 0.08em;
            margin-bottom: 0.75rem;
            display: inline-block;
            background: var(--accent-pink-bg);
            border: 1px solid var(--accent-pink-border);
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
        }
        .req-card h3 {
            font-size: 1.05rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .req-card p {
            font-size: 0.8rem;
            color: var(--text-secondary);
            line-height: 1.6;
        }

        /* --- Tactics — Escalation Flow --- */
        .tactics-intro {
            font-size: 0.9rem;
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 2rem;
            max-width: 500px;
        }
        .tactics-flow {
            display: grid;
            grid-template-columns: 1fr auto 1fr auto 1fr;
            gap: 0;
            align-items: stretch;
        }
        .tactic-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 1.5rem;
            position: relative;
            transition: all 0.25s ease;
        }
        .tactic-card:hover { border-color: var(--border-subtle); transform: translateY(-2px); }
        .tactic-card::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            border-radius: 10px 10px 0 0;
        }
        .tactic-card.severity-1::after { background: rgba(109, 74, 140, 0.5); }
        .tactic-card.severity-2::after { background: var(--accent-pink); opacity: 0.6; }
        .tactic-card.severity-3::after { background: var(--accent-pink); }
        .tactic-severity {
            font-family: var(--font-mono);
            font-size: 0.6rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-bottom: 0.75rem;
        }
        .severity-1 .tactic-severity { color: var(--accent-purple); }
        .severity-2 .tactic-severity { color: var(--accent-pink); opacity: 0.7; }
        .severity-3 .tactic-severity { color: var(--accent-pink); }
        .tactic-card h3 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.4rem;
        }
        .tactic-card .tactic-action {
            font-family: var(--font-mono);
            font-size: 0.7rem;
            color: var(--text-muted);
            margin-bottom: 0.6rem;
            letter-spacing: 0.02em;
        }
        .tactic-card p {
            font-size: 0.8rem;
            color: var(--text-secondary);
            line-height: 1.55;
        }
        .tactic-arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 0.5rem;
        }
        .tactic-arrow svg {
            width: 28px; height: 28px;
            color: rgba(109, 74, 140, 0.4);
        }
        .tactic-arrow:last-of-type svg { color: rgba(229, 2, 93, 0.4); }

        /* --- Mechanisms — 3-col Grid + Expandable --- */
        .mech-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.75rem;
        }
        .mech-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 1.25rem;
            cursor: pointer;
            transition: all 0.25s ease;
            position: relative;
            overflow: hidden;
        }
        .mech-card::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 2px;
            background: var(--gradient-pink);
            opacity: 0;
            transition: opacity 0.25s ease;
        }
        .mech-card:hover { border-color: var(--border-subtle); transform: translateY(-2px); }
        .mech-card:hover::after { opacity: 1; }
        .mech-icon {
            width: 36px; height: 36px;
            background: var(--accent-pink-bg);
            border: 1px solid var(--accent-pink-border);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
        }
        .mech-card h3 {
            font-size: 0.9rem;
            font-weight: 700;
            margin-bottom: 0.3rem;
        }
        .mech-card .mech-subtitle {
            font-family: var(--font-mono);
            font-size: 0.6rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.06em;
            margin-bottom: 0.5rem;
        }
        .mech-card p {
            font-size: 0.78rem;
            color: var(--text-secondary);
            line-height: 1.55;
        }
        .mech-expand-hint {
            font-family: var(--font-mono);
            font-size: 0.6rem;
            color: var(--text-muted);
            margin-top: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.3rem;
            transition: color 0.2s ease;
        }
        .mech-card:hover .mech-expand-hint { color: var(--accent-pink); }
        .mech-expanded {
            display: none;
            grid-column: 1 / -1;
            background: var(--bg-card);
            border: 1px solid var(--accent-pink-border);
            border-radius: 12px;
            padding: 2rem;
            animation: fadeIn 0.3s ease;
        }
        .mech-expanded.active { display: block; }
        .mech-expanded-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.25rem;
        }
        .mech-expanded-header h3 {
            font-size: 1.25rem;
            font-weight: 700;
        }
        .mech-close {
            font-family: var(--font-mono);
            font-size: 0.7rem;
            color: var(--text-muted);
            cursor: pointer;
            padding: 0.4rem 0.75rem;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            background: var(--bg-tertiary);
            transition: all 0.2s ease;
        }
        .mech-close:hover { color: var(--accent-pink); border-color: var(--accent-pink-border); }
        .mech-expanded-body {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        .mech-expanded-body p {
            font-size: 0.85rem;
            color: var(--text-secondary);
            line-height: 1.65;
        }
        .mech-expanded-props {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        .mech-prop {
            display: flex;
            gap: 0.75rem;
            align-items: baseline;
            padding: 0.6rem 0.75rem;
            background: var(--bg-tertiary);
            border-radius: 6px;
            border: 1px solid var(--border-color);
        }
        .mech-prop-label {
            font-family: var(--font-mono);
            font-size: 0.6rem;
            color: var(--accent-purple);
            text-transform: uppercase;
            letter-spacing: 0.06em;
            min-width: 60px;
        }
        .mech-prop-val {
            font-size: 0.8rem;
            color: var(--text-primary);
        }

        /* --- Applications — 3-col cards --- */
        .app-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.75rem;
        }
        .app-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 1.25rem;
            transition: all 0.25s ease;
        }
        .app-card:hover { border-color: var(--border-subtle); transform: translateY(-2px); }
        .app-card .app-num {
            font-family: var(--font-mono);
            font-size: 0.6rem;
            color: var(--accent-pink);
            letter-spacing: 0.06em;
            margin-bottom: 0.6rem;
        }
        .app-card h3 { font-size: 0.95rem; font-weight: 700; margin-bottom: 0.4rem; }
        .app-card p {
            font-size: 0.78rem;
            color: var(--text-secondary);
            line-height: 1.55;
        }

        /* --- Supporting — 2x2 grid --- */
        .support-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.75rem;
        }
        .support-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 1.25rem;
            transition: all 0.25s ease;
        }
        .support-card:hover { border-color: var(--border-subtle); transform: translateY(-2px); }
        .support-card h3 { font-size: 0.95rem; font-weight: 700; margin-bottom: 0.4rem; }
        .support-card .support-type {
            font-family: var(--font-mono);
            font-size: 0.6rem;
            color: var(--accent-purple);
            text-transform: uppercase;
            letter-spacing: 0.06em;
            margin-bottom: 0.6rem;
        }
        .support-card p {
            font-size: 0.78rem;
            color: var(--text-secondary);
            line-height: 1.55;
        }

        /* --- Case Studies --- */
        .case-stack {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .case-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            transition: border-color 0.3s ease;
        }
        .case-card:hover,
        .case-card.expanded { border-color: var(--border-subtle); }
        .case-header {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            gap: 1.5rem;
            padding: 1.5rem;
            cursor: pointer;
            transition: background 0.2s ease;
        }
        .case-header:hover { background: var(--bg-hover); }
        .case-num {
            font-family: var(--font-mono);
            font-size: 1.5rem;
            font-weight: 700;
            color: rgba(229, 2, 93, 0.2);
            min-width: 48px;
            text-align: center;
        }
        .case-expanded .case-num { color: var(--accent-pink); }
        .case-header-content {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }
        .case-header-content h3 {
            font-size: 1.1rem;
            font-weight: 700;
        }
        .case-header-content .case-tagline {
            font-size: 0.8rem;
            color: var(--text-secondary);
        }
        .case-stats-preview {
            display: flex;
            gap: 1.25rem;
        }
        .case-stat-mini { text-align: center; }
        .case-stat-mini-val {
            font-family: var(--font-mono);
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--text-primary);
            line-height: 1.2;
        }
        .case-stat-mini-lbl {
            font-size: 0.55rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .case-toggle {
            width: 28px; height: 28px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            flex-shrink: 0;
        }
        .case-toggle svg {
            width: 14px; height: 14px;
            color: var(--text-muted);
            transition: transform 0.3s ease;
        }
        .case-card.expanded .case-toggle {
            border-color: var(--accent-pink-border);
            background: var(--accent-pink-bg);
        }
        .case-card.expanded .case-toggle svg {
            transform: rotate(180deg);
            color: var(--accent-pink);
        }
        .case-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }
        .case-card.expanded .case-body { max-height: 800px; }
        .case-body-inner {
            padding: 0 1.5rem 1.5rem;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 2rem;
            border-top: 1px solid var(--border-color);
            padding-top: 1.5rem;
        }
        .case-narrative p {
            font-size: 0.85rem;
            color: var(--text-secondary);
            line-height: 1.65;
            margin-bottom: 1rem;
        }
        .case-narrative p:last-child { margin-bottom: 0; }
        .case-stats-full {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.5rem;
            margin-bottom: 1.25rem;
        }
        .case-stat-block {
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 0.75rem;
            text-align: center;
        }
        .case-stat-block-val {
            font-family: var(--font-mono);
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
            line-height: 1.1;
        }
        .case-stat-block-lbl {
            font-size: 0.6rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-top: 0.2rem;
        }
        .case-mechanisms-label {
            font-family: var(--font-mono);
            font-size: 0.65rem;
            color: var(--accent-purple);
            text-transform: uppercase;
            letter-spacing: 0.06em;
            margin-bottom: 0.5rem;
        }
        .case-mechanisms-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.35rem;
        }
        .case-mech-tag {
            font-family: var(--font-mono);
            font-size: 0.65rem;
            color: var(--text-muted);
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            letter-spacing: 0.02em;
        }
        .case-phase-label {
            font-family: var(--font-mono);
            font-size: 0.65rem;
            color: var(--accent-pink);
            text-transform: uppercase;
            letter-spacing: 0.06em;
            margin-bottom: 0.5rem;
            margin-top: 1rem;
        }
        .case-phase-bar {
            height: 4px;
            background: var(--bg-tertiary);
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 0.35rem;
        }
        .case-phase-fill {
            height: 100%;
            border-radius: 4px;
            background: var(--gradient-pink);
        }
        .case-phase-labels {
            display: flex;
            justify-content: space-between;
            font-size: 0.55rem;
            color: var(--text-muted);
            font-family: var(--font-mono);
        }

        /* --- Evidence --- */
        .evidence-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.75rem;
            margin-bottom: 3rem;
        }
        .evidence-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 1.25rem;
            text-align: center;
            transition: all 0.25s ease;
            position: relative;
            overflow: hidden;
        }
        .evidence-card::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 2px;
            background: var(--gradient-pink);
            opacity: 0;
            transition: opacity 0.25s ease;
        }
        .evidence-card:hover { border-color: var(--border-subtle); transform: translateY(-2px); }
        .evidence-card:hover::after { opacity: 1; }
        .evidence-val {
            font-family: var(--font-mono);
            font-size: 1.75rem;
            font-weight: 700;
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1;
            margin-bottom: 0.35rem;
        }
        .evidence-lbl {
            font-size: 0.65rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }

        /* --- Time Compression --- */
        .compression-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            align-items: start;
        }
        .compression-visual {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.75rem;
        }
        .compression-title {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.35rem;
        }
        .compression-subtitle {
            font-size: 0.8rem;
            color: var(--text-secondary);
            margin-bottom: 1.75rem;
        }
        .phase-row { margin-bottom: 1.5rem; }
        .phase-row:last-child { margin-bottom: 0; }
        .phase-header {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }
        .phase-label {
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--text-primary);
        }
        .phase-label span {
            font-family: var(--font-mono);
            font-size: 0.65rem;
            color: var(--text-muted);
            font-weight: 400;
            margin-left: 0.5rem;
        }
        .phase-days {
            font-family: var(--font-mono);
            font-size: 0.75rem;
            font-weight: 700;
        }
        .phase-bar {
            height: 32px;
            background: var(--bg-tertiary);
            border-radius: 6px;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--border-color);
        }
        .phase-fill {
            height: 100%;
            border-radius: 5px;
            display: flex;
            align-items: center;
            padding-left: 0.75rem;
            font-family: var(--font-mono);
            font-size: 0.65rem;
            font-weight: 500;
            color: rgba(255,255,255,0.8);
            position: relative;
            transition: width 1s ease;
        }
        .phase-1 .phase-fill {
            background: linear-gradient(90deg, rgba(109, 74, 140, 0.3), rgba(109, 74, 140, 0.15));
            border: 1px solid rgba(109, 74, 140, 0.2);
        }
        .phase-1 .phase-days { color: var(--accent-purple); }
        .phase-2 .phase-fill {
            background: linear-gradient(90deg, rgba(229, 2, 93, 0.2), rgba(229, 2, 93, 0.08));
            border: 1px solid rgba(229, 2, 93, 0.15);
        }
        .phase-2 .phase-days { color: var(--accent-pink); opacity: 0.8; }
        .phase-3 .phase-fill { background: var(--gradient-pink); }
        .phase-3 .phase-days { color: var(--accent-pink); }
        .phase-loc {
            position: absolute;
            right: 0.75rem;
            font-size: 0.6rem;
            color: rgba(255,255,255,0.5);
        }
        .compression-annotation {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1.25rem;
            padding-top: 1rem;
            border-top: 1px solid var(--border-color);
        }
        .compression-annotation svg {
            width: 20px; height: 20px;
            color: var(--accent-pink);
            flex-shrink: 0;
        }
        .compression-annotation span {
            font-size: 0.75rem;
            color: var(--text-secondary);
        }
        .compression-annotation strong { color: var(--accent-pink); }
        .compression-metrics {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        .metric-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 1.25rem;
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 1rem;
            align-items: center;
            transition: all 0.25s ease;
        }
        .metric-card:hover { border-color: var(--border-subtle); }
        .metric-icon {
            width: 44px; height: 44px;
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }
        .metric-val {
            font-family: var(--font-mono);
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
            line-height: 1.1;
        }
        .metric-lbl {
            font-size: 0.7rem;
            color: var(--text-muted);
            margin-top: 0.15rem;
        }
        .metric-context {
            font-size: 0.7rem;
            color: var(--text-secondary);
            margin-top: 0.35rem;
            line-height: 1.4;
        }

        /* --- Theory — Constraint Transformation --- */
        .constraint-headers {
            display: grid;
            grid-template-columns: 48px 1fr 48px 1fr;
            gap: 0;
            margin-bottom: 0.75rem;
            padding: 0 1rem;
        }
        .constraint-col-label {
            font-family: var(--font-mono);
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }
        .constraint-col-label.old { color: var(--text-muted); grid-column: 2; }
        .constraint-col-label.new { color: var(--accent-green); grid-column: 4; }
        .constraint-stack {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        .constraint-row {
            display: grid;
            grid-template-columns: 48px 1fr 48px 1fr;
            gap: 0;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.25s ease;
        }
        .constraint-row:hover {
            border-color: var(--border-subtle);
            transform: translateY(-1px);
        }
        .constraint-num {
            font-family: var(--font-mono);
            font-size: 0.7rem;
            color: rgba(229, 2, 93, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            border-right: 1px solid var(--border-color);
            padding: 1.25rem 0;
        }
        .constraint-row:hover .constraint-num { color: var(--accent-pink); }
        .constraint-cell-old {
            padding: 1.25rem;
            position: relative;
        }
        .constraint-cell-old h4 {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-muted);
            margin-bottom: 0.3rem;
            text-decoration: line-through;
            text-decoration-color: rgba(239, 68, 68, 0.4);
            text-decoration-thickness: 1.5px;
        }
        .constraint-cell-old p {
            font-size: 0.75rem;
            color: var(--text-muted);
            line-height: 1.5;
            opacity: 0.7;
        }
        .constraint-arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            border-left: 1px solid var(--border-color);
            border-right: 1px solid var(--border-color);
        }
        .constraint-arrow svg {
            width: 18px; height: 18px;
            color: rgba(109, 74, 140, 0.4);
            transition: color 0.25s ease;
        }
        .constraint-row:hover .constraint-arrow svg { color: var(--accent-purple); }
        .constraint-cell-new {
            padding: 1.25rem;
            position: relative;
        }
        .constraint-cell-new::before {
            content: '';
            position: absolute;
            left: 0; top: 0; bottom: 0;
            width: 2px;
            background: var(--accent-green);
            opacity: 0;
            transition: opacity 0.25s ease;
        }
        .constraint-row:hover .constraint-cell-new::before { opacity: 0.5; }
        .constraint-cell-new h4 {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.3rem;
        }
        .constraint-cell-new p {
            font-size: 0.75rem;
            color: var(--text-secondary);
            line-height: 1.5;
        }
        .dissolved-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
            font-family: var(--font-mono);
            font-size: 0.55rem;
            color: var(--accent-red);
            text-transform: uppercase;
            letter-spacing: 0.06em;
            margin-top: 0.4rem;
            opacity: 0;
            transition: opacity 0.25s ease;
        }
        .constraint-row:hover .dissolved-badge { opacity: 1; }
        .dissolved-badge::before {
            content: '';
            width: 4px; height: 4px;
            background: var(--accent-red);
            border-radius: 50%;
        }

        /* --- CEM vs EOS — Two-column card comparison --- */
        .compare-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        .compare-card {
            border-radius: 12px;
            overflow: hidden;
        }
        .compare-card-header {
            padding: 1.25rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .compare-card.eos .compare-card-header {
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-bottom: none;
            border-radius: 12px 12px 0 0;
        }
        .compare-card.cem .compare-card-header {
            background: var(--accent-pink-bg-light);
            border: 1px solid var(--accent-pink-border);
            border-bottom: none;
            border-radius: 12px 12px 0 0;
        }
        .compare-card-header h3 {
            font-size: 1.1rem;
            font-weight: 700;
        }
        .compare-card.eos .compare-card-header h3 { color: var(--text-secondary); }
        .compare-card.cem .compare-card-header h3 { color: var(--accent-pink); }
        .compare-card-tag {
            font-family: var(--font-mono);
            font-size: 0.6rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
        }
        .compare-card.eos .compare-card-tag {
            background: rgba(255,255,255,0.04);
            border: 1px solid var(--border-color);
            color: var(--text-muted);
        }
        .compare-card.cem .compare-card-tag {
            background: var(--accent-pink-bg);
            border: 1px solid var(--accent-pink-border);
            color: var(--accent-pink);
        }
        .compare-rows {
            display: flex;
            flex-direction: column;
        }
        .compare-card.eos .compare-rows {
            border: 1px solid var(--border-color);
            border-top: none;
            border-radius: 0 0 12px 12px;
        }
        .compare-card.cem .compare-rows {
            border: 1px solid var(--accent-pink-border);
            border-top: none;
            border-radius: 0 0 12px 12px;
        }
        .compare-row {
            padding: 0.85rem 1.5rem;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            gap: 0.15rem;
        }
        .compare-row:last-child { border-bottom: none; }
        .compare-card.cem .compare-row {
            border-bottom-color: rgba(229, 2, 93, 0.06);
        }
        .compare-row-label {
            font-family: var(--font-mono);
            font-size: 0.6rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .compare-row-val {
            font-size: 0.82rem;
            font-weight: 500;
        }
        .compare-card.eos .compare-row-val { color: var(--text-secondary); }
        .compare-card.cem .compare-row-val { color: var(--text-primary); }

        /* --- CTA --- */
        .cem-cta {
            padding: 6rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .cem-cta::before {
            content: '';
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 600px; height: 600px;
            background:
                radial-gradient(circle, rgba(229, 2, 93, 0.06) 0%, transparent 50%),
                radial-gradient(circle at 40% 60%, rgba(109, 74, 140, 0.04) 0%, transparent 50%);
            border-radius: 50%;
            filter: blur(60px);
            pointer-events: none;
        }
        .cem-cta h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 700;
            letter-spacing: -0.02em;
            line-height: 1.2;
            margin-bottom: 1.25rem;
            position: relative;
            z-index: 1;
        }
        .cem-cta .highlight {
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .cem-cta p {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 500px;
            margin: 0 auto 2.5rem;
            line-height: 1.6;
            position: relative;
            z-index: 1;
        }
        .cta-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            position: relative;
            z-index: 1;
        }
        .cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.875rem 1.75rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
        }
        .cta-btn.primary {
            background: var(--gradient-pink);
            color: #fff;
        }
        .cta-btn.primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(229, 2, 93, 0.3);
        }
        .cta-btn.secondary {
            background: transparent;
            color: var(--text-secondary);
            border: 1px solid var(--border-color);
        }
        .cta-btn.secondary:hover {
            border-color: var(--border-subtle);
            color: var(--text-primary);
        }
        .cta-btn svg { width: 16px; height: 16px; }

        /* --- Version Footer --- */
        .cem-footer {
            padding: 1.5rem 0;
            text-align: center;
            font-family: var(--font-mono);
            font-size: 0.65rem;
            color: var(--text-muted);
            letter-spacing: 0.06em;
            border-top: 1px solid var(--border-color);
        }

        /* --- Responsive --- */
        @media (max-width: 1024px) {
            .hero-grid { grid-template-columns: 1fr 0.9fr; gap: 2rem; }
            .geo-node { font-size: 0.6rem; padding: 0.3rem 0.6rem; }
        }
        @media (max-width: 900px) {
            .above-cards { grid-template-columns: 1fr; }
            .req-grid { grid-template-columns: 1fr; }
            .tactics-flow { grid-template-columns: 1fr; }
            .tactic-arrow { padding: 0.25rem 0; }
            .tactic-arrow svg { transform: rotate(90deg); }
            .mech-grid { grid-template-columns: 1fr 1fr; }
            .app-grid { grid-template-columns: 1fr; }
            .support-grid { grid-template-columns: 1fr; }
            .case-stats-preview { display: none; }
            .case-body-inner { grid-template-columns: 1fr; }
            .evidence-grid { grid-template-columns: repeat(2, 1fr); }
            .compression-section { grid-template-columns: 1fr; }
            .constraint-row { grid-template-columns: 1fr; }
            .constraint-num {
                border-right: none;
                border-bottom: 1px solid var(--border-color);
                padding: 0.75rem;
                justify-content: flex-start;
            }
            .constraint-arrow {
                border-left: none;
                border-right: none;
                border-top: 1px solid var(--border-color);
                border-bottom: 1px solid var(--border-color);
                padding: 0.5rem;
            }
            .constraint-arrow svg { transform: rotate(90deg); }
            .constraint-headers { display: none; }
            .compare-layout { grid-template-columns: 1fr; }
        }
        @media (max-width: 768px) {
            .cem-hero { padding: 6rem 0 0; min-height: auto; }
            .hero-grid { grid-template-columns: 1fr; gap: 3rem; }
            .hero-geometric { max-width: 360px; justify-self: center; }
            .hero-stats-bar { grid-template-columns: repeat(2, 1fr); gap: 1.5rem; margin-top: 3rem; }
            .cem-hero h1 { font-size: 2.5rem; }
            .hero-stat-val { font-size: 1.5rem; }
            .cem-section h2 { font-size: 2rem; }
        }
        @media (max-width: 576px) {
            .mech-grid { grid-template-columns: 1fr; }
            .evidence-grid { grid-template-columns: 1fr 1fr; }
            .evidence-val { font-size: 1.5rem; }
            .tab-btn { padding: 0.6rem 0.75rem; font-size: 0.75rem; }
            .cta-actions { flex-direction: column; align-items: center; }
        }
        @media (max-width: 480px) {
            .hero-stats-bar { grid-template-columns: 1fr 1fr; }
            .geo-node-2, .geo-node-5 { display: none; }
            .hero-geometric { max-width: 280px; }
        }
    </style>
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
                        A universal operating system for AI-native builders. The methodology behind 2,500+ production commits and 10 systems shipped.
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
                            <!-- Outer hex — gold -->
                            <polygon points="100,20 175,60 175,140 100,180 25,140 25,60"
                                     fill="none"
                                     stroke="rgba(198,160,80,0.2)"
                                     stroke-width="1.5"/>
                            <!-- Inner hex — pink -->
                            <polygon points="100,50 150,75 150,125 100,150 50,125 50,75"
                                     fill="rgba(217,1,88,0.03)"
                                     stroke="rgba(217,1,88,0.12)"
                                     stroke-width="1"/>
                            <!-- Core dot — pink -->
                            <circle cx="100" cy="100" r="4" fill="#d90158" opacity="0.9"/>
                            <circle cx="100" cy="100" r="12" fill="none" stroke="rgba(217,1,88,0.15)" stroke-width="1"/>
                            <!-- Pulse ring -->
                            <circle cx="100" cy="100" r="20" fill="none" stroke="rgba(198,160,80,0.06)" stroke-width="0.5"/>
                            <!-- Connecting lines — alternating pink/gold -->
                            <line x1="100" y1="100" x2="100" y2="50" stroke="rgba(198,160,80,0.08)" stroke-width="1"/>
                            <line x1="100" y1="100" x2="150" y2="75" stroke="rgba(217,1,88,0.06)" stroke-width="1"/>
                            <line x1="100" y1="100" x2="150" y2="125" stroke="rgba(198,160,80,0.08)" stroke-width="1"/>
                            <line x1="100" y1="100" x2="100" y2="150" stroke="rgba(217,1,88,0.06)" stroke-width="1"/>
                            <line x1="100" y1="100" x2="50" y2="125" stroke="rgba(198,160,80,0.08)" stroke-width="1"/>
                            <line x1="100" y1="100" x2="50" y2="75" stroke="rgba(217,1,88,0.06)" stroke-width="1"/>
                            <!-- Outer vertex dots — gold -->
                            <circle cx="100" cy="20" r="3" fill="rgba(198,160,80,0.4)"/>
                            <circle cx="175" cy="60" r="3" fill="rgba(198,160,80,0.3)"/>
                            <circle cx="175" cy="140" r="3" fill="rgba(198,160,80,0.4)"/>
                            <circle cx="100" cy="180" r="3" fill="rgba(198,160,80,0.3)"/>
                            <circle cx="25" cy="140" r="3" fill="rgba(198,160,80,0.4)"/>
                            <circle cx="25" cy="60" r="3" fill="rgba(198,160,80,0.3)"/>
                            <!-- Inner vertex dots — pink -->
                            <circle cx="100" cy="50" r="2.5" fill="rgba(217,1,88,0.35)"/>
                            <circle cx="150" cy="75" r="2.5" fill="rgba(217,1,88,0.35)"/>
                            <circle cx="150" cy="125" r="2.5" fill="rgba(217,1,88,0.35)"/>
                            <circle cx="100" cy="150" r="2.5" fill="rgba(217,1,88,0.35)"/>
                            <circle cx="50" cy="125" r="2.5" fill="rgba(217,1,88,0.35)"/>
                            <circle cx="50" cy="75" r="2.5" fill="rgba(217,1,88,0.35)"/>
                        </svg>
                    </div>

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
                    <div class="hero-stat-val">2,500+</div>
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
                    <div class="hero-stat-val">1</div>
                    <div class="hero-stat-lbl">Operator</div>
                </div>
            </div>

        </div>
    </section>


    <!-- ════════════════════════════════════════
         01 — SYSTEM ARCHITECTURE
         ════════════════════════════════════════ -->
    <section class="cem-section alt" data-section>
        <div class="container-xl">
            <div class="cem-section-label">01 — System Overview</div>
            <h2>System Architecture</h2>
            <p class="cem-section-desc">CEM operates in layered hierarchy. Each layer serves a distinct function — from directional alignment down to ecosystem maintenance.</p>

            <!-- SystemLayers SVG (dark-native) -->
            <div style="margin-top:3rem;">
                <svg viewBox="0 0 800 320" style="width:100%;height:auto;display:block;">
                    <!-- Execution -->
                    <rect x="0" y="0" width="800" height="68" rx="6" fill="#1a1a1a" stroke="rgba(217,1,88,0.2)" stroke-width="1" />
                    <rect x="0" y="0" width="3" height="68" rx="1" fill="#d90158" />
                    <text x="24" y="20" fill="#d90158" font-size="9" font-family="'DM Mono', monospace" letter-spacing="0.08em">EXECUTION</text>
                    <text x="24" y="38" fill="#fff" font-size="12" font-weight="600" font-family="Inter, sans-serif">Cycles · Sweeps · Foundation · Patterns · Pendulum · Multi-Thread</text>
                    <text x="24" y="54" fill="#999" font-size="10" font-family="'DM Mono', monospace">Build, clean, improve, document, complete, repeat</text>
                    <!-- Acceleration -->
                    <rect x="0" y="74" width="800" height="52" rx="6" fill="#161616" stroke="rgba(255,255,255,0.08)" stroke-width="1" />
                    <rect x="0" y="74" width="3" height="52" rx="1" fill="rgba(217,1,88,0.5)" />
                    <text x="24" y="94" fill="rgba(217,1,88,0.7)" font-size="9" font-family="'DM Mono', monospace" letter-spacing="0.08em">ACCELERATION</text>
                    <text x="24" y="112" fill="#fff" font-size="12" font-weight="600" font-family="Inter, sans-serif">Bridge · Scaffold · Burst</text>
                    <!-- Governance -->
                    <rect x="0" y="132" width="800" height="52" rx="6" fill="#161616" stroke="rgba(255,255,255,0.08)" stroke-width="1" />
                    <rect x="0" y="132" width="3" height="52" rx="1" fill="rgba(217,1,88,0.5)" />
                    <text x="24" y="152" fill="rgba(217,1,88,0.7)" font-size="9" font-family="'DM Mono', monospace" letter-spacing="0.08em">GOVERNANCE</text>
                    <text x="24" y="170" fill="#fff" font-size="12" font-weight="600" font-family="Inter, sans-serif">Regroup · Governor · Micro-Triage</text>
                    <!-- Tactics -->
                    <rect x="0" y="190" width="800" height="52" rx="6" fill="#161616" stroke="rgba(255,255,255,0.08)" stroke-width="1" />
                    <rect x="0" y="190" width="3" height="52" rx="1" fill="rgba(217,1,88,0.3)" />
                    <text x="24" y="210" fill="rgba(217,1,88,0.5)" font-size="9" font-family="'DM Mono', monospace" letter-spacing="0.08em">TACTICS</text>
                    <text x="24" y="228" fill="#fff" font-size="12" font-weight="600" font-family="Inter, sans-serif">SPR → Stop and Recap → Stop. Run It Back</text>
                    <!-- Requirements -->
                    <rect x="0" y="248" width="800" height="52" rx="6" fill="#161616" stroke="rgba(255,255,255,0.08)" stroke-width="1" />
                    <rect x="0" y="248" width="3" height="52" rx="1" fill="rgba(217,1,88,0.15)" />
                    <text x="24" y="268" fill="rgba(217,1,88,0.35)" font-size="9" font-family="'DM Mono', monospace" letter-spacing="0.08em">REQUIREMENTS</text>
                    <text x="24" y="286" fill="#fff" font-size="12" font-weight="600" font-family="Inter, sans-serif">AI as Enabler · The Operator · Team (1–10)</text>
                    <!-- Output arrow -->
                    <text x="780" y="20" text-anchor="end" fill="#d90158" font-size="10" font-weight="600" font-family="'DM Mono', monospace">→ OUTPUT</text>
                </svg>
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
                <div class="above-cards">
                    <div class="above-card">
                        <div class="card-icon-wrap icon-vision">
                            <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M12 2v3m0 14v3m10-10h-3M5 12H2m15.07-7.07l-2.12 2.12M9.05 14.95l-2.12 2.12m12.14 0l-2.12-2.12M9.05 9.05L6.93 6.93" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                        </div>
                        <div class="card-badge">North Star</div>
                        <h3>Vision</h3>
                        <p>The future state. Undefined but believed. The destination the entire ecosystem compounds toward. Without Vision, execution has no meaning. With Vision, even failures compound toward the destination.</p>
                    </div>
                    <div class="above-card">
                        <div class="card-icon-wrap icon-target">
                            <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg>
                        </div>
                        <div class="card-badge">Operational Filter</div>
                        <h3>Target</h3>
                        <p>Concrete. Measurable. Every decision passes through it. You know where you're going before you take a single step. Target can be built or found — when you recognize what you need already exists, you Bridge instead of rebuild.</p>
                    </div>
                    <div class="above-card">
                        <div class="card-icon-wrap icon-compound">
                            <svg viewBox="0 0 24 24" fill="none"><path d="M3 17l4-4 4 4 4-8 6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 11l4 0 0-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <div class="card-badge">Compounding Engine</div>
                        <h3>80% Premise</h3>
                        <p>Each cycle feeds Foundation. Foundation grows. The next cycle starts further ahead. Project one takes weeks because Foundation is empty. Project ten takes days because Foundation carries the weight.</p>
                    </div>
                </div>
            </div>

            <!-- ═══ REQUIREMENTS ═══ -->
            <div class="tab-panel" id="tab-requirements">
                <div class="req-grid">
                    <div class="req-card">
                        <div class="req-tag">R1 — Environment</div>
                        <h3>AI as Enabler</h3>
                        <p>AI is not a tool inside the methodology — it is the environment that makes it possible. Removes traditional constraints: context switching cost, expertise bottlenecks, linear effort scaling. The operator and AI form a system capable of output neither achieves alone.</p>
                    </div>
                    <div class="req-card">
                        <div class="req-tag">R2 — Load-Bearing</div>
                        <h3>The Operator</h3>
                        <p>This methodology has no safety net. Deep understanding before action. Resourcefulness. Self-reliance. Risk acceptance. Sustained focus. Know your cycles. Know your limits. Build the Foundation or the system will expose the gaps.</p>
                    </div>
                </div>
            </div>

            <!-- ═══ TACTICS — Escalation Flow ═══ -->
            <div class="tab-panel" id="tab-tactics">
                <p class="tactics-intro">Graduated escalation chain when execution drifts. Each level increases the intervention intensity. Start light. Escalate only when needed.</p>

                <div class="tactics-flow">
                    <div class="tactic-card severity-1">
                        <div class="tactic-severity">Level 1 — Lightest Touch</div>
                        <h3>SPR</h3>
                        <div class="tactic-action">Stop → Pause → Redirect</div>
                        <p>First-line interrupt. Catches drift before it compounds. Costs seconds. You notice you've lost focus, you SPR — stop what you're doing, pause to reorient, redirect to what matters.</p>
                    </div>

                    <div class="tactic-arrow">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>

                    <div class="tactic-card severity-2">
                        <div class="tactic-severity">Level 2 — Context Repair</div>
                        <h3>Stop and Recap</h3>
                        <div class="tactic-action">Full context rebuild</div>
                        <p>When SPR isn't enough. You've lost the thread entirely. Stop. Rebuild context from scratch. Restate the Target. Restate what you've done. Restate what's next. Then proceed.</p>
                    </div>

                    <div class="tactic-arrow">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>

                    <div class="tactic-card severity-3">
                        <div class="tactic-severity">Level 3 — Full Reset</div>
                        <h3>Stop. Run It Back</h3>
                        <div class="tactic-action">Nuclear option → restart from Foundation</div>
                        <p>The nuclear option. Something is fundamentally wrong. The approach is flawed. The context is poisoned. You stop everything, go back to Foundation, and rebuild the approach from scratch.</p>
                    </div>
                </div>
            </div>

            <!-- ═══ MECHANISMS — 3-col grid ═══ -->
            <div class="tab-panel" id="tab-mechanisms">
                <div class="mech-grid" id="mechGrid">
                    <div class="mech-card" data-mech="pendulum">
                        <div class="mech-icon">⚖</div>
                        <div class="mech-subtitle">Binary Filter</div>
                        <h3>Pendulum</h3>
                        <p>Every output is binary — advance or stash. No middle state. Right swing advances the Target. Left swing stores to Foundation for later.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="governor">
                        <div class="mech-icon">⊘</div>
                        <div class="mech-subtitle">Constraint Engine</div>
                        <h3>Governor</h3>
                        <p>Prevents overextension. Sets hard limits on scope, effort, and complexity. If the Governor says stop, you stop — before the system collapses.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-card" data-mech="burst">
                        <div class="mech-icon">⚡</div>
                        <div class="mech-subtitle">Intensity Window</div>
                        <h3>Burst</h3>
                        <p>Controlled periods of maximum intensity. Time-boxed. Defined scope. High output in compressed windows. Not sustainable — that's the point.</p>
                        <div class="mech-expand-hint">+ Expand detail</div>
                    </div>

                    <div class="mech-expanded" id="mech-detail">
                        <div class="mech-expanded-header">
                            <h3 id="mech-detail-title"></h3>
                            <button class="mech-close" onclick="closeMechDetail()">← Back to grid</button>
                        </div>
                        <div class="mech-expanded-body">
                            <div id="mech-detail-text"></div>
                            <div class="mech-expanded-props" id="mech-detail-props"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ═══ APPLICATIONS — 3-col ═══ -->
            <div class="tab-panel" id="tab-applications">
                <div class="app-grid">
                    <div class="app-card">
                        <div class="app-num">Application 01</div>
                        <h3>MVP Execution</h3>
                        <p>Greenfield builds from zero to production. Foundation is empty, so early cycles are slow. But each cycle deposits to Foundation. By the end, you've built not just the product — you've built the infrastructure for the next one.</p>
                    </div>
                    <div class="app-card">
                        <div class="app-num">Application 02</div>
                        <h3>Operational Rebuild</h3>
                        <p>Fixing broken systems. Foundation is partially filled from the old system's knowledge. The Pendulum filters ruthlessly — keep what works, stash what doesn't, rebuild the rest. Faster than MVP because Foundation carries weight from day one.</p>
                    </div>
                    <div class="app-card">
                        <div class="app-num">Application 03</div>
                        <h3>Constraint Dissolution</h3>
                        <p>Eliminating bottlenecks. Not building new — removing what's blocking. The Governor identifies the constraint. Burst applies focused intensity. The constraint dissolves and the system accelerates.</p>
                    </div>
                </div>
            </div>

            <!-- ═══ SUPPORTING CONCEPTS — 2×2 ═══ -->
            <div class="tab-panel" id="tab-supporting">
                <div class="support-grid">
                    <div class="support-card">
                        <div class="support-type">Iteration Pattern</div>
                        <h3>Spiral Anatomy</h3>
                        <p>Every project follows a spiral — not a circle. Each iteration expands scope while building on what came before. Micro-spirals within a session, meso-spirals within a project, macro-spirals across the portfolio.</p>
                    </div>
                    <div class="support-card">
                        <div class="support-type">Temporary Structure</div>
                        <h3>Scaffold</h3>
                        <p>Temporary infrastructure that supports construction. Built to be removed. Scaffolds let you move fast on incomplete foundations — they hold the weight while the real structure takes shape.</p>
                    </div>
                    <div class="support-card">
                        <div class="support-type">System Connector</div>
                        <h3>Bridge</h3>
                        <p>Connects separate systems into unified flows. When the Target reveals that what you need already exists elsewhere, you Bridge instead of rebuilding. Recognition over reinvention.</p>
                    </div>
                    <div class="support-card">
                        <div class="support-type">Parallel Execution</div>
                        <h3>Parallel MVP</h3>
                        <p>Running multiple build tracks simultaneously. Only possible when Foundation is rich enough to support concurrent Pendulum cycles. The mature-phase pattern — projects 8–10 level.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         03 — CASE STUDIES
         ════════════════════════════════════════ -->
    <section class="cem-section alt" data-section>
        <div class="container-xl">
            <div class="cem-section-label">03 — In Practice</div>
            <h2>Case Studies</h2>
            <p class="cem-section-desc">Three applications of CEM across different problem types. Each demonstrates different mechanisms in action.</p>

            <div class="case-stack">

                <!-- Case Study 1: MVP Execution -->
                <div class="case-card expanded" id="case-1">
                    <div class="case-header" onclick="toggleCase(1)">
                        <div class="case-num">01</div>
                        <div class="case-header-content">
                            <h3>MVP Execution — GCR Portfolio</h3>
                            <div class="case-tagline">Greenfield build from zero to production in 5 days</div>
                        </div>
                        <div class="case-stats-preview">
                            <div class="case-stat-mini">
                                <div class="case-stat-mini-val">5d</div>
                                <div class="case-stat-mini-lbl">Days to MVP</div>
                            </div>
                            <div class="case-stat-mini">
                                <div class="case-stat-mini-val">38K</div>
                                <div class="case-stat-mini-lbl">LOC</div>
                            </div>
                            <div class="case-stat-mini">
                                <div class="case-stat-mini-val">4</div>
                                <div class="case-stat-mini-lbl">Mechanisms</div>
                            </div>
                        </div>
                        <div class="case-toggle">
                            <svg viewBox="0 0 16 16" fill="none"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                    </div>
                    <div class="case-body">
                        <div class="case-body-inner">
                            <div class="case-narrative">
                                <p>GCR Portfolio was project 8 in the ecosystem — deep into the mature phase where Foundation carries most of the weight. The Target was clear: a production portfolio management system with multi-entity support, automated reporting, and real-time dashboards.</p>
                                <p>By this point, Foundation contained authentication patterns, database schemas, deployment pipelines, and UI component libraries from 7 previous builds. The Pendulum filtered ruthlessly — only net-new functionality advanced. Everything else Bridged from existing systems.</p>
                                <p>Burst windows of 12–16 hours produced the core application logic. The Governor kept scope locked to the 80% premise — no feature creep, no "nice to haves." Five days from first commit to production deployment.</p>
                            </div>
                            <div class="case-sidebar">
                                <div class="case-stats-full">
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val">5</div>
                                        <div class="case-stat-block-lbl">Days to MVP</div>
                                    </div>
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val">38K</div>
                                        <div class="case-stat-block-lbl">Lines of Code</div>
                                    </div>
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val">89</div>
                                        <div class="case-stat-block-lbl">Peak Commits/Day</div>
                                    </div>
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val" style="color: var(--accent-purple);">8K+</div>
                                        <div class="case-stat-block-lbl">LOC / Day</div>
                                    </div>
                                </div>
                                <div class="case-mechanisms-label">Mechanisms Used</div>
                                <div class="case-mechanisms-list">
                                    <span class="case-mech-tag">Pendulum</span>
                                    <span class="case-mech-tag">Governor</span>
                                    <span class="case-mech-tag">Burst</span>
                                    <span class="case-mech-tag">Bridge</span>
                                    <span class="case-mech-tag">Foundation</span>
                                </div>
                                <div class="case-phase-label">Foundation Utilization</div>
                                <div class="case-phase-bar"><div class="case-phase-fill" style="width: 85%;"></div></div>
                                <div class="case-phase-labels"><span>0%</span><span>85% from prior builds</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2: Operational Rebuild -->
                <div class="case-card" id="case-2">
                    <div class="case-header" onclick="toggleCase(2)">
                        <div class="case-num">02</div>
                        <div class="case-header-content">
                            <h3>Operational Rebuild — Portal Stealth</h3>
                            <div class="case-tagline">Legacy system rebuilt into a unified platform across 195K LOC</div>
                        </div>
                        <div class="case-stats-preview">
                            <div class="case-stat-mini">
                                <div class="case-stat-mini-val">195K</div>
                                <div class="case-stat-mini-lbl">LOC</div>
                            </div>
                            <div class="case-stat-mini">
                                <div class="case-stat-mini-val">74d</div>
                                <div class="case-stat-mini-lbl">Active Dev</div>
                            </div>
                            <div class="case-stat-mini">
                                <div class="case-stat-mini-val">6</div>
                                <div class="case-stat-mini-lbl">Mechanisms</div>
                            </div>
                        </div>
                        <div class="case-toggle">
                            <svg viewBox="0 0 16 16" fill="none"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                    </div>
                    <div class="case-body">
                        <div class="case-body-inner">
                            <div class="case-narrative">
                                <p>Portal Stealth was the first project — Foundation was empty. Every pattern, every component, every pipeline had to be built from scratch. The Pendulum swung left constantly in early cycles — depositing infrastructure into Foundation rather than advancing the Target.</p>
                                <p>This is the hardest application of CEM. The Operator must trust the compounding premise even when early progress feels slow. Weeks of apparent stagnation were actually Foundation filling — authentication systems, database patterns, deployment infrastructure, UI component libraries.</p>
                                <p>By week 4, the compounding effect kicked visibly. Code output per day doubled, then tripled. Foundation was carrying weight. By week 8, the system was producing at a rate that would have required a team of 4–5 developers in a traditional model.</p>
                            </div>
                            <div class="case-sidebar">
                                <div class="case-stats-full">
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val">195K</div>
                                        <div class="case-stat-block-lbl">Lines of Code</div>
                                    </div>
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val">74</div>
                                        <div class="case-stat-block-lbl">Active Dev Days</div>
                                    </div>
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val">2,635</div>
                                        <div class="case-stat-block-lbl">LOC / Day Avg</div>
                                    </div>
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val" style="color: var(--accent-purple);">1</div>
                                        <div class="case-stat-block-lbl">Operator</div>
                                    </div>
                                </div>
                                <div class="case-mechanisms-label">Mechanisms Used</div>
                                <div class="case-mechanisms-list">
                                    <span class="case-mech-tag">Pendulum</span>
                                    <span class="case-mech-tag">Governor</span>
                                    <span class="case-mech-tag">Burst</span>
                                    <span class="case-mech-tag">Scaffold</span>
                                    <span class="case-mech-tag">Spiral</span>
                                    <span class="case-mech-tag">Foundation</span>
                                </div>
                                <div class="case-phase-label">Build Acceleration</div>
                                <div class="case-phase-bar"><div class="case-phase-fill" style="width: 30%;"></div></div>
                                <div class="case-phase-labels"><span>Wk 1–3: Slow (Foundation fill)</span><span></span></div>
                                <div class="case-phase-bar" style="margin-top: 0.35rem;"><div class="case-phase-fill" style="width: 65%;"></div></div>
                                <div class="case-phase-labels"><span>Wk 4–6: Compound kicks in</span><span></span></div>
                                <div class="case-phase-bar" style="margin-top: 0.35rem;"><div class="case-phase-fill" style="width: 95%;"></div></div>
                                <div class="case-phase-labels"><span>Wk 7+: Full velocity</span><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3: Constraint Dissolution -->
                <div class="case-card" id="case-3">
                    <div class="case-header" onclick="toggleCase(3)">
                        <div class="case-num">03</div>
                        <div class="case-header-content">
                            <h3>Constraint Dissolution</h3>
                            <div class="case-tagline">Eliminating bottlenecks to unlock system-wide acceleration</div>
                        </div>
                        <div class="case-stats-preview">
                            <div class="case-stat-mini">
                                <div class="case-stat-mini-val">5×</div>
                                <div class="case-stat-mini-lbl">Throughput</div>
                            </div>
                            <div class="case-stat-mini">
                                <div class="case-stat-mini-val">3</div>
                                <div class="case-stat-mini-lbl">Constraints</div>
                            </div>
                            <div class="case-stat-mini">
                                <div class="case-stat-mini-val">10d</div>
                                <div class="case-stat-mini-lbl">Resolution</div>
                            </div>
                        </div>
                        <div class="case-toggle">
                            <svg viewBox="0 0 16 16" fill="none"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                    </div>
                    <div class="case-body">
                        <div class="case-body-inner">
                            <div class="case-narrative">
                                <p>Constraint Dissolution is the most surgical CEM application. You're not building new — you're removing what's blocking. The Governor identifies the constraint. Burst applies focused intensity. The constraint dissolves and the entire system accelerates.</p>
                                <p>In the Stealth Labz ecosystem, three constraints emerged mid-portfolio: deployment pipeline bottlenecks, cross-system authentication fragmentation, and reporting data inconsistencies across brands. Each one was slowing every downstream project.</p>
                                <p>Rather than working around them — the traditional approach — CEM's Constraint Dissolution pattern targeted each directly. Burst windows of focused intensity. Pendulum filtering to ensure solutions were permanent, not patches. Ten days, three constraints eliminated, system-wide throughput increase.</p>
                            </div>
                            <div class="case-sidebar">
                                <div class="case-stats-full">
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val">3</div>
                                        <div class="case-stat-block-lbl">Constraints Dissolved</div>
                                    </div>
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val">10</div>
                                        <div class="case-stat-block-lbl">Days to Resolve</div>
                                    </div>
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val">5×</div>
                                        <div class="case-stat-block-lbl">Throughput Gain</div>
                                    </div>
                                    <div class="case-stat-block">
                                        <div class="case-stat-block-val" style="color: var(--accent-purple);">∞</div>
                                        <div class="case-stat-block-lbl">Downstream Impact</div>
                                    </div>
                                </div>
                                <div class="case-mechanisms-label">Mechanisms Used</div>
                                <div class="case-mechanisms-list">
                                    <span class="case-mech-tag">Governor</span>
                                    <span class="case-mech-tag">Burst</span>
                                    <span class="case-mech-tag">Bridge</span>
                                    <span class="case-mech-tag">Pendulum</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         04 — EVIDENCE
         ════════════════════════════════════════ -->
    <section class="cem-section" data-section>
        <div class="container-xl">
            <div class="cem-section-label">04 — Validation</div>
            <h2>Evidence</h2>
            <p class="cem-section-desc">Validated through git commit analysis across 10 production systems built between October 2025 and January 2026.</p>

            <!-- 8-Stat Grid -->
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

            <!-- Time Compression — 2-col: Visual + Metrics -->
            <div class="compression-section">

                <!-- Left: Acceleration Bars -->
                <div class="compression-visual">
                    <div class="compression-title">Time Compression</div>
                    <div class="compression-subtitle">How CEM's compounding effect accelerates delivery over time</div>

                    <div class="phase-row phase-1">
                        <div class="phase-header">
                            <div class="phase-label">Early <span>Projects 1–3</span></div>
                            <div class="phase-days">14–21 days</div>
                        </div>
                        <div class="phase-bar">
                            <div class="phase-fill" style="width: 100%;">
                                Foundation filling — every pattern is new
                                <span class="phase-loc">~3K LOC/day</span>
                            </div>
                        </div>
                    </div>

                    <div class="phase-row phase-2">
                        <div class="phase-header">
                            <div class="phase-label">Mid <span>Projects 4–7</span></div>
                            <div class="phase-days">5–10 days</div>
                        </div>
                        <div class="phase-bar">
                            <div class="phase-fill" style="width: 48%;">
                                Compounding kicks
                                <span class="phase-loc">~6K LOC/day</span>
                            </div>
                        </div>
                    </div>

                    <div class="phase-row phase-3">
                        <div class="phase-header">
                            <div class="phase-label">Mature <span>Projects 8–10</span></div>
                            <div class="phase-days">5 days</div>
                        </div>
                        <div class="phase-bar">
                            <div class="phase-fill" style="width: 24%;">
                                Full velocity
                                <span class="phase-loc">~8K+ LOC/day</span>
                            </div>
                        </div>
                    </div>

                    <div class="compression-annotation">
                        <svg viewBox="0 0 20 20" fill="none"><path d="M10 16V4m0 0l4 4m-4-4L6 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span><strong>4.2× faster</strong> from first project to tenth. Same operator, same methodology — Foundation carries the difference.</span>
                    </div>
                </div>

                <!-- Right: Supporting Metrics -->
                <div class="compression-metrics">
                    <div class="metric-card">
                        <div class="metric-icon">📈</div>
                        <div class="metric-content">
                            <div class="metric-val">2.7×</div>
                            <div class="metric-lbl">LOC Output Growth</div>
                            <div class="metric-context">From ~3K LOC/day early to ~8K+ LOC/day mature. Same operator, same tools.</div>
                        </div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-icon">🔄</div>
                        <div class="metric-content">
                            <div class="metric-val">85%</div>
                            <div class="metric-lbl">Foundation Reuse Rate</div>
                            <div class="metric-context">Mature-phase projects reuse 85% of patterns from Foundation. Only 15% is net-new code.</div>
                        </div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-icon">⚡</div>
                        <div class="metric-content">
                            <div class="metric-val">60%</div>
                            <div class="metric-lbl">Parallel Execution Days</div>
                            <div class="metric-context">Over half of all development days involved work on multiple systems simultaneously.</div>
                        </div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-icon">🎯</div>
                        <div class="metric-content">
                            <div class="metric-val">9.6%</div>
                            <div class="metric-lbl">Defect Rate</div>
                            <div class="metric-context">Sub-10% across 10 systems. Governor's scope control prevents the quality collapse that usually follows high velocity.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
         05 — THEORETICAL FOUNDATION
         ════════════════════════════════════════ -->
    <section class="cem-section alt" data-section>
        <div class="container-xl">
            <div class="cem-section-label">05 — Theoretical Foundation</div>
            <h2>Why CEM Exists</h2>
            <p class="cem-section-desc">Five constraints shaped software development for decades. Between 2023 and 2025, all five dissolved. The methodologies built for the old constraints were designed for a world that no longer exists.</p>

            <div class="constraint-headers">
                <div></div>
                <div class="constraint-col-label old">The Old Constraint</div>
                <div></div>
                <div class="constraint-col-label new">The New Physics</div>
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
         06 — CEM vs. EOS
         ════════════════════════════════════════ -->
    <section class="cem-section" data-section>
        <div class="container-xl">
            <div class="cem-section-label">06 — Comparison</div>
            <h2>CEM vs. EOS</h2>
            <p class="cem-section-desc">EOS was designed for leadership teams in growing organizations. CEM was designed for operators building with AI. Different constraints, different solutions.</p>

            <div class="compare-layout">
                <!-- EOS Column -->
                <div class="compare-card eos">
                    <div class="compare-card-header">
                        <h3>EOS</h3>
                        <span class="compare-card-tag">Traditional</span>
                    </div>
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

                <!-- CEM Column -->
                <div class="compare-card cem">
                    <div class="compare-card-header">
                        <h3>CEM</h3>
                        <span class="compare-card-tag">AI-Native</span>
                    </div>
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
            <h2>You begin small.<br>The system <span class="highlight">scales you.</span></h2>
            <p>The Compounding Execution Method compounds output, capability, and returns over time.</p>
            <div class="cta-actions">
                <a href="#framework" class="cta-btn primary">
                    Explore the Framework
                    <svg viewBox="0 0 16 16" fill="none"><path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
                <a href="/ecosystem" class="cta-btn secondary">
                    See It In Production
                    <svg viewBox="0 0 16 16" fill="none"><path d="M4 12l8-8m0 0H6m6 0v6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
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
            pendulum: {
                title: 'Pendulum',
                text: '<p>The Pendulum is the binary decision engine at the core of CEM. Every output from every cycle faces one question: does this advance the Target, or does it go to Foundation?</p><p style="margin-top:0.75rem">There is no middle state. No "maybe later." No "partially useful." Right swing means it ships. Left swing means it gets stashed in Foundation where it compounds for future use. This binary forcing function is what prevents scope creep, endless iteration, and the death-by-committee that kills execution velocity.</p>',
                props: [
                    { label: 'Type', val: 'Binary filter — advance or stash' },
                    { label: 'Trigger', val: 'End of every execution cycle' },
                    { label: 'Output', val: 'Right swing → Target / Left swing → Foundation' },
                    { label: 'Key Rule', val: 'No middle state. No partial decisions.' },
                ]
            },
            governor: {
                title: 'Governor',
                text: '<p>The Governor is CEM\'s constraint engine. It prevents the most common execution failure: overextension. When ambition exceeds capacity, the system collapses — not gradually, but catastrophically.</p><p style="margin-top:0.75rem">The Governor sets hard limits on scope, complexity, and effort. It\'s not about being conservative — it\'s about being precise. Know exactly how much the system can handle, then operate right at that edge. The Governor is what lets you sustain Burst intensity without burnout.</p>',
                props: [
                    { label: 'Type', val: 'Constraint enforcement' },
                    { label: 'Trigger', val: 'Scope expansion, complexity creep' },
                    { label: 'Output', val: 'Hard stop or scope reduction' },
                    { label: 'Key Rule', val: 'If the Governor says stop, you stop.' },
                ]
            },
            burst: {
                title: 'Burst',
                text: '<p>Burst is controlled intensity in defined windows. Not "crunch mode" — that\'s unsustainable chaos. Burst is deliberate, time-boxed, and scoped. You know what you\'re building, you know how long you have, and you execute at maximum output.</p><p style="margin-top:0.75rem">Bursts produce the highest output per unit time in the system. But they\'re expensive — cognitively, energetically. The Governor regulates how often and how long. The Pendulum sorts the output. Together they ensure Burst produces compounding value, not compounding debt.</p>',
                props: [
                    { label: 'Type', val: 'Intensity amplifier' },
                    { label: 'Trigger', val: 'Clear scope + available capacity' },
                    { label: 'Output', val: 'High-volume production in compressed time' },
                    { label: 'Key Rule', val: 'Time-boxed. Never open-ended.' },
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
                    `<div class="mech-prop"><span class="mech-prop-label">${p.label}</span><span class="mech-prop-val">${p.val}</span></div>`
                ).join('');

                document.getElementById('mech-detail').classList.add('active');
                document.getElementById('mech-detail').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            });
        });

        function closeMechDetail() {
            document.getElementById('mech-detail')?.classList.remove('active');
        }

        // ── Case Study Expand/Collapse ──
        function toggleCase(num) {
            const card = document.getElementById('case-' + num);
            card.classList.toggle('expanded');
        }
    </script>
</body>
</html>
