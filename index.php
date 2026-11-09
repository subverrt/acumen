<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acumen</title> 
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <!--- Navbar --->

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="index.php">
                ACUMEN<span class="text-primary">.</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works">How It Works</a>
                    </li>
                </ul>
                <div class="d-flex gap-2">
                    <a href="login.php" class="btn btn-outline-dark">Login</a>
                    <a href="register.php" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <!--- Hero Section --->

    <section class="hero py-5" id="home">
        <div class="container">
            <div class="row align-items-center min-vh-75 mb-3">
                <div class="col-lg-7">
                    <span class="badge bg-primary-subtle text-primary mb-3">
                        STUDENT SKILL ASSESSMENT PLATFORM
                    </span>
                    <h1 class="display-3 fw-bold mt-2 mb-4">
                        <span class="hero-title-line">Measure Your <span class="text-primary">Skills</span></span><br class="d-none d-lg-block">
                        <span class="hero-title-line">Discover Your <span class="text-primary">Potential</span></span>
                    </h1>
                    <p class="lead text-secondary col-lg-10 mb-5">
                        A smarter way to assess technical skills,
                        measure competencies, identify skill gaps
                        and track your learning progress.
                    </p>

                    <div class="d-flex gap-3 flex-wrap">
                        <a href="register.php"
                           class="btn btn-primary btn-lg">
                            Start Assessment ->
                        </a>
                        <a href="#features"
                           class="btn btn-outline-dark btn-lg">
                            Explore Platform
                        </a>
                    </div>

                    <div class="row mt-5">
                        <div class="col-4">
                            <h3 class="fw-bold">01</h3>
                            <p class="text-secondary">Assess Skills</p>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold">02</h3>
                            <p class="text-secondary">Analyze Results</p>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold">03</h3>
                            <p class="text-secondary">Track Growth</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 mt-5 mt-lg-0 text-center">
                    <img src="hero.png"
                         class="hero-image img-fluid"
                         alt="hero-image">
                </div>
                
            </div>
        </div>
    </section>

    <!-- FEATURES -->

    <section class="py-5 bg-light" id="features">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary fw-semibold">
                    FEATURES
                </span>
                <h1 class="fw-bold mt-2">
                    Discover What you can do with ACUMEN<span class="text-primary">.</span>
                </h1>
                <p class="text-secondary">
                    Assess, evaluate and understand your technical abilities.
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100">
                        <img src="i1.webp" class="card-img-top feature-img" alt="Tailored assessments">
                        <div class="card-body">
                            <h5 class="card-title">
                                Tailored Assessments
                            </h5>
                            <p class="card-text text-secondary">
                                Take customized tests that evaluate your specific technical skills and identify core strengths.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100">
                        <img src="i2.webp" class="card-img-top feature-img" alt="Detailed analytics">
                        <div class="card-body">
                            <h5 class="card-title">
                                Detailed Analytics
                            </h5>
                            <p class="card-text text-secondary">
                                Track your progress over time with interactive dashboards and personalized insights.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100">
                        <img src="i3.webp" class="card-img-top feature-img" alt="Skill gap identification">
                        <div class="card-body">
                            <h5 class="card-title">
                                Identify Skill Gaps
                            </h5>
                            <p class="card-text text-secondary">
                                Pinpoint exact areas where you can improve, based on real-time feedback and industry standards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100">
                        <img src="i4.webp" class="card-img-top feature-img" alt="Progress tracking">
                        <div class="card-body">
                            <h5 class="card-title">
                                Track Your Progress
                            </h5>
                            <p class="card-text text-secondary">
                                See your growth from start to finish as you acquire new competencies and master new tech.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- About --->

     <section class="py-5" id="about">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="text-primary fw-semibold">
                        ABOUT ACUMEN
                    </span>
                    <h2 class="fw-bold mt-3">
                        Beyond Marks.
                        Towards Real Competency.
                    </h2>
                </div>
                <div class="col-lg-6 mt-5">
                    <p class="text-secondary">
                        ACUMEN is designed to provide a structured
                        approach to student skill assessment.
                        Instead of focusing only on overall marks,
                        it evaluates performance across individual
                        skills and identifies areas that need improvement.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--- HOW IT WORKS --->
    <section class="py-5 bg-light" id="how-it-works">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">How ACUMEN Works</h2>
            <div class="row g-4 mt-2">
                <div class="col-md-3">
                    <h3 class="text-primary ">01</h3>
                    <h5>Choose Assessment</h5>
                    <p class="text-secondary">
                        Select an available skill assessment.
                    </p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-primary">02</h3>
                    <h5>Attempt Questions</h5>
                    <p class="text-secondary">
                        Complete the assessment within its time limit.
                    </p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-primary">03</h3>
                    <h5>View Results</h5>
                    <p class="text-secondary">
                        Review your scores and competency levels.
                    </p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-primary">04</h3>
                    <h5>Improve Skills</h5>
                    <p class="text-secondary">
                        Identify skill gaps and track your progress.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--- CTA BUTTON--->

    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold">
                Ready to Discover Your Potential?
            </h2>
            <p class="text-secondary mt-3">
                Start measuring your skills with ACUMEN.
            </p>
            <a href="register.php" class="btn btn-primary btn-lg mt-2">
                Get Started
            </a>
        </div>
    </section>

    <!--- FOOTER  --->

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap gap-3">
                <div>
                    <h4 class="fw-bold">ACUMEN<span class="text-primary">.</span></h4>
                    <small class="text-secondary">
                        Measure Skills. Discover Potential.
                    </small>
                </div>
                <div class="d-flex align-items-center gap-3 ms-auto">
                    <a href="#" class="text-white fs-5" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="text-white fs-5" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="text-white fs-5" aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#" class="text-white fs-5" aria-label="GitHub">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
                <div class="w-100 text-center">
                    <small class="text-secondary">
                        © <?php echo date("Y"); ?> ACUMEN
                        All Rights Reserved.
                    </small>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>