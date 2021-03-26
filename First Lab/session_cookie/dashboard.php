<?php 
    //session_start();
    if(!$_SESSION["user"])
    {
        header("Location: login.php");
    }
?>
<html>
    <body>
        <h1>Welcome!<?php echo $_SESSION["user"];?></h1>
        <a href="change_password.php">Change Password</a><br>
        <a href="logout.php">Logout</a>
    </body>
</html>