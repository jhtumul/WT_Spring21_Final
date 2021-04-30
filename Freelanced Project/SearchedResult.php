<?php
	include "header(user).php";	
?>
<div style="background-color: whitesmoke; color:black" class="main-content" align="center">
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
                        if($row['type']=='doctor')
                        {
                            echo "<tr>";
                                echo "<td>".$row["name"]."</td>";
                                echo "<td>".$row["email"]."</td>";
                                echo "<td>".$row["phoneNo"]."</td>";
                                echo "<td>".$row["type"]."</td>";
                            echo "</tr>";
                        }
                    }
                ?>
        </table>
</div>