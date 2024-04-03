<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'your_database_name');

// Attempt to connect to the database
$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
