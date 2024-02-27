<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
   

   <style>
    .mainh{
        color: antiquewhite;
            height: 100px;
            padding: 30px;
    }
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
    .details{
        color: #EFE0D4;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    
 </style>
  </head>
<body>


</body>
</html>



<?php


include 'menu.php';
include '../shared/carousel.html';
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
    
    <div class='parent mt-2'>
        <h3 class='name'>$name</h3>
        <h2 class='price'>$price <span class='currency'>Rs</span></h2>
        <img class='image' src='$impath'>
        <p class='details'>$details</p>
        <div class='text-end'>
            <a href='addcart.php?pid=$pid'>
            <button class='btn p-1 btn-info'><i class='fa fa-shopping-cart'></i></button>
            </a>
        </div>
    </div>
    
     ";


}

?>