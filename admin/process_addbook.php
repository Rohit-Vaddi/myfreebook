<?php
require('includes/config.php');

if (!empty($_POST)) {
    $msg = array();
    if (empty($_POST['name']) || empty($_POST['author']) || empty($_POST['edition']) || empty($_POST['pages']) || empty($_POST['price']) || empty($_POST['description'])) {
        $msg[] = "Please full fill all requirement";
    }
    if (!(is_numeric($_POST['price']))) {
        $msg[] = "Price must be in Numeric  Format...";
    }
    if (!(is_numeric($_POST['pages']))) {
        $msg[] = "Page must be in Numeric  Format...";
    }

    if (empty($_FILES['img']['name']))
        $msg[] = "Please provide a file";

    if (!(strtoupper(substr($_FILES['img']['name'], -4)) == ".JPG" || strtoupper(substr($_FILES['img']['name'], -4)) == ".JPEG" ||  strtoupper(substr($_FILES['img']['name'], -4)) == ".PNG" || strtoupper(substr($_FILES['img']['name'], -4)) == ".GIF"))
        $msg[] = "wrong file  type";

    if (file_exists("../upload_image/" . $_FILES['img']['name']))
        $msg[] = "File already uploaded. Please do not updated with same name";

    if (!empty($msg)) {
        echo '<b>Error:-</b><br>';

        foreach ($msg as $k) {
            echo '<li>' . $k;
        }
    } else {
        move_uploaded_file($_FILES['img']['tmp_name'], "../upload_image/" . $_FILES['img']['name']);
        $b_img = "upload_image/" . $_FILES['img']['name'];

        $b_name = $_POST['name'];
        $b_cat = $_POST['cat'];
        $b_author = $_POST['author'];
        $b_edition = $_POST['edition'];
        $b_pages = $_POST['pages'];
        $b_price = $_POST['price'];
        $b_discription = $_POST['description'];




        $query = "insert into book(b_name,b_subcat,b_author,b_edition,b_page,b_price,b_img,b_discription)
			values('$b_name','$b_cat','$b_author','$b_edition',$b_pages,$b_price,'$b_img','$b_discription')";
        mysqli_query($conn, $query) or die($query . "Can't Connect to Query...");
        echo '<script language="JavaScript">
            if (window.confirm("Book Are Added Sucessfully..."))
           {
            window.location.href="index.php";
           };
            </script>';
    }
} else {
    header("location:index.php");
}
