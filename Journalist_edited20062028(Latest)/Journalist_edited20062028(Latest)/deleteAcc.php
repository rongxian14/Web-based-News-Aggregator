<?php
session_start(); // Start up PHP Session

if ($_SESSION["Login"] != "YES") //if the user is not logged in or has been logged out
header("Location: login.html");
?>

<!DOCTYPE html>
<html>
<head>
 <title>Login side</title>
 <link rel="stylesheet" type="text/css" href="createAccount.css">
</head>
<body>
<div class="container">
	 <a href="Frontpage.html"> <img src="https://w7.pngwing.com/pngs/906/671/png-transparent-newspaper-editorial-cartoon-headline-comics-white-cartoon.png"
			width="80" height="67" border="0"/></a>

<?php
require_once ("config.php");
$username = $_SESSION["USER"];

$sql = "SELECT username, email , password FROM User WHERE username=('$username')";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
  // read data of each row
  while($row = $result->fetch_assoc()) {
    if ($_POST["password"] == $row["password"]) {
        $sql = "DELETE FROM User WHERE username=('$username')";
        $conn->query($sql);
        echo "Record deleted successfully!</h1>";
        echo "<p><a href='Frontpage.html'>Continue browsing our website</a></p>"; 
       }
       else {
        echo "<h1>Password incorrect</h1>";
        echo "<p><a href='Frontpage.html'>Continue with guest</a></p>"; 
       }
  }
} else {
  echo "<h1>Account is not valid</h1>";
  echo "<p><a href='Frontpage.html'>Continue with guest</a></p>"; 
}

mysqli_close($conn);
?>
</div>

<footer>
		<p>Powered by News API</p>
		<p>Contact us: email@example.com</p>
</footer>

</body>
</html>