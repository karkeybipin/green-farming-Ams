<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$item = $_POST['item'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$sql = "INSERT INTO `orders` (item, quantity, address) VALUES ('$item', $quantity, '$address')";
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Order placed successfully!");</script>';
} else {
    echo '<script>alert("Error: ' . $sql . '\n' . $conn->error . '");</script>';
}
$conn->close();
