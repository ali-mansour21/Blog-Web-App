<?php
session_start();
include "connection.php";
if(!isset($_SESSION['EMAIL'])){
    header("location:login.php?error=403");
}else{
    echo "Welcome back! ";
    echo "<a href=logout.php>logout</a>";
}