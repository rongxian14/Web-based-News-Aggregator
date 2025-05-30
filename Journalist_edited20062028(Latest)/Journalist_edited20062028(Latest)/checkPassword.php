<?php
session_start(); // Start up PHP Session

if ($_SESSION["Login"] != "YES") //if the user is not logged in or has been logged out
header("Location: login.php");
?>

<?php
if ($_POST["password"] == "News#23100049@") {
      header("Location: createAcc_user.php");
   }
   
   // If not correct, we set the session to NO
else {
   echo "password incorrect";
    header("Location: adminWPass.html");
}
?>
