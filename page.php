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

	<div class="middle">
		<div style="background-image: url('aimg.jpg');">
			<p>
			<br> <br>
					Health Care Services  <br>
			<font size="5px"> We Care About Your Health </font>
		</p> 
		</div>
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
		<td> </td>
				</tr>
			</table>
		</div>

		<div class="bottom_up">
		<div>
			Make an Appointment
			<div class="login">
  <h1>Login to continue</h1>

  <form method="post" action="">

    <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
    <p><input type="password" name="password" value="" placeholder="Password"></p>
    <p class="remember_me">
    
      <label>
        <input type="checkbox" name="remember_me" id="remember_me">
        Remember me on this computer
      </label>

    </p>
    <p class="submit"><input type="submit" name="commit" value="Login"></p>
    <p>Sign up here! <a href="registration.php">Don't have an account?sign up</a>.</p>
  </form>
</div>

</body>
</html>