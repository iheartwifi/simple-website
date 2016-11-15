<!DOCTYPE html>
<!--SOEN 287 Assignment#4: Exercice #3 - Wan Lan He - 29469419-->

<html>
    <head>
        <title>Dog&Cat Care</title>
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
				<h1>Dog & Cat Care - Tips</h1> 
                    <!--all informations retrieved from the https://www.lovethatpet.com/ website-->
                    <div>
                        <h3>Food & Diet</h3>
                        <p>Learn about your dog's dietary needs and share in some of our favorite dog food and treat recipes.</p>
                        <p><a href="https://www.lovethatpet.com/dogs/food-and-diet/">Learn more about Food & Diet</a></p>
                    </div><br>
                
                    <div>
                        <h3>Health & Wellness</h3>
                        <p>Keep on top of your dog's health with information, tips and advice written and reviewed by our Vets</p>
                        <p><a href="https://www.lovethatpet.com/dogs/health/">Learn more about Health & Wellness</a></p>
                    </div><br>

                    <div>
                        <h3>Training & Behaviour</h3>
                        <p>Discover why your dog acts the way they do and pick up some useful tips for training your canine companion.</p>
                        <p><a href="https://www.lovethatpet.com/dogs/training-and-behaviour/">Learn more about Training & Behaviour</a></p>
                    </div>
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
