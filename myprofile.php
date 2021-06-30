<?php
session_start();
require('include/conn.php');
if (!$_SESSION['login_user']) {

    header('location:login.php?error=login please');
}
$user = $_SESSION['username'];
// create connection
$link =  mysqli_connect('localhost', 'root', '', 'myfreebook');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Myfreebook Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- <link href="assets/css/st2.css" rel="stylesheet"> -->
    <link href="assets/css/app.css" rel="stylesheet">


</head>

<body>


    <!-- ======= Header/Navbar Section ======= -->

    <?php
    include("include/menu.php");
    ?>

    <!-- End Header/Navbar -->

    <div class="mcontainer">
        <div class="container1">
            <div class="card">
                <div class="sneaker">
                    <div class="circle"></div>
                    <img src="assets/img/profile.svg" alt="USER PROFILE" style="width: 14rem; height: 14rem;">
                </div>
                <div class="info">
                    <h1 class="title"><?php $_SESSION['username'] = strtoupper($_SESSION['username']);
                                        echo $_SESSION['username']; ?></h1>
                    <h3></h3>
                    <?php
                    require('include/conn.php');
                    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `username`='$_SESSION[username]'");
                    $fetch = mysqli_fetch_array($query);
                    // $_SESSION['id'] = $fetch[0];
                    // $password = $_SESSION['password'];
                    // $password = md5($password);


                    ?>
                    <div class="grid-container">
                        <div class="grid-item">Username </div>
                        <div class="grid-item">
                            : &nbsp; <?php echo  $fetch["username"]; ?>
                        </div>
                        <div class="grid-item">Name </div>
                        <div class="grid-item">
                            : &nbsp; <?php echo  $fetch["fname"]; ?>
                        </div>
                        <div class="grid-item">E-mail </div>
                        <div class="grid-item">
                            : &nbsp; <?php echo  $fetch["email"]; ?>
                        </div>
                        <div class="grid-item">Password </div>
                        <div class="grid-item">
                            : &nbsp; <?php echo  $fetch["password"];; ?>
                        </div>
                        <div class="grid-item">Contact </div>
                        <div class="grid-item">
                            : &nbsp; <?php echo  $fetch["contact"]; ?>
                        </div>
                    </div>
                    <div class="purchase">
                        <a href="editprofile.php">
                            <button>Edit Profile</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->

    <?php
    include("include/footer.php");
    ?>

    <!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <!-- Template Main JS File -->

    <script src="assets/js/main.js"></script>



</body>


</html>