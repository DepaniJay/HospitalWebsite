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
            <h1>Sign Up</h1>
            <form action="" method="POST">
                <input class="input" type="text" name="name" placeholder="Enter Your Name">
                <input class="input" type="number" name="number" placeholder="Enter Your Mobile No">
                <input class="input" type="email" name="email" placeholder="Enter Your Email">
                <input class="input" type="password" name="password" placeholder="Enter Your Password">
                <input class="input" type="password" name="cpassword" placeholder="Re-enter Your Password">
                <input class="input" type="submit" name="submit" value="Create Account" id="submit">
            </form>
            <p>If you already have Account?<a href="login.php">Sign In</a></p>
        </div>
    </div>
</body>
</html>

<?php
include "connection.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    $token = bin2hex(random_bytes(15));

    $emailquery = " SELECT * FROM `shamit` WHERE email='$email' ";

    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);
    if($emailcount>0){
        echo "Email already exists";
    }else{
        if($password === $cpassword){

            $insertquery = "INSERT INTO `shamit`(`name`, `mobile`, `email`, `password`, `cpassword`,`token`,`status`) VALUES ('$name','$mobile','$email','$password','$cpassword','$token','inactive')";

            $iquery = mysqli_query($con,$insertquery);

            if($iquery){
                

                
                $subject = "Email Activation";
                $body = "Hi, $name. Click here too activate your account http://localhost/shamit/activate.php?token=$token";
                $sender_email = "From: jdcoder007@gmail.com";
                $smtp_mailer=smtp_mailer($email,$subject,$body);
                if($smtp_mailer=='Sent'){
                    $_SESSION['msg'] = "check you mail to activate your account $email";
                    header('location:login.php');
                }else{
                    echo "Email sending failed...";
                }





            }else{
                ?>
                <script>
                    alert("Data not inserted");
                </script>
                <?php
            }

        }else{
            ?>
                <script>
                    alert("Password are not matching");
                </script>
                <?php
        }
    }
}

?>