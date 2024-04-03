<?php
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'school_inventory';

// Create connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
