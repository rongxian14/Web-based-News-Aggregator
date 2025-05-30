<!DOCTYPE html>
<html>
<head>
 <title>Reset password</title>
 <link rel="stylesheet" type="text/css" href="createAccount.css">
</head>
<body>

<div class="container">
<a href="Frontpage.html"> <img src="https://w7.pngwing.com/pngs/906/671/png-transparent-newspaper-editorial-cartoon-headline-comics-white-cartoon.png"
       width="80" height="67" border="0"/></a>
<h3 align = "center">Is this your info?</h3>
<table BORDER=1px; width=100%; border-collapse=collapse;>
	   <TR ><th>Username</th> <th>Email</th><th>Last Name</th>
		</TR>
<?php
require_once ("config.php");

$sql = "SELECT * FROM User WHERE email=('$_POST[email]')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<TR align=center>\n";
    echo "<td align=center>", $row["username"], "</td>",
        "<td>",    $row["email"],"</td>",
      "<td>", $row["lName"], "</td>\n";
    echo "</TR>\n";  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
</table>

<h4 align = "center">If yes, click<a href="createAccount.html"><u><a href="resetPassword.html"> Yes.</u></a></h4> 
<h4 align = "center">If no, unfortunately there is no your account. You may<a href="createAcc_tform.php"><u> Create one account.</u></a></h4> 
</div>

<footer>
		<p>Powered by News API</p>
		<p>Contact us: email@example.com</p>
</footer>


</body>
</html>