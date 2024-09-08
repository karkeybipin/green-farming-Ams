<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:login_form.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php include 'title.php'; ?></title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" href=" css/admin_style.css">
   <style>
      .form-container {
         max-width: 700px;
         margin: 50px auto;
         padding: 20px;
         background-color: #fff;
         border-radius: 8px;
         /* box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; */
         box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
      }

      .container {
         max-width: 800px;
         margin: 0 auto;
         padding: 20px;
      }

      h1 {
         text-align: center;
      }

      form {
         display: grid;
         gap: 16px;
      }

      label {
         display: block;
         margin-bottom: 8px;
      }



      input {
         width: 100%;
         padding: 8px;
         box-sizing: border-box;
         border: 1px solid black;
      }

      input[type="submit"] {
         background-color: #4caf50;
         color: white;
         cursor: pointer;
         width: 200px;
      }

      input[type="submit"]:hover {
         background-color: #45a049;
      }

      .error-message {
         color: #ff0000;
         margin-top: 5px;
      }
   </style>
</head>

<body>

   <?php
   include 'admin_header.php';
   ?>


   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $productName = $_POST["productName"];
      $productPrice = $_POST["productPrice"];

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "project_db";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO products (name, price) VALUES ('$productName', '$productPrice')";

      if ($conn->query($sql) === TRUE) {
         echo "Product added successfully.";
      } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
   }
   ?>


   <div class="form-container">
      <h1>Add Product</h1>
      <form method="post" action="">
         <label for="productName">Product Name:</label>
         <input type="text" id="productName" name="productName" required>

         <label for="productPrice">Product Price (Rs):</label>
         <input type="number" id="productPrice" name="productPrice" required>

         <input type="submit" value="Add Product">
      </form>
   </div>
</body>

</html>