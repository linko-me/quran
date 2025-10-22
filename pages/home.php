<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran Kareem</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="homepage-header">
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
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero-section text-center">
            <div class="container">
                <h1>The Noble Quran</h1>
                <p class="lead">Read, listen, and explore the divine words of Allah.</p>
                <form class="mt-4" action="/search" method="get">
                    <div class="input-group search-bar mx-auto">
                        <input type="text" name="query" class="form-control" placeholder="Search for a Surah, Ayah, or keyword..." required>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features-section py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="feature-card">
                            <div class="icon-box"><i class="fas fa-book-open"></i></div>
                            <h3>Complete Quran Text</h3>
                            <p>Access the full text of the Quran with multiple translations and easy navigation.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <div class="icon-box"><i class="fas fa-volume-up"></i></div>
                            <h3>Crystal-Clear Recitations</h3>
                            <p>Listen to high-quality audio recitations from renowned Qaris from around the world.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <div class="icon-box"><i class="fas fa-search-plus"></i></div>
                            <h3>Powerful Search</h3>
                            <p>Instantly find any verse, topic, or keyword with our advanced search functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">What Our Users Say</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="testimonial-card">
                            <p>"An incredibly beautiful and easy-to-use app. It has become my daily companion for reading the Quran."</p>
                            <cite>— Fatima, UK</cite>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonial-card">
                            <p>"The audio recitations are of the highest quality. It helps me improve my tajweed and memorization."</p>
                            <cite>— Ahmed, USA</cite>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section py-5">
            <div class="container">
                <h2 class="text-center mb-5">Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Can I read the Quran offline?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Currently, an internet connection is required to access the Quran text and audio. We are working on an offline mode for a future update.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Are there different translations available?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we provide multiple translations in various languages to help you understand the meaning of the verses. You can switch between them easily.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-section text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Quran Kareem</h5>
                    <p>Your daily companion for reading, listening, and exploring the Holy Quran.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white">Home</a></li>
                        <li><a href="/surahs" class="text-white">Surahs</a></li>
                        <li><a href="/juzs" class="text-white">Juzs</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2024 Quran Kareem. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
