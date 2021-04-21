<?php
// session_start();
ob_start();

// include('config.php');
include "connection.php";

// $login_button = '';
// $g_email = '';

// if(isset($_GET["code"]))
// {

//  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


//  if(!isset($token['error']))
//  {
 
//   $google_client->setAccessToken($token['access_token']);

 
//   $_SESSION['access_token'] = $token['access_token'];


//   $google_service = new Google_Service_Oauth2($google_client);

 
//   $data = $google_service->userinfo->get();

 
//   if(!empty($data['given_name']))
//   {
//    $_SESSION['user_first_name'] = $data['given_name'];
//   }

//   if(!empty($data['family_name']))
//   {
//    $_SESSION['user_last_name'] = $data['family_name'];
//   }

//   if(!empty($data['email']))
//   {
//    $_SESSION['user_email_address'] = $data['email'];
//    $g_email = $_SESSION['user_email_address'];
//   }

//   if(!empty($data['gender']))
//   {
//    $_SESSION['user_gender'] = $data['gender'];
//   }

//   if(!empty($data['picture']))
//   {
//    $_SESSION['user_image'] = $data['picture'];
//   }
//  }
// }

// if(isset($_SESSION['user_email_address'])){
//   $g_emailsearch = "SELECT * FROM `shamit` WHERE email='$g_email' AND status='active' ";

//   $g_query = mysqli_query($con,$g_emailsearch);

//   $g_emailcount = mysqli_num_rows($g_query);

//   if(!$g_emailcount){
//     header('location:logout.php');
//   }
// }


// if(!isset($_SESSION['access_token']))
// {
//   $login_button = '<div style="
//   margin: 10px 0px;
//   text-align:center;
//   background-color:red;
//   padding: 7px;
//   width: 500px;
//   font-size: 20px;
//   border-radius: 7px;
//   border: 1px solid gray;">	
//   <i style="filter: invert(1);" class="fa fa-google"></i><a style="font-weight: 100;text-decoration: none;padding:0px 10px;color:white;font-family:Roboto;" href="'.$google_client->createAuthUrl().'">Login With Google</a></div>';
// }
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login to our website</title>
  <link rel="stylesheet" href="login.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
</head>
<body>
  <div class="container">
    <div class="main">
      <h1>Sign In</h1>
      <form action="" method="POST">
        <div>
          <p><?php  
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
          }else{
            echo $_SESSION['msg'] = "You are logged Out.Please login again.";
          }   
          ?></p>
        </div>
          <?php
          // if($login_button == '' and $g_emailcount)
          // {
          //     $_SESSION['username'] = $_SESSION['user_first_name'];
          //     header('location:Home.php');
          // }
          // else
          // {
          //   echo $login_button;
          // }
          ?>
        <p>-------------------------OR-----------------------</p>
        <input class="input" type="email" name="email" value="<?php  if(isset($_COOKIE['emailcookie'])){echo $_COOKIE['emailcookie'];}   ?>" placeholder="Enter Your Email">
        <input class="input" type="password" name="password" value="<?php  if(isset($_COOKIE['passwordcookie'])){echo $_COOKIE['passwordcookie'];}   ?>" placeholder="Enter Your password">
        <div>
        <input  style="width:25px;" type="checkbox" name="rememberme" >Remember Me
        </div>
        <input class="input" type="submit" name="submit" id="submit" value="Sign In">
      </form>
      <p>Forgot your Password?<a href="recoveremail.php">Click Here</a></p>
      <p> If you dont't have account?<a href="register.php">Sign Up</a></p>
    </div>
  </div>
</body>
</html>

<?php


if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $emailsearch = "SELECT * FROM `shamit` WHERE email='$email' AND status='active' ";

  $query = mysqli_query($con,$emailsearch);

  $emailcount = mysqli_num_rows($query);

  if($emailcount){

    $emailpass = mysqli_fetch_assoc($query);
    $dbpass = $emailpass['password'];
    $_SESSION['username'] = $emailpass['name'];


    if($password === $dbpass){

      if(isset($_POST['rememberme'])){

        setcookie('emailcookie',$email,time()+86400);
        setcookie('passwordcookie',$password,time()+86400);


        ?>
      <script>
        alert("Login Successful");
        location.replace("Home.php");
      </script>
      <?php
      }else{
        ?>
      <script>
        alert("Login Successful");
        location.replace("Home.php");
      </script>
      <?php
      }

    }else{
      ?>
      <script>
        alert("Password Incorrect");
      </script>
      <?php
    }


  }else{
    ?>
      <script>
        alert("Invalid Email");
      </script>
      <?php
  }

}


?>