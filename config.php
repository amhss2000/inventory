<?php
$host = 'sql113.infinityfree.com';
$username = 'if0_36256603';
$password = 'amhss2000';
$database = 'if0_36256603_inventory1';

// Create connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
