<!DOCTYPE html>
<html>
<head>
 <title>Reset password</title>
 <link rel="stylesheet" type="text/css" href="createAccount.css">
 <!-- <script src="java.js"></script> -->
</head>
<body>

<form id="contactForm" method="post" action="resetPassword.php">

<div class="container">
<a href="Frontpage.html"> <img src="https://w7.pngwing.com/pngs/906/671/png-transparent-newspaper-editorial-cartoon-headline-comics-white-cartoon.png"
       width="80" height="67" border="0"/></a>

<?php
require_once ("config.php");

$sql = "SELECT username, email , password FROM User WHERE email=('$_POST[email]')";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $myusername=$row["username"];
    
    if ($_POST["password"] == $row["password"]) {
        session_start();
        $_SESSION["Login"] = "YES";
        $_SESSION["USER"] = $myusername;
        echo "<h1>Welcome back!</h1>";
        echo "<p><a href='loginFrontpage.html'>Continue browsing our website</a></p>"; 
       }
       
       // If not correct, we set the session to NO
    else {
        session_start();
        $_SESSION["Login"] = "NO";
        echo "<h1>Password Incorrect</h1>";
        echo "<p><a href='frontpage.html'>Continue with guest</a></p>"; 
    }
  }
} 
else {
  echo "Account is not valid";
  echo "<p><a href='Frontpage.html'>Continue with guest</a></p>"; 
}

mysqli_close($conn);
?>

<?php
            $cookie_name = "Qiyan";
            $cookie_value = "UTM";

            // Setting the cookie
            setcookie($cookie_name, $cookie_value, time()+86400*30, "/", "");

            // Check if the cookie is set
            if(!isset($_COOKIE[$cookie_name])){
                $message = "Cookie named '".$cookie_name."' is not set!";
            }
            else{
                $message = "Cookie named [".$cookie_name."] is set! Value is: ".$cookie_value;
            }
?>
        <script> message = alert("<?php echo $message; ?>");</script>
</div>
</form>

<footer>
		<p>Powered by News API</p>
		<p>Contact us: email@example.com</p>
</footer>


</body>
</html>