<HTML>
	<HEAD>
        <TITLE>Create Account</TITLE>
        <Link rel="stylesheet" type="text/css" href="createAccount.css">
    </HEAD>
	<BODY>

	<div class=container>
	  <?php
	  	$fName = $_POST["fName"];
		$lName= $_POST["lName"];
	    $username = $_POST["username"];
		$contactNo = $_POST["contactNo"];
	    $email = $_POST["email"];
	    $password = $_POST["password"];
	    require_once ("config.php"); //call config.php to open connection to database before performing insert data
		
	    $sql = "INSERT INTO User(fName, lName, username, contactNo, email, password) VALUES 
		('$fName','$lName','$username','$contactNo','$email','$password')";

		if (mysqli_query($conn, $sql)) {
			echo "Account created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	     mysqli_close($conn);
	   ?>

	   <BR><BR>
	   <!--  <a href="createAcc_user.php">Click here to view the users</a> -->
	   <a href="login.html">Log in</a>

	</div>
	</BODY>

	</HTML>

	 