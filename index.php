<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP From Zero — Learning Hub</title>
    <style>
        :root {
            --primary: #667eea;
            --muted: #666
        }

        body {
            font-family: Segoe UI, Tahoma, Geneva, sans-serif;
            margin: 0;
            background: #f5f7fb;
            color: #222
        }

        .hero {
            background: linear-gradient(135deg, var(--primary), #764ba2);
            color: #fff;
            padding: 48px 20px;
            text-align: center
        }

        .hero h1 {
            margin: 0;
            font-size: 2rem
        }

        .hero p {
            opacity: .95;
            margin-top: 8px
        }

        .container {
            max-width: 1100px;
            margin: 28px auto;
            padding: 0 20px
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px
        }

        .card {
            background: #fff;
            border-radius: 10px;
            padding: 18px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06)
        }

        .card h3 {
            margin: 0 0 8px 0;
            color: var(--primary)
        }

        .muted {
            color: var(--muted)
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600
        }

        .btn-primary {
            background: var(--primary);
            color: #fff
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary)
        }

        .meta {
            font-size: 0.9rem;
            color: #666;
            margin-top: 6px
        }

        .features {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 10px
        }

        footer {
            padding: 24px 0;
            text-align: center;
            color: #777
        }

        @media (max-width:600px) {
            .hero h1 {
                font-size: 1.5rem
            }
        }
    </style>
</head>

<body>

    <header class="hero">
        <div class="container">
            <h1>PHP From Zero — Learning Hub</h1>
            <p>30-module guided system: fundamentals → projects → expert-level architectures</p>
            <div style="margin-top:18px;display:flex;gap:12px;justify-content:center;flex-wrap:wrap">
                <a class="btn btn-primary" href="START_HERE.php">Open Dashboard</a>
                <a class="btn btn-outline" href="GETTING_STARTED.php">Getting Started</a>
                <a class="btn btn-outline" href="modules/index.php">All Modules</a>
                <a class="btn btn-outline" href="projects/index.php">Projects</a>
            </div>
        </div>
    </header>

    <main class="container">
        <section style="margin-bottom:22px">
            <div class="grid">
                <div class="card">
                    <h3>Learning Path</h3>
                    <p class="muted">Visual timeline and module progression for all 30 modules.</p>
                    <div class="features">
                        <a class="btn btn-primary" href="LEARNING_PATH.php">View Path</a>
                        <a class="btn btn-outline" href="README_ADVANCED.php">Study Techniques</a>
                    </div>
                </div>

                <div class="card">
                    <h3>Mastery Guide</h3>
                    <p class="muted">Specialization paths, career timeline, and book recommendations.</p>
                    <div class="features">
                        <a class="btn btn-primary" href="MASTERY_GUIDE.php">Open Guide</a>
                        <a class="btn btn-outline" href="GETTING_STARTED.php">Quick Start</a>
                    </div>
                </div>

                <div class="card">
                    <h3>Projects</h3>
                    <p class="muted">Todo, Blog, E‑Commerce, Social Network — plan and build as you learn.</p>
                    <div class="features">
                        <a class="btn btn-primary" href="projects/">View Projects</a>
                    </div>
                </div>

                <div class="card">
                    <h3>Repository</h3>
                    <p class="muted">Your local workspace; keep this repo synced with GitHub.</p>
                    <div class="features">
                        <a class="btn btn-outline" href="https://github.com/Tawfeeq-nk/php_from_zero"
                            target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="card" style="margin-bottom:22px">
            <h3>Quick Summary</h3>
            <p class="muted">This learning hub includes:</p>
            <ul>
                <li>30 modules from fundamentals to expert systems</li>
                <li>4 real projects to build and deploy</li>
                <li>Interactive dashboards and study guides</li>
            </ul>
            <p class="meta">Updated: <?php echo date('Y-m-d'); ?> • PHP <?php echo phpversion(); ?></p>
        </section>

        <section style="display:grid;grid-template-columns:1fr 300px;gap:18px;align-items:start">
            <div>
                <div class="card">
                    <h3>How to Use This Hub</h3>
                    <ol class="muted">
                        <li>Open the main dashboard: <a href="START_HERE.php">START_HERE.php</a></li>
                        <li>Follow the learning path or start with <a href="GETTING_STARTED.php">Getting Started</a>
                        </li>
                        <li>Build projects and push work to GitHub regularly</li>
                    </ol>
                </div>

                <div class="card" style="margin-top:12px">
                    <h3>Notes</h3>
                    <p class="muted">Markdown backups remain in the repo. Dashboards are the primary UI now.</p>
                </div>
            </div>

            <aside>
                <div class="card">
                    <h3>Quick Links</h3>
                    <p class="muted"><a href="LEARNING_PATH.php">Learning Path</a><br>
                        <a href="README_ADVANCED.php">Study Strategies</a><br>
                        <a href="MASTERY_GUIDE.php">Mastery Guide</a><br>
                        <a href="GETTING_STARTED.php">Getting Started</a>
                    </p>
                </div>
            </aside>
        </section>
    </main>

    <footer>
        <div class="container muted">&copy; <?php echo date('Y'); ?> PHP From Zero — Learning Hub • Built for learning
            and experimentation</div>
    </footer>

</body>

</html>