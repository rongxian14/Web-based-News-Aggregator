<!DOCTYPE html>
<html>
<head>
 <title>Login side</title>
 <link rel="stylesheet" type="text/css" href="createAccount.css">
 <!-- <script src="java.js"></script> -->
</head>
<body>
<div class="container">
	 <a href="Frontpage.html"> <img src="https://w7.pngwing.com/pngs/906/671/png-transparent-newspaper-editorial-cartoon-headline-comics-white-cartoon.png"
			width="80" height="67" border="0"/></a>
	 <h3 align = "center">Profile updated successfully</h3>
	 <h4 align = "center">Back to <a href="login.html"><u>Homepage.</u></a></h3> 
</div>
	 <footer>
		<p>Powered by News API</p>
		<p>Contact us: email@example.com</p>
	</footer>

<?php
// $servername = "localhost";
// $username = "Qiyan";
// $password = "helloworld";
// $dbname = "projectDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

require_once ("config.php");
$sql = "UPDATE User SET fName=('$_POST[fName]') WHERE email=('$_POST[email]')";
$conn->query($sql);
$sql = "UPDATE User SET lName=('$_POST[lName]') WHERE email=('$_POST[email]')";
$conn->query($sql);
$sql = "UPDATE User SET username=('$_POST[username]') WHERE email=('$_POST[email]')";
$conn->query($sql);
$sql = "UPDATE User SET contactNo=('$_POST[contactNo]') WHERE email=('$_POST[email]')";
$conn->query($sql);
$sql = "UPDATE User SET password=('$_POST[password]') WHERE email=('$_POST[email]')";

if ($conn->query($sql) === TRUE) {
  echo ".";
} else {
  echo "Error updating record: " . $conn->error;
}

mysqli_close($conn);
?>