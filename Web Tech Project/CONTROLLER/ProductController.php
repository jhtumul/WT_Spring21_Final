<?php
    require_once "MODEL/db_config.php";

    $pname="";
    $err_pname="";
    $pcategory_id="";
    $err_pcategory_id="";
    $pprice;
    $err_pprice;
    $pquantity;
    $err_pquantity;
    $pdescription="";
    $err_pdescription="";
    $pimage="";
    $err_pimage="";
    $has_error=false;

    //Insert Product
    function insertProduct($name,$category_id,$price,$qty,$desc,$image)
    {
        $query="insert into products VALUES (null,'$name',$category_id,$price,$qty,'$desc','$image')";
        execute($query);
        header("Location: allproducts.php");
    }

    //Edit Product
    function editProduct($id,$name)
    {
        $query="update categories set name='$name' where id=$id";
        execute($query);
        header("Location: allcategories.php");
    }

    //Delete Product
    function deleteProduct($id)
    {
        $query = "delete from products where id=$id";
        execute($query);
    }
    if(isset($_POST["delete_product"]))
    {
        deleteProduct($_POST['id']);
    }
    //

    function getAllProducts()
    {
        // $query = "select * from products";
        $query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id";
        $result = get($query);
        return $result;
    }

    function getProduct($id)
    {
        //$query = "select * from products where id=$id";
        $query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id where p.id=$id";
        $result = get($query);
        if(count($result) > 0)
        {
            return $result[0]; 
        }
        return false; 
    }

    function validatePname($p_name)
    {
        if(strlen($p_name) < 3)
        {
            return false;
        }
        // elseif(strpos($p_name,' '))
        // {
        //     return false;
        // }
        else
        {
            return true;
        }
    }

    if(isset($_POST["add_product"]) || isset($_POST["edit_product"]))
    {
        if(empty($_POST["pname"]))
        {
            $err_pname="**Name Required**";
            //echo $err_pname;
            $has_error=true;
        }
        elseif(!validatePname($_POST["pname"]))
        {
            $err_pname="**Product name must be atleast 3 char long and contain no white spaces**";
            $has_error=true;
        }
        else
        {
            $pname = $_POST["pname"];
        }

        if(!isset($_POST["pcategory_id"]))
        {
            $err_pcategory_id="**Please Select Category**";
            $has_error=true;
        }
        else
        {
            $pcategory_id=htmlspecialchars($_POST["pcategory_id"]);
        }

        if(empty($_POST["pprice"]))
        {
            $err_pprice="**Enter price**";
            $has_error=true;
        }
        elseif(!is_numeric($_POST["pprice"]))
        {
            $err_pprice="**Only insert numeric value**";
            $has_error=true;
        }
        else
        {
            $pprice=$_POST["pprice"];
        }

        if(empty($_POST["pquantity"]))
        {
            $err_pquantity="**Enter quantity**";
            $has_error=true;
        }
        elseif(!is_numeric($_POST["pquantity"]))
        {
            $err_pquantity="**Only insert numeric value**";
            $has_error=true;
        }
        else
        {
            $pquantity=$_POST["pquantity"];
        }

        if(empty($_POST["pdescription"]))
		 {
			 $err_pdescription="**description Required**";
             $has_error=true;
		 }
		 else
		 {
			 $pdescription=htmlspecialchars($_POST["pdescription"]);
		 
         }

         if(!isset($_POST["pimage"]))
         {
            $err_pimage="**insert product image**";
            $has_error=true;
         }
         else
         {
            $pimage=$_POST["pimage"];
         }

        if(!$has_error)
        {
            #session cookie & insert into database...
            if(isset($_POST['add_product']))
            {
                insertProduct($pname,$pcategory_id,$pprice,$pquantity,$pdescription,"img");
            }
            // if(isset($_POST['edit_product']))
            // {
            //     editProduct();
            // }
        }
    }//main if block ends

/////////////////////////////////////////////////////////////
    //Search Controller
    if(isset($_POST['search']))
    {
        if(!empty($_POST['item']))
        {
            $item = $_POST['item'];
            $query = "SELECT * FROM products where name like '%$item%'";
            $results = get($query);
        }
    }

    function searchProduct($key)
    {
        $query = "select name,id from products where name like '%$key%'";
        $result = get($query);
        return $result;
    }

/////////////////////////////////////////////////////////////

?>