<?php
	include 'config.php';
	$username = $_POST["Email"];
	$password = $_POST["Password"];
	
	$sql="SELECT * from user WHERE username='$username'";
	$result = mysqli_query($db, $sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		if($password==$row['password']){
			//header("Location:home.php");
			header("Location:index.php?username=$username");
		}
		else{
			echo "Invalid Password";
		}
	}
}
else{
	echo "Invalid Username";
}
?>