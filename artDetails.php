<?php 

include "./inc/security.php";
$id = $_GET['ID'];
$query = "SELECT * FROM articles WHERE id ='$id'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)){
    echo"<h2>".$row['title']."</h2>";
}