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
            <h1>Recover Your Account</h1>
            <p>Please fill email id properly</p>
            <form action="" method="POST">
                <input class="input" type="email" name="email" placeholder="Enter Your Email">
                <input class="input" type="submit" name="submit" value="Send Mail" id="submit">
            </form>
            <p>If you already have Account?<a href="login.php">Sign In</a></p>
        </div>
    </div>
</body>
</html>

<?php
include "connection.php";

if(isset($_POST['submit'])){
    $email = $_POST['email'];


    $emailquery = " SELECT * FROM `shamit` WHERE email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

        if($emailcount){
                
            $userdata = mysqli_fetch_array($query);

            $username = $userdata['name'];
            $token = $userdata['token'];

                $subject = "Password Reset";
                $body = "Hi, $username. Click here too reset your password http://localhost/shamit/resetpassword.php?token=$token";
                $sender_email = "From: jdcoder007@gmail.com";
                $smtp_mailer=smtp_mailer($email,$subject,$body);
                if($smtp_mailer=='Sent'){
                    $_SESSION['msg'] = "check you mail to reset your password $email";
                    header('location:login.php');
                }else{
                    echo "Email sending failed...";
                }
        }else{
            echo "No email found";
        }
}


?>