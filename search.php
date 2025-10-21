<?php
session_start();
include 'includes/api.php';

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $search_data = call_api('search/' . $query . '/all');
    $results = $search_data['data']['matches'];
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Results for "<?php echo $query; ?>" - Quran App</title>
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
            <h2>Search Results for "<?php echo $query; ?>"</h2>
            <div class="ayah-container">
                <?php if (count($results) > 0): ?>
                    <?php foreach ($results as $result): ?>
                        <div class="ayah-card">
                            <p class="ayah-text" dir="rtl"><?php echo $result['text']; ?></p>
                            <p class="ayah-number"><?php echo $result['surah']['name']; ?>:<?php echo $result['numberInSurah']; ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No results found.</p>
                <?php endif; ?>
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