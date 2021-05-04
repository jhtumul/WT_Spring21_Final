<?php

	include_once "header(user).php";
	require_once "CONTROLLER/ProductController.php";
	$products = getAllProducts();
?>
<!--Products starts -->
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
					if(isset($_SESSION["user"]))
					{
						echo '<div class="add-to-cart"><button type=submit name=Add_To_Cart class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</button></span></div>';
					}
					else
					{
						echo '<div class="add-to-cart"><a href="login.php" class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</a></span></div>';
					}
					
					echo '</div>';
				}
			?>
	</form>
</div>
<!--Products ends -->
<?php include 'footer.php';?>