<?php

session_start();

include 'connection.php';

if(isset($_GET['token'])){
    $token = $_GET['token'];


    $updatequery = "UPDATE `shamit` SET status='active' WHERE token='$token' ";

    $query = mysqli_query($con, $updatequery);

    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account updated successfully";
            header('location:login.php');
        }else{
            $_SESSION['msg'] = "You are logged out.";
            header('location:login.php');
        }
    }else{
        $_SESSION['msg'] = "Account not updated ";
            header('location:register.php');
    }

}









?>