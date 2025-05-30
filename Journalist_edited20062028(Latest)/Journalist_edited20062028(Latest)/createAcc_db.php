<head><Link rel="stylesheet" type="text/css" href="createAccount.css"><head>

<body>
<div class = container>
  
    <?php

        $servername = "localhost";
        $u_username = "root";
        $u_password = "";

        // Create connection
        $conn = mysqli_connect($servername, $u_username, $u_password);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
      
        // Create database
        $sql = "CREATE DATABASE user_Journalist";
        if (mysqli_query($conn, $sql)) {
          echo "Database created successfully";
        } else {
          echo "Error creating database: " . mysqli_error($conn);
        }
      
        //And finally we close the connection to the MySQL server
        mysqli_close($conn);
    ?>
</div>
</body>