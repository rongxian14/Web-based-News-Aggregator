<HTML>
	<HEAD>
        <TITLE>List of Users</TITLE>
        <Link rel="stylesheet" type="text/css" href="createAccount.css">
	</HEAD>
<BODY>
<div class="container">
	 <a href="Frontpage.html"> <img src="https://w7.pngwing.com/pngs/906/671/png-transparent-newspaper-editorial-cartoon-headline-comics-white-cartoon.png"
			width="80" height="67" border="0"/></a><br>
	<div>
	<table BORDER=1px; width=100%; border-collapse=collapse;>
	   <TR ><th>Username</th> <th>Email</th><th>Contact No</th>
		</TR>
	  	<?php
	    require_once ("config.php");
		
	    $sql = "SELECT * FROM User";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "<TR align=center>\n";
	    	echo "<td align=center>", $row["username"], "</td>",
	    	    "<td>",    $row["email"],"</td>",
	    		"<td>", $row["contactNo"], "</td>\n";
	    	echo "</TR>\n";
		}
		} 
		else {
		echo "0 results";
		}
	    
	    mysqli_close($conn);
	?>

	</table>
	</div>
	<br><h3 align = "center"><a href="setting.html"><u>Done</u></a></h3> 
	</div>
	<footer>
		<p>Powered by News API</p>
		<p>Contact us: email@example.com</p>
	</footer>
</BODY>
</HTML>
