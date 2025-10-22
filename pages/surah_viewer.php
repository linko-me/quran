<?php
session_start();
include 'includes/api.php';

if (isset($_GET['id'])) {
    $sura_number = $_GET['id'];
    $sura_data = call_api('surah/' . $sura_number);
    $ayahs = $sura_data['data']['ayahs'];
} else {
    header("Location: /surahs");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sura_data['data']['englishName']; ?> - Quran Kareem</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Quran Kareem</a>
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
            <h2 class="mb-4 text-center"><?php echo $sura_data['data']['name']; ?> (<?php echo $sura_data['data']['englishName']; ?>)</h2>
            <div class="list-group">
                <?php foreach ($ayahs as $ayah): ?>
                    <div class="list-group-item">
                        <p class="mb-1 ayah-text" dir="rtl"><?php echo $ayah['text']; ?></p>
                        <small class="text-muted">Ayah <?php echo $ayah['numberInSurah']; ?></small>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <footer class="bg-light text-center text-lg-start mt-auto">
        <div class="text-center p-3">
            &copy; 2024 Quran Kareem
        </div>
    </footer>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
