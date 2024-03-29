<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "amhss";

$conn = new mysqli($localhost, $root, $12345677890, $amhss);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];
  

    $sql = "INSERT INTO products (name, quantity) VALUES ('$name', '$quantity')";
    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name"><br>
        Quantity: <input type="number" name="quantity"><br>
      
        <input type="submit" value="Add Product">
    </form>
</body>
</html>

<?php
$conn->close();
?>
