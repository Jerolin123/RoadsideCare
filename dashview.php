<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="dashview.css?v=<?php echo time();  ?>">
.
</head>
<body>
<?php
require("connection.php");
$res=$con->query("select * from tb_upload");
$count=$res->num_rows;
$product="admin/photo/";
$i=0;
?>




    <div class="nav" >
        <h2> PATRONIZING</h2> 
         <a  href="dashboard.php"><b>UPLOAD PHOTO</b></a>
         <a href="donation.php"><b>DONATION</b></a>
         <a href="service.php"><b>SERVICES</b></a>
         <a href="contact.html"><b>CONTACT</b></a>
         <a href="logout.php"><b>LOGOUT</b></a>
     </div>
     <div class ="b">
        <h1>photo</h1>
        <h4>Here You can upload poor people photos  </h4>
     </div>

     <div class="c">
        <form>
        <button type="submit"> <a href="dashview.php">view upload details </a></button>

        </form>


</div>
<div class="container mt-5">
        <h2 class="mb-4">photos </h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">SNO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Description</th>
                    <th scope="col">File</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <?php
             if($count>0)
             {
            while($row=$res->fetch_assoc())
            {
                $i=$i+1;
                ?>
        
            <tbody>
                <!-- Example row -->
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address'];  ?></td>
                    <td><?php echo $row['descrip'];  ?></td>
                    <td><img src="<?php echo $product.$row['img']     ; ?>"    height="100" width="150"></td>
                    <td> <button type="submit"> <a  href="delete.php?a=<?php echo $row['id']  ?>" onclick = "return confirm('sure want to delete');" > Delete </a> </button></td>
                    
                </tr>
                <!-- Repeat <tr> for each order -->
            </tbody>
            
<?php
            }
        }
        
        ?>
        </table>
    </div>



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