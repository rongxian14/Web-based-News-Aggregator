<head><Link rel="stylesheet" type="text/css" href="createAccount.css"></head>
<body>
	<div class=container>
<?php
 
require_once ("config.php");
 
$sql = "CREATE TABLE User(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		fName VARCHAR(16),
		lName VARCHAR(16),
 		username VARCHAR(16),
		contactNo INT(16),
 		email VARCHAR(50),
		password VARCHAR(20))";

if (mysqli_query($conn, $sql)) {
  echo "User table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</div>
</body>