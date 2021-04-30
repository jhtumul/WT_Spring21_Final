<?php 
	include 'admin_header.php';
	require_once "CONTROLLER/UserController.php";
	$doctors = getAllPendingDoctors();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text" align="center">Pending doctors</h3>
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
					echo '<form action="" method="post">';
						echo '<input type="hidden" name="id" value="'.$doctor['id'].'">';
                        echo '<td><input type="submit" name="approve_doctor" class="btn btn-success" value="Approve" class="form-control"></td>';
						echo '<td><input type="submit" name="decline_doctor" class="btn btn-danger" value="Decline" class="form-control"></td>';
					echo '</form>';
				echo "</tbody>";
			}
		?>
	</table>
</div>
<script src="UserController.js"></script>
<!--Products ends -->
<?php include 'admin_footer.php';?>