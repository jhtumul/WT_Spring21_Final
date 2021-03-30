<?php
    require_once "db_config.php";
    $uname = "";
    $right_uname="";
    $pass = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $uname = htmlspecialchars($_POST["uname"]);
        $pass = htmlspecialchars($_POST["pass"]);
        $query = "select * from users where username='$uname'";
        $result = get($query);
        if(count($result) > 0)
        {////
            $right_uname = $uname;
            $user = $result[0];
            if($user["password"] == $pass)
            {
                session_start();
                $_SESSION["logged_in_user"] = $user["username"];
                //$_SESSION["pass"] = $user["password"];
                header("Location: dashboard.php");
            }
            else
            {
                echo "password incorrect!";
            }
        }
        else
        {
            echo "User does not exist!";
        }

        /*  password checking condition 2nd way
        if(count($result) > 0)
        {////
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
                echo "password incorrect!";
            }
        }
        else
        {
            echo "User doesn't exist!";
        }
        */
    }
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="uname" placeholder="username" value="<?php echo $right_uname;?>"><br>
            <input type="password" name="pass" placeholder="password"><br>
            <input type="submit" name="login" value="login"><br>
        </form>
        <a href="registration.php">Not yet Registered?</a>
    </body>
</html>