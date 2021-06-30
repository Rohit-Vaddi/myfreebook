
<?php
require('includes/config.php');

$query = "delete from contact where con_id =" . $_GET['sid'];

mysqli_query($conn, $query) or die("can't Execute...");
echo '<script language="JavaScript">
if (window.confirm(" Message Are Deleted..."))
{
window.location.href="index.php";
};
</script>';
?>