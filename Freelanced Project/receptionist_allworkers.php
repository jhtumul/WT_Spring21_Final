<?php 
	include 'receptionist_header.php';
    require_once "CONTROLLER/UserController.php";
	$workers = getAllWorkers();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text" align="center">All Workers</h3>
	<!-- <div align="center">
		<form action="" method="post">
			<input type="text" name="searched_prodcut" class="form-control" placeholder="search..">
			<input type="submit" name="search_worker" value="Search" id="">
		</form>
	</div> -->
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Email</th>
			<th>Phone</th>
            <th>Salary</th>
            <th>Type</th>
		</thead>
		<?php
			foreach($workers as $worker)
			{
				echo "<tbody>";
					echo "<td>".$worker["id"]."</td>";
					echo "<td>".$worker["name"]."</td>";
					echo "<td>".$worker["email"]."</td>";
					echo "<td>".$worker["phoneNo"]."</td>";
                    echo "<td>".$worker["salary"]."</td>";
                    echo "<td>".$worker["type"]."</td>";
					// echo "<td>".$worker["image"]."</td>";
                    echo '<td><a href="receptionist_addsalary.php?id='.$worker['id'].'" class="btn btn-success">Edit Salary</a></td>';
					// echo '<form action="" method="post">';
					// 	echo '<input type="hidden" name="id" value="'.$worker['id'].'">';
						
					// echo '</form>';
				echo "</tbody>";

			}
		?>
	</table>
</div>
<script src="UserController.js"></script>
<!--Products ends -->
<?php include 'admin_footer.php';?>