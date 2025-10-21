<?php
/*
 * Database Configuration
 *
 * It is highly recommended to move this configuration to a separate file
 * (e.g., config.php) that is NOT tracked by version control (e.g., add it to .gitignore).
 * This prevents sensitive credentials from being exposed in your codebase.
 *
 * For example, in a config.php file:
 * define('DB_SERVER', 'your_database_host');
 * define('DB_USERNAME', 'your_username');
 * define('DB_PASSWORD', 'your_password');
 * define('DB_NAME', 'your_database_name');
 *
 * Then, in this file, you would include it:
 * require_once 'config.php';
 */

// --- PLEASE REPLACE WITH YOUR ACTUAL CREDENTIALS ---
// --- OR USE A CONFIG FILE AS RECOMMENDED ABOVE ---
define('DB_SERVER', 'localhost:3306'); // Replace with your server IP or hostname
define('DB_USERNAME', 'Quranapp');      // Replace with your database username
define('DB_PASSWORD', 'Quran@123');      // Replace with your database password
define('DB_NAME', 'Quranapp');          // Replace with your database name

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
  // In a production environment, you should log this error instead of displaying it.
  die("Connection failed: " . $conn->connect_error);
}

// The connection will be available in any script that includes this file.
// It is best practice to close the connection only after all database operations are complete,
// typically at the end of the script that uses the connection.
?>
