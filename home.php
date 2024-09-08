<?php
$conn = mysqli_connect('localhost', 'root', '', 'project_db') or die('connection failed');
if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `appointment_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

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
      $message[] = 'message sent already!';
   } else {
      mysqli_query($conn, "INSERT INTO `communication`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
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
   <link rel="stylesheet" href="css/style2.css">
</head>

<body>
   <header class="header fixed-top">
      <div class="container">
         <div class="row align-items-center justify-content-between">
            <a href="#home" class="sogo">
               <h1 style="color:red;"> <span style="color:Green;">Green</span> 🍀 Farming</h1>
               <?php
               // include 'title.php';
               ?>
            </a>
            <nav class="nav">
               <a href="#home">home</a>
               <a href="#about">about</a>
               <a href="#services">services</a>
               <a href="#product">Product</a>
               <a href="#reviews">reviews</a>
               <a href="#contactform">contact</a>
            </nav>
            <a href="login_form.php" class="link-btn">Logout</a>
            <!-- <a href="login_form.php" class="link-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i></a> -->
            <div id="menu-btn" class="fas fa-bars"></div>
         </div>
      </div>

   </header>
   <!-- header section ends 
========================================================================================================================================= -->
   <!-- Agricultural Lists (outcomes i.e. Agricultural and animal products) Starts -->
   <?php include '../agricultureProducts.php'; ?>
   <!-- Agricultural Lists (outcomes i.e. Agricultural and animal products)  Ends  
=========================================================================================================================================-->

   <!--
========================================================================================================================================= 
   contact section starts -->
   <section class="contact" id="contactform">
      <h1 class="heading" data-aos="fade-up"> <span>contact Us</span> </h1>
      <form action="" method="post">
         <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
         </div>
         <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
         <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
         <input type="submit" data-aos="zoom-in" value="send message" name="send" class="link-btn">
      </form>
   </section>
   <!-- contact section end 
=========================================================================================================================================-->


   <!-- Footer Information starts here
========================================================================================================================================= -->
   <section class="footer">
      <div class="box-container container">
         <div class="box">
            <h3>phone number</h3>
            <p>+977-986*******</p>
            <p>+977-97********</p>
         </div>

         <div class="box">
            <h3>Branch</h3>
            <p>Budanil-kantha</p>
            <p>Sitapaila</p>
            <p>Koteshwor</p>
            <p>Kathmandu , 064000</p>
         </div>

         <div class="box">
            <h3>opening hours</h3>
            <p>10:00am to 05:00pm</p>
         </div>
         <div class="box">
            <h3> Email address</h3>
            <p>agricultureRB@gmail.com</p>
            <p>Rajan&Bipinagency@gmail.com</p>
         </div>
      </div>
      <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span class="agro">Rajan & Bipin | </span><span>Agency</span> </div>
   </section>
   <!--
      footer ends here
========================================================================================================================================= -->
</body>

</html>