<?php
require('include/conn.php');
session_start();
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

	<div id="page">
		<!-- start content -->
		<div id="vcart">
			<div class="post">
				<h1 class="title">Viewcart</h1>
				<div class="entry">

					<pre><?php
							//	print_r($_SESSION);
							?></pre>

					<form action="processcart.php" method="POST">
						<table width="100%" border="0">
							<tr>
								<Td> <b>No
								<td> <b>Category
								<td> <b>Product
								<td> <b>Qty
								<td> <b>Rate
								<td> <b>Price
								<td> <b>Delete
							</tr>
							<tr>
								<td colspan="7">
									<hr style="border:1px Solid #a1a1a1;">
							</tr>

							<?php
							$tot = 0;
							$i = 1;
							if (isset($_SESSION['cart'])) {

								foreach ($_SESSION['cart'] as $id => $x) {
									echo '
											<tr>
											<Td> ' . $i . '
											<td> ' . $x['cat'] . '
											<td> ' . $x['nm'] . '
											<td> <input type="text" size="2" value="' . $x['qty'] . '" name="' . $id . '">
											<td> ' . $x['rate'] . '
											<td> ' . ($x['qty'] * $x['rate']) . '
											<td> <a href="processcart.php?id=' . $id . '">Delete</a>
										</tr>
										';

									$tot = $tot + ($x['qty'] * $x['rate']);
									$i++;
								}
							}

							?>
							<tr>
								<td colspan="7">
									<hr style="border:1px Solid #a1a1a1;">
							</tr>

							<tr>
								<td colspan="6" align="right">
									<h4>Total:</h4>

								</td>
								<td>
									<h4><?php echo $tot; ?> </h4>
								</td>
							</tr>
							<tr>
								<td colspan="7">
									<hr style="border:1px Solid #a1a1a1;">
							</tr>

							<Br>
						</table>

						<br><br>
						<center>
							<input type="submit" value=" Re-Calculate ">
							<a href="checkout.php">CONFIRM & PROCEED<a />
						</center>
					</form>
				</div>

			</div>

		</div>
		<!-- end content -->

		<div style="clear: both;">&nbsp;</div>
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