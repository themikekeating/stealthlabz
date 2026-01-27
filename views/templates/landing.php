<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#e91e8c">
    <title>Stealth Labz | Built Different. Ships Fast.</title>
    <meta name="description" content="15+ years of combined execution across performance marketing, product development, and global operations — now accelerated by AI.">
    <link rel="canonical" href="https://stealthlabz.com/">

    <!-- Open Graph -->
    <meta property="og:title" content="Stealth Labz | Built Different. Ships Fast.">
    <meta property="og:description" content="15+ years of combined execution across performance marketing, product development, and global operations — now accelerated by AI.">
    <meta property="og:image" content="https://stealthlabz.com/cdn/images/og-default.png">
    <meta property="og:url" content="https://stealthlabz.com/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Stealth Labz">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Stealth Labz | Built Different. Ships Fast.">
    <meta name="twitter:description" content="15+ years of combined execution across performance marketing, product development, and global operations — now accelerated by AI.">
    <meta name="twitter:image" content="https://stealthlabz.com/cdn/images/og-default.png">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/cdn/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/cdn/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Stealth Labz",
        "url": "https://stealthlabz.com",
        "logo": "https://stealthlabz.com/cdn/images/logo.png",
        "description": "AI-powered marketing technology and lead generation solutions.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1225 W Beaver St. Ste 205-1 #1135",
            "addressLocality": "Jacksonville",
            "addressRegion": "FL",
            "postalCode": "32204",
            "addressCountry": "US"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Sales",
            "email": "contact@stealthlabz.com"
        }
    }
    </script>

    <!-- WebSite Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Stealth Labz",
        "url": "https://stealthlabz.com",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://stealthlabz.com/insights?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    
    <style>
        :root {
            --bg-primary: #0a0a0f;
            --bg-secondary: #12121a;
            --bg-tertiary: #1a1a25;
            --bg-card: #16161f;
            --text-primary: #ffffff;
            --text-secondary: #a0a0b0;
            --text-muted: #6a6a7a;
            --accent-pink: #e91e8c;
            --accent-pink-glow: rgba(233, 30, 140, 0.4);
            --accent-purple: #8b5cf6;
            --accent-cyan: #22d3ee;
            --accent-green: #22c55e;
            --border-color: rgba(255, 255, 255, 0.08);
            --gradient-pink: linear-gradient(135deg, #e91e8c 0%, #8b5cf6 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: var(--bg-primary);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Noise texture overlay */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
            opacity: 0.03;
            pointer-events: none;
            z-index: 1000;
        }

        /* Grid background */
        .grid-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(233, 30, 140, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(233, 30, 140, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            pointer-events: none;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            letter-spacing: -0.02em;
        }

        .mono {
            font-family: 'DM Mono', monospace;
        }

        /* Navbar */
        .navbar {
            background: rgba(10, 10, 15, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-color);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background: rgba(10, 10, 15, 0.95);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--text-primary) !important;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .navbar-brand .brand-icon {
            width: 32px;
            height: 32px;
            background: var(--gradient-pink);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-link {
            color: var(--text-secondary) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: color 0.2s ease;
            text-decoration: none;
        }

        .nav-link:hover {
            color: var(--text-primary) !important;
        }

        .btn-nav {
            background: var(--gradient-pink);
            color: white !important;
            border: none;
            padding: 0.5rem 1.25rem !important;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-nav:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px var(--accent-pink-glow);
        }

        /* Hero */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 8rem 0 6rem;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 80%;
            height: 150%;
            background: radial-gradient(ellipse at center, var(--accent-pink-glow) 0%, transparent 60%);
            opacity: 0.15;
            pointer-events: none;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            padding: 0.5rem 1rem;
            border-radius: 100px;
            font-size: 0.875rem;
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
        }

        .hero-badge .dot {
            width: 8px;
            height: 8px;
            background: var(--accent-green);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .hero-title {
            font-size: clamp(3rem, 8vw, 5rem);
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: -0.03em;
        }

        .hero-title .highlight {
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--text-secondary);
            max-width: 540px;
            margin-bottom: 2rem;
            line-height: 1.7;
        }

        .hero-cta {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 3rem;
        }

        .btn-glow {
            background: var(--gradient-pink);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-glow:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px var(--accent-pink-glow);
            color: white;
        }

        .btn-outline {
            background: transparent;
            color: var(--text-primary);
            border: 1px solid var(--border-color);
            padding: 1rem 2rem;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-outline:hover {
            background: var(--bg-tertiary);
            border-color: var(--text-muted);
            color: var(--text-primary);
        }

        /* Hero Stats with animated counters */
        .hero-stats {
            display: flex;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .hero-stat {
            text-align: left;
        }

        .hero-stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-primary);
            font-family: 'DM Mono', monospace;
        }

        .hero-stat-value .counter {
            display: inline-block;
        }

        .hero-stat-label {
            font-size: 0.875rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Hero Visual - Dashboard with Charts */
        .hero-visual {
            position: relative;
        }

        .dashboard-mockup {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.5);
        }

        .dashboard-header {
            background: var(--bg-tertiary);
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border-bottom: 1px solid var(--border-color);
        }

        .dashboard-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .dashboard-dot.red { background: #ff5f56; }
        .dashboard-dot.yellow { background: #ffbd2e; }
        .dashboard-dot.green { background: #27ca40; }

        .dashboard-url {
            flex: 1;
            text-align: center;
            font-size: 0.75rem;
            color: var(--text-muted);
            font-family: 'DM Mono', monospace;
        }

        .dashboard-body {
            padding: 1.5rem;
        }

        .dashboard-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .dashboard-stat {
            background: var(--bg-tertiary);
            padding: 1rem;
            border-radius: 10px;
            border: 1px solid var(--border-color);
        }

        .dashboard-stat-label {
            font-size: 0.7rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.25rem;
        }

        .dashboard-stat-value {
            font-size: 1.25rem;
            font-weight: 700;
            font-family: 'DM Mono', monospace;
        }

        .dashboard-stat-value.green { color: var(--accent-green); }
        .dashboard-stat-value.pink { color: var(--accent-pink); }
        .dashboard-stat-value.cyan { color: var(--accent-cyan); }

        /* Revenue Chart */
        .chart-container {
            background: var(--bg-tertiary);
            border-radius: 10px;
            padding: 1rem;
            border: 1px solid var(--border-color);
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .chart-title {
            font-size: 0.8rem;
            color: var(--text-secondary);
            font-weight: 500;
        }

        .chart-badge {
            font-size: 0.7rem;
            background: rgba(34, 197, 94, 0.2);
            color: var(--accent-green);
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            font-family: 'DM Mono', monospace;
        }

        .chart-svg {
            width: 100%;
            height: 120px;
        }

        .chart-line {
            fill: none;
            stroke: var(--accent-pink);
            stroke-width: 2;
            stroke-linecap: round;
            stroke-dasharray: 500;
            stroke-dashoffset: 500;
            animation: drawLine 2s ease forwards;
        }

        .chart-area {
            fill: url(#chartGradient);
            opacity: 0;
            animation: fadeIn 1s ease 1s forwards;
        }

        .chart-dot {
            fill: var(--accent-pink);
            opacity: 0;
            animation: popIn 0.3s ease forwards;
        }

        @keyframes drawLine {
            to { stroke-dashoffset: 0; }
        }

        @keyframes fadeIn {
            to { opacity: 0.3; }
        }

        @keyframes popIn {
            to { opacity: 1; }
        }

        /* Floating Cards */
        .floating-card {
            position: absolute;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1rem 1.25rem;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
            animation: float 3s ease-in-out infinite;
        }

        .floating-card-1 {
            top: 10%;
            right: -10%;
            animation-delay: 0s;
        }

        .floating-card-2 {
            bottom: 15%;
            left: -5%;
            animation-delay: 1.5s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .floating-card-label {
            font-size: 0.7rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .floating-card-value {
            font-size: 1.25rem;
            font-weight: 700;
            font-family: 'DM Mono', monospace;
        }

        .floating-card-value.green { color: var(--accent-green); }
        .floating-card-value.pink { color: var(--accent-pink); }

        /* Integrations Marquee */
        .integrations-section {
            padding: 3rem 0;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
            background: var(--bg-secondary);
            overflow: hidden;
        }

        .integrations-label {
            text-align: center;
            font-size: 0.8rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 1.5rem;
        }

        .integrations-track {
            display: flex;
            gap: 3rem;
            animation: scroll 30s linear infinite;
        }

        .integrations-track:hover {
            animation-play-state: paused;
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .integration-item {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            color: var(--text-secondary);
            font-weight: 500;
            font-size: 0.9rem;
            white-space: nowrap;
            transition: all 0.3s ease;
        }

        .integration-item:hover {
            border-color: var(--accent-pink);
            color: var(--text-primary);
        }

        .integration-icon {
            width: 20px;
            height: 20px;
            opacity: 0.7;
        }

        /* Sections */
        section {
            padding: 6rem 0;
            position: relative;
        }

        .section-dark {
            background: var(--bg-secondary);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.125rem;
            color: var(--text-secondary);
            max-width: 600px;
        }

        /* Portfolio Cards */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .portfolio-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 2rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .portfolio-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--gradient-pink);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .portfolio-card:hover {
            transform: translateY(-5px);
            border-color: rgba(233, 30, 140, 0.3);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .portfolio-card:hover::before {
            opacity: 1;
        }

        .portfolio-card-badge {
            display: inline-block;
            background: var(--bg-tertiary);
            color: var(--accent-pink);
            padding: 0.25rem 0.75rem;
            border-radius: 100px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1rem;
        }

        .portfolio-card h3 {
            font-size: 1.5rem;
            margin-bottom: 0.75rem;
        }

        .portfolio-card p {
            color: var(--text-secondary);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .portfolio-card-link {
            color: var(--accent-pink);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.875rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: gap 0.2s ease;
        }

        .portfolio-card-link:hover {
            gap: 0.75rem;
            color: var(--accent-pink);
        }

        /* Portfolio Card Metrics */
        .portfolio-metrics {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.75rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: var(--bg-tertiary);
            border-radius: 10px;
        }

        .portfolio-metric {
            text-align: center;
        }

        .portfolio-metric-value {
            font-size: 1.1rem;
            font-weight: 700;
            font-family: 'DM Mono', monospace;
            color: var(--accent-cyan);
        }

        .portfolio-metric-label {
            font-size: 0.65rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        /* Flagship Card */
        .portfolio-card.flagship {
            grid-column: 1 / -1;
            background: linear-gradient(135deg, var(--bg-card) 0%, rgba(233, 30, 140, 0.05) 100%);
            border-color: rgba(233, 30, 140, 0.2);
        }

        .portfolio-card.flagship::before {
            opacity: 1;
        }

        @media (min-width: 992px) {
            .flagship-content {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 3rem;
                align-items: center;
            }
        }

        .flagship-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .flagship-feature {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .flagship-feature svg {
            color: var(--accent-pink);
            flex-shrink: 0;
        }

        /* Flagship Visual */
        .flagship-visual {
            background: var(--bg-tertiary);
            border-radius: 12px;
            padding: 1.5rem;
            border: 1px solid var(--border-color);
        }

        .flagship-chart {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 0.5rem;
            align-items: flex-end;
            height: 120px;
            margin-bottom: 1rem;
        }

        .flagship-bar {
            background: var(--gradient-pink);
            border-radius: 4px 4px 0 0;
            min-height: 20px;
            opacity: 0;
            transform: scaleY(0);
            transform-origin: bottom;
            animation: growBar 0.5s ease forwards;
        }

        @keyframes growBar {
            to { opacity: 1; transform: scaleY(1); }
        }

        .flagship-bar:nth-child(1) { height: 30%; animation-delay: 0.1s; }
        .flagship-bar:nth-child(2) { height: 50%; animation-delay: 0.2s; }
        .flagship-bar:nth-child(3) { height: 65%; animation-delay: 0.3s; }
        .flagship-bar:nth-child(4) { height: 85%; animation-delay: 0.4s; }
        .flagship-bar:nth-child(5) { height: 100%; animation-delay: 0.5s; }

        .flagship-chart-labels {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 0.5rem;
            font-size: 0.65rem;
            color: var(--text-muted);
            text-align: center;
            font-family: 'DM Mono', monospace;
        }

        /* Skills Section */
        .skills-section {
            padding: 4rem 0;
            background: var(--bg-primary);
            border-top: 1px solid var(--border-color);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .skill-category {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 2rem;
        }

        .skill-category h4 {
            font-size: 1rem;
            color: var(--accent-pink);
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .skill-bars {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .skill-bar {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .skill-bar-header {
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
        }

        .skill-bar-name {
            color: var(--text-secondary);
        }

        .skill-bar-value {
            color: var(--text-muted);
            font-family: 'DM Mono', monospace;
        }

        .skill-bar-track {
            height: 6px;
            background: var(--bg-tertiary);
            border-radius: 3px;
            overflow: hidden;
        }

        .skill-bar-fill {
            height: 100%;
            background: var(--gradient-pink);
            border-radius: 3px;
            width: 0;
            transition: width 1s ease;
        }

        /* Global Map Section */
        .global-section {
            padding: 4rem 0;
            background: var(--bg-secondary);
        }

        .global-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        @media (max-width: 991px) {
            .global-content {
                grid-template-columns: 1fr;
            }
        }

        .global-map {
            position: relative;
            padding: 2rem;
        }

        .map-container {
            position: relative;
            width: 100%;
            aspect-ratio: 16/10;
            background: var(--bg-tertiary);
            border-radius: 16px;
            border: 1px solid var(--border-color);
            overflow: hidden;
        }

        .map-dot {
            position: absolute;
            width: 16px;
            height: 16px;
            background: var(--accent-pink);
            border-radius: 50%;
            box-shadow: 0 0 20px var(--accent-pink-glow), 0 0 40px var(--accent-pink-glow);
            animation: mapPulse 2s ease-in-out infinite;
        }

        .map-dot::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 40px;
            height: 40px;
            background: var(--accent-pink);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.3;
            animation: mapRipple 2s ease-in-out infinite;
        }

        .map-dot.us {
            top: 35%;
            left: 25%;
        }

        .map-dot.za {
            top: 70%;
            left: 55%;
            animation-delay: 1s;
        }

        .map-dot.za::after {
            animation-delay: 1s;
        }

        @keyframes mapPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.2); }
        }

        @keyframes mapRipple {
            0% { transform: translate(-50%, -50%) scale(0.5); opacity: 0.5; }
            100% { transform: translate(-50%, -50%) scale(2); opacity: 0; }
        }

        .map-label {
            position: absolute;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 0.8rem;
            font-family: 'DM Mono', monospace;
            white-space: nowrap;
        }

        .map-label.us {
            top: 25%;
            left: 30%;
        }

        .map-label.za {
            top: 75%;
            left: 60%;
        }

        .map-connection {
            position: absolute;
            top: 40%;
            left: 30%;
            width: 25%;
            height: 2px;
            background: linear-gradient(90deg, var(--accent-pink), var(--accent-purple));
            transform: rotate(35deg);
            transform-origin: left center;
            opacity: 0.5;
        }

        .map-connection::before,
        .map-connection::after {
            content: '';
            position: absolute;
            width: 6px;
            height: 6px;
            background: var(--accent-pink);
            border-radius: 50%;
            top: -2px;
        }

        .map-connection::before { left: 0; }
        .map-connection::after { right: 0; }

        .global-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .global-stat {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.5rem;
        }

        .global-stat-value {
            font-size: 2rem;
            font-weight: 700;
            font-family: 'DM Mono', monospace;
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .global-stat-label {
            font-size: 0.85rem;
            color: var(--text-secondary);
            margin-top: 0.25rem;
        }

        /* Methodology */
        .methodology-section {
            position: relative;
        }

        .methodology-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .methodology-step {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 2rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .methodology-step:hover {
            border-color: rgba(233, 30, 140, 0.3);
            transform: translateY(-5px);
        }

        .methodology-number {
            position: absolute;
            top: -1rem;
            left: 2rem;
            background: var(--gradient-pink);
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1rem;
        }

        .methodology-step h4 {
            margin-top: 0.5rem;
            margin-bottom: 0.75rem;
            font-size: 1.25rem;
        }

        .methodology-step p {
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin: 0;
        }

        /* Methodology Visual */
        .methodology-visual {
            margin-top: 3rem;
            padding: 2rem;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
        }

        .methodology-flow {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .flow-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            flex: 1;
            min-width: 100px;
        }

        .flow-icon {
            width: 50px;
            height: 50px;
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-pink);
            transition: all 0.3s ease;
        }

        .flow-step:hover .flow-icon {
            background: var(--gradient-pink);
            color: white;
            transform: scale(1.1);
        }

        .flow-label {
            font-size: 0.75rem;
            color: var(--text-muted);
            text-align: center;
        }

        .flow-arrow {
            color: var(--text-muted);
            flex-shrink: 0;
        }

        /* About */
        .about-content {
            max-width: 800px;
        }

        .about-content p {
            font-size: 1.125rem;
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .about-content strong {
            color: var(--text-primary);
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
            padding-top: 3rem;
            border-top: 1px solid var(--border-color);
        }

        .about-stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-family: 'DM Mono', monospace;
        }

        .about-stat-label {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        /* Blog */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .blog-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 255, 255, 0.15);
        }

        .blog-card-image {
            height: 180px;
            background: linear-gradient(135deg, var(--bg-tertiary) 0%, rgba(233, 30, 140, 0.1) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            font-size: 0.875rem;
            position: relative;
            overflow: hidden;
        }

        .blog-card-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent 30%, rgba(233, 30, 140, 0.1) 50%, transparent 70%);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .blog-card-body {
            padding: 1.5rem;
        }

        .blog-card-date {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-bottom: 0.5rem;
            font-family: 'DM Mono', monospace;
        }

        .blog-card h4 {
            font-size: 1.125rem;
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }

        .blog-card p {
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin: 0;
        }

        /* CTA */
        .cta-section {
            background: linear-gradient(135deg, var(--bg-secondary) 0%, rgba(233, 30, 140, 0.1) 100%);
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, var(--accent-pink-glow) 0%, transparent 50%);
            opacity: 0.1;
            animation: rotateBg 30s linear infinite;
        }

        @keyframes rotateBg {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .cta-content {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .cta-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .cta-content p {
            color: var(--text-secondary);
            font-size: 1.125rem;
            margin-bottom: 2rem;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-contact {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
        }

        .cta-contact-item {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            margin: 0 1rem;
            font-family: 'DM Mono', monospace;
            font-size: 0.9rem;
        }

        .cta-contact-item a {
            color: var(--accent-pink);
            text-decoration: none;
        }

        .cta-contact-item a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background: var(--bg-primary);
            padding: 3rem 0;
            border-top: 1px solid var(--border-color);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-brand {
            font-weight: 600;
            color: var(--text-secondary);
        }

        .footer-links {
            display: flex;
            gap: 2rem;
        }

        .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s ease;
        }

        .footer-links a:hover {
            color: var(--text-primary);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                padding: 7rem 0 4rem;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-stats {
                gap: 2rem;
            }

            .hero-visual {
                margin-top: 3rem;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .flagship-features {
                grid-template-columns: 1fr;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
            }

            .dashboard-stats {
                grid-template-columns: 1fr;
            }

            .flow-arrow {
                display: none;
            }

            .methodology-flow {
                flex-direction: column;
            }
        }

        /* Scroll animations */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .stagger-1 { transition-delay: 0.1s; }
        .stagger-2 { transition-delay: 0.2s; }
        .stagger-3 { transition-delay: 0.3s; }
        .stagger-4 { transition-delay: 0.4s; }
        .stagger-5 { transition-delay: 0.5s; }
        .stagger-6 { transition-delay: 0.6s; }
    </style>
</head>
<body>
    <div class="grid-bg"></div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container-xl">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand" href="#">
                    <div class="brand-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                    </div>
                    STEALTH LABZ
                </a>
                <div class="d-none d-md-flex align-items-center gap-2">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                    <a class="nav-link" href="#methodology">Process</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#blog">Insights</a>
                    <a class="nav-link btn-nav ms-2" href="#contact">Get in Touch</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container-xl">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-badge">
                        <span class="dot"></span>
                        Global Operations • AI-Native Execution
                    </div>
                    
                    <h1 class="hero-title">
                        Built Different.<br>
                        <span class="highlight">Ships Fast.</span>
                    </h1>
                    
                    <p class="hero-subtitle">
                        15+ years of combined execution across performance marketing, product development, and global operations — now accelerated by AI.
                    </p>
                    
                    <div class="hero-cta">
                        <a href="#portfolio" class="btn-glow">
                            Explore Portfolio
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                        <a href="#contact" class="btn-outline">Get in Touch</a>
                    </div>
                    
                    <div class="hero-stats">
                        <div class="hero-stat">
                            <div class="hero-stat-value">$<span class="counter" data-target="35">0</span>M+</div>
                            <div class="hero-stat-label">Revenue Generated</div>
                        </div>
                        <div class="hero-stat">
                            <div class="hero-stat-value"><span class="counter" data-target="300">0</span>K+</div>
                            <div class="hero-stat-label">Paid Subscribers</div>
                        </div>
                        <div class="hero-stat">
                            <div class="hero-stat-value"><span class="counter" data-target="12">0</span>+</div>
                            <div class="hero-stat-label">Live Platforms</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="hero-visual">
                        <div class="dashboard-mockup">
                            <div class="dashboard-header">
                                <span class="dashboard-dot red"></span>
                                <span class="dashboard-dot yellow"></span>
                                <span class="dashboard-dot green"></span>
                                <span class="dashboard-url">portal.stealthlabz.com/dashboard</span>
                            </div>
                            <div class="dashboard-body">
                                <div class="dashboard-stats">
                                    <div class="dashboard-stat">
                                        <div class="dashboard-stat-label">Leads Today</div>
                                        <div class="dashboard-stat-value green">+12,847</div>
                                    </div>
                                    <div class="dashboard-stat">
                                        <div class="dashboard-stat-label">Active Feeds</div>
                                        <div class="dashboard-stat-value pink">24</div>
                                    </div>
                                    <div class="dashboard-stat">
                                        <div class="dashboard-stat-label">Publishers</div>
                                        <div class="dashboard-stat-value cyan">55</div>
                                    </div>
                                </div>
                                <div class="chart-container">
                                    <div class="chart-header">
                                        <span class="chart-title">Revenue (30 Days)</span>
                                        <span class="chart-badge">+127% MoM</span>
                                    </div>
                                    <svg class="chart-svg" viewBox="0 0 300 100" preserveAspectRatio="none">
                                        <defs>
                                            <linearGradient id="chartGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                                <stop offset="0%" style="stop-color:#e91e8c;stop-opacity:0.3" />
                                                <stop offset="100%" style="stop-color:#e91e8c;stop-opacity:0" />
                                            </linearGradient>
                                        </defs>
                                        <path class="chart-area" d="M0,80 Q30,75 60,65 T120,50 T180,35 T240,25 T300,10 L300,100 L0,100 Z" />
                                        <path class="chart-line" d="M0,80 Q30,75 60,65 T120,50 T180,35 T240,25 T300,10" />
                                        <circle class="chart-dot" cx="60" cy="65" r="4" style="animation-delay: 0.5s" />
                                        <circle class="chart-dot" cx="120" cy="50" r="4" style="animation-delay: 1s" />
                                        <circle class="chart-dot" cx="180" cy="35" r="4" style="animation-delay: 1.5s" />
                                        <circle class="chart-dot" cx="240" cy="25" r="4" style="animation-delay: 2s" />
                                        <circle class="chart-dot" cx="300" cy="10" r="4" style="animation-delay: 2.5s" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="floating-card floating-card-1">
                            <div class="floating-card-label">Build Time</div>
                            <div class="floating-card-value pink">60 Days</div>
                        </div>

                        <div class="floating-card floating-card-2">
                            <div class="floating-card-label">Uptime</div>
                            <div class="floating-card-value green">99.9%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Integrations Marquee -->
    <section class="integrations-section">
        <div class="integrations-label">Integrated Stack</div>
        <div class="integrations-track">
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                Everflow
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg>
                CAKE
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                TUNE
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><rect x="3" y="3" width="18" height="18" rx="2"/></svg>
                TrafficAI
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v16H4z"/></svg>
                Konnektive
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg>
                Shopify
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
                Stripe
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                Dripcel
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
                SendGrid
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07"/></svg>
                Twilio
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg>
                HeyGen
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
                Zapier
            </div>
            <!-- Duplicate for seamless loop -->
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                Everflow
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg>
                CAKE
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                TUNE
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><rect x="3" y="3" width="18" height="18" rx="2"/></svg>
                TrafficAI
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v16H4z"/></svg>
                Konnektive
            </div>
            <div class="integration-item">
                <svg class="integration-icon" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg>
                Shopify
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="section-dark">
        <div class="container-xl">
            <div class="fade-up">
                <h2 class="section-title">What's Live</h2>
                <p class="section-subtitle">Production platforms across SaaS, lead generation, content, and DTC — all built lean, all shipping.</p>
            </div>
            
            <div class="portfolio-grid">
                <!-- Flagship: Stealth Portal -->
                <div class="portfolio-card flagship fade-up">
                    <div class="flagship-content">
                        <div>
                            <span class="portfolio-card-badge">Flagship • SaaS</span>
                            <h3>Stealth Portal</h3>
                            <p>5 platforms in one: CDP, Affiliate Network, Lead Distribution, E-Commerce, Marketing Automation. Identity resolution across 12 source types. 90+ profile fields. Intelligent routing to 7 outbound integrations. 12 merchant accounts.</p>
                            <a href="https://portal.stealthlabz.com" class="portfolio-card-link" target="_blank">
                                portal.stealthlabz.com
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </a>
                            <div class="flagship-features">
                                <div class="flagship-feature">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                                    100+ Features
                                </div>
                                <div class="flagship-feature">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                                    83 DB Tables
                                </div>
                                <div class="flagship-feature">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                                    Identity Resolution
                                </div>
                                <div class="flagship-feature">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                                    Multi-Tenant
                                </div>
                            </div>
                        </div>
                        <div class="flagship-visual">
                            <div class="chart-header" style="margin-bottom: 1rem;">
                                <span class="chart-title">Platform Growth</span>
                                <span class="chart-badge">60 Day Build</span>
                            </div>
                            <div class="flagship-chart">
                                <div class="flagship-bar"></div>
                                <div class="flagship-bar"></div>
                                <div class="flagship-bar"></div>
                                <div class="flagship-bar"></div>
                                <div class="flagship-bar"></div>
                            </div>
                            <div class="flagship-chart-labels">
                                <span>W1</span>
                                <span>W2</span>
                                <span>W4</span>
                                <span>W6</span>
                                <span>W8</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GoQuoteRocket US -->
                <div class="portfolio-card fade-up stagger-1">
                    <span class="portfolio-card-badge">Lead Gen • US</span>
                    <h3>GoQuoteRocket</h3>
                    <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">4</div>
                            <div class="portfolio-metric-label">Verticals</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">40K</div>
                            <div class="portfolio-metric-label">Lines</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">11</div>
                            <div class="portfolio-metric-label">SEO Pages</div>
                        </div>
                    </div>
                    <p>Config-driven insurance lead generation. Auto, life, medicare, credit cards. One codebase, infinite verticals.</p>
                    <a href="https://goquoterocket.com" class="portfolio-card-link" target="_blank">
                        goquoterocket.com
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>

                <!-- Quote Rocket ZA -->
                <div class="portfolio-card fade-up stagger-2">
                    <span class="portfolio-card-badge">Lead Gen • South Africa</span>
                    <h3>Quote Rocket ZA</h3>
                    <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">12</div>
                            <div class="portfolio-metric-label">Verticals</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">92K</div>
                            <div class="portfolio-metric-label">Lines</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">10</div>
                            <div class="portfolio-metric-label">Articles</div>
                        </div>
                    </div>
                    <p>12-vertical insurance platform. Car, life, health, funeral, pet, business, debt, loans — all live.</p>
                    <a href="https://quoterocket.co.za" class="portfolio-card-link" target="_blank">
                        quoterocket.co.za
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>

                <!-- Customer Reports -->
                <div class="portfolio-card fade-up stagger-3">
                    <span class="portfolio-card-badge">Content • Affiliate</span>
                    <h3>Customer Reports</h3>
                    <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">13K</div>
                            <div class="portfolio-metric-label">Articles</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">148</div>
                            <div class="portfolio-metric-label">Reviews</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">14</div>
                            <div class="portfolio-metric-label">Categories</div>
                        </div>
                    </div>
                    <p>Zero-dependency PHP MVC platform. Complete WordPress replacement built for affiliate monetization.</p>
                    <a href="https://customer-reports.org" class="portfolio-card-link" target="_blank">
                        customer-reports.org
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>

                <!-- Videos From Santa -->
                <div class="portfolio-card fade-up stagger-4">
                    <span class="portfolio-card-badge">AI • Seasonal</span>
                    <h3>Videos From Santa</h3>
                    <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">54K</div>
                            <div class="portfolio-metric-label">Lines</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">3</div>
                            <div class="portfolio-metric-label">Characters</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">5</div>
                            <div class="portfolio-metric-label">Step Checkout</div>
                        </div>
                    </div>
                    <p>HeyGen-powered personalized video messages. Free funnel, paid packages, Stripe checkout.</p>
                    <a href="https://videosfromsanta.com" class="portfolio-card-link" target="_blank">
                        videosfromsanta.com
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>

                <!-- HOA Attorney Guide -->
                <div class="portfolio-card fade-up stagger-5">
                    <span class="portfolio-card-badge">Lead Gen • Legal</span>
                    <h3>HOA Attorney Guide</h3>
                    <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">6</div>
                            <div class="portfolio-metric-label">Steps</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">8.8K</div>
                            <div class="portfolio-metric-label">Lines</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">0</div>
                            <div class="portfolio-metric-label">Dependencies</div>
                        </div>
                    </div>
                    <p>Qualification funnel for HOA dispute leads. Routes to vetted attorney partners. Zero dependencies.</p>
                    <a href="https://hoa-attorneys.com" class="portfolio-card-link" target="_blank">
                        hoa-attorneys.com
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>

                <!-- Evergreen Brands -->
                <div class="portfolio-card fade-up stagger-6">
                    <span class="portfolio-card-badge">DTC • Nutra</span>
                    <h3>Evergreen Brands</h3>
                    <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">14</div>
                            <div class="portfolio-metric-label">Funnels</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">25+</div>
                            <div class="portfolio-metric-label">SKUs</div>
                        </div>
                        <div class="portfolio-metric">
                            <div class="portfolio-metric-value">3</div>
                            <div class="portfolio-metric-label">Brands</div>
                        </div>
                    </div>
                    <p>Essentials, Evolutions, Botanicals. Supplement funnels across US and South Africa.</p>
                    <a href="#" class="portfolio-card-link">
                        Multiple Properties
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Operations -->
    <section class="global-section">
        <div class="container-xl">
            <div class="global-content">
                <div class="fade-up">
                    <h2 class="section-title">Global Operations</h2>
                    <p class="section-subtitle" style="margin-bottom: 2rem;">Live platforms across two continents. Supply chain, operations, customer support, and affiliate networks running 24/7.</p>
                    
                    <div class="global-stats">
                        <div class="global-stat">
                            <div class="global-stat-value">2</div>
                            <div class="global-stat-label">Continents</div>
                        </div>
                        <div class="global-stat">
                            <div class="global-stat-value">6+</div>
                            <div class="global-stat-label">Live Funnels</div>
                        </div>
                        <div class="global-stat">
                            <div class="global-stat-value">55</div>
                            <div class="global-stat-label">Publishers</div>
                        </div>
                        <div class="global-stat">
                            <div class="global-stat-value">24/7</div>
                            <div class="global-stat-label">Operations</div>
                        </div>
                    </div>
                </div>
                
                <div class="global-map fade-up">
                    <div class="map-container">
                        <div class="map-dot us"></div>
                        <div class="map-dot za"></div>
                        <div class="map-connection"></div>
                        <div class="map-label us">US • 4 Platforms</div>
                        <div class="map-label za">ZA • 2 Platforms</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section class="skills-section">
        <div class="container-xl">
            <div class="fade-up">
                <h2 class="section-title">Capabilities</h2>
                <p class="section-subtitle">Full-stack execution across marketing, technology, and operations.</p>
            </div>
            
            <div class="skills-grid">
                <div class="skill-category fade-up">
                    <h4>Marketing & Growth</h4>
                    <div class="skill-bars">
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">Affiliate Marketing</span>
                                <span class="skill-bar-value">15+ yrs</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="95"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">Performance Marketing</span>
                                <span class="skill-bar-value">$35M+</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="90"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">SEO & Content</span>
                                <span class="skill-bar-value">13K articles</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="85"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">Lead Generation</span>
                                <span class="skill-bar-value">16 verticals</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="92"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skill-category fade-up">
                    <h4>Technology & Development</h4>
                    <div class="skill-bars">
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">Laravel / PHP</span>
                                <span class="skill-bar-value">200K+ lines</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="88"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">AI-Accelerated Dev</span>
                                <span class="skill-bar-value">60-day builds</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="95"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">API Integrations</span>
                                <span class="skill-bar-value">12+ platforms</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="90"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">Database Design</span>
                                <span class="skill-bar-value">83 tables</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="85"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skill-category fade-up">
                    <h4>Operations & Scale</h4>
                    <div class="skill-bars">
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">Team Building</span>
                                <span class="skill-bar-value">0 → 50</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="90"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">DTC Operations</span>
                                <span class="skill-bar-value">300K subs</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="92"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">Global Expansion</span>
                                <span class="skill-bar-value">US + ZA</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="80"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header">
                                <span class="skill-bar-name">Process Design</span>
                                <span class="skill-bar-value">SOPs + RACI</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="88"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Methodology -->
    <section id="methodology" class="section-dark methodology-section">
        <div class="container-xl">
            <div class="fade-up">
                <h2 class="section-title">The Loop</h2>
                <p class="section-subtitle">Each cycle compounds — faster, cheaper, stronger with every launch.</p>
            </div>

            <!-- Visual Flow -->
            <div class="methodology-visual fade-up">
                <div class="methodology-flow">
                    <div class="flow-step">
                        <div class="flow-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                        </div>
                        <span class="flow-label">Validate</span>
                    </div>
                    <svg class="flow-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    <div class="flow-step">
                        <div class="flow-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>
                        </div>
                        <span class="flow-label">Analyze</span>
                    </div>
                    <svg class="flow-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    <div class="flow-step">
                        <div class="flow-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>
                        </div>
                        <span class="flow-label">Build</span>
                    </div>
                    <svg class="flow-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    <div class="flow-step">
                        <div class="flow-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </div>
                        <span class="flow-label">Launch</span>
                    </div>
                    <svg class="flow-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    <div class="flow-step">
                        <div class="flow-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </div>
                        <span class="flow-label">Evaluate</span>
                    </div>
                    <svg class="flow-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    <div class="flow-step">
                        <div class="flow-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <span class="flow-label">Scale</span>
                    </div>
                </div>
            </div>
            
            <div class="methodology-grid">
                <div class="methodology-step fade-up stagger-1">
                    <div class="methodology-number">1</div>
                    <h4>Validate</h4>
                    <p>Gauge demand with traffic partners. Follow trends. Replicate what works.</p>
                </div>
                <div class="methodology-step fade-up stagger-2">
                    <div class="methodology-number">2</div>
                    <h4>Analyze</h4>
                    <p>Model the campaign. Predict success. Define KPIs before spending a dollar.</p>
                </div>
                <div class="methodology-step fade-up stagger-3">
                    <div class="methodology-number">3</div>
                    <h4>Build</h4>
                    <p>Proven templates. AI-accelerated execution. Cut time and cost. Ship fast.</p>
                </div>
                <div class="methodology-step fade-up stagger-4">
                    <div class="methodology-number">4</div>
                    <h4>Launch</h4>
                    <p>Drive traffic. Collect data. Validate assumptions in the market, not in meetings.</p>
                </div>
                <div class="methodology-step fade-up stagger-5">
                    <div class="methodology-number">5</div>
                    <h4>Evaluate</h4>
                    <p>Performance vs. projections. Go/no-go decision. Kill fast or double down.</p>
                </div>
                <div class="methodology-step fade-up stagger-6">
                    <div class="methodology-number">6</div>
                    <h4>Scale</h4>
                    <p>Expand products. Diversify channels. Reinvest in content properties. Exit or hold.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-content fade-up">
                        <h2 class="section-title">Process Over Permission</h2>
                        
                        <p>Stealth Labz is the operating company behind a portfolio of SaaS platforms, lead generation systems, and DTC brands — all built lean, all shipping production.</p>
                        
                        <p>The playbook took <strong>15+ years of combined experience</strong> to develop: affiliate networks, DTC scale-ups, subscription brands, SEO empires. The kind of knowledge you only get from <strong>$35M+ in revenue</strong>, <strong>300K+ paid subscribers</strong>, and teams scaled from zero to 50.</p>
                        
                        <p>Then AI changed the math. What used to take teams and months now takes weeks. <strong>Stealth Portal</strong> — a full enterprise CDP with 100+ features — went from concept to production in <strong>60 days</strong>. No prior coding experience. Just process, execution, and the refusal to wait.</p>
                        
                        <p>This isn't an agency. <strong>It's infrastructure for scale.</strong></p>
                        
                        <div class="about-stats">
                            <div>
                                <div class="about-stat-value">$35M+</div>
                                <div class="about-stat-label">Revenue across brands</div>
                            </div>
                            <div>
                                <div class="about-stat-value">300K+</div>
                                <div class="about-stat-label">Paid subscribers acquired</div>
                            </div>
                            <div>
                                <div class="about-stat-value">60</div>
                                <div class="about-stat-label">Days to ship Portal</div>
                            </div>
                            <div>
                                <div class="about-stat-value">2</div>
                                <div class="about-stat-label">Continents, live ops</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section id="blog" class="section-dark">
        <div class="container-xl">
            <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 fade-up">
                <div>
                    <h2 class="section-title">Insights</h2>
                    <p class="section-subtitle mb-0">Thoughts on building, scaling, and shipping.</p>
                </div>
                <a href="/insights" class="btn-outline">View All Posts</a>
            </div>
            
            <div class="blog-grid">
                <?php if (!empty($recentPosts)): ?>
                    <?php foreach ($recentPosts as $i => $post): ?>
                <a href="/insights/<?= htmlspecialchars($post['slug']) ?>" class="blog-card fade-up stagger-<?= $i + 1 ?>" style="text-decoration: none; color: inherit;">
                    <div class="blog-card-image" style="background-image: url('<?= htmlspecialchars($post['featured_image']) ?>'); background-size: cover; background-position: center;">
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-card-date"><?= date('Y-m-d', strtotime($post['published_at'])) ?></div>
                        <h4><?= htmlspecialchars($post['title']) ?></h4>
                        <p><?= htmlspecialchars(substr($post['excerpt'] ?? '', 0, 100)) ?>...</p>
                    </div>
                </a>
                    <?php endforeach; ?>
                <?php else: ?>
                <p class="text-secondary">No posts yet.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="contact" class="cta-section">
        <div class="container-xl">
            <div class="cta-content fade-up">
                <h2>Let's Build</h2>
                <p>Partnerships. Licensing. Investment. Or just say what's up.</p>
                
                <div class="cta-buttons">
                    <a href="mailto:mike@stealthlabz.com" class="btn-glow">
                        Get in Touch
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="https://t.me/michaelgkeating" class="btn-outline" target="_blank">Telegram</a>
                </div>
                
                <div class="cta-contact">
                    <span class="cta-contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <a href="mailto:mike@stealthlabz.com">mike@stealthlabz.com</a>
                    </span>
                    <span class="cta-contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <a href="tel:619-990-3761">619-990-3761</a>
                    </span>
                    <span class="cta-contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="10" r="3"/><path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 7 8 11.7z"/></svg>
                        Miami, FL
                    </span>
                </div>
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
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

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

        // Animated counters
        const counters = document.querySelectorAll('.counter');
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.dataset.target);
                    const duration = 2000;
                    const step = target / (duration / 16);
                    let current = 0;
                    
                    const updateCounter = () => {
                        current += step;
                        if (current < target) {
                            counter.textContent = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    };
                    
                    updateCounter();
                    counterObserver.unobserve(counter);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => counterObserver.observe(counter));

        // Skill bar animations
        const skillBars = document.querySelectorAll('.skill-bar-fill');
        const skillObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target;
                    const width = bar.dataset.width;
                    bar.style.width = width + '%';
                    skillObserver.unobserve(bar);
                }
            });
        }, { threshold: 0.5 });

        skillBars.forEach(bar => skillObserver.observe(bar));
    </script>
</body>
</html>
