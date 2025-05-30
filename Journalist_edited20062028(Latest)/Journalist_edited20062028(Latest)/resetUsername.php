<?php
session_start(); // Start up PHP Session

if ($_SESSION["Login"] != "YES") //if the user is not logged in or has been logged out
header("Location: index.php");
?>

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
	 <h3 align = "center">Username updated successfully</h3>
     <h4 align = "center">Back to <a href="loginFrontpage.html"><u>Homepage now.</u></a></h3> 
	 <h4 align = "center">Edit other <a href="resetProfileOption.php"><u>profile.</u></a></h3> 
</div>
	 <footer>
		<p>Powered by News API</p>
		<p>Contact us: email@example.com</p>
	</footer>

<?php
require_once ("config.php");
$username = $_SESSION["USER"];

$sql = "UPDATE User SET username=('$_POST[username]') WHERE username=('$username')";

if ($conn->query($sql) === TRUE) {
  echo ".";
} else {
  echo "Error updating record: " . $conn->error;
}

mysqli_close($conn);
?>