<?php 
    include("./inc/connection.php");
    $fullName = $_POST['txtFullName'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    if(isset($_POST['addOperator'])){
        $query = "INSERT INTO operaters (full_name,email,password) VALUES('$fullName','$email','$password')";
        if($con->query($query)){
            header("Location:./adminDashboard.php");
        }else{
            echo "Error: " . $query . "<br>" . $con->error;
            die;
        }
    }
?>