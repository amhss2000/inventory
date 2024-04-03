<!DOCTYPE html>
<html>
<head>
    <title>Stock Inventory</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #87ceeb; /* Sky blue header */
            color: white;
        }
    </style>
</head>
<body>
    <h1>Stock Inventory</h1>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Size</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection
            $servername = "sql113.infinityfree.com";
    $username = "if0_36256603"; // Your MySQL username
    $password = "amhss2000"; // Your MySQL password
    $dbname = "if0_36256603_stock_db";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetching stock entries from database
            $sql = "SELECT * FROM stock";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["product"]."</td>";
                    echo "<td>".$row["size"]."</td>";
                    echo "<td>".$row["quantity"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No stock entries found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>