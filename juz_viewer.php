<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'includes/api.php';

if (isset($_GET['juz'])) {
    $juz_number = $_GET['juz'];
    $juz_data = call_api('juz/' . $juz_number);
    $ayahs = $juz_data['data']['ayahs'];
} else {
    header("Location: juzs.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Juz <?php echo $juz_number; ?> - Quran App</title>
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Juz <?php echo $juz_number; ?></h2>
            <div class="ayah-container">
                <?php foreach ($ayahs as $ayah): ?>
                    <div class="ayah-card">
                        <p class="ayah-text"><?php echo $ayah['text']; ?></p>
                        <p class="ayah-number"><?php echo $ayah['surah']['name']; ?>:<?php echo $ayah['numberInSurah']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 Quran App</p>
        </div>
    </footer>
</body>
</html>