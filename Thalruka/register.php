<?php
ob_start();
	include 'config.php';
	$username = $_POST["Email"];
	$password = $_POST["Password"];
	
	$insert = $db->query("INSERT into user (username, password) VALUES ('".$username."','".$password."')");
	if($insert){
			$message = "You Are Registered Successfully!!!";
			//echo $message;
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Location:index.php?username=$username");
		}
		else{
			echo "Please Enter Correct Details";
		}

?>