<?php

require('include/conn.php');	

	if($_POST['type'] == ""){
		$sql = "SELECT * FROM category";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['cat_id']}'>{$row['cat_nm']}</option>";
		}
	}else if($_POST['type'] == "stateData"){

		$sql = "SELECT * FROM subcat WHERE parent_id= {$_POST['id']}";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['subcat_id']}'>{$row['subcat_nm']}</option>";
		}
	}

	echo $str;
 ?>
