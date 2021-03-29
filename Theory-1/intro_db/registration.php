<?php 
    $db_server="localhost";
    $db_user="root";
    $db_password="";
    $db="wt_sp21_final";

    $uname="";
    $pass="";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];

        //require_once "db_config.php";
        $conn = mysqli_connect($db_server,$db_user,$db_password,$db);
        $query="insert into users values (null,'$uname','$pass','user')";
        if(mysqli_query($conn,$query))
        {
            echo "value inserter";
        }
        else
        {
            echo "problem not inserted";
        }

    }
?>

<html>
    <body>
    <html>
    <head></head>
    <body>
        <form method="post">
            <input type="text" name="uname" placeholder="username"><br>
            <input type="password" name="pass" placeholder="password"><br>
            <input type="submit" name="register" value="register">
        </form>
    </body>
</html>