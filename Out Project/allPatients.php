<?php 
	include 'admin_header.php';
    require_once "CONTROLLER/UserController.php";
	$patients = getAllPatients();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text" align="center">All Patients</h3>
	<!-- <div align="center">
		<form action="" method="post">
			<input type="text" name="searched_prodcut" class="form-control" placeholder="search..">
			<input type="submit" name="search_patient" value="Search" id="">
		</form>
	</div> -->
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Email</th>
			<th>Phone</th>
		</thead>
		<?php
			foreach($patients as $patient)
			{
				echo "<tbody>";
					echo "<td>".$patient["id"]."</td>";
					echo "<td>".$patient["name"]."</td>";
					echo "<td>".$patient["email"]."</td>";
					echo "<td>".$patient["phoneNo"]."</td>";
					// echo "<td>".$patient["image"]."</td>";
					echo '<form action="" method="post">';
						echo '<input type="hidden" name="id" value="'.$patient['id'].'">';
						echo '<td><input type="submit" name="delete_patient" class="btn btn-danger" value="Delete" class="form-control"></td>';
					echo '</form>';
				echo "</tbody>";

			}
		?>
	</table>
</div>
<script src="UserController.js"></script>
<!--Products ends -->
<?php include 'admin_footer.php';?>