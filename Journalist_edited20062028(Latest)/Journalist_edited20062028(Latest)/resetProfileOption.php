<?php
session_start(); // Start up PHP Session

if ($_SESSION["Login"] != "YES") //if the user is not logged in or has been logged out
header("Location: login.html");
?>

<!DOCTYPE html>
<html>
<head>
 <title>Login</title>
 <link rel="stylesheet" type="text/css" href="createAccount.css">
 <!-- <script src="java.js"></script> -->
</head>
<body>
	 <div class="container">
	 <a href="Frontpage.html"> <img src="https://w7.pngwing.com/pngs/906/671/png-transparent-newspaper-editorial-cartoon-headline-comics-white-cartoon.png"
			width="80" height="67" border="0"/></a>
	 <h3 align = "center">Choose what you want to edit</h3>
	 <h4 align = "center">Don't want to edit? <a href="setting.html"><u>Back.</u></a></h3> 
	 
	 <div class="form-group">
        <a href="resetPassword.html"><h2 align = "center">1. Edit Password</h2></a>
	 </div>

	 <div class="form-group">
	 <a href="resetUsername.html"><h2 align = "center">2. Edit Username</h2></a>
	 </div>

	 <div class="form-group">
        <a href="resetContNo.html"><h2 align = "center">3. Edit Contact Number</h2></a>
	 </div>

	 <div class="form-group">
        <a href="resetName.html"><h2 align = "center">4. Edit First name & Last name</h2></a>
	 </div>
	 </div>
	 
	 <footer>
		<p>Powered by News API</p>
		<p>Contact us: email@example.com</p>
	</footer>
	
	</body>
</html>