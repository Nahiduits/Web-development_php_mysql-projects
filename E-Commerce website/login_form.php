<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['usermail']);
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['usermail'] = $email;
        header('location:payment.html');
    } else {
        $error[] = 'incorrect password or email.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <div class="text">
                        <button class="btn btn-outline-danger" data-bs-toggle="tooltip"
                            data-bs-title="Logiin First">Shop Now</button>
                    </div>
                </div>

                <div class="col-md-6 right">

                    <div class="input-box">

                        <header>Loggin account</header>
                        <form action="" method="post">
                            <?php
                            if (isset($error)) {
                                foreach ($error as $error) {
                                    echo '<span class="error-msg">' . $error . '</span>';
                                }
                            }
                            ?>
                            <div class="input-field">
                                <input type="text" class="input" id="email" required="" autocomplete="off"
                                    name="usermail">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="pass" required="" name="password">
                                <label for="pass">Password</label>
                            </div>
                            <div class="input-field">

                                <input type="submit" class="submit" value="Loggin" name="submit">
                            </div>
                            <div class="signup">
                                <span>Don't have an account? <a href="register_form.php">Sign up here</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>



</body>

</html>