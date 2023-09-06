<?php 
    include("./inc/connection.php");
    $name = $_POST['txtCategoryName'];
    if(isset($_POST['addCategory'])){
        $query = "INSERT INTO categories(name) VALUES ('$name')";
        if($con->query($query)){
            header("Location:./adminDashboard.php");
        }else {
            echo "Error: " . $query . "<br>" . $con->error;
            die;
        }
    }
?>