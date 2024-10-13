<?php
session_start();
require("connection.php");
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
$res=$con->query("select * from `tb_adminreg` where `email`='$email' AND `password`='$pass'");
$count=$res->num_rows;
if($count>0)
{
    $_SESSION["email"]=$email;
    header("location:dashboard.php");
}
else{
    echo "<script>
    alert('username and password are incorrect');
    window.location.href='index.php';

    
    
    </script>";
}
?>