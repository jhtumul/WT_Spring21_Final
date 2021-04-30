<?php 
	include 'doctor_header.php';
	require_once "CONTROLLER/UserController.php";

	$doctors = getAllPatients();
    
?>
<!--All Products starts -->
<div class="main-content">
<div class="center">
	<h3 class="text" align="center">All Patients</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>prescription</th>
            <th>D History</th>
		</thead>
		<?php
			foreach($doctors as $doctor)
			{
				echo "<tbody>";
					echo "<td>".$doctor["id"]."</td>";
					echo "<td>".$doctor["name"]."</td>";
					// echo "<td>".$doctor["email"]."</td>";
					// echo "<td>".$doctor["phoneNo"]."</td>";
                    echo "<td>".$doctor["prescription"]."</td>";
                    echo "<td>".$doctor["dhistory"]."</td>";
					// echo "<td>".$doctor["image"]."</td>";
					// echo '<form action="" method="post">';
					 	echo '<input type="hidden" name="id" value="'.$doctor['id'].'">';
					 	echo '<td><a href="suggest_patients.php?id='.$doctor['id'].'" class="btn btn-primary">Suggest</a></td>';
                         echo '<td><a href="D_PDHistory.php?id='.$doctor['id'].'" class="btn btn-warning">Update DHistory</a></td>';
					// echo '</form>';
				echo "</tbody>";

			}
		?>
	</table>
</div>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>