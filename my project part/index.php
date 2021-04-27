<?php
	include "header(user).php";
	require_once "CONTROLLER/ProductController.php";
	//require_once "CONTROLLER/CartController.php";
	$products = getAllProducts();
	
?>
<!--Products starts -->
<!-- <head><link rel="stylesheet" href="styles/mystyle.css"></head> -->
<div class="main-content">
	<form>
		<?php
				foreach($products as $product)
				{
					echo '<div class="card-product col-md-4">
					<a href="item.php?id='.$product['id'].'">
					<img class="card-image" src="https://m.media-amazon.com/images/I/41n0GIKkW8L._AC_SR160,160_.jpg"></img>
					
					<b class="text">'.$product["name"].'</b>
					</a>
					<div class="price-label"><span ><b>'.$product["price"].' BDT</b></span></div>';
					if($_SESSION["type"] != 'user')
					{
						echo '<div class="add-to-cart"><a href="login.php" class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</a></span></div>';
					}
					else
					{
						echo '<div class="add-to-cart"><button type=submit name=Add_To_Cart class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</button></span></div>';
					}
					
					echo '</div>';
				}
			?>
	</form>
	<!-- 
		<div class="card-product col-md-4">
		<a href="item.php">
			<img class="card-image" src="https://m.media-amazon.com/images/I/41n0GIKkW8L._AC_SR160,160_.jpg"></img>
			<b class="text"> Note 7 Pro</b>
		</a>
		<div class="price-label"><span ><b>15500 BDT</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</a></span></div>
		</div>
	-->
</div>
<!--Products ends -->
<?php include 'footer.php';?>