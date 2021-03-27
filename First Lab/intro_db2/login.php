<?php
    require_once 'db_config.php';
    $uname="";
    $pass="";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];
        $query = "select * from users where username='$uname' and password='$pass'";
        $result = get($query);
        if(count($result) > 0)
        {
            session_start();
            $user = $result[0];
            $_SESSION["logged_in_user"] = $user["username"];
            header("Location: dashboard.php");
        }
        else
        {
            echo "Username or Password is invalid";
        }
    }
?>
<html>
    <body>
        <form method="post">
            <input type="text" name="uname" placeholder="username"><br>
            <input type="password" name="pass" placeholder="password"><br>
            <input type="submit" name="login" value="login">
            <a href="registration.php">Not Registered yet?</a>
        </form>
    </body>
</html>