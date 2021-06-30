<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['del']))
		{
			$msg[]="Please Select Category";
		}
		
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
		
			$delcat=$_POST['del'];
			
			$query="delete from category where cat_nm ='$delcat' ";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			echo '<script language="JavaScript">
            if (window.confirm("Your Category Deleted Sucessfully..."))
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
?>
	
	