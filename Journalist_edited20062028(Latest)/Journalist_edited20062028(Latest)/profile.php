<?php
session_start(); // Start up PHP Session

if ($_SESSION["Login"] != "YES") //if the user is not logged in or has been logged out
header("Location: index.php");
?>

<!DOCTYPE html>
<html>
<head>
 <title>view profile</title>
 <link rel="stylesheet" type="text/css" href="createAccount.css">
 <!-- <script src="java.js"></script> -->
</head>
<body>

<div class="container">
<a href="Frontpage.html"> <img src="https://w7.pngwing.com/pngs/906/671/png-transparent-newspaper-editorial-cartoon-headline-comics-white-cartoon.png"
       width="80" height="67" border="0"/></a>
<h3 align = "center">Profile</h3>

<table BORDER=1px; width=100%; border-collapse=collapse;>
	   <TR ><th>Username</th> <th>Email</th><th>Contact No</th>
		</TR>
<?php
require_once ("config.php");
$username = $_SESSION["USER"];

$sql = "SELECT * FROM User WHERE username=('$username')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<TR align=center>\n";
	    	echo "<td align=center>", $row["username"], "</td>",
	    	    "<td>",    $row["email"],"</td>",
	    		"<td>", $row["contactNo"], "</td>\n";
	    	echo "</TR>\n";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
</table>

<h4 align = "center"><u><a href="resetProfileOption.php"> Edit profile</u></a><br><br>
Back to <a href="loginFrontpage.html"><u>front page.</u></a></h4> 
</div>

<footer>
		<p>Powered by News API</p>
		<p>Contact us: email@example.com</p>
	</footer>

</body>
</html>