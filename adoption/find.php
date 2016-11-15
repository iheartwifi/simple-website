<!DOCTYPE html>
<!--SOEN 287 Assignment#4: Exercice #3 - Wan Lan He - 29469419-->

<html>
    <head>
        <title>Find A Pet</title>
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
				 <h1>FINDS YOUR PETS</h1>
    	
			<form name="form" action="find_form.php" method="post" onsubmit="return validate()">
	 
                <label><b>TYPE: </b></label>
                       <input type="checkbox" name="dog" value="dog" />Dog
                   	   <input type="checkbox" name="cat" value="cat"  />Cat
                <br><br>

                <label><b>BREED: </b></label>
                		<input type="checkbox" name="beagle" value="beagle" />Beagle
                   	    <input type="checkbox" name="german" value="german"/>German Shepherd
                     	<input type="checkbox" name="persian" value="persian"/>Persian Cat
                   	    <input type="checkbox" name="siamese" value="siamese"/>Siamese Cat
                    <br><br>
			
                <label for="age"><b>AGE: </b></label>
                		<input type="radio" name="0" value="0" />less than a year
                   	    <input type="radio" name="1" value="1"/>1 to 2 years
                     	<input type="radio" name="2" value="2"/>3 to 6 years
                   	    <input type="radio" name="3" value="3"/>7 to 9 years
                  <br><br>

                <label for="gender"><b>GENDER: </b></label>
                    <input type="radio" value="female" name="female">female
                    <input type="radio" value="male" name="male">male<br><br>
                    
                <label><b>GET ALONG WITH: </b></label>
                    <input type="checkbox" name="dog1" value="dog1" />Dog
                    <input type="checkbox" name="cat1" value="cat1"  />Cat
                    <input type="checkbox" name="pets" value="pets"  />Small children
                    
                <p>
                <button type="find" value="Find" method="post">Find</button>
                <button type="reset" value="reset">Clear</button></p>       
            </form>
        	</div>	
        </div>
        
	        <div id= "sidebar">
			 <nav id="navigation">
				<ul id="nav">
				   <?php include("sidebar.php"); ?>
				</ul>
			</nav>	
    	</div>	
    		
			<footer>	
				<?php include ("footer.php"); ?>
			</footer>
  		</div>          
    </body>  
</html>
