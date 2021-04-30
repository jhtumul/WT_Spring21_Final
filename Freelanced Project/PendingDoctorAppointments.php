<?php 
	include 'doctor_header.php';
	require_once "CONTROLLER/AppointmentController.php";
    session_start();
	$appointments = getAllPendingAppointments();
?>
<!--All Products starts -->

<div class="main-content">
<div class="center">
	<h3 class="text" align="center">Doctor's Pending Appointments</h3>
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
				if($appointment["doctor"]==$_SESSION["name"])
                {
                    echo "<tbody>";
                        echo "<td>".$appointment["id"]."</td>";
                        echo "<td>".$appointment["patient"]."</td>";
                        echo "<td>".$appointment["doctor"]."</td>";
                        echo "<td>".$appointment["timeslot"]."</td>";
                        echo "<td>".$appointment["status"]."</td>";
						echo '<form action="" method="post">';
							echo '<input type="hidden" name="id" value="'.$appointment['id'].'">';
							echo '<td><input type="submit" name="approve_appointment" class="btn btn-success" value="Approve" class="form-control"></td>';
							echo '<td><input type="submit" name="decline_appointment" class="btn btn-danger" value="Decline" class="form-control"></td>';
						echo '</form>';
                    echo "</tbody>";
                }
			}
		?>
	</table>
</div>
</div>

<!--Products ends -->
<?php include 'admin_footer.php';?>