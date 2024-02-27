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
        background-color: bisque;
        display:inline-block;
        margin-left: 30px;

    }
    .parent img{
        width: 250px;
        height: 200px;
    }

    .price{
        color: palevioletred;

    }
    .currency{
        font-size: 12px;
    }
    .name{
        background-color: yellow;
        color: red;
        margin: 0;
    }
    
 </style>
  </head>
<body>
    
</body>
</html>



<?php


include 'menu.php';
include_once "../shared/connection.php";

$mysqli_obj=mysqli_query($conn,"select * from product");

//$total_rows=mysqli_num_rows($mysqli_obj);

while($row=mysqli_fetch_assoc($mysqli_obj))
{
    // print_r($row);
    $pid=$row['pid'];
    $name=$row['pname'];
    $price=$row['price'];
    $details=$row['pdesc'];
    $impath=$row['impath'];
    
    echo"
    
    <div class='parent mt-3'>
    <h3 class='name'>$name</h3>
    <h2 class='price'>$price <span class='currency'>Rs</span></h2>
    <img class='image' src='$impath'>
    <p class='details'>$details</p>
    <div class='text-end'>
    <a href='edit_product.php?pid=$pid'>
    <button class='btn p-1 btn-info'><i class='fa fa-edit'></i></button>
    </a>
    <a href='delete_product.php?pid=$pid'>
    <button class='btn p-1 btn-danger'><i class='fa fa-trash'></i> </button>
    </a>
    </div>
    </div>
    
     ";


}

?>