<?php 
    require_once "db_config.php";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $has_error=false;
    function validateUname($uname)
    {
        if(strlen($_POST["uname"])<6)
		 {
			 return false;
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 return false;
		 }
		 else
		 {
			 return true;
		 }
    }
    function validatePass($pass)
    {
        $has_upper=false;
        $has_lower=false;
        $has_digit=false;
        for($i=0;$i<strlen($pass);$i++)
        {
            if(ctype_upper($pass[$i]))
            {
                $has_upper=true;
            }
            if(ctype_lower($pass[$i]))
            {
                $has_lower=true;
            }
            if(ctype_digit($pass[$i]))
            {
                $has_digit=true;
            }
        }
        if($has_upper==false || $has_lower==false || $has_digit==false)
        {
            return false;
        }
        elseif(strlen($_POST["pass"])<8)
        {
            return false;
        }
		elseif(strpos($_POST["pass"]," "))
        {
            return false;
        }
        elseif(!strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"?") && !strpos($_POST["pass"],"@"))
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //Uname validation
        if(empty($_POST["uname"]))
        {
            $err_uname="username required!<br>";
            echo $err_uname;
            $has_error=true;
        }
        elseif(!validateUname($_POST["uname"]))
        {
            $err_uname="username must contain atleast 6 characters & No white spaces<br>";
            echo $err_uname;
            $has_error=true;
        }
        else
        {
            $uname = htmlspecialchars($_POST["uname"]);
        }
        
        //password validation
        if(empty($_POST["pass"]))
        {
            $err_pass="password required!";
            echo $err_pass;
            $has_error=true;
        }
        elseif(!validatePass($_POST["pass"]))
        {
            $err_pass="password must contain atleast 8 characters, 1 upper case, 1 lowercase & 1 special character(@/#)";
            echo $err_pass;
            $has_error=true;
        }
        else
        {
            $pass=htmlspecialchars($_POST["pass"]);
        }
    
        if(!$has_error)
        {
            $query="insert into users values (null,'$uname','$pass','user')";
            if(execute($query))
            {
                echo "value inserter";
            }
            else
            {
                echo "query problem";
            }
        }
    }
?>

<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
    <html>
    <head></head>
    <body>
        <form method="post">
            <input type="text" name="uname" placeholder="username" value="<?php echo $uname;?>"><br>
            <input type="password" name="pass" placeholder="password" value="<?php echo $pass;?>"><br>
            <input type="submit" name="register" value="register">
        </form>
        <a href="login.php">Already Have Account?</a>
    </body>
</html>