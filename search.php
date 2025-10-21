<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
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
                    <li><a href="logout.php">Logout</a></li>
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
                            <p class="ayah-text"><?php echo $result['text']; ?></p>
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
            <p>&copy; 2023 Quran App</p>
        </div>
    </footer>
</body>
</html>