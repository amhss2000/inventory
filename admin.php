<?php
// Include the configuration file
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - School Inventory Management System</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <header>
            <img src="logo.png" alt="School Logo">
            <h1>Admin - School Inventory Management System</h1>
        </header>
        <div class="content">
            <h2>Total Quantities</h2>
            <ul>
                <li>Uniform: <?php echo $uniform_quantity; ?></li>
                <li>Belt: <?php echo $belt_quantity; ?></li>
                <!-- Add other products here -->
            </ul>
        </div>
    </div>
</body>
</html>
