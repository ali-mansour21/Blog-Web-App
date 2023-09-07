<?php
session_start();
include "./backend/inc/connection.php";
$id = $_GET['id'];
$query = "SELECT * FROM articles WHERE id ='$id'";
$postResult = mysqli_query($con, $query);
if (mysqli_num_rows($postResult) > 0) {
    $post = mysqli_fetch_assoc($postResult);
}
$categoryQuery = "SELECT * FROM categories";
$categoryResult = mysqli_query($con, $categoryQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']; ?></title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">News</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <?php
                    if (mysqli_num_rows($categoryResult)) {
                        while ($row = mysqli_fetch_row($categoryResult)) {
                            echo "<li class=nav-item>
            <a class=nav-link href=categoryDetails.php?name=" . $row[1] . ">" . $row[1] . "</a>
          </li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <img src="./backend/article_images/<?php echo $post['image']; ?>" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $post['title']; ?></h1>
                        <p class="card-text"><?php echo $post['article']; ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                            Posted on <?php echo date('F j, Y', strtotime($post['date'])); ?>
                            by <?php echo $post['author']; ?>
                            | Source: <?php echo $post['source']; ?>
                            | Category: <?php echo $post['category']; ?>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div </body>

</html>