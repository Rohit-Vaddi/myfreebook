<?php include('editprocess.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/edit.css">
    <title>Edit Profile</title>
</head>

<body>

    <div class="container">
        <div class="header">
            <h2>Edit Profile</h2>
            <?php include('error.php'); ?>

        </div>
        <?php
        require('include/conn.php');
        $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `username`='$_SESSION[username]'");
        $fetch = mysqli_fetch_array($query);
        // $_SESSION['id'] = $fetch[id];
        ?>
        <form id="form" class="form" action="editprofile.php" method="POST">
            <div class="form-control">
                <label>Name</label>
                <input type="text" value="<?php echo  $fetch["fname"]; ?>" name="fname" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label>Username</label>
                <input type="text" value="<?php echo  $fetch["username"]; ?>" name="username" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label>E-mail</label>
                <input type="email" value="<?php echo  $fetch["email"]; ?>" name="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label>Password</label>
                <input type="text" value="<?php echo  $fetch["password"]; ?>" name="password" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label>Contact</label>
                <input type="tel" value="<?php echo  $fetch["contact"]; ?>" name="contact" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <input type="submit" name="editprofile" class="btn" value="Save Changes">

        </form>
    </div>

</body>

</html>
