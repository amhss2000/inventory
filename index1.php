<?php
$servername = "localhost";
$username = "root";
$password = "1234567890";
$dbname = "amhss";

$conn = new mysqli($localhost, $amhss, $12345677890, $amhss);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, quantity, price FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
</head>
<body>
    <h1>Product List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Total</th>
           
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $total = $row["quantity"] * $row["price"];
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["quantity"]."</td>";
                echo "<td>".$total."</td>";
               
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No products found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
