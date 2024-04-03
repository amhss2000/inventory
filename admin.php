<!-- admin.php -->
<?php include 'config.php'; ?>
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
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Total Quantity</th>
                    <th>Remaining Quantity</th>
                </tr>
                <?php
                $sql = "SELECT * FROM products";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['product_name'] . "</td>";
                    echo "<td>" . $row['total_quantity'] . "</td>";
                    echo "<td>" . $row['remaining_quantity'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <button onclick="window.print()" class="button">Print</button>
        </div>
    </div>
</body>
</html>

