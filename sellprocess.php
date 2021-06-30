<?php
session_start();
require('include/conn.php');
if(isset($_SESSION['login_user'])){
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['name']) || empty($_POST['author']) || empty($_POST['edition']) || empty($_POST['pages']) || empty($_POST['price'])|| empty($_POST['discription']))
		{
			$msg[]="Please full fill all requirement";
		}
		if(!(is_numeric($_POST['price'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		if(!(is_numeric($_POST['pages'])))
		{
			$msg[]="Page must be in Numeric  Format...";
		}
		
		if(empty($_FILES['img']['name']))
		$msg[] = "Please provide a file";
	
		if($_FILES['img']['error']>0)
		$msg[] = "Error uploading file";
						
	
		if(!(strtoupper(substr($_FILES['img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['img']['name'],-4))==".JPEG"||  strtoupper(substr($_FILES['img']['name'],-4))==".PNG"|| strtoupper(substr($_FILES['img']['name'],-4))==".GIF"))
			$msg[] = "wrong file  type";
			
		if(file_exists("../upload_image/".$_FILES['img']['name']))
			$msg[] = "File already uploaded. Please do not updated with same name";
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			move_uploaded_file($_FILES['img']['tmp_name'],"../upload_image/".$_FILES['img']['name']);
			$b_img = "upload_image/".$_FILES['img']['name'];	
			

			$b_name=$_POST['name'];
			$b_cat=$_POST['cat'];
			$b_edition=$_POST['edition'];
			$b_author=$_POST['author'];			
			$b_pages=$_POST['pages'];
            $b_price=$_POST['price'];
            $b_discription=$_POST['discription'];
			$user = $_SESSION['username'];
			
		
			
			$query="insert into book(b_name,b_subcat,b_author,b_edition,b_page,b_price,b_img,b_discription,upload_by)
			values('$b_name','$b_cat','$b_author','$b_edition',$b_pages,$b_price,'$b_img','$b_discription', '$user')";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
            echo '<script language="JavaScript">
            if (window.confirm("Your Book Are Added Sucessfully..."))
           {
            window.location.href="index.php";
           };
            </script>'; 
		
		}
	}
	else
	{
		header("location:index.php");
	}
}else{
	echo '<script language="JavaScript">
            if (window.confirm("You are not eligible for this please login..."))
           {
            window.location.href="signin.php";
           };al
            </script>'; 
}
