<?php
include_once '../shared/connection.php';
include_once '../shared/carousel.html';


$typeofuser = $_POST['client'];
// $typeofuser1 = $_POST['vendor'];
$username=$_POST['username'];
$password=$_POST['password1'];
$mobile=$_POST['Mobile'];

$sql_obj=mysqli_query($conn,"select * from admin where username='$username'");

$total_rows=mysqli_num_rows($sql_obj);
if($total_rows>0)
{
    echo"<h1> username already exist</h1>";
    echo"<a href='index.html'>Try again </a>";
    die;
}



if(isset($_POST['$typeofuser']))
{
$cmd = "insert into project.admin(usertype, username, password,mobile) values('$typeofuser','$username','$password','$mobile')";

}
else
{
    $cmd = "insert into project.admin(usertype, username, password,mobile) values('$typeofuser1','$username','$password','$mobile')";
    
 
}

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