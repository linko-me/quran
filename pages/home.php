<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran Kareem - Your Digital Quran Companion</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body class="homepage">

    <header class="hero-section">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Quran Kareem</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/surahs">Surahs</a></li>
                        <li class="nav-item"><a class="nav-link" href="/juzs">Juzs</a></li>
                         <?php if (isset($_SESSION['username'])): ?>
                            <li class="nav-item"><a href="/logout" class="btn btn-outline-light">Logout</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a href="/login" class="btn btn-outline-light me-2">Login</a></li>
                            <li class="nav-item"><a href="/signup" class="btn btn-primary">Sign Up</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="hero-content text-center">
            <div class="container">
                <h1 class="display-3">A Journey Through Divine Words</h1>
                <p class="lead">Read, listen, and immerse yourself in the teachings of the Holy Quran with a modern, ad-free experience.</p>
                <form class="mt-4" action="/search" method="get">
                    <div class="input-group search-bar mx-auto">
                        <span class="input-group-text"><i class="iconoir-search"></i></span>
                        <input type="text" name="query" class="form-control" placeholder="Search for a Surah or Ayah..." required>
                        <button class="btn btn-primary" type="submit">Explore</button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <main>
        <!-- Key Features Section -->
        <section class="features-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="iconoir-book-stack feature-icon"></i>
                            <h3>Authentic & Complete Text</h3>
                            <p>Engage with the complete and unaltered text of the Holy Quran, presented in a clean, readable format.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="iconoir-sound-high feature-icon"></i>
                            <h3>Soulful Recitations</h3>
                            <p>Listen to crystal-clear audio from a selection of world-renowned Qaris to inspire your heart.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="iconoir-translate feature-icon"></i>
                            <h3>Multiple Translations</h3>
                            <p>Deepen your understanding with access to various trusted translations in multiple languages.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Surahs Section -->
        <section class="popular-surahs-section">
            <div class="container">
                <h2 class="section-title text-center">Explore Popular Surahs</h2>
                <div class="row">
                    <!-- Cards will be dynamically generated or hardcoded based on final implementation -->
                    <div class="col-md-4">
                        <a href="/surah/1" class="surah-card">
                            <div class="surah-card-body">
                                <div>
                                    <h5>Al-Fatiha</h5>
                                    <p>The Opening</p>
                                </div>
                                <i class="iconoir-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/surah/36" class="surah-card">
                            <div class="surah-card-body">
                                <div>
                                    <h5>Ya-Sin</h5>
                                    <p>The Heart of the Quran</p>
                                </div>
                                <i class="iconoir-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/surah/55" class="surah-card">
                            <div class="surah-card-body">
                                <div>
                                    <h5>Ar-Rahman</h5>
                                    <p>The Most Merciful</p>
                                </div>
                                <i class="iconoir-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Verse of the Day Section -->
        <section class="verse-of-the-day-section text-center">
            <div class="container">
                <h2 class="section-title">Verse of the Day</h2>
                <blockquote class="verse-quote">
                    <p>"Indeed, with hardship comes ease."</p>
                    <cite>Surah Ash-Sharh, 94:6</cite>
                </blockquote>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="cta-section text-center">
            <div class="container">
                <h2>Start Your Journey Today</h2>
                <p class="lead">Create a free account to save your progress, bookmark verses, and personalize your experience.</p>
                <a href="/signup" class="btn btn-primary btn-lg">Create a Free Account</a>
            </div>
        </section>
    </main>

    <footer class="footer-section text-center">
        <div class="container">
            <p>&copy; 2024 Quran Kareem. All Rights Reserved.</p>
            <div class="social-icons">
                <a href="#"><i class="iconoir-facebook"></i></a>
                <a href="#"><i class="iconoir-twitter"></i></a>
                <a href="#"><i class="iconoir-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
