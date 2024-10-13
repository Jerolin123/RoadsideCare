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
    <link rel="stylesheet" href="contact.css?v=<?php echo time();  ?>">

</head>
<body>
    <div class="nav" >
        <h2> PATRONIZING</h2> 
        <?php echo $e;?>
         <a  href="index.php"><b>HOME</b></a>
         <a href="about.html"><b>ABOUT</b></a>
         <a href="login.php"><b>LOGIN</b></a>
         <a href="contact.php"><b>CONTACT</b></a>
     </div>
     <div class ="b">
        <h1>contact us</h1>
     </div>
     <div class="c">
        <br>
        <h1>Enquiry</h1>
        <div class="row ca">
            <div class="col -md -6 cb">
                <form action="enquiry.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">Send</button>
                    </div>
                </form>

            </div>
            <div class="col -md -6">
                <h1 id="ha">Info</h1>
                The social service sector demands managerial staff who embody management knowledge in a host of areas, including human resources, finance, fundraising, marketing, organisational management, strategic management, social policy and administration, 
                research and evaluation, and the use of information technology.
                <img src="images/b2.jpg">

            </div>
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
     

     
    
</body>
</html>