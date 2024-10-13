<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="viewspon.css?v=<?php echo time();   ?>">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
require("connection.php");
$res=$con->query("select * from tb_sponser");
$count=$res->num_rows;
$product="photo/";
$i=0;
?>


</div>
<div class="container mt-5">
        <h2 class="mb-4">view Sponsor </h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">SNO</th>
                    <th scope="col">Human id</th>
                    <th scope="col">Sponsor id</th>
                    <th scope="col">Phone no</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sponsor type</th>
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
                    <td><?php echo $row['human_id']; ?></td>
                    <td><?php echo $row['sponsor_id'];  ?></td>
                    <td><?php echo $row['phno'];  ?></td>
                    <td><?php echo $row['Email'];  ?></td>
                    <td><?php echo $row['sponsor_type'];  ?></td>
                 
                 
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

</body>
</html>