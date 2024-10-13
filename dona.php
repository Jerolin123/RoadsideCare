<?php  
require("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$mobileno=$_REQUEST["mobile"];
$cardno=$_REQUEST["cardno"];
$cardname=$_REQUEST["cardname"];
$amount=$_REQUEST["amount"];
$res=$con->query("insert into `tb_dona` (`name`,`email`,`mobno`,`cardno`,`cardname`,`Amount`) values('$name','$email','$mobileno','$cardno','$cardname','$amount')");
$count=mysqli_affected_rows($con);
if($count>0)
{
  //  header("location:donation.php");
echo "<script type='text/javascript'>
alert('you have donated successfully');
window.location.href='donation.php';

</script>";


}
else{
    header("location:dona.php");
}


?>