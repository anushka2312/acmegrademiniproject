<?php

session_start();

if(isset($_SESSION['cart']))
{

    $local_cart=$_SESSION['cart'];
     $total_count=count($local_cart);
}
else{
    $total_count=0;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style>
         .mainh{
            color: antiquewhite;
            height: 100px;
            padding: 30px;
        }
        .welcome{
            font-family: cursive;
            font-style: italic ;
            padding-right: 10px;
            color: aqua;
        }
        .pparentmenu {

            background-image: linear-gradient(to bottom right, #0D091E, #5E3C58);

        }

        .parentmenu {
            display: flex;
            justify-content: start;
            gap: 30px;


        }

        .parentmenu div {
            padding: 10px;
        }

        .parentmenu a {
            color: #F7E2C9;
            text-decoration: none;
            font-family: 'Courier New', Courier, monospace;
        }

        .parentmenu a:hover {
            background-color: #F7E2C9;
            border-radius: 10px;
            padding: 10px;
            color: #0D091E;
            font-weight: bolder;

        }

        .iconc {
            background-color: #F7E2C9;
            border-radius: 5px;
            padding-left: 8px;
            padding-right: 10px;


        }
        .cart-count-parent{
            position: relative;
        }
        .cart-count{
            padding: 5px;
            color: #0D091E;
            border-radius: 50%;
            background-color: #5E3C58;
            position: absolute;
            right: -10px;
            top: -9px;
            font-weight: bolder;

        }

       
    </style>
    <title>Document</title>
</head>

<body>
    <div class="d-flex pparentmenu justify-content-between">
    <h1 class="mainh"><span class="welcome">Welcome   </span> to HOME DECOR</h1>

        <div class="parentmenu p-4">

            <div class="ml-4">
                <a href='index.php'>View Product</a>

            </div>
            <div>
                <a href='cart.php'>View cart</a>

            </div>
            <div>
                <a href="order.php">View Orders</a>

            </div>
        </div>
        <div class="d-flex justify-content-end p-4">
            <div class="cart-count-parent">
                <button class="iconc"><i class="fa fa-shopping-cart fa-2x"></i>
                </button>

                <span class="cart-count bg-info">
                    
                 <?php echo "$total_count" ?> 
                </span>
            </div>
            <div class="ms-3">

                <a href="logout.php">
                    <button class="btn btn-danger"><i class="fa fa-sign-out">Sign Out</i></button>
                </a>
            </div>
        </div>

    </div>

</body>

</html>


<?php

?>