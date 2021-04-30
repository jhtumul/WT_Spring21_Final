<?php
    require_once "MODEL/db_config.php";
    $category="";
    $err_category="";
    $has_error=false;

    // Add Category
    function insertCategory($name)
    {
        $query="insert into categories VALUES (null,'$name')";
        execute($query);
        header("Location: allcategories.php");
    }
    if(isset($_POST["add_category"]))
    {
        if(empty($_POST["category_name"]))
        {
            $err_category="**enter category**";
            $has_error=true;
        }
        else
        {
            $category=$_POST["category_name"];
        }
        if(!$has_error)
        {
            insertCategory($category);
        }
    }//

    //Edit Category
    function editCategory($id,$name)
    {
        $query="update categories set name='$name' where id=$id";
        execute($query);
        header("Location: allcategories.php");
    }
    if(isset($_POST["edit_category"]))
    {
        editCategory($_POST["id"],$_POST["category_name"]);
    }//

    //Delete Category
    function deleteCategory($id)
    {
        $query = "delete from products where category_id=$id";
        execute($query);
        $query="delete from categories where id=$id";
        execute($query);
    }
    if(isset($_POST["delete_category"]))
    {
        deleteCategory($_POST["id"],$_POST["category_name"]);
    }
    //

    //General Functions
    function getAllCategories()
    {
        $query = "select * from categories";
        $result = get($query);
        return $result;
    }

    function getCategory($id)
    {
        $query = "select * from categories where id=$id";
        $result = get($query);
        if(count($result) > 0)
        {
            return $result[0]; 
        }
        return false; 
    }
?>