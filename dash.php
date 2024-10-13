<?php
require("connection.php");
$name=$_REQUEST["name"];
$img=$_FILES["file"]["name"];
$description=$_REQUEST["description"];
$address=$_REQUEST["address"];
$res=$con->query("insert into `tb_upload`(`name`,`img`,`descrip`,`address`) values('$name','$img','$description','$address')");
$count=mysqli_affected_rows($con);
if($count>0)
{
//move_uploaded_file($_FILES["file"]["tmp_name"],"photo/".$img);
    move_uploaded_file($_FILES["file"]["tmp_name"],"admin/photo/".$img);
    header("location:dashboard.php");
}
else{
    header("location:dash.php");
}
?>