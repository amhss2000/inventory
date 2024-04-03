<!DOCTYPE html>
<html>
<head>
    <title>Stock Entry Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Sky blue background */
            text-align: center;
        }
        form {
            margin: 0 auto;
            width: 50%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #87ceeb; /* Sky blue button */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #5f9ea0; /* Lighter shade on hover */
        }
    </style>
</head>
<body>
    <div>
        <img src="logoimage.jpg" alt="Logo" width="200">
        <h1>Company Name</h1>
    </div>
    <form method="post">
        <label for="product">Product:</label>
        <select name="product" id="product">
            <option value="uniform">Uniform</option>
            <option value="belt">Belt</option>
            <!-- Add more options for other products -->
        </select><br>

        <label for="size">Size:</label>
        <input type="text" name="size" id="size"><br>

        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" id="quantity"><br>

        <input type="submit" name="submit" value="Submit">
    </form>

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

    // Form submission handling
    if(isset($_POST['submit'])) {
        $product = $_POST['product'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO stock (product, size, quantity) VALUES ('$product', '$size', '$quantity')";

        if ($conn->query($sql) === TRUE) {
            echo "Stock entry added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>
</body>
</html>
