
<?php
require('includes/config.php');

$query = "delete from book where b_id =" . $_GET['sid'];

mysqli_query($conn, $query) or die("can't Execute...");

echo '<script language="JavaScript">
if (window.confirm(" Book Are Deleted Sucessfully..."))
{
window.location.href="index.php";
};
</script>';
?>
