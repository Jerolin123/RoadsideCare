<?php
require("connection.php");
$id=$_REQUEST["a"];
$res=$con->query("select * from `tb_upload` where `id`='$id'");
$count=$res->num_rows;
if($count>0)

    $row=$res->fetch_assoc();
$product=$row['img'];
unlink("admin/photo/$product");
$res=$con->query("delete from `tb_upload` where `id`='$id'");
$count=mysqli_affected_rows($con);
if($count>0)
{
    header("location:dashview.php");
}
else{
    header("location:delete.php");
}

?>