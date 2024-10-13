<?php
require("connection.php");
$title=$_REQUEST['title'];
$description=$_REQUEST['description'];
$res=$con->query("insert into `tb_suggestion`(`title`,`description`) values('$title','$description')");
$count=mysqli_affected_rows($con);
if($count>0)
{
    header("location:addsugestion.php");
}
else{
    header("location:addsug.php");
}

?>