<?php
    session_start();
    if(!isset($_SESSION["logged_in_user"]))
    {
        header("Location: login.php");
    }
    require_once "db_config.php";
    $query = "select * from users";
    $result = get($query);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
?>

<table border="1" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Type</th>
    </tr>
    <?php
        echo $_SESSION["logged_in_user"];
        foreach($result as $row)
        {
            echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["username"]."</td>";
                echo "<td>".$row["type"]."</td>";
            echo "</tr>";
            
        }
    ?>
    <tr>
        <td><a href="logout.php">Logout</a></td>
    </tr>
</table>