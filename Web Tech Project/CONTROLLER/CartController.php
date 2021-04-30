<?php
// session_start();

// if(isset($_POST['Add_To_Cart']))
// {
//     if(isset($_SESSION['cart']))
//     {
//         $myitems=array_column($_SESSION['cart'],'Item_Name');
//         if(in_array($_POST['Item_Name'],$myitems))
//         {
//             echo "<script>
//                     alert('Item Already Added');
//                     window.location.href='index.php';
//                 </script>";
//         }

//         $count=count($_SESSION['cart']);
//         $_SESSION['cart'][$count]=array('Item_Name'=>$_SESSION['Item_Name'],'Price'=>$_SESSION['Price'],'Quantity'=>1);
//     }
//     else
//     {
//         $_SESSION['cart'][0]=array('Item_Name'=>$_SESSION['Item_Name'],'Price'=>$_SESSION['Price'],'Quantity'=>1);
//         echo "<script>
//                 alert('Item Added');
//                 window.location.href='index.php';
//             </script>";
//     }
// }
?>