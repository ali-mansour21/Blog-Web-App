<?php 
include "./inc/security.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        <h1 class="text-center">Dashboard</h1>
        <ul class="list-group">
            <li class="list-group-item text-center"><a class="list-group-link" href="addArticle.php">add Article</a></li>
            <li class="list-group-item text-center"><a class="list-group-link" href="#">View Article</a></li>
        </ul>
    </div>
</body>
</html>