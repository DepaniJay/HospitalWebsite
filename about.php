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
					<td width="600px" style="font-size:50px;font-family:forte;"> <font color="#428bca"> Virat  </font><font color="#000"> Hospital</font> </td><td>><br><br>
					<font size="4px">
						
							<a href="page.php">HOME</a> 
							<a href="service.php">SERVICE</a>
							<a href="doctor.php">DOCTORS</a> 
							<a href="about.php">ABOUT US</a>  
							<a href="contact.php">CONTACT US</a>
							<a href="logout.php">Logout</a>
					</font>
				</td>
			</tr>
		</table>
	</div>
</div>


<div class="bottom">
	<div>
		<table border="0">
			<tr>
				<td width="700px">
					<font color="#000">Welcome to <mark>Virat Hospital</mark></font><br><br>
					<font color="black" size="6px"> Best medical and health treatment provides to our patients</font></br><br>
					We have many different treatment available for our patients and all are given by our best doctors only<br><br>
					<br>
					</td>

							<td style="padding-left: 20px;"> <img src="" width="400px"></td>
			</tr>
		</table>
	</div>
</div>
<div class="bottom">
	<div>
		<table border="0">
			<tr>
				<td width="700px">
					<font color="black">Address</font><br><br>
					<font color="black" size="6px">Virat Hospital and research center</font><br><br>

					a-112,rajbhavan, vrundavan circle<br>
					waghodiya road<br>
					vadodara-362001<br>
					contact no- 8200017417<br>
					Email id:-Virathospital@gmail.com<br>
					<br>
				</td>
			</tr>
		</table>
	</div>
</div>

<div class="nav_Down">
	<div>
		&copy;Virat Hospital, site designed & developed by Kohli_squad
	</div>
</div>

