<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'includes/api.php';
$meta = call_api('meta');
$juzs = $meta['data']['juzs']['references'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Juzs - Quran App</title>
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
            <h2>All Juzs</h2>
            <div class="card-container">
                <?php foreach ($juzs as $juz): ?>
                    <div class="card">
                        <h3><a href="juz_viewer.php?juz=<?php echo $juz['juz']; ?>">Juz <?php echo $juz['juz']; ?></a></h3>
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