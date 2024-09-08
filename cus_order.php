<?php
include 'config.php';
session_start();
$admin_id = $_SESSION['admin_id'];
if (!isset($admin_id)) {
    header('location:login_form.php');
};
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
    header('location: Admin/admin_orders.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/admin_style.css">
</head>

<body>

    <?php include 'admin_header.php'; ?>
    <section class="orders">
        <h1 class="title"> Orders </h1>
        <div class="box-container">
            <?php
            $select_orders = mysqli_query($conn, "SELECT item, quantity FROM `orders`") or die('query failed');
            if (mysqli_num_rows($select_orders) > 0) {
                while ($order = mysqli_fetch_assoc($select_orders)) {
            ?>
                    <div class="box" style="
                    color: Blue;
                    /* background-color: wheat; */
                    border:2px solid black;
                    text-align:center;
                    width:250px;
                    height:150px;
                    display: flex;
                    margin: 0 auto;
                    ">
F                        <p> Product Name: <span style="color:black;font-size:1.5rem;">
                                <?php
                                echo $order['item'];
                                ?>
                            </span>
                        </p>
                        <p> <?php
                            echo'.......................... ';
                            echo' ..........................';

                            ?> </p>
                        <p> Quantity:
                            <span style="color: black;font-size:1.5rem;">
                                <?php
                                echo $order['quantity'];
                                ?>
                            </span>
                        </p>
                        
                    </div>
            <?php
                };
            } else {
                echo '<p class="empty">There are no orders!</p>';
            }
            ?>
        </div>
    </section>
    <script src="js/admin_script.js"></script>

</body>

</html>