<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Sponsor</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="addspon.css">
    
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#">Admin</a>
    </nav>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="section-heading text-center">Add Sponsor</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="addsp.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="humanId">Human ID</label>
                                <input type="text" class="form-control" id="humanId" name="humanid" placeholder="Enter Human ID">
                            </div>
                            <div class="form-group">
                                <label for="sponsorId">Sponsor ID</label>
                                <input type="text" class="form-control" id="sponsorId" name="sponsorid" placeholder="Enter Sponsor ID">
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="phoneNumber" name="phoneno" placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                            </div>
                            <div class="form-group">
                                <label for="sponsorType">Sponsor Type</label>
                                <select class="form-control" id="sponsorType" name="food">
                                    <option>Food</option>
                                    <option>Money</option>
                                    <option>Things</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-save btn-block">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
