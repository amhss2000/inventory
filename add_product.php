<!-- add_product.php -->
<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - School Inventory Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="logo.png" alt="School Logo">
            <h1>Add Product - School Inventory Management System</h1>
        </header>
        <div class="content">
            <form method="post" action="add_product.php">
                <label for="product_name">Product Name:</label>
                <select name="product_name" id="product_name">
                    <option value="uniform">Uniform</option>
                    <option value="belt">Belt</option>
                    <!-- Add other products here -->
                </select><br>
                <label for="input_quantity">Input Quantity:</label>
                <input type="number" name="input_quantity" id="input_quantity"><br>
                <input type="submit" value="Add" class="button">
            </form>
        </div>
    </div>
</body>
</html>