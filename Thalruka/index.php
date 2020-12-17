<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="#"><img src="images/logo2.png" alt=" " /><h1>Thalruka<span>.com</span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li>0764226529</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li class=" active"><a href="#" class="hyper "><span>Home</span></a></li>	
						<?php
						if(!empty($_GET['username'])){
						$username=$_GET['username'];
						}
						else{
							$username="unknown";
						}
						$output1='
								  <li><a href="saban.php?username='.$username.'&cat_id=1" class="hyper"><span>සිල්ලර බඩු</span></a></li>
								  <li><a href="saban.php?username='.$username.'&cat_id=4" class="hyper"><span>හාඩ්වෙයාර් උපකරණ</span></a></li>';
						echo $output1;
						?>
						<li><a href="#" class="hyper"><span>About</span></a></li>
						<li><a href="#" class="hyper"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		<div class="col-md-4 search-agileinfo">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>
		<div class="col-md-1 cart-wthree">
			<div class="cart">
				<?php
				if(!empty($_GET['username'])){
				$username=$_GET['username'];
				}
				else{
					$username="unknown";
				}
				include 'config.php';
				$out1='<form action="cart.php?username='.$username.'" method="post" class="last">';
				echo $out1;
				$query = $db->query("select count(username) as count from cart where username='$username'");
				if($query->num_rows > 0 ){
					while($row = $query->fetch_assoc()){
						$c = $row['count'];
						if($c==0){
							$out2 = '<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button><b style="color:white;padding:3px;background-color:black">'.$c.'</b>';
							echo $out2;
						}
						else{
							$out2 = '<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button><b style="color:white;padding:3px;background-color:red">'.$c.'</b>';
							echo $out2;
						}
					}
				}
				?>
				</form>  
			</div>
		</div>
					
		<div class="clearfix"></div>
	</div>
</div>


<img src="images/supermarket.jpg">


<div class="top-products">
	<div class="container">
		<h3>Top Products</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>සිල්ලර බඩු</span></li>
					<?php
					$out='<a href="saban.php?username='.$username.'&cat_id=2"><li class="resp-tab-item"><span>සබන් වර්ග</span></li></a>
					<a href="saban.php?username='.$username.'&cat_id=3"><li class="resp-tab-item"><span>ගැස්</span></li></a>	
					<a href="saban.php?username='.$username.'&cat_id=4"><li class="resp-tab-item"><span>මස්/මාළු</span></li></a>';
					echo $out;
					?>
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
					
					<?php
						include 'config.php';
						if(!empty($_GET['username'])){
						$username=$_GET['username'];
						}
						
						//echo $username;
						$query = $db->query("SELECT * FROM item");
						
						if($query->num_rows > 0){
						while($row = $query->fetch_assoc()){
							$imageURL = 'uploads/'.$row["file_name"];
							
						$output='<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s" style="height:350px">
							<a href="single.php?item_id='.$row["item_id"].'&username='.$username.'"><div class="product-img">
								<img src="'.$imageURL.'" "width="300px" height="200px"" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Formal shoes" /> 
									<input type="hidden" name="amount" value="'.$row["price"].'" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>'.$row["name"].'</h4>
							<h5>රු.'.$row["price"].'</h5>
							
							
						</div>';
						echo $output;
						}
						}
					?>
						
						
											
				</div>
			</div>
		</div>	
	</div>
</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>


<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.html"><img src="images/logo2.png" alt=" " /><h3>Thalruka<span>.com</span></h3></a>
		<ul>
			<li>100/E/1, Rathmalavinna</li>
			<li>Balangoda.</li>
			<li><a href="mailto:info@example.com">hasindushehara8@gmail.com.com</a></li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Information</h4> 
			<ul>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Web Icons</a></li>
				<li><a href="#">Typography</a></li>
				<li><a href="#">FAQ's</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Shop</h4> 
			<ul>
				<?php
					$out='<li><a href="saban.php?username='.$username.'&cat_id=1">සිල්ලර බඩු</a></li>
					<li><a href="saban.php?username='.$username.'&cat_id=2">සබන් වර්ග</a></li>
					<li><a href="saban.php?username='.$username.'&cat_id=3">ගැස්</a></li>	
					<li><a href="saban.php?username='.$username.'&cat_id=4">මස්/මාළු</a></li>';
					echo $out;
					?>	
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>My Account</h4> 
			<ul>
				
				<li><a href="#">Login</a></li>
				<li><a href="register.html">Register</a></li>
				
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2020 Thalruka.com . All rights reserved | Design by <a href="http://w3layouts.com">Hasindu shehara</a></p>
	</div>
</div>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
</body>
</html>