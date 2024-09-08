<?php
$conn = mysqli_connect('localhost', 'root', '', 'project_db') or die('connection failed');
if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `Communication`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if ($insert) {
      $message[] = 'appointment made successfully!';
   } else {
      $message[] = 'appointment failed';
   }
}
$conn = mysqli_connect('localhost', 'root', '', 'project_db') or die('connection failed');
if (isset($_POST['send'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `communication` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if (mysqli_num_rows($select_message) > 0) {
      $message[] = 'message already sent!';
   } else {
      mysqli_query($conn, "INSERT INTO `communication`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message is sent successfully!';
   }
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
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!-- header starts  -->
   <header class="header fixed-top">
      <div class="container">
         <div class="row align-items-center justify-content-between">
            <a href="#home" class="logo" style="margin-left: -45px; color:green;">Green 🍀 <span style="color:red;">Farming</span></a>
            <nav class="nav">
               <a href="#home">home</a>
               <a href="#about">about</a>
               <a href="#services">services</a>
               <a href="#product">Product</a>
               <a href="#reviews">reviews</a>
               <a href="#contactform">contact</a>
            </nav>
            <a href="login_form.php" class="link-btn">LOGIN</a>
            <div id="menu-btn" class="fas fa-bars"></div>
         </div>
      </div>
   </header>
   <!-- header ends -->

   <!-- For farmers -->
   <div class="form-container1">
      <div class="line2">
         <img src="images/farmerlogo.jpg" alt="">
      </div>
      <div class="line">
      </div>
      <div class="textparagraphs">
         <h1 style="color:rgb(0, 54, 99);">Empowering Agriculture, Nurturing Tomorrow!</h1><br>
         <p style="color:#000; font-size: 1.5rem;font-weight: bolder;">
            Step into a world where technology meets the soil,
            <br> where innovation cultivates growth.
            <br> Welcome to
            <br> <span style="color:green; font-size: 1.5rem;font-weight: bolder;">Green farming</span> ,
            <br> where we redefine the future of farming.
            <br> Join us on the journey to sustainable agriculture,
            <br> where every seed planted is a step towards a greener and more prosperous tomorrow.
            <br> Discover the power of connectivity, the wisdom of data,
            <br> and the spirit of community in shaping the fields of the future.
            <br> Your journey to a smarter, greener, and more efficient farm begins here.
         </p>
      </div>
   </div>
   <!-- For farmers -->

   <!-- for user (Admin/Farmers and Customers) login -->
   <div class="form-container1">
      <div class="line2">
         <img src="images/55096367.png" alt="">
      </div>
      <div class="line">
      </div>
      <div class="textparagraphs">
         <h1 style="color:rgb(0, 54, 99);">Login!</h1>
         <p style="color:rgb(108, 192, 112); font-size: 1.5rem;font-weight: bolder;">
            <span style="color:red;">Admin Farmers Login:</span><br>
            Efficient and secure login for Admin Farmers, empowering them to easily add and manage agricultural products. Real-time updates ensure accurate data and streamlined inventory control.
            <br><br>
            <span style="color:red;">Customer Login:</span><br>
            User-friendly login for customers, providing a seamless experience to browse, access detailed product information, and make secure purchases. Transparent processes and continuous improvement contribute to building trust and supporting online accessibility for agricultural growth.
         </p>
      </div>
   </div>
   <!-- for user (Admin/Farmers and Customers) login -->

   <!-- For irrigation -->
   <div class="form-container1">
      <div class="line2">
         <img src="images/irrigation.png" alt="">
      </div>
      <div class="line">
      </div>
      <div class="textparagraphs">
         <h1 style="color:rgb(0, 54, 99);">Precision Irrigation Revolutionizing Agriculture!</h1>
         <p style="color:rgb(108, 192, 112); font-size: 1.5rem;font-weight: bolder;">
            In the agricultural landscape, precision irrigation stands as a transformative force, offering targeted water management to optimize crop growth. This game-changing approach not only reduces water wastage but also enhances overall resource efficiency, fostering sustainable and productive farming practices.
            <br>
            <br>
            By leveraging cutting-edge technologies and data-driven strategies, precision irrigation provides a nuanced approach to water management for optimal crop cultivation. This transformative approach not only minimizes water wastage but also maximizes resource efficiency, contributing to the overall resilience and productivity of modern farming practices. The result is a sustainable water supply for crops and a significant advancement in the field of precision agriculture.
         </p>
      </div>
   </div>
   <!-- For irrigation -->

   <!-- For storage -->
   <div class="form-container1">
      <div class="line2">
         <img src="images/storage.png" alt="">
      </div>
      <div class="line">
      </div>
      <div class="textparagraphs">
         <h1 style="color:rgb(0, 54, 99);">Agricultural Storage for Sustainable Farming!</h1>
         <p style="color:rgb(108, 192, 112); font-size: 1.5rem;font-weight: bolder;">
            In the realm of modern agriculture, strategic storage practices are paramount for preserving crop quality, minimizing losses, and ensuring long-term success. From investing in versatile storage infrastructure to embracing technological advancements, optimizing storage conditions contributes significantly to the resilience and sustainability of farming operations in the face of environmental challenges. <br><br>
            Effective agricultural storage is the linchpin for sustainable farming, safeguarding crop quality and minimizing losses. By investing in versatile storage infrastructure and embracing technological advancements, farmers can navigate environmental challenges and ensure the long-term success and resilience of their agricultural ventures.
         </p>
      </div>
   </div>
   <!-- For storage -->

   <script src="js/script.js"></script>
</body>

</html>