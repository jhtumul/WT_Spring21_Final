<?php
    $db_server="localhost";
    $db_user="root";
    $db_password="";
    $db_name="wt_sp21_final";

    function execute($query)
    {
        global $db_server,$db_user,$db_password,$db_name;
        $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
        if(mysqli_query($conn,$query))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function get($query)
    {
        global $db_server,$db_user,$db_password,$db_name;
        $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
        $result = mysqli_query($conn,$query);
        $data = array();
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $data[] = $row;
            }
        }
        return $data;
    }
?>