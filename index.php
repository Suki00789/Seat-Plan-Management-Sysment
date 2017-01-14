<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Login Form</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	</head>

<body background="img/5.jpg">
	<div class="logo"><a href="home.html"><img src="logo/logo.jpg" width="150px" height="150px"/></a></div>

	<div class="header">Stamford University Bangladesh
		<div class="header1">WE BRING OUT THE BEST IN YOU</div>
	</div>

	<div id="main">
		<h1><center><font color="#2A00AA">Login Form</font></center></h1>
		<h3>Employee/ Student Login Form</h3>
		<div class="form">
		    <div class="image"><img src="img/2.png" width="100%" height="100%"></div>
		<div id="login">
			<form action="" method="post">
				<input id="username" name="username" placeholder="Username" type="text"><br><br>
				<input id="password" name="password" placeholder="Password" type="password"><br><br>
				<input type="checkbox">Remember Me<br><br>
				<input name="submit" type="submit" value=" Login ">
				<center><p class="message">Not registered? <a href="register.php">Register Here</a></p></center>
				<span><?php echo $error; ?></span>
			</form>
		</div>
	</div>
	</div>
	<div class="footer"><center>&copy; Designed & Developed by SSS</center></div>

</body>
</html>