<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <style>
        body {
            background-image: url(images/home.jpg);
            font-family: Arial, sans-serif;
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            backdrop-filter: blur(35px);

        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        select,
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 2px solid #45a049;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .btn {
            position: relative;
            top: 10px;
            right: 10px;
            background-color: #008CBA;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #006799;
        }

        .form-container form {
            padding: 20px;
            margin-right: 50px;
            border-radius: 5px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
            text-align: center;
            width: 450px;
            color: rgb(15, 25, 20);
            backdrop-filter: blur(35px);
        }

        .line {
            margin-right: 100px;
            background-color: #223432;
            width: 2px;
            height: 500px;
            border: 2x solid #223432;
            backdrop-filter: blur(35px);
        }

        .line2 {
            width: 300px;
            height: 300px;
            margin-right: 100px;
            overflow: hidden;
            border-radius: 50px 0 50px 0;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
        }

        .line2 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50px 0 50px 0;
            border: 2px solid #223432;
        }
    </style>
</head>

<body>

    <div class="line2">
        <img src="images/nana.png" alt="">
    </div>
    <div class="line"></div>

    <div class="form-container">
        <form action="process_order.php" method="post">
            <button onclick="goBack()" class="btn">Go back↩</button>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
            <h2 style="color:Yellow;">Lets order: (in kgs)</h2>
            <label for="item">Select Item:</label>
            <select name="item" id="item">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "project_db";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $result = $conn->query("SELECT name FROM products");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
                    }
                } else {
                    echo "<option value=''>No products available</option>";
                }
                $conn->close();
                ?>
            </select>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" min="1" required>
            <label for="address">Delivery Address:</label>
            <input type="text" name="address" id="address" required>
            <button type="submit">Place Order</button>
        </form>
    </div>
</body>

</html>