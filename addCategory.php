<?php 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Operator</title>
              <!-- Latest compiled and minified CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Latest compiled JavaScript -->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    ></script>
</head>
<body>
     <div class="container">
    <h1 class="text-center">Add new Category</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form method="post" action="addCategoryAction.php">
          <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="txtCategoryName" class="form-control" id="name" placeholder="Enter the category name">
          </div>
          <div class="d-grid gap-2">
            <button type="submit" name="addCategory" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>