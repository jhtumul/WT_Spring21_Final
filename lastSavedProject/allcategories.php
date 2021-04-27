<?php
	include 'admin_header.php';
	require_once "CONTROLLER/category_controller.php";
	$categories = getAllCategories();	
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Product Count </th>
		</thead>
		<?php
			foreach($categories as $category)
			{
				echo "<tbody>";
					echo "<td>".$category["id"]."</td>";
					echo "<td>".$category["name"]."</td>";
					echo '<td><a href="editcategory.php?id='.$category['id'].'" class="btn btn-success">Edit</a></td>';
					echo '<form action="" method="post">';
						echo '<input type="hidden" name="id" value="'.$category['id'].'">';
						echo '<td><input type="submit" name="delete_category" class="btn btn-danger" value="Delete" class="form-control"></td>';
					echo '</form>';
				echo "</tbody>";
			}
		?>
		
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>