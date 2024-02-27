<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   <style>
    
    .parent{
        background-image: linear-gradient(rgb(89, 18, 182),rgb(221, 221, 145));
    }
    .parent form{
        background-color: #1F4E48;
        border-radius: 25px;

    }
    
    .parent h3{
        color: #FFB955;
    }
   </style>
    <title>Document</title>
</head>
<body>
</body>
</html>




<?php

include_once '../shared/connection.php';

$mysql_obj = mysqli_query($conn,"select *from product");

$row=mysqli_fetch_assoc($mysql_obj);

$pid = $row['pid'];
$name = $row['pname'];
$price= $row['price'];
$details = $row['pdesc'];
$impath = $row['impath'];

echo"

<div  class='parent d-flex justify-content-center align-items-center vh-100'>
<form enctype='multipart/form-data' class='w-25 p-3' method='post' action='edit_it.php'>
    <h3>Edit PRODUCT</h3>
    <input value='$name' type='text' class='form-control mt-3' name='name' required>
    <input value='$price' type='number' class='form-control mt-3' name='price' required>
    <textarea value='$details' class='form-control mt-3' cols='80' rows='5' name='details'></textarea>
    <input  accept='.jpg' class='form-control mt-3' type='file' name='imname'>

    <input type='submit' value='Edit' class='mt-3 text-center btn btn-success'>
</form>

</div>


";
 





?>