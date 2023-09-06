<?php 
    include("./inc/connection.php");
    $name = $_POST['txtSourceName'];
    $type = $_POST['txtType'];
    if(isset($_POST['addSource'])){
        $query = "INSERT INTO source (name , type) VALUES ('$name','$type')";
        if($con->query($query)){
            header("Location:./adminDashboard.php");
        }else{
            echo "Error: " . $query . "<br>" . $con->error;
            die;
        }
    }

?>