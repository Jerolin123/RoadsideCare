<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="users.css?v=<?php echo time();   ?>">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="view">
<h1>View users</h1>
</div>
    
<?php  
require("connection.php");
$res=$con->query("select * from `tb_register`");
$count=$res->num_rows;
$i=0;




?>
    
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>  s.no     </th>
        <th>user id</th>
        <th>  Name     </th>
        <th>Email </th>
        <th>Mobile No</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
        <?php
        if($count>0)
        {
            while($row=$res->fetch_assoc())
            {
                $i=$i+1;
         
        ?>
      <tr>
        <td><?php echo  $i;?></td>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name'] ;?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobno']; ?></td>
        <td><?php echo $row['password']; ?></td>
      </tr>
      
      <!-- Add more rows as needed -->
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