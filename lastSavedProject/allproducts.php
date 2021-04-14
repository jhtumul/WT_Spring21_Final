<?php 
	include 'admin_header.php';
	require_once "CONTROLLER/ProductController.php";
	$products = getAllProducts();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
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
					echo '<td><a href="editproduct.php" class="btn btn-success">Edit</a></td>';
					echo '<td><a class="btn btn-danger">Delete</td>';
				echo "</tbody>";

			}
		?>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>