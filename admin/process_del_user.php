
<?php
require('includes/config.php');

$query = "delete from users where id =" . $_GET['sid'];

mysqli_query($conn, $query) or die("can't Execute...");
echo '<script language="JavaScript">
if (window.confirm(" This User Are Deleted..."))
{
window.location.href="index.php";
};
</script>';
?>