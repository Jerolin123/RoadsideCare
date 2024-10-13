<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Suggestion</title>
    <!-- Bootstrap CSS CDN -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-custom {
            background-color: #3C8DBC;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Add Suggestion</h2>
        <form action="addsug.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titleField">Title</label>
                <input type="text" class="form-control" id="titleField" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="descriptionField">Description</label>
                <textarea class="form-control" id="descriptionField" name="description" rows="4" placeholder="Enter description"></textarea>
            </div>
            <button type="submit" class="btn btn-custom">Save</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
