<?php
include("inc/security.php");
$title = $_POST['txtName'];
$date = $_POST['txtDate'];
$source = $_POST['txtSource'];
$author = $_POST['txtAuthor'];
$article = $_POST['txtArticle'];
$category = $_POST['txtCategory'];
$operator = $_SESSION['EMAIL'];
// check if submitted
if(isset($_POST['submit'])){
    // insert values
$query = "INSERT INTO articles (title, date, source, author, article, category,operator) 
          VALUES ('$title', '$date', '$source', '$author', '$article', '$category','$operator')";
if ($con->query($query)) {
        header("Location:operatorDashboard.php");
} else {
    echo "Error: " . $query . "<br>" . $con->error;
}
}
?>