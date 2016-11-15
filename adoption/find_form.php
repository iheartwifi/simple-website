<!DOCTYPE html>
<!--SOEN 287 Assignment#4: Exercice #3 - Wan Lan He - 29469419-->

<html>
    <head>
        <title></title>
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
        		<?php include("match_find.php"); ?>
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
 
