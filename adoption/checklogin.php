<!DOCTYPE html>
<html>

	<head>
		<title>Check Login</title>
	</head>
	
	<body>
	
		<?php
	  // Check if username and password are correct
		if ($_POST["username"] == $_POST["username"] && $_POST["password"] == $_POST["password"]) {	 
		// If correct, we set the session to YES
		  session_start();
		  $_SESSION["Login"] = "YES";
		  require_once("away_form.php");
	 
		}
		else {
		// If not correct, we set the session to NO
		  session_start();
		  $_SESSION["Login"] = "NO";
		  echo "<h1>You are NOT logged correctly in </h1>";
		  echo "<p><a href='away.php'></a></p>"; 
		}
		?>
	</body>
	
</html>