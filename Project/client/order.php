<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
   

   <style>
    .parent{
        width: 300px;
        padding: 20px;
        background-color: #2B252B;
        display:inline-block;
        margin-left: 10px;

    }
    .parent img{
        width: 250px;
        height: 200px;
    }

    .price{
        color: #EFE0D4;

    }
    .currency{
        font-size: 12px;
    }
    .name{
        
        
        color: #FFE000;
        margin: 0;
    } 
    .marq{
        background-color: aqua;
        position: absolute;
        width: 100%;
    }
 </style>
  </head>
<body>
    
</body>
</html>


<?php
include'menu.php';
include_once '../shared/connection.php';
//echo"im working";



if(!isset($_SESSION['cart']))
{
    echo"<h3>cart is empty</h3>";
    die;
}

    $local_cart = $_SESSION['cart'];
    $pids=implode(",",$local_cart);


    $cmd = "select * from product where pid in($pids)";

    $sql_obj=mysqli_query($conn,$cmd);

    



    

while($row=mysqli_fetch_assoc($sql_obj))
{
    //print_r($row);
    $pid=$row['pid'];
    $name=$row['pname'];
    //$price=$row['price'];
    //$details=$row['pdesc'];
    $impath=$row['impath'];

    

       // $total_price+=$price;


    
    echo"
    <div class='parent mt-2'>
        <h3 class='name'>$name</h3>
        
        <img class='image' src='$impath'>
        
        
    </div>
    <div class='marq'>
    <marquee direction='right'
        behavior'alternate' >
        
       <h3><i class='fa fa-motorcycle'> Order is on the way</i></h3>
       </marquee>
        </div>
    
     ";


}



//if($total_price==0)
//{
  //  echo"No items present in cart";
//}
//else{

    // echo"
    
    
    // <h1>Total price : $total_price /- Rs</h1>
    
    // <button class='bg-info'>Place order</button>
    
    
    // ";
//}




?>