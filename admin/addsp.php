<?php
require("connection.php");
$human=$_REQUEST['humanid'];
$sponser=$_REQUEST['sponsorid'];
$phno=$_REQUEST['phoneno'];
$email=$_REQUEST['email'];
$sponser_type=$_REQUEST['food'];
$res=$con->query("insert into `tb_sponser`(`human_id`,`sponsor_id`,`phno`,`Email`,`sponsor_type`) values('$human','$sponser','$phno','$email','$sponser_type')");
$count=mysqli_affected_rows($con);
if($count>0)
{
    header("location:addspon.php");
}
else{
    header("location:addsp.php");
}

?>