<?php 
    session_start();
    // unset($_SESSION["user"]);
    // unset($_SESSION["type"]);
    // unset($_SESSION["pass"]);
    session_destroy();
    header("Location: index.php")
?>