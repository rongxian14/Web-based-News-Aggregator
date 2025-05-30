<!DOCTYPE html>
<html>
<head>
 <title>Log out</title>
 <link rel="stylesheet" type="text/css" href="createAccount.css">
 <!-- <script src="java.js"></script> -->
</head>
<body>

<div class="container">
<a href="Frontpage.html"> <img src="https://w7.pngwing.com/pngs/906/671/png-transparent-newspaper-editorial-cartoon-headline-comics-white-cartoon.png"
       width="80" height="67" border="0"/></a>

<?php
session_start(); 

// if the user is logged in, unset the session 
if (isset($_SESSION['USER'])) { 
	unset($_SESSION['USER']); 
} 
session_destroy(); //destroy the session

echo "<h1>Logout successfully</h1>";
echo "<p><a href='Frontpage.html'>Continue with guest</a></p>"; 

// go to login page 
exit; 
