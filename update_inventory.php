<?php
// Include database connection
include 'db_connect.php';

if(isset($_POST['remaining_quantity']) && isset($_POST['item'])) {
    $remaining_quantity = $_POST['remaining_quantity'];
    $item = $_POST['item'];
    
    // Update remaining quantity in the database
    $query = "UPDATE inventory SET remaining_quantity = '$remaining_quantity' WHERE item_name = '$item'";
    $result = mysqli_query($conn, $query);

    if($result) {
        header("Location: inventory.php?item=$item");
    } else {
        echo "Failed to update quantity.";
    }
}
?>
