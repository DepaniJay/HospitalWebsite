<?php    
session_start();   

if(!isset($_SESSION['username'])){
	echo "You are logged out";
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Virat Hospital</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="top">
		<div>
			contact us +91 8200017417 | Virathospital@gmail.com
		</div>
	</div>
	<div class="logo">
		<div>
			<table>
				<tr>
					<td width="600px" style="font-size:50px; font-family:forte;"> <font color="#428bca"> Virat </font><font color="#000"> Hospital</font> </td>
					<td><br><br>
						<font size="4px"> 
							<a href="Page.php">HOME</a> 
							<a href="about.php">ABOUT US</a>  
							<a href="service.php">SERVICE</a>
							<a href="doctor.php">DOCTORS</a> 
							<a href="contact.php">CONTACT US</a>
							<a href="logout.php">Logout</a>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="middle">
		<div class="heading" style="background-image: url('aimg.jpg');">
			<h1>Health Care Services</h1> 			
			<p>We Care About Your Health</p>
		</div>
	</div>

	<div class="bottom">
		<div>
			<table border="0">
				<tr>
					<td width="700px">

			<font color="black">We are Medical center</font><br><br>
			<font color="black" size="6px"> We have medical plan options for you!</font><br><br>

			To join a medical plan, call Health Care Options at 1-800-430-4263. Or you can complete a Medi-Cal Choice Form. You can find the form on the Download forms page. You can use your Medi-Cal Benefits Identification Card (BIC) for services through Regular (Fee-for-Service) Medi-Cal until you are a medical plan member.
			<ul>
			<li>Best for Health Savings Plan (HSA) Options: Kaiser Permanente.
			<li>Best Large Provider Network: Blue Cross Blue Shield.
			<li>Best for Online Care: UnitedHealthCare.
			<li>Best for Employer-Based Plans: Aetna.
			<li>Best for Telehealth Care: Cigna.
			<li>Best for HMO Plans: HCSC.
			<li>Best for Wellness Care: Molina Healthcare.
			</ul>
			<br>
		</td>
				</tr>
			
				
			</table>
		</div>
</body>
</html>