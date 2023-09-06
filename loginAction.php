<?php 

session_start();
include("./inc/connection.php");
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
$query = "SELECT * FROM operaters WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        if($row[4]=="admin"){
            $_SESSION['EMAIL'] = $email;
            header("Location:adminDashboard.php");
            echo $row['role'];
        }else{
            $_SESSION['EMAIL'] = $email;
            header("Location:operatorDashboard.php");
        }
    }
}else{
    header("Location:login.php?error=1");
}