<?php
    session_start();
    if(!isset($_SESSION["logged_in_user"]))
    {
        header("Location: login.php");
    }
    require_once "db_config.php";
    $query = "select * from users";
    $result = get($query);
?>

<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        <?php echo "LOGGED IN: ".$_SESSION["logged_in_user"]; ?></br>
        <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Type</th>
                </tr>
                <?php
                    foreach($result as $row)
                    {
                        echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["username"]."</td>";
                            echo "<td>".$row["type"]."</td>";
                        echo "</tr>";
                    }
                ?>
        </table>
        <br><a href="logout.php">Logout</a>
    </body>
</html>