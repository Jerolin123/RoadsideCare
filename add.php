<?php
require("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$no=$_REQUEST["mobile"];
$password=$_REQUEST["password"];
$res=$con->query("insert into `tb_register`(`name`,`email`,`mobno`,`password`) values('$name','$email','$no','$password')");
$count=mysqli_affected_rows($con);
if($count>0)
{
    header("location:login.php");
}
else{
    header("location:signup.php");
}

?>