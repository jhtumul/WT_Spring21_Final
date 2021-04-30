<?php include 'admin_header.php';?>
<!--dashboard starts -->
<div class="center" align="center">
	<div align="center">
		<form action="" method="post">
			<input type="text" name="id" class="form-control" placeholder="Search All Users..">
			<input type="submit" name="search_all" value="Search" id="">
		</form>
	</div>
<table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Type</th>
                </tr>
                <?php
                    foreach($results as $row)
                    {
						echo "<tr>";
							echo "<td>".$row["name"]."</td>";
							echo "<td>".$row["email"]."</td>";
							echo "<td>".$row["phoneNo"]."</td>";
							echo "<td>".$row["type"]."</td>";
						echo "</tr>";
                    }
                ?>
        </table>
</div>
</div>
<!--dashboard ends -->
<?php include 'admin_footer.php';?>