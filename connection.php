<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "test";

$con = mysqli_connect($server,$username,$password,$db);
include('smtp/PHPMailerAutoload.php');
if($con){
    ?>
    <script>
        alert("Connection Successful");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("No Connection ");
    </script>
    <?php
}


function smtp_mailer($to,$subject,$body){
	$mail = new PHPMailer(); 
	// $mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "jdcoder007@gmail.com";
	$mail->Password = "jdcodersecondary@007";
	$mail->SetFrom("jdcoder007@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$body;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
?>