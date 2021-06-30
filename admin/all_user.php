<?php
session_start();
require('includes/config.php');

$q = "select * from users";
$res = mysqli_query($conn, $q) or die("Can't Execute Query...");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Lotus Flower
Version    : 1.0
Released   : 20080501
Description: A two-column, fixed-width and lightweight template ideal for 1024x768 resolutions. Suitable for blogs and small websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php
    include("includes/head.inc.php");
    ?>
    <style>
        table {
            padding: 5px;
            border: 10px solid gray
        }

        td,
        th {
            padding: 15px
        }
    </style>
</head>

<body>
    <!-- start header -->
    <div id="header">
        <div id="menu">
            <?php
            include("includes/menu.inc.php");
            ?>
        </div>
    </div>
    <div id="logo-wrap">
        <div id="logo">
            <?php
            include("includes/logo.inc.php");
            ?>
        </div>
    </div>
    <!-- end header -->
    <!-- start page -->

    <div id="page">
        <!-- start content -->
        <div id="content">
            <div class="post">
                <h1 class="title"></h1>
                <div class="entry">

                    <table border='1' WIDTH='100%'>

                        <tr>
                            <td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b></td>
                            <TD style="color:darkgreen" WIDTH='50%'><b><u>USERNAME</u></b></TD>
                            <TD style="color:darkgreen" WIDTH='20%'><b><u>E-MAIL</u></b></TD>
                            <TD style="color:darkgreen" WIDTH='20%'><b><u>PASSWORD</u></b></TD>
                            <TD style="color:darkgreen" WIDTH='25%'><b><u>CONTACT</u></b></TD>
                            <TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></TD>

                        </tr>
                        <?php
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo '<tr>
										<td>' . $count . '
										<td>' . $row['username'] . '
										<td>' . $row['email'] . '
										<td>' . $row['password'] . '
										<td>' . $row['contact'];



                            echo     '<td><a href="process_del_user.php?sid=' . $row['id'] . '"><img src="images/drop.png" ></a>
												
									
									</tr>';
                            $count++;
                        }
                        ?>

                    </TABLE>

                </div>

            </div>

        </div>
        <!-- end content -->
        <!-- start sidebar -->

        <!-- end sidebar -->
        <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end page -->
    <!-- start footer -->
    <div id="footer">
        <?php
        include("includes/footer.inc.php");
        ?>
    </div>
    <!-- end footer -->
</body>

</html>