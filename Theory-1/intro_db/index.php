<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="wt_sp21_final";
    $conn = mysqli_connect($server,$user,$password,$db);
    if($conn)
    {
        echo "Connected<br>";
    }
    else{
        echo mysqli_connect_error();
    }
    $query="insert into users values(null,'rakib','456','admin')";
    if(mysqli_query($conn,$query))
    {
        echo "Value inserted";
    }
    else
    {
        echo "Problem";
    }
?>