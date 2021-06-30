<?php
session_start();
extract($_POST);
extract($_SESSION);

require('include/conn.php');
//echo $uid;
if (isset($_SESSION['login_user'])) {

  if (isset($submit)) {
    $user = $_SESSION['username'];
    $query = "insert into shipping_details(name,address,postal_code,city,state,username) values('$name','$address','$pc','$city','$state','$user')";

    $res = mysqli_query($conn, $query) or die("Can't Execute Query...");
    echo '<script language="JavaScript">
            if (window.confirm("Your Order is Confirmed..."))
           {
            window.location.href="index.php";
           };
            </script>';
  }
} else {
  echo '<script language="JavaScript">
  if (window.confirm("You are not eligible for this please login..."))
 {
  window.location.href="signin.php";
 };al
  </script>';
}


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
  <link href="assets/css/st2.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header/Navbar Section ======= -->
  <?php
  include("include/menu.php");
  ?>
  <!-- End Header/Navbar -->


  <!-- ======= Main Section ======= -->
  <div class="shipping">
    <h1> Shipping Details</h1>
    <form class="detailform" id="contactform" method='POST' enctype="multipart/form-data">

      <label>Name : </label><br>
      <input id="name" name="name" type="text" placeholder="Enter Name" required=""><br>
      <label>Adress : </label><br>
      <textarea name="address" id="address" rows="4" cols="43" placeholder="Enter Delivery Address..." required="">
</textarea><br>
      <label>Postal Code : </label><br>
      <input name="pc" id="pc" type="text" placeholder="Enter Postal Code" required=""><br>
      <label>City : </label><br>
      <input name="city" id="city" type="text" placeholder="Enter Name of City" required=""><br>
      <label>State : </label><br>
      <input name="state" id="state" type="text" placeholder="Enter State Name" required=""><br><br>

      <button type="submit" name="submit" id="submit" tabindex="5" class="sellbtn btn btn-b">Confirm & Proceed</button>

    </form>
  </div>



  <!-- End Main Section -->

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