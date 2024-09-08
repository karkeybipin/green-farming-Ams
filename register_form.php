<?php

@include 'config.php';
if (isset($_POST['submit'])) {
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
   $select = " SELECT * FROM form WHERE email = '$email' && password = '$pass' ";
   $result = mysqli_query($conn, $select);
   if (mysqli_num_rows($result) > 0) {
      $error[] = 'user already exist!';
   } else {
      if ($pass != $cpass) {
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>
   <link rel="stylesheet" href="css/login.css">
</head>

<body>
   <div class="form-container">
      <div class="line2">
         <img src="images/5509636.png" alt="">
      </div>
      <div class="line"></div>
      <form action="" method="post">
         <h3>register now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="text" name="name" required placeholder="....@....com">
         <input type="email" name="email" required placeholder="....@....com">
         <input type="password" name="password" required placeholder="************">
         <input type="password" name="cpassword" required placeholder="************">
         <select name="user_type">
            <option value="user">Customers</option>
            <option value="admin">Farmer - Admin(किसान)</option>
         </select>
         <input type="submit" name="submit" value="Register now" class="form-btn">
         <p>already have an account? <a href="login_form.php">login now</a></p>
      </form>
   </div>

</body>

</html>