<?php
session_start(); // Start up PHP Session

if ($_SESSION["Login"] != "YES") //if the user is not logged in or has been logged out
header("Location: index.php");
?>

<!DOCTYPE html>
<html>
<head>
 <title>Login</title>
 <link rel="stylesheet" type="text/css" href="createAccount.css">
 <!-- <script src="java.js"></script> -->
</head>
<body>
<form id="contactForm" method="post" action="deleteAcc.php">

	 <div class="container">
	 <a href="Frontpage.html"> <img src="https://w7.pngwing.com/pngs/906/671/png-transparent-newspaper-editorial-cartoon-headline-comics-white-cartoon.png"
			width="80" height="67" border="0"/></a>
	 <h3 align = "center">Enter your password to delete your Account</h3>
	 <h4 align = "center">Don't want to delete? Head back to <a href="loginFrontpage.html"><u>Home page.</u></a></h3> 
	 
	 <div class="form-group">
		 <label for="password"></label>
		 <input type="password" id="password" name="password"  placeholder="Password" required>
	 </div>

		<button class="button" type="submit">Delete</button>
	 <!-- <div class="form-group center"> -->
		 <!-- <button type="submit">Log in</button> -->
	 </div>
	 </form>
	 
	 <footer>
		<p>Powered by News API</p>
		<p>Contact us: email@example.com</p>
	</footer>
	
	<script>
	 // Add JavaScript to handle form submission
	 const contactForm = document.getElementById('contactForm');
	 contactForm.addEventListener('submit', (e) => {
	 //e.preventDefault(); // Prevent the form from submitting
	 // Get the form data
	 const formData = new FormData(contactForm);
	 const email = formData.get('email');
	 const password = formData.get('password');
	 
	 // Perform any additional validation if needed
	 // Send the form data to the server (you can replace this with your own logic)
	 // Here, we're simply logging the data to the console
	 console.log('Email:', email);
	 console.log('Password:', password);
	 });
	 </script>


</body>
</html>