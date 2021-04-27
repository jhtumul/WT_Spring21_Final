<?php 
	include 'header(user).php';
	require_once "CONTROLLER/UserController.php";
	$doctors = getAllDoctors();
?>
<!--All Products starts -->
<div class="main-content">
<div class="center">
	<h3 class="text" align="center">All Doctors</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Email</th>
			<th>Phone</th>
		</thead>
		<?php
			foreach($doctors as $doctor)
			{
				echo "<tbody>";
					echo "<td>".$doctor["id"]."</td>";
					echo "<td>".$doctor["name"]."</td>";
					echo "<td>".$doctor["email"]."</td>";
					echo "<td>".$doctor["phoneNo"]."</td>";
					// echo "<td>".$doctor["image"]."</td>";
					// echo '<form action="" method="post">';
					// 	echo '<input type="hidden" name="id" value="'.$doctor['id'].'">';
					// 	echo '<td><input type="submit" name="delete_doctor" class="btn btn-danger" value="Delete" class="form-control"></td>';
					// echo '</form>';
				echo "</tbody>";

			}
		?>
	</table>
</div>
</div>
<script src="UserController.js"></script>
<!--Products ends -->
<?php include 'footer.php';?>