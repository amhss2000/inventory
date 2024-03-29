<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "1234567890";
$database = "belt";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$totalQuantity = $_POST['totalQuantity'];
$inputQuantity = $_POST['inputQuantity'];
// Get other form data for sizes 75, 95, and 115

// Calculate remaining quantity
$remainingQuantity = $totalQuantity - $inputQuantity;

// Insert data into the database
$sql = "INSERT INTO belt_stocks (dateTime, totalQuantity, size75, size95, size115, inputQuantity, remainingQuantity)
        VALUES (NOW(), $totalQuantity, $size75, $size95, $size115, $inputQuantity, $remainingQuantity)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
