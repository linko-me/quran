<?php
session_start();
include 'includes/api.php';
$meta = call_api('meta');
$juzs = range(1, 30);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juzs - Quran App</title>
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
        <div class="container py-4">
            <h2 class="mb-4">All Juzs</h2>
            <div class="row">
                <?php foreach ($juzs as $juz_number): ?>
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="/juz/<?php echo $juz_number; ?>">Juz <?php echo $juz_number; ?></a></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <footer class="bg-light text-center text-lg-start mt-auto">
        <div class="text-center p-3">
            &copy; 2024 Quran App
        </div>
    </footer>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
