<!doctype html>
<html>
	<head>
		<title>Register</title>
		<script src="js.js"></script>
	</head>
	
	<?php
		session_start();
		if ($_SERVER["REQUEST_METHOD"] == "POST") {		
	   if (empty($_POST["user"])) {
		 	echo "Username is required";
	   } else {
		 	$user = test_input($_POST["user"]);
			if (!preg_match("/^[a-zA-Z0-9]*$/",$user)) {
		   		echo " Invalid username: must contains uppercase or lowercase letters and digits"; 
		   		echo " ";
	    	}
	    }
	    
	   if (empty($_POST["password"])) {
			echo "Password is required";
	   } else {
		 $password= test_input($_POST["password"]);
		 if (!preg_match("/^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{4,}$/",$password)) {
		   echo " Invalid password: must be at least 4 long (letters or digits), have at least one letter and at least one digit"; 
		   echo " ";		
		 }
	  } 
	}

	function test_input($data) {
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	
	?>
	<body>


		<h2>Create an account</h2>		
			*Fill asterisk fields
			<form action="#" method="POST">
				Username*: <input type="text" name="user" id="user" placeholder="Username"><br /> 
				
				Password*: <input type="password" name="password" id="password" placeholder="Password"> <br />	
		
				<button type="submit" value="Submit" onclick=thank()>Submit</button>
				<button type="reset" value="Clear form">Reset</button>
			
				<h3><p> <a href="away.php"> Now Login </a></p></h3>
			</form>

	</body>
</html>

