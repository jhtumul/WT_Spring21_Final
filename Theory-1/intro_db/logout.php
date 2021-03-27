<?php 
    session_start();
    unset($_SESSION["logged_in_user"]);
    //unset($_SESSION["pass"]);
    header("Location: login.php")
?>