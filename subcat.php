<?php
require('include/conn.php');
session_start();
$q = "select * from subcat where parent_id = " . $_GET['cat'];
$res = mysqli_query($conn, $q) or die("Can't Execute Query..");

$row1 = mysqli_fetch_assoc($res);

if ($_GET['catnm'] == $row1['subcat_nm']) {
	header("location:booklist.php?subcatid=" . $row1['subcat_id'] . "&subcatnm=" . $row1["subcat_nm"]);
}
?>
<!DOCTYPE html>

<html>

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

	<style>
		body {
			background-color: whitesmoke !important;
		}
	</style>

</head>

<body>
	<!-- ======= Header/Navbar Section ======= -->
	<?php
	include("include/menu.php");
	?>

	<!-- End Header/Navbar -->

	<!-- start page -->

	<div id="page1">
		<!-- start content -->
		<div id="content">
			<div class="post">
				<h1 class="title"><?php echo $_GET['catnm']; ?></h1>
				<div class="entry">

					<?php
					do {
						echo '<li><a href="booklist.php?subcatid=' . $row1['subcat_id'] . '&subcatnm=' . $row1["subcat_nm"] . '">' . $row1['subcat_nm'] . '</a></li>';
						//&subcatnm='.$row1["subcat_nm"].'
					} while ($row1 = mysqli_fetch_assoc($res))
					?>

				</div>

			</div>

		</div>
		<!-- end content -->


		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end page -->


</body>

</html>