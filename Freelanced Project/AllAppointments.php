<?php 
	include 'admin_header.php';
	require_once "CONTROLLER/AppointmentController.php";
	$appointments = getAllAppointments();
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
            <!-- <th>UserID</th> -->
		</thead>
		<?php
			foreach($appointments as $appointment)
			{
				echo "<tbody>";
					echo "<td>".$appointment["id"]."</td>";
					echo "<td>".$appointment["patient"]."</td>";
					echo "<td>".$appointment["doctor"]."</td>";
					echo "<td>".$appointment["timeslot"]."</td>";
                    
					

			}
		?>
	</table>
</div>
</div>

<!--Products ends -->
<?php include 'admin_footer.php';?>