<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn, $_POST['usermail']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $error[] = 'user already exist';
   } else {
      if ($pass != $cpass) {
         $error[] = 'password not mathched!';
      } else {
         $insert = "INSERT INTO user_form(email, password) VALUES('$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="style2.css">
</head>

<body>


   <div class="wrapper">
      <div class="container main">
         <div class="row">
            <div class="col-md-6 side-image1">

            </div>
            <div class="col-md-6 right">

               <div class="input-box">

                  <header>Create account</header>
                  <form action="" method="post">
                     <?php
                     if (isset($error)) {
                        foreach ($error as $error) {
                           echo '<span class="error-msg">' . $error . '</span>';
                        }
                     }
                     ?>
                     <div class="input-field">
                        <input type="text" class="input" id="text" required="" autocomplete="off" name="fullname">
                        <label for="text">Full Name</label>
                     </div>
                     <div class="input-field">
                        <input type="text" class="input" id="email" required="" autocomplete="off" name="usermail">
                        <label for="email">Email</label>
                     </div>
                     <div class="input-field">
                        <input type="password" class="input" id="pass" required="" name="password">
                        <label for="pass">Password</label>
                     </div>
                     <div class="input-field">
                        <input type="password" class="input" id="pass" required="" name="cpassword">
                        <label for="pass">Confirm Password</label>
                     </div>
                     <div class="input-field">
                        <input type="submit" class="submit" value="Sign up" name="submit">
                     </div>
                     <div class="signup">
                        <span>Already have an account? <a href="login_form.php">Log in here</a></span>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
         crossorigin="anonymous"></script>
</body>

</html>