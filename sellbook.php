
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

  <!-- =======================================================
  * Template Name: EstateAgency - v2.2.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header/Navbar Section ======= -->
    <?php
				include("include/menu.php");
  	?>
  <!-- End Header/Navbar -->
 

<!-- ======= Main Section ======= -->
<div class="bcategory">
<h1> ADD BOOK INFORMATION</h1>
<form class="category-val" action='sellprocess.php'  method='POST' enctype="multipart/form-data" >
  
<label> Book Category : </label><br>
  <select id="category" name="category">
  <option class="opval" value=""> Select Books Category  </option>
  					
  </select><br/>
  <label> Book Sub-Category : </label><br>
  <select id="sub-category" name="cat">
  <option class="opval" value=""> Select Books Sub-Category  </option>
 
  </select><br>
  <label>Book Name : </label><br>
  <input name="name" type="text" placeholder="Enter Book Name" required=""><br>
  <label>Author Name : </label><br>
  <input name="author" type="text" placeholder="Enter Book Author Name" required=""><br>
  <label>Book Edition : </label><br>
  <input name="edition" type="text" placeholder="Enter Book Edition" required=""><br>
  <label>Book Page : </label><br>
  <input name="pages" type="text" placeholder="Enter Book Pages" required=""><br>
  <label>Book Price : </label><br>
  <input name="price" type="text" placeholder="Enter Book Price"required=""><br>
  <label>Book Image : </label><br>
  <input type="file" id="myFile" name="img" required=""><br>  
  <label>Book Discription : </label><br>
  <textarea name="discription" id="w3review" rows="4" cols="40" placeholder="Enter Book Discription..." required="">
</textarea><br>
<button type="submit" class="sellbtn btn btn-b">Sell Book</button>
 
</form> 
</div>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  	function loadData(type, category_id){
  		$.ajax({
  			url : "loadcat.php",
  			type : "POST",
  			data: {type : type, id : category_id},
  			success : function(data){
  				if(type == "stateData"){
  					$("#sub-category").html(data);
  				}else{
  					$("#category").append(data);
  				}
  				
  			}
  		});
  	}

  	loadData();

  	$("#category").on("change",function(){
  		var country = $("#category").val();

  		if(country != ""){
  			loadData("stateData", country);
  		}else{
  			$("#sub-category").html("");
  		}

  		
  	})
  });
</script>

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