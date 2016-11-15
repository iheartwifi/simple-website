<!DOCTYPE html>
<!--SOEN 287 Assignment#4: Exercice #3 - Wan Lan He - 29469419-->

<html>
    <head>
        <title>homepage</title>
        <meta charset="UTF-8"> 
        <link rel="stylesheet" type="text/css" href="style.css"/>
    	<script src="js.js"></script>
    </head>
    
    <body>   
   			<div id="header">
				<?php include ("header.php"); ?> 
        	</div>     
        
        <div id="wrapper">        	
        	<div id="content">
				
        		<img src="http://healthypetcheckup.org/assets/pets-fcb53b73523cd42be71be807ca0d6aaf.jpg" alt="pic">
           
            	<!--text retrieved from the SPCA, www.lovethatpet.com website-->

				<h1>Welcome to the Cat & Dog Adoption!</h1> 
				<h2>Guided by the humane ethic, it is the MISSION of the ADOPT A PET to:</h2>
				Protect animals against negligence, abuse, and exploitation; <br>
				Represent their interests and ensure their well-being; <br>
				Raise public awareness and help develop compassion for all living beings. <br>
				We provide pet lovers and their pets with Amazing Care,
				Astounding Value and Awesome Service each and every day'
        	</div>	
        </div>
        
    		<div id= "sidebar">
					 <nav id="navigation">
						<ul id="nav">
						   <?php include("sidebar.php"); ?>
						</ul>
        			</nav>		
    		</div>
    	
    	<div>	
			<footer>	
				<?php include ("footer.php"); ?>
			</footer>
  		</div>          
    </body>  
</html>
