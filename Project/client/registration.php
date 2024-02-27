<?php
include_once '../shared/connection.php';
include_once '../shared/carousel.html';

$username=$_POST['username'];
$password=$_POST['password1'];
$mobile=$_POST['Mobile'];

$sql_obj=mysqli_query($conn,"select * from client where username='$username'");

$total_rows=mysqli_num_rows($sql_obj);
if($total_rows>0)
{
    echo"<h1> username already exist</h1>";
    echo"<a href='registration.html'>Try again </a>";
    die;
}




$cmd = "insert into project.client(username, password,mobile) values('$username','$password','$mobile')";
$sql_request=mysqli_query($conn,$cmd);
if($sql_request)
{
    echo"<h1>Registration successfull</h1>";
    echo"<h1><a href='login.html'>Login here</a></h1>";

}
else
{
    echo"Registration failed";
}


?>