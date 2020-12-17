<?php
ob_start();
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = "Order";
	$mailfrom = $_POST['email'];
	$tp = $_POST['phone_number'];
	$address = $_POST['address'];
	//$message = $_POST['message'];
	
	include('config.php');
	$username = $_GET["username"];
	$sql = "SELECT item_name,quantity,total_price FROM cart WHERE username='$username'";
	$result = mysqli_query($db, $sql);
	$i=0;
	$n="";
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			$item_name = $row["item_name"];
			$qty = $row["quantity"];
			$total = $row["total_price"];
	
			//$details=$item_name;
			$details =nl2br($item_name."\t\t-------".$qty."\t\t-------රු.".$total."\n");
			$n=$details.$n;
			$items[$i] = $item_name;
			$qu[$i] = $qty;
			$pri[$i] = $total;
			$i = $i + 1;
		}
	}
	echo $n;
	$ppp = "Item Name-------Quantity-------Price \n";
	$mailTo = "hasindushehara5@gmail.com";
	$headers = "From: ".$mailfrom;
	$txt = "Name ".$name.".\n Address:".$address.".\n\n ".$ppp.$n;
	
	mail($mailTo, $subject, $txt, $headers);
	$delsql = "DELETE FROM cart WHERE username='$username'";
	if(mysqli_query($db, $delsql)){
		$message = "We got your message!!!";
		echo $message;
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	
	header("Location: index.php?username=$username");
}
?>
