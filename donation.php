<?php
session_start();
$e=$_SESSION["email"];
if(empty($_SESSION["email"]))
{
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="donation.css?v=<?php echo time();  ?>">

</head>
<body>
    <div class="nav" >
        <h2> PATRONIZING</h2> 
        <?php  echo $e; ?>
         <a  href="dashboard.php"><b>UPLOAD PHOTO</b></a>
         <a href="donation.php"><b>DONATION</b></a>
         <a href="service.php"><b>SERVICES</b></a>
         <a href="contact.php"><b>CONTACT</b></a>
         <a href="logout.php"><b>LOGOUT</b></a>
     </div>
     <div class ="b">
        <h1>Donations</h1>
        <h4>Add a Donation here  </h4>
     </div>

     


</div>
     <div class="login-form ">
    <h1 id="red">Pay with Net Banking </h1>
     <form action="dona.php" method="post" enctype="multipart/form-data" class="custom-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>
        <label for="mobile">Mobile no:</label>
        <input type="number" id="mobile" name="mobile" required>
        
        <label for="cardno">Card No:</label>
        <input type="number" id="cardno" name="cardno" required>
        
        <label for="cardname">Card Name:</label>
        <input type="text" id="cardname" name="cardname" required>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required>
        
        

        
        
        
        <input type="submit" value="DONATE">
    </form>

    <div class="c">
        <form>
        <button type="submit"> <a href="donaview.php">View Donation </a></button>

        </form>

    </div>
    <div class="gal">
        <h1>Gallery</h1>
        <div class="row">
            <div class="col -md -3">
                <img src="images/g1.jpg" width="320px">
            </div>
            <div class="col -md -3">
                <img src="images/g2.jpg" width="320px">
            </div>
            <div class="col -md -3">
                <img src="images/g3.jpg" width="320px">
            </div>
            <div class="col -md -3">
               <img src="images/g4.jpg" width="320px"> 
            </div>
        </div>
        <div class="row ra">
            <div class="col -md -3">
                <img src="images/b1.jpg" width="320px">
            </div>
            <div class="col -md -3">
                <img src="images/b2.jpg" width="320px">
            </div>
            <div class="col -md -3">
                <img src="images/b3.jpg" width="320px">
            </div>
            <div class="col -md -3">
               <img src="images/b4.jpg" width="320px"> 
            </div>
        </div>

        <div class="row rb">
            <div class="col -md -3">
                <img src="images/b5.jpg" width="320px">
            </div>
            <div class="col -md -3">
                <img src="images/g8.jpg" width="320px">
            </div>
            <div class="col -md -3">
                <img src="images/g5.jpg" width="320px">
            </div>
            <div class="col -md -3">
               <img src="images/g6.jpg" width="320px"> 
            </div>
        </div>

        <div class="ee">
            <div class="row e">
                <div class ="col -md -4 f">
                  <h2>  About Us</h2>
    The basic concerns of social welfare—poverty, disability and disease, the dependent young and elderly—are as old as society itself. The laws of survival once severely limited the means by which these concerns could be addressed; to share another’s burden meant to weaken one’s own standing in the fierce struggle of daily existence. As societies developed, however, with their patterns of dependence between members, there arose more systematic responses to the factors that rendered individuals, and thus society at large, vulnerable.
    
                </div>
    
                <div class="col -md -4 h">
                 <img src="images/g8.jpg">
                </div>
    
                <div class="col -md -4 aa">
                   <h1> Get In Touch</h1>
    The social service sector demands managerial staff who embody management knowledge in a host of areas.
    
    
    
                </div>
            </div>
    
            
         </div>
         
    

    </div>
    
</body>
</html>