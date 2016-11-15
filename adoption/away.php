<!DOCTYPE html>
<!--SOEN 287 Assignment#4: Exercice #3 - Wan Lan He - 29469419-->

<html>
    <head>
        <title>Pets to give Away</title>
        <meta charset="UTF-8"> 
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script src="js.js"></script>
    </head>
        
    <body>   
   			<div id="header">
				<?php 
					include ("header.php"); 
				?> 
        	</div>     
        
        <div id="wrapper">        	
        	<div id="content">
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<table width="400" border="10" align="center" cellpadding="10" cellspacing="10" bgcolor="#CCCCCC">
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
				<td width="294"><input name="username" type="text" id="username" placeholder="Username"></td>
				</tr>
				<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="text" id="password" placeholder="Password"></td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" name="Submit" value="Login">
				<input type="reset" value="Clear"></td>

				</tr>
				</table>
				</td>
				</form>
				</tr>
		</table>
				
				<h2><p>Not a member yet? <a href="register.php"> Join us </a></p></h2>

        	</div>	
        </div>
        
    		<div id= "sidebar">
					 <nav id="navigation">
						<ul id="nav">
						   <?php include("sidebar.php"); ?>
						</ul>
        			</nav>
        		</nav>	
    		</div>
    		
			<footer>	
				<?php include ("footer.php"); ?>
			</footer>
  		</div>          
    </body>  
</html>
