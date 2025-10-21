<?php
session_start();
include 'includes/api.php';

if (isset($_GET['sura'])) {
    $sura_number = $_GET['sura'];
    $sura_data = call_api('surah/' . $sura_number);
    $ayahs = $sura_data['data']['ayahs'];
} else {
    header("Location: surahs.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $sura_data['data']['englishName']; ?> - Quran App</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Quran App</h1>
            <nav>
                <ul>
                    <li><a href="surahs.php">Surahs</a></li>
                    <li><a href="juzs.php">Juzs</a></li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h2><?php echo $sura_data['data']['name']; ?> (<?php echo $sura_data['data']['englishName']; ?>)</h2>
            <div class="ayah-container">
                <?php foreach ($ayahs as $ayah): ?>
                    <div class="ayah-card">
                        <p class="ayah-text" dir="rtl"><?php echo $ayah['text']; ?></p>
                        <p class="ayah-number"><?php echo $ayah['numberInSurah']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Quran App</p>
        </div>
    </footer>
</body>
</html>