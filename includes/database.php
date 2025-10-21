<?php
/*
 * Database Configuration
 *
 * This file attempts to load database credentials from a local `config.php` file.
 * If `config.php` is not found, it falls back to using environment variables.
 * This allows for easy local development while maintaining security for production.
 *
 * It is highly recommended to add `config.php` to your .gitignore file.
 */

if (file_exists(__DIR__ . '/config.php')) {
    // Use local config file for development
    require_once __DIR__ . '/config.php';
} else {
    // Use environment variables for production
    define('DB_SERVER', getenv('DB_SERVER') ?: 'localhost:3306');
    define('DB_USERNAME', getenv('DB_USERNAME') ?: 'db_user');
    define('DB_PASSWORD', getenv('DB_PASSWORD') ?: 'db_password');
    define('DB_NAME', getenv('DB_NAME') ?: 'db_name');
}

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
  // In a production environment, you should log this error instead of displaying it.
  die("Connection failed: " . $conn->connect_error);
}
?>
