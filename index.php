<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="landing-page">
        <header>
            <div class="container">
                <a href="#" class="logo">Quran.app</a>
                <nav>
                    <ul>
                        <li><a href="surahs.php">Surahs</a></li>
                        <li><a href="juzs.php">Juzs</a></li>
                        <?php if (isset($_SESSION['username'])): ?>
                            <li><a href="logout.php" class="btn">Logout</a></li>
                        <?php else: ?>
                            <li><a href="login.php" class="btn">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <h1>Read, Search, and Listen to the Quran</h1>
                    <p>A beautiful and modern interface for the Holy Quran.</p>
                    <div class="search-container">
                        <form action="search.php" method="get">
                            <input type="text" name="query" placeholder="Search the Quran...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>