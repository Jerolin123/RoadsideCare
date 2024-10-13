<?php
session_start();
$em=$_SESSION["email"];
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
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="dashboard.css?v=<?php  echo time(); ?>">
</head>
<body>
<div class="row">
            <div class="col-12">
              
                <nav class="navbar navbar-expand-lg navbar-custom">
                  
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            
                            <li class="nav-item">
                                <?php  echo $em  ?>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>



<div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h3 class="section-heading">Dashboard</h3>
                <nav class="navbar navbar-expand-lg navbar-custom">
                    <a class="navbar-brand" href="#">Dashboard</a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="users.php">View Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="people.php">View People Information</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-12">
                <h3 class="section-heading">Donation</h3>
                <nav class="navbar navbar-expand-lg navbar-custom">
                    <a class="navbar-brand" href="#">Donation</a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">View Money Donation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">View Food Donation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">View Things Donation</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-12">
                <h3 class="section-heading">Sponsor</h3>
                <nav class="navbar navbar-expand-lg navbar-custom">
                    <a class="navbar-brand" href="#">Sponsor</a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="addspon.php">Add Sponsors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="viewspon.php">View Sponsors</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-12">
                <h3 class="section-heading">Suggestions</h3>
                <nav class="navbar navbar-expand-lg navbar-custom">
                    <a class="navbar-brand" href="#">Suggestions</a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="addsugestion.php">Add Suggestions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="viewsug.php">View Suggestions</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-12">
                <h3 class="section-heading">Enquiries</h3>
                <nav class="navbar navbar-expand-lg navbar-custom">
                    <a class="navbar-brand" href="#">Enquiries</a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="viewenq.php">View Enquiries</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</body>
</html>