<?php
    require_once "MODEL/db_config.php";
    $uname="";
    $pass="";
    $err_pass="";
    $err_uname="";
    session_start();
    function authenticateUser()
    {
        global $uname,$pass,$err_pass,$err_uname;
        $query = "select * from users where username='$uname'";
        $result = get($query);
        if(count($result) > 0)
        {
            $user = $result[0];
            if($user["password"] == $pass)
            {
                
                $_SESSION["user"] = $user["username"];
                $_SESSION["type"] = $user["type"];
                $_SESSION["id"] = $user["id"];
                $_SESSION["password"] = $user["password"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["phoneNo"] = $user["phoneNo"];
                $_SESSION["name"] = $user["name"];
                if($_SESSION["type"] == "admin")
                {
                    header("Location: allproducts.php");
                }
                else
                {
                    header("Location: index.php");
                }
            }
            else
            {
                $err_pass = "**password incorrect**";
                $pass="";
                
            }
        }
        else
        {
            $uname="";
            $pass="";
            $err_uname= "**username does not match!**";
        }
    }

    if(isset($_POST["login"]))
    {
        $uname = htmlspecialchars($_POST["uname"]);
        $pass = htmlspecialchars($_POST["pass"]);
        authenticateUser();
    }
?>