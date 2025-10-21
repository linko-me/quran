<?php
session_start();
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
            <h2>All Juzs</h2>
            <div class="card-container">
                <?php foreach ($juzs as $juz_number): ?>
                    <div class="card">
                        <h3><a href="juz_viewer.php?juz=<?php echo $juz_number; ?>">Juz <?php echo $juz_number; ?></a></h3>
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