<?php    
session_start();   

if(!isset($_SESSION['username'])){
	echo "You are logged out";
	header('location:login.php');
}

?>

<html>
<head>
	<title> Virat Hospital </title>
	<link rel="stylesheet" href="style.css">
	
	
</head>
<body>
	
	<div class="top">
		<div>
		 Contact Us +91 8200017417 | Virathospital@gmail.com
		</div>
	</div>
	
	<div class="logo">
		<div>
			<table>
				<tr>
					<td width="600px" style="font-size:50px;font-family:forte;"> <font color="#428bca"> Virat  </font><font color="#000"> Hospital</font> </td>
					<td> <br> <br>
						<font size="4px"> 
							<a href="page.php">HOME</a> 
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
	
	
	
	
	
	<div class="bottom">
		<div>
			<table border="0">
				<tr>
					<td width="700px">
						<font color="#000">------------ </font> <br> <br>

					<font class="doctor" color="#000" size="6px"> Information Not available </font> <br> <br>

					

<br>
<br>
<br>
 </td>
					
					
					<td style="padding-left:20px;"> </td>
				</tr>
			
				
			</table>
		</div>
	</div>
	
	<div class="nav_Down">
	<div>
		&copy;Virat Hospital, site designed & developed by Kohli_squad
	</div>
</div>

	
	
