<!DOCTYPE html>
<html>		
	
	<?PHP
		if (isset($_POST['submit']))
		{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$file = file_get_contents("adoption.txt");
		if(!strstr($file, "$name||$email"))
		{
		echo "Sorry! You Insert an Invalid Name & Email. Please Use a Valid name & email and Try Again.";
		}
		else
		{
		echo "Welcome $username.<br/>You Have Successfully Logging.";
		}
		}
		?>
	
	<body>		
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
		<form name="form1" method="post" action="checklogin.php">
		<td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
		<tr>
		<td colspan="3"><strong>Member Login </strong></td>
		</tr>
		<tr>
		<td width="78">Username</td>
		<td width="6">:</td>
		<td width="294"><input name="username" type="text" id="username"></td>
		</tr>
		<tr>
		<td>Password</td>
		<td>:</td>
		<td><input name="password" type="text" id="password"></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" name="Submit" value="Login"></td>
		</tr>
		</table>
		</td>
		</form>
		</tr>
		</table>
	</body>
</html>




