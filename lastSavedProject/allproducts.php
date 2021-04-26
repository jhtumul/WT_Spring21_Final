<?php 
	include 'admin_header.php';
	require_once "CONTROLLER/ProductController.php";
	//require_once "CONTROLLER/SearchController.php";
	$products = getAllProducts();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<div align="center">
		<form action="" method="post">
			<input type="text" name="searched_prodcut" id="search_text" onkeyup="suggest(this)" class="form-control" placeholder="search..">
			<input type="submit" name="search" value="Search" id="">
		</form>
		<p id="suggestion" align="center">
			<?php
				echo $item["name"];
			?>
		</p>
	</div>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Category </th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Description</th>
			<th></th>
			
		</thead>
		<?php
			foreach($products as $product)
			{
				echo "<tbody>";
					echo "<td>".$product["id"]."</td>";
					echo "<td>".$product["name"]."</td>";
					echo "<td>".$product["c_name"]."</td>";
					echo "<td>".$product["price"]."</td>";
					echo "<td>".$product["qty"]."</td>";
					echo "<td>".$product["description"]."</td>";
					// echo "<td>".$product["image"]."</td>";
					echo '<td><a href="editproduct.php?id='.$product['id'].'" class="btn btn-success">Edit</a></td>';
					echo '<form action="" method="post">';
						echo '<input type="hidden" name="id" value="'.$product['id'].'">';
						echo '<td><input type="submit" name="delete_product" class="btn btn-danger" value="Delete" class="form-control"></td>';
					echo '</form>';
				echo "</tbody>";

			}
		?>
	</table>
</div>
<script src="ProductController.js"></script>
<!--Products ends -->
<?php include 'admin_footer.php';?>