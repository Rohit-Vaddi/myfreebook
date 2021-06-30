<?php
require('include/conn.php');	
	
	if(!empty($_POST))
	{
		$msg=array();
		
		if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message']))
		{
			$msg[]="Please full fill all requirement";
		}
		
				
		if(is_numeric($_POST['name']))
		{
			$msg[]="Name must be in String Format...";
		}
		
		if(is_numeric($_POST['email']))	//See this validation for @,21212 Later
		{
			$msg[]="Name must be in appropriate Format...";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			$nm=$_POST['name'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
			$question=$_POST['message'];
			
			
			$query="insert into contact(con_name,con_email,con_sub,con_msg)
			values('$nm','$email','$subject','$question')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			
            echo '<script language="JavaScript">
            if (window.confirm("Your Form Are Submitted... Your Problem Solve Early"))
           {
            window.location.href="index.php";
           };
            </script>'; 
		}
	}
	else
	{
		header("location:index.php");
	}
?>