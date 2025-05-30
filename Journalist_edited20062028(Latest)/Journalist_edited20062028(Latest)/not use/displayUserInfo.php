<?php
// $servername = "localhost";
// $username = "Qiyan";
// $password = "helloworld";
// $dbname = "projectDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
require_once ("config.php");

$sql = "SELECT id, username, email , password FROM User ";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Email: " . $row["email"]. " - Username: " . $row["username"]. "<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>