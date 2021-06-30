<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>SignIn Form</title>
    <link rel="stylesheet" type="text/css" href="assets/css/signin.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body>
    
    <img class="wave" src="assets/img/wave.png">
    <div class="container">
        <div class="img">
            <img src="assets/img/login.svg">
        </div>
        <div class="login-content">
            <form action="signin.php" method="POST">
                <img src="assets/img/profile.svg">
                <h2 class="title">Sign In</h2>
                <?php include('error.php'); ?>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="username" class="input" required="" autocomplete="off">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" class="input" required="">
                    </div>
                </div>
                <a href="forgot-password.php">Forgot Password?</a>
                <a href="signup.php">Create an Account...</a>
                <input type="submit" name="login_user" class="btn" value="Sign In">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/signin.js"></script>
</body>

</html>