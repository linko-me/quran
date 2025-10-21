<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran App</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Quran.app</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/surahs">Surahs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/juzs">Juzs</a>
                    </li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-item">
                            <a href="/logout" class="btn btn-outline-light">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="/login" class="btn btn-outline-light me-2">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/signup" class="btn btn-primary">Sign Up</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="hero">
            <h1 class="display-4">Read, Search, and Listen to the Quran</h1>
            <p class="lead">A beautiful and modern interface for the Holy Quran.</p>
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="/search" method="get">
                            <div class="input-group mb-3">
                                <input type="text" name="query" class="form-control" placeholder="Search the Quran..." required>
                                <button class="btn btn-info" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
