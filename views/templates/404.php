<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | Stealth Labz</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-primary: #0a0a0f;
            --text-primary: #ffffff;
            --text-secondary: #a0a0b0;
            --accent-pink: #e91e8c;
        }
        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-primary);
            color: var(--text-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .error-container {
            text-align: center;
        }
        h1 {
            font-size: 8rem;
            margin: 0;
            background: linear-gradient(135deg, #e91e8c 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        p {
            color: var(--text-secondary);
            font-size: 1.25rem;
            margin: 1rem 0 2rem;
        }
        a {
            display: inline-block;
            background: linear-gradient(135deg, #e91e8c 0%, #8b5cf6 100%);
            color: white;
            text-decoration: none;
            padding: 1rem 2rem;
            border-radius: 10px;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        a:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(233, 30, 140, 0.4);
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>404</h1>
        <p>Page not found</p>
        <a href="<?= siteUrl('/') ?>">Return Home</a>
    </div>
</body>
</html>
