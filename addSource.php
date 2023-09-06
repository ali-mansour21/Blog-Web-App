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
    <h1 class="text-center">Add new Source</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form method="post" action="addOperatorAction.php">
          <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" name="txtSourceName" class="form-control" id="name" placeholder="Enter the source name">
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="txtType" id="type" placeholder="Enter the source type (web, tv, radio, wallpaper)">
          </div>
          <div class="d-grid gap-2">
            <button type="submit" name="addSource" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>