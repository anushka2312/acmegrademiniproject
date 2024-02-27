<?php

// print_r($_POST);
// echo"<br>";
// print_r($_FILES);

$src_path = $_FILES['imname']['tmp_name'];
$imname=$_FILES['imname']['name'];
date_default_timezone_set("Asia/kolkata");

$unique=date("YmdHis").".jpg";
//echo"unique = $unique";
$dest_path = "../images/$unique";

move_uploaded_file($src_path,$dest_path);

$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];

include_once"../shared/connection.php";

$cmd = "insert into product (pname,pdesc,price,impath) values('$name','$details',$price,'$dest_path')";
//echo"<br> $cmd";
mysqli_query($conn,$cmd);

echo"<h2><a href='view.php'>Return back</a></h2>";

?>