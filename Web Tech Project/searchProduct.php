<?php
    require_once "CONTROLLER/ProductController.php";
    $key = $_GET["key"];
    $products = searchProduct($key);
    foreach($products as $product)
    {
        //echo $product["name"]."<br>";
        echo "<a href='item.php?id=".$product['id']."'>".$product["name"]."<a><br>";
    }
?>