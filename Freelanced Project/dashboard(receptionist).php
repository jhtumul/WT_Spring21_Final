<?php include_once 'receptionist_header.php';
require_once "CONTROLLER/UserController.php";
session_start();
?>
<!--dashboard starts -->
<div class="center" align="center">
	<div align="center">
		<form action="" method="post">
			<input type="text" name="id" class="form-control" placeholder="Search Employee..">
			<input type="submit" name="search_worker" value="Search" id="">
		</form>
	</div>
<table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Type</th>
                </tr>
                <?php
                    foreach($results as $row)
                    {
						if($row["type"] == "doctor" || $row["type"] == "receptionist" || $row["type"] == "admin")
                        {
                            echo "<tr>";
                                echo "<td>".$row["id"]."</td>";
                                echo "<td>".$row["name"]."</td>";
                                echo "<td>".$row["salary"]."</td>";
                                echo "<td>".$row["type"]."</td>";
                            
						    echo "</tr>";
                        }
                    }
                ?>
        </table>
</div>
</div>
<!--dashboard ends -->
<?php include 'admin_footer.php';?>