<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>SignUp Form</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/signin.css">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body>
    <img class="wave" src="assets/img/wave.png">
    <div class="container">
        <div class="img">
            <img src="assets/img/bg1.svg">
        </div>
        <div class="signup-content">
            <form action="signup.php" method="post">
                <h2 class="title">Sign Up</h2>
                <?php include('error.php'); ?>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Name</h5>
                        <input type="text" name="fname" class="input" required="">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="username" class="input" required="">
                    </div>
                </div>
                <div class="input-div envelope">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" name="email" class="input" required="">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password_1" class="input" required="">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="div">
                        <h5>Re-Password</h5>
                        <input type="password" name="password_2" class="input" required="">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="div">
                        <h5>Contact</h5>
                        <input type="tel" name="contact" class="input" required="">
                    </div>
                </div>
                <a href="signin.php">Already have an Account...</a>
                <input type="submit" name="reg_user" class="btn" value="Sign Up">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/signin.js"></script>
</body>

</html>