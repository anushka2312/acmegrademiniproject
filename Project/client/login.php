<?php

session_start();


$username=$_POST['username'];
$password=$_POST['password'];

include_once '../shared/connection.php';

$cmd="select * from client where username='$username' and password='$password'";

$sql_obj =mysqli_query($conn, $cmd);

$total_rows=mysqli_num_rows($sql_obj);


if($total_rows==0)
{
    echo"<h1>invalid credentials </h1>
    <a href='login.html'>Try again</a>";
    $_SESSION['login_status']=false;
    die;
}
else
{
    echo"<h1>Login successful</h1>";
    $_SESSION['login_status']=true;
    header('location:index.php');
}

?>