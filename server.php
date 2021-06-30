<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'myfreebook');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if ($password_1 != $password_2) {
	array_push($errors, "Two Passwords Do Not Match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

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

  // Finally, register user if there are no errors in the form

  if (count($errors) == 0) {
    // $password = md5($password_1);//encrypt the password before saving in the database
    $password = $password_1;
    $code = rand(999999, 111111);
    $status = "notverified";

  	$query = "INSERT INTO users (fname, username, email, password, contact, code, status) 
  			  VALUES('$fname', '$username', '$email', '$password', '$contact', '$code', '$status')";
  	$data_check = mysqli_query($db, $query);
    if($data_check){
      $subject = "Email Verification Code";
      $message = "Your verification code is $code";
      $sender = "From: vaddirohit2000@gmail.com";
      if(mail($email, $subject, $message, $sender)){
          $info = "We've sent a verification code to your email - $email";
          $_SESSION['info'] = $info;
          $_SESSION['email'] = $email;
          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;
          // header('location: user-otp.php');
          echo '<script language="JavaScript">
            if (window.confirm("Your Are Registerd Successfully... "))
           {
             window.location.href="user-otp.php";
           };
            </script>'; 
      }else{
          $errors['otp-error'] = "Failed while sending code!";
      }
  }else{
      $errors['db-error'] = "Failed while inserting data into database!";
  }


  //   echo '<script language="JavaScript">
  //   if (window.confirm("Your Are Registerd Successfully...   Please Login"))
  //  {
  //   window.location.href="signin.php";
  //  };
  //   </script>'; 
    
  }
}

//if user click verification code submit button
if(isset($_POST['check'])){
  $_SESSION['info'] = "";
  $otp_code = mysqli_real_escape_string($db, $_POST['otp']);
  $check_code = "SELECT * FROM users WHERE code = $otp_code";
  $code_res = mysqli_query($db, $check_code);
  if(mysqli_num_rows($code_res) > 0){
      $fetch_data = mysqli_fetch_assoc($code_res);
      $fetch_code = $fetch_data['code'];
      $email = $fetch_data['email'];
      $username = $fetch_data['username'];
      $code = rand(999999, 111111);
      $status = 'verified';
      $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
      $update_res = mysqli_query($db, $update_otp);
      if($update_res){
          $_SESSION['username'] = $username;
          $_SESSION['email'] = $email;
          // header('location: index.php');
          echo '<script language="JavaScript">
            if (window.confirm("Your Account verified...   Please Login"))
           {
            window.location.href="signin.php";
           };
            </script>'; 
          exit();
      }else{
          $errors['otp-error'] = "Failed while updating code!";
      }
  }else{
      $errors['otp-error'] = "You've entered incorrect code!";
  }
}

 //if user click continue button in forgot password form
 if(isset($_POST['check-email'])){
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $check_email = "SELECT * FROM users WHERE email='$email'";
  $run_sql = mysqli_query($db, $check_email);
  if(mysqli_num_rows($run_sql) > 0){
      $code = rand(999999, 111111);
      $insert_code = "UPDATE users SET code = $code WHERE email = '$email'";
      $run_query =  mysqli_query($db, $insert_code);
      if($run_query){
          $subject = "Password Reset Code";
          $message = "Your password reset code is $code";
          $sender = "From: shahiprem7890@gmail.com";
          if(mail($email, $subject, $message, $sender)){
              $info = "We've sent a passwrod reset otp to your email - $email";
              $_SESSION['info'] = $info;
              $_SESSION['email'] = $email;
              header('location: reset-code.php');
              exit();
          }else{
              $errors['otp-error'] = "Failed while sending code!";
          }
      }else{
          $errors['db-error'] = "Something went wrong!";
      }
  }else{
      $errors['email'] = "This email address does not exist!";
  }
}


 //if user click check reset otp button
 if(isset($_POST['check-reset-otp'])){
  $_SESSION['info'] = "";
  $otp_code = mysqli_real_escape_string($db, $_POST['otp']);
  $check_code = "SELECT * FROM users WHERE code = $otp_code";
  $code_res = mysqli_query($db, $check_code);
  if(mysqli_num_rows($code_res) > 0){
      $fetch_data = mysqli_fetch_assoc($code_res);
      $email = $fetch_data['email'];
      $_SESSION['email'] = $email;
      $info = "Please create a new password that you don't use on any other site.";
      $_SESSION['info'] = $info;
      header('location: new-password.php');
      exit();
  }else{
      $errors['otp-error'] = "You've entered incorrect code!";
  }
}

 //if user click change password button
 if(isset($_POST['change-password'])){
  $_SESSION['info'] = "";
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
  if($password !== $cpassword){
      $errors['password'] = "Confirm password not matched!";
  }else{
      $code = rand(999999, 111111);
      $email = $_SESSION['email']; //getting this email using session
      // $encpass = password_hash($password, PASSWORD_BCRYPT);
      $encpass = $password;

      $update_pass = "UPDATE users SET code = $code, password = '$encpass' WHERE email = '$email'";
      $run_query = mysqli_query($db, $update_pass);
      if($run_query){
        echo '<script language="JavaScript">
        if (window.confirm("Your Password Changed Successfully..."))
       {
        window.location.href="signin.php";
       };
        </script>'; 
          // $info = "Your password changed. Now you can login with your new password.";
          // $_SESSION['info'] = $info;
          // header('Location: password-changed.php');
      }else{
          $errors['db-error'] = "Failed to change your password!";
      }
  }
}

// ... 

// LOGIN USER

if (isset($_POST['login_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $check_email = "SELECT * FROM users WHERE username = '$username'";
  $res = mysqli_query($db, $check_email);
  if(mysqli_num_rows($res) > 0){
    // $password = md5($password);
    $fetch = mysqli_fetch_assoc($res);
    $fetch_pass = $fetch['password'];
    if($password ==$fetch_pass){
      $_SESSION['username'] = $username;
      $_SESSION['login_user'] = true;
        // header("location:index.php");
      if($_SESSION['username'] == "admin"){
        header("location:admin/index.php");
      }
      else{
        header("location:index.php");
      }
    }else{
      array_push($errors, "Incorect UserName or password");
    }
}else{
  array_push($errors, "It's look like you're not yet a member! Click on the  link to create an account.");
}
  // if (count($errors) == 0) {
  //	$password = md5($password);
  	// $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	// $results = mysqli_query($db, $query);
  	// if (mysqli_num_rows($results) == 1) {
    //   $_SESSION['username'] = $username;
    //   $_SESSION['login_user'] = true;
      // if($username != $result['username']){
  		// array_push($errors, "Username does not exist");
      // }
  //     if($_SESSION['username']=="admin")
	// 				{
	// 					header("location:admin/index.php");
	// 				}
	// 				else
	// 				{
	// 					header("location:index.php");
	// 				}
  	 
  // 	}else {
  // 		array_push($errors, "Incorect UserName or password");
  // 	}

  
}
