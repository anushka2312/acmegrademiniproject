<?php

$pid=$_GET['pid'];
include_once"../shared/connection.php";
//echo"$pid";

$cmd="delete from product where pid='$pid'";

$sql_status=mysqli_query($conn,$cmd);

header('location:view.php');

if($sql_status)
{
    header('localhost:view.php');
}
else
{
    echo"Something went wrong";
}


?>