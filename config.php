<?php
// Database configuration
define('DB_HOST', 'sql113.infinityfree.com');
define('DB_USERNAME', 'if0_36256603');
define('DB_PASSWORD', 'amhss2000');
define('DB_NAME', 'yif0_36256603_inventory1');

// Attempt to connect to the database
$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
