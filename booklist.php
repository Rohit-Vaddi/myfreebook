<?php
require('include/conn.php');
session_start();
$cat = $_GET['subcatid'];

$totalq = "select count(*) \"total\" from book where b_subcat='$cat'";

$totalres = mysqli_query($conn, $totalq) or die("Can't Execute Query...");
$totalrow = mysqli_fetch_assoc($totalres);


$page_per_page = 6;

$page_total_rec = $totalrow['total'];

$page_total_page = ceil($page_total_rec / $page_per_page);


if (!isset($_GET['page'])) {
	$page_current_page = 1;
} else {
	$page_current_page = $_GET['page'];
}
?>
<!DOCTYPE html>

<html>

<head>
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<style>
		* {
			font-family: "Poppins", sans-serif;
		}

		body {
			background-color: white;
		}

		h1 {
			font-size: 3rem;
		}



		table {
			border-color: #1d7037;
			background-color: whitesmoke;
			box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2), 0px 0px 20px rgba(0, 0, 0, 0.2);
		}

		.entry {
			margin-top: 3rem;
		}

		a {
			text-decoration: none;
			color: black;
		}

		a:hover {
			color: #2eca6a;
			font-weight: bold;
		}

		table td:hover {
			background-color: #fff;
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

	<div id="page">
		<!-- start content -->
		<div id="content">
			<div class="post">
				<center>
					<h1 class="title"><?php echo $_GET['subcatnm']; ?></h1>
					<div class="entry">

						<table border="4" width="50%">
							<?php

							$k = ($page_current_page - 1) * $page_per_page;

							$query = "select *from book where b_subcat='$cat' LIMIT " . $k . "," . $page_per_page;

							$res = mysqli_query($conn, $query) or die("Can't Execute Query...");

							$count = 0;
							while ($row = mysqli_fetch_assoc($res)) {
								if ($count == 0) {
									echo '<tr>';
								}
								echo '<td valign="top" width="20%" align="center" >
														<a href="detail.php?id=' . $row['b_id'] . '&cat=' . $_GET['subcatnm'] . '">
														<img src="' . $row['b_img'] . '" width="80" height="100">
														<br>' . $row['b_name'] . '</a>
													</td>';
								$count++;

								if ($count == 2) {
									echo '</tr>';
									$count = 0;
								}
							}
							?>

						</table>

				</center>
				<br><br>
				<center>
					<?php

					if ($page_total_page > $page_current_page) {
						echo '<a href="booklist.php?subcatid=' . $_GET['subcatid'] . '&subcatnm=' . $_GET['subcatnm'] . '&page=' . ($page_current_page + 1) . '">Next</a>';
					}

					for ($i = 1; $i <= $page_total_page; $i++) {
						echo '&nbsp;&nbsp;<a href="booklist.php?subcatid=' . $_GET['subcatid'] . '&subcatnm=' . $_GET['subcatnm'] . '&page=' . $i . '">' . $i . '</a>&nbsp;&nbsp;';
					}

					if ($page_current_page > 1) {
						echo '<a href="booklist.php?subcatid=' . $_GET['subcatid'] . '&subcatnm=' . $_GET['subcatnm'] . '&page=' . ($page_current_page - 1) . '">Previous</a>';
					}

					?>
				</center>
			</div>

		</div>

	</div>
	<!-- end content -->

	<!-- end page -->

</body>

</html>