<?php
ob_start();
	include 'config.php';
	//require_once 'config.php';
	if(!empty($_GET['del_id'])){
	$delete_id = $_GET['del_id'];
	$username = $_GET['username'];
	
	$delsql = "DELETE FROM cart WHERE item_name='$delete_id'";
	if(mysqli_query($db, $delsql)){
		//header("Location: cart.php?username=$username");
		//header("Refresh:0; url=cart.php?username=$username");
		//echo $delete_id;
	}
	}
?>

<!DOCTYPE html>
<head>
<style>
	.box{
		width:75%;
		margin-top:10%;
		margin-left:10%;
		padding-left:50px;
		text-align:center;
	}
	button{
		background-color: DodgerBlue;
		border: none;
		color: white;
		padding: 12px 16px;
		font-size: 16px;
		cursor: pointer;
	}
	.btn{
		background-color: red;
		border: none;
		border-radius:10px;
		color: white;
		padding: 12px 15px;
		font-size: 16px;
		cursor: pointer;
		float:right;
	}
</style>

<script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
    </script> 

<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="box">
<table class="tbl-cart" cellpadding="10" cellspacing="1" border="1" style="background-color:#ccc;margin-bottom:15px">
<tbody>
<tr style="background-color:#aaa">
<th style="text-align:center;" width="10%">Item Name</th>
<th style="text-align:center;" width="10%">Quantity</th>
<th style="text-align:center;" width="10%">Unit Price</th>
<th style="text-align:center;" width="10%">Price</th>
<th style="text-align:center;" width="10%">Remove</th>
</tr>
<?php
	include 'config.php';
	if(!empty($_GET['item_id'])){
	$username = $_GET["username"];
	$item_id = $_GET['item_id'];
	$qty=$_POST['qty'];
	
	$sql = "SELECT name,price FROM item WHERE item_id='$item_id'";
	$result = mysqli_query($db, $sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			$name=$row["name"];
			$price=$row["price"];
			$total = $price*$qty;
		}
	}
	// For checking the same item in the cart
	$name1 = 1;
	$sql = "SELECT item_name,quantity,total_price FROM cart WHERE item_name='$name' and username='$username'";
	$result = mysqli_query($db, $sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			$name1=$row["item_name"];
			$qty1=$row["quantity"];
			$total1=$row["total_price"];
		}
	}
	
	if($_GET['username']!="unknown"){
		//Checking the same item
		if($name==$name1){
			$total2=$total + $total1;
			$qty2 = $qty + $qty1;
			$update = "UPDATE cart set quantity ='".$qty2."' , total_price ='".$total2."' WHERE item_name ='".$name."'";
			if(mysqli_query($db, $update)){
		
			}
		}
		else{
			$insert = $db->query("INSERT into cart (username, item_name, quantity, price, total_price) VALUES ('".$username."','".$name."','".$qty."','".$price."','".$total."')");
		}
	
	}
	else{
		header("Location:loginpage.php?username=$username");
	}
	}
	$username = $_GET["username"];
	$sql = "SELECT cart.item_name,cart.quantity,cart.price,cart.total_price FROM cart WHERE username='$username'";
$result = mysqli_query($db, $sql);

if($result->num_rows>0){

	while($row = $result->fetch_assoc()){
		$output = '<tr><td>'.$row["item_name"].'</td><td>'.$row["quantity"].'<td>'.$row["price"].'</td>
					<td>'.$row["total_price"].'</td>
					<td><a href="cart.php?username='.$username.'&del_id='.$row['item_name'].' "><div class="btn">Remove</div></a></td></tr>';
		echo $output;
	}
	$sql2 = "SELECT sum(total_price) as totalx FROM cart WHERE username='$username'";
	$result = mysqli_query($db, $sql2);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
	echo "<tr><td colspan='4' align='right'><b>Total Price</b></td>";
	echo "<td><b>රු. ".$row['totalx']."</b>";
	echo "</td></tr>";
	echo "</table>";
	//$btn2 = '<a href="index.php?username='.$username.'"><button type="submit" class="w3ls-cart" style="float:left"><i class="fa fa-cart-plus" aria-hidden="true"></i> Back To Shopping</button></a>';
	$btn1 = '<br/><a href="payment.php?username='.$username.'"><button type="submit" class="w3ls-cart" style="float:right;background-color:green" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Order Now!</button></a>';
	echo $btn1;
	//echo $btn2;
		}
	}

}
		
else{
	//header("Location:login.html");
	echo "<h2>Your List Is Empty</h2>";
}

?>
<?php
echo "</table>";
$output2='<a href="index.php?username='.$username.'"><button type="submit" class="w3ls-cart" style="float:left"><i class="fa fa-cart-plus" aria-hidden="true"></i> << Back To Shopping</button></a>';
echo $output2;
?>
</div>


<script type="text/javascript">
history.pushState(null, null, '<?php echo $_SERVER["REQUEST_URI"]; ?>;
window.addEventListener('popstate', function(event) {
		window.location.href="index.php";
});
</script>
</body>
</html>