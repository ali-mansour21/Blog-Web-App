<?php
include "./inc/security.php";
$title = $_POST['txtName'];
$date = $_POST['txtDate'];
$source = $_POST['txtSource'];
$author = $_POST['txtAuthor'];
$article = $_POST['txtArticle'];
$category = $_POST['txtCategory'];
$query = "UPDATE articles SET title = '$title',date = '$date',source = '$source',author = '$author',article = '$article',category = '$category'";
mysqli_query($con,$query);
header("location:TestView.php");