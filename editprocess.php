<?php
session_start();
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'myfreebook');

if (isset($_POST['editprofile'])) {
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $contact = mysqli_real_escape_string($db, $_POST['contact']);

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' OR contact='$contact' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "This Username Already Exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "This Email Already Exists");
        }

        if ($user['contact'] === $contact) {
            array_push($errors, "This Contact Already Exists");
        }
    }
    if (count($errors) == 0) {
        // $password = md5($password_1);//encrypt the password before saving in the database
        $password = $password_1;
        $code = rand(999999, 111111);
        $status = "notverified";

        $query = "UPDATE users SET fname = '$fname', username = '$username', email='$email', password = '$password', contact = '$contact' WHERE username = '$_SESSION[username]';";
        $data_check = mysqli_query($db, $query);

        echo '<script language="JavaScript">
                if (window.confirm("Your Are Registerd Successfully... "))
               {
                 window.location.href="user-otp.php";
               };
                </script>';
    }
}
?>