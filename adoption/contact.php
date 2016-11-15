<!DOCTYPE html>
<!--SOEN 287 Assignment#3: Exercice #5 - Wan Lan He - 29469419-->

<html>
    <head>
        <title>contact</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <script src="js.js"></script>

    </head>

    <body>    
        <div id="header">
				<?php include ("header.php"); ?> 
        </div>  
                
		<div id="wrapper">        	
        	<div id="contact">
                <h1>Contact Us</h1>
                <p>Name: Wan Lan He</p>
                <p>Student ID: 29469419</p>
                <p>Email: wanlanhe@gmail.com</p>
                <p><label><b>Message</b></label>
                    <textarea name ="message" rows = "10"></textarea></p>
                    <button type="submit" value="Submit">Submit</button>
                    
            	<div id="map">
                <h2>We are locate here</h2>
                <img src="https://maps.googleapis.com/maps/api/staticmap?zoom=15&size=440x380&maptype=roadmap&markers=45.501690,-73.567253&key=AIzaSyDtmnH6A3wXzeodRMsMRqsdumpIAHXRsVw&sensor=false" 
                 alt="location" style="width:300px;height:300px;">   
            	</div> 
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