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
        
         <?php
			$txt = "adoption.txt"; 
			if (isset($_POST['pets']) && isset($_POST['type']) && isset($_POST['age']) && isset($_POST['gender'])
			 && isset($_POST['comments'])) { // check if fields are set
					$fh = fopen($txt, 'a+');  //existing data is preserved
					$txt="\n".$_POST['pets'].' : '.$_POST['type'].' : '.$_POST['age'].' : '.$_POST['gender'].' : '.$_POST['comments']; 
				fwrite($fh,$txt); // Write information to the adoption file
				echo fgets($fh);
				fclose($fh); // Close the file		
			}
        ?>
        
        <div id="wrapper">        	
        	<div id="content">
        		<p><a href=logout.php>LOG OUT</a><p/>
				            <h1>Pets to give away</h1>
            <form action="away_form.php" method="post">
                <label for="giveAway"><b>Pets to give away</b></label>
                    <select id="giveAway" name="pets">
                      <option value="Dog">Dog</option>
                      <option value="Cat">Chat</option>
                    </select><br>

                <label><b>Breed of dog or chat</b></label>
                    <select id="type" name="type">
                      <option value="beagle">Beagle</option>
                      <option value="German Shepherd">German Shepherd</option>
                      <option value="persican">Persian Cat</option>
                      <option value="siamese">Siamese cat</option>
                    </select><br>

                <label for="age"><b>Age of dog or cat</b></label>
                    <select id="age" name="age">
                        <option value=""> less than 1 year</option>
                        <option value=""> 1 to 2 years</option>
                        <option value=""> 3 to 6 years</option>	
                        <option value=""> 7 to 9 years</option>	
                        <option value=""> over than 10 years</option>	
                    </select><br>

                <label for="gender"><b>Gender</b></label>
                    <input type="text" id="gender" name="gender"><br>
                    
                <label><b>Get Along with Another Pets (Pick many as apply)</b></label><br>
                    <input type="checkbox" name="dog" value="dog" />Dog
                    <input type="checkbox" name="cat" value="cat"  />Cat
                    <input type="checkbox" name="pets" value="pets"  />Others Pets

                <p><label><b>Comments:</b></label>
                    <textarea name ="comments" rows = "10"></textarea></p>    

                <label><b>Current Owner Infos:</b></label><br>
                    <b>Last Name:</b><input type="text" name="lname" id="lname"/>
                    <b>First Name:</b><input type="text" name="fname" id="fname"/>
                    <b>Email:</b> <input type="text" name="email" id="email"/><br>

                <p><input type="submit" value="Submit" name="submit" onclick=again();>
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
        		</nav>	
    		</div>
    		
			<footer>	
				<?php include ("footer.php"); ?>
			</footer>
  		</div>          
    </body>  
</html>







