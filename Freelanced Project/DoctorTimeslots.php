<?php 
	include_once "doctor_header.php";
	require_once "CONTROLLER/UserController.php";
	$users = getAllDoctors();
    session_start();
?>
<!--All Products starts -->
<div class="main-content">
<div class="center">
	<h3 class="text" align="center">Time Schedule</h3>
	<table class="table table-striped">
		<thead>
			<th> Name</th>
			<th>Time</th>
		</thead>
		<?php
			foreach($users as $user)
			{
				if($user["username"]==$_SESSION["user"])
                {
                    echo "<tbody>";
					echo "<td>".$user["name"]."</td>";
					echo "<td>".$user["time"]."</td>";
					// echo "<td>".$user["image"]."</td>";
					    echo '<form action="" method="post">';
						echo '<input type="hidden" name="id" value="'.$user['id'].'">';
						echo '<td><input type="submit" name="delete_dslot" class="btn btn-danger" value="Delete" class="form-control"></td>';
					    echo '</form>';
				echo "</tbody>";
                }

			}
		?>
	</table>
</div>
</div>
<script src="UserController.js"></script>
<!--Products ends -->
<?php include 'admin_footer.php';?>