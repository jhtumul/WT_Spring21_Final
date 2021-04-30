<?php 
	include 'header(user).php';
	require_once "CONTROLLER/AppointmentController.php";
	$appointments = getMyAppointments();
?>
<!--All Products starts -->

<div class="main-content">
<div class="center">
	<h3 class="text" align="center">My Appointments</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Patient</th>
			<th>Doctor</th>
			<th>Timeslot</th>
            <th>Status</th>
		</thead>
		<?php
			foreach($appointments as $appointment)
			{
				echo "<tbody>";
					echo "<td>".$appointment["id"]."</td>";
					echo "<td>".$appointment["patient"]."</td>";
					echo "<td>".$appointment["doctor"]."</td>";
					echo "<td>".$appointment["timeslot"]."</td>";
                    echo "<td>".$appointment["status"]."</td>";
                echo "</tbody>";	
			}
		?>
	</table>
</div>
</div>

<!--Products ends -->
<?php include 'footer.php';?>