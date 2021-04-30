<?php include 'doctor_header.php';
require_once "CONTROLLER/AppointmentController.php";
session_start();
?>
<!--dashboard starts -->
<div class="center" align="center">
	<div align="center">
		<form action="" method="post">
			<input type="text" name="id" class="form-control" placeholder="Search Appointment..">
			<input type="submit" name="search_appo" value="Search" id="">
		</form>
	</div>
<table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Doctor</th>
                    <th>Timeslot</th>
                    
                </tr>
                <?php
                    foreach($results as $row)
                    {
						if($row["doctor"]==$_SESSION["name"])
                        {
                            echo "<tr>";
                                echo "<td>".$row["id"]."</td>";
                                echo "<td>".$row["patient"]."</td>";
                                echo "<td>".$row["doctor"]."</td>";
                                echo "<td>".$row["timeslot"]."</td>";
						    echo "</tr>";
                        }
                    }
                ?>
        </table>
</div>
</div>
<!--dashboard ends -->
<?php include 'admin_footer.php';?>