<?php
require('includes/config.php');
if (!empty($_POST)) {
	$msg = array();
	if (empty($_POST['subcatnm'])) {
		$msg[] = "Please Select Category";
	}

	if (!empty($msg)) {
		echo '<b>Error:-</b><br>';

		foreach ($msg as $k) {
			echo '<li>' . $k;
		}
	} else {

		$cid = $_POST['subcatnm'];

		$q = "delete from subcat where subcat_id = $cid";

		mysqli_query($conn, $q) or die("can't Execute...");
		echo '<script language="JavaScript">
            if (window.confirm("Your Sub-category Deleted Sucessfully..."))
           {
            window.location.href="index.php";
           };
            </script>';
	}
} else {
	header("location:index.php");
}
