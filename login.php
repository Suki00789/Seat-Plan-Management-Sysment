<?php
	
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid";
	}
	else
	{
	session_start(); // Starting Session
	// Define $username and $password
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "");
	// To protect MySQL injection for Security purpose
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	// Selecting Database
	$db = mysql_select_db("seatplan", $connection);
	// SQL query to fetch information of registerd users and finds user match.
	$query = mysql_query("select * from registration where pass='md5($password)' AND username='$username'", $connection);
	$rows = mysql_num_rows($query);
	if ($rows == 0) {
	
	$_SESSION['login_user']=$username; // Initializing Session
	$_SESSION['typeu'] = $rows['emp_stu'];
	//header("location: profile.php"); // Redirecting To Other Page
	} else {
	$error = "Username or Password is invalid";
	}
	mysql_close($connection); // Closing Connection
	}
	}
?>