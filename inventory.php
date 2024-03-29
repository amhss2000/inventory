<?php
// Include database connection
include 'db_connect.php';

// Check if item is set in the URL
if(isset($_GET['item'])) {
    $item = $_GET['item'];
    
    // Retrieve item details from the database
    $query = "SELECT * FROM inventory WHERE item_name = '$item'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $total_quantity = $row['total_quantity'];
        $remaining_quantity = $row['remaining_quantity'];
        // You can add more fields as per your database schema
    } else {
        echo "Item not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $item; ?> Inventory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?php echo $item; ?> Inventory</h1>
    </header>
    <div class="inventory-details">
        <p>Total Quantity: <?php echo $total_quantity; ?></p>
        <form action="update_inventory.php" method="POST">
            <label for="remaining_quantity">Remaining Quantity:</label>
            <input type="number" id="remaining_quantity" name="remaining_quantity" value="<?php echo $remaining_quantity; ?>">
            <input type="hidden" name="item" value="<?php echo $item; ?>">
            <button type="submit">Update</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 School Inventory Management</p>
    </footer>
</body>
</html>
