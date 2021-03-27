<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="wt_spring21_final";
    $conn = mysqli_connect($server,$user,$password,$db);
    if($conn)
    {
        echo "Connected";
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