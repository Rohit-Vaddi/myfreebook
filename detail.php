<?php session_start();
	require('include/conn.php');
	
	$id=$_GET['id'];
	
	$q="select * from book where b_id=$id";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
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
				<h1 class="title"><?php echo $row['b_name'];?></h1>
					<div class="entry">
					<?php
						echo '	<table border="0" width="100%">
						 <tr>
							<td><hr color="purple"></td>
							</tr>
							    <tr align="center" bgcolor="#EEE9F3">
								 <td>Book Details</td>
								</tr>
								<tr>
								 <td><hr color="purple"></td>
								</tr>
								 </table>
							        <table border="0"  width="100%" bgcolor="#ffffff">
										<tr> 
			                            	<td align="right" width="30%" rowspan="5">
											    <img src="'.$row['b_img'].'" width="200" height="200" >
											</td>
										</tr>
										<tr> 
											<td width="50%" height="100%">
											<table border="0"  width="100%" height="100%">
											<tr valign="top">
												<td align="right" width="15%">NAME</td>
													<td width="6%">: </td>
													<td align="left">'.$row['b_name'].'</td>
											</tr>
											<tr>
												<td align="right">Publisher </td>
												<td>: </td>
											    <td align="left">'.$row['b_author'].'</td>
											</tr>											
											<tr>
												<td align="right"> Edition</td>
												<td>: </td>
												<td align="left">'.$row['b_edition'].'</td>
								        	</tr>
											<tr>
												<td align="right">  PAGES</td>
												<td>: </td>
												<td align="left">'.$row['b_page'].'</td>
											</tr>
											<tr>
												<td align="right"> PRICE</td>
												<td>: </td>
												<td align="left">'.$row['b_price'].'</td>
                                            </tr>
									</table>
									</td>
							    	</tr>
						    	</table>
								<table border="0" width="100%">
								 <tr>
								    <td><hr color="purple"></td>
								</tr>
									 <tr align="center" bgcolor="#EEE9F3">
									     <td> BOOK DESCRIPTION</td>
									</tr>
									<tr>
										<td><hr color="purple"></td>
									</tr>
                 </table>
                 <div class="discription">
               
							 '.$row['b_discription'].'
               
               </div>
							 <tr><td colspan=2><hr color="purple"></td></tr>
							 <table border="0" width="100%">
								<tr align="center" bgcolor="#EEE9F3">';
									 if(isset($_SESSION['login_user']))
									 {
										echo ' <td><a href="processcart.php?nm='.$row['b_name'].'&cat='.$_GET['cat'].'&rate='.$row['b_price'].'">
										<img src="assets/img/addcart.jpg">
										</a></td> <br>';
									}
									else
									{
										echo '<td><img src="assets/img/addcart.jpg"><br><a href="signin.php"> <h4>Please Login..</h4></a></td>';
									}
										echo '</tr>
							</table>';
					    ?>
			    </div>		
		    </div>			
	    </div>
    	<!-- end content -->		
    	<div style="clear: both;">&nbsp;</div>			
	</div> 
	<!-- end page -->

  
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