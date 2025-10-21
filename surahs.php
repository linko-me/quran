<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'includes/api.php';
$meta = call_api('meta');
$surahs = $meta['data']['surahs']['references'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Surahs - Quran App</title>
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
            <h2>All Surahs</h2>
            <div class="card-container">
                <?php foreach ($surahs as $surah): ?>
                    <div class="card">
                        <h3><a href="surah_viewer.php?sura=<?php echo $surah['number']; ?>"><?php echo $surah['name']; ?></a></h3>
                        <p><?php echo $surah['englishName']; ?></p>
                        <p><?php echo $surah['englishNameTranslation']; ?></p>
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