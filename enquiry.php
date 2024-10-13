<?php
require("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$sub=$_REQUEST["subject"];
$message=$_REQUEST["message"];
$res=$con->query("insert into `tb_enquiry`(`name`,`email`,`sub`,`message`) values('$name','$email','$sub','$message')");
$count=mysqli_affected_rows($con);
if($count>0)
{
    header("location:index.php");
}
else{
    header("location:enquiry.php");
}
?>