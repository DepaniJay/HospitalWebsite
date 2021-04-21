<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <h1>Update Password</h1>
            <p>Enter password properly</p>
            <p><?php 
            if(isset($_SESSION['passmsg'])){
                echo $_SESSION['passmsg'];
            }else{
                echo $_SESSION['passmsg']="";
            }
            ?></p>
            <form action="" method="POST">
                <input type="password" name="password" placeholder="New Password">
                <input type="password" name="cpassword" placeholder="Confirm Password">
                <input type="submit" name="submit" value="Update Password" id="submit">
            </form>
            <p>If you already have Account?<a href="login.php">Sign In</a></p>
        </div>
    </div>
</body>
</html>

<?php
include "connection.php";

if(isset($_POST['submit'])){

    if(isset($_GET['token'])){
        $token = $_GET['token'];

    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


        if($password === $cpassword){

            $updatequery = "update `shamit` set password='$password' where token='$token' ";
            $iquery = mysqli_query($con,$updatequery);

            if($iquery){
                
                $_SESSION['msg'] ="Your password has been updated";
                header('location:login.php');

            }else{
                $_SESSION['passmsg'] = "Your password is not updated";
                header('location:resetpassword.php');
            }

        }else{
            $_SESSION['passmsg'] = "Password are not matching";
        }
    }else{
        echo "No token found";
    }
}

?>