<?php

include_once"../shared/connection.php";

$mysql_obj = mysqli_query($conn,"select *from product");

$row=mysqli_fetch_assoc($mysql_obj);

$pid = $row['pid'];

$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];



$cmd1 = "update product set pname='$name', price='$price', pdesc='$details' where pid='$pid'";
echo"<br> $cmd1";
mysqli_query($conn,$cmd1);
header("location:view.php");
//echo"<h2><a href='upload.html'>Return back</a></h2>";


?>