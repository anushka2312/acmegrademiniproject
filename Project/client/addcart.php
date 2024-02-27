<?php

//include_once "../shared.connection.php";
$pid=$_GET['pid'];

//echo"product id= $pid";

session_start();


if(!isset($_SESSION['cart']))
{

    $_SESSION['cart']=array();
}
$local_cart=$_SESSION['cart'];
$index=in_array($pid,$local_cart);
//echo"index  = $index";

if($index)
{
    echo"<h3>Product already available</h3>";
}
else{



    array_push($local_cart,$pid);
    $_SESSION['cart']=$local_cart;
    header("location:index.php");
    
    //print_r($local_cart);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h3{
            text-transform: uppercase;
	background: linear-gradient(to right, #30CFD0 0%, #330867 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 100px;
    font-weight: bolder;
    text-align: center;

        }
        </style>
</head>
<body>
    
</body>
</html>