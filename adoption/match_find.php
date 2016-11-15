<h1>Matching Pets</h1>

<?php
	if(isset($_POST['dog'])){
		if(isset($_POST['beagle']) || isset($_POST['german'])){	
			if(isset($_POST['2'])){
				if(isset($_POST['female'])){
					echo "We have 1 match!";
					echo '<img src="</images/beagle.jpeg>"/>';
				}
			}else if(isset($_POST['3'])){
				echo "Sorry, we have no a match";
			} else {
				echo "We have found a german shepherd!";
				echo '<img src="</images/germanshepherd.jpg>"/>';
			}		
		} else {
			echo "Such breed do not exist! Please choose again";
		}
	}else if(isset($_POST['cat'])){
			if(isset($_POST['siamese'])){
				echo "We have found 1 cat";
				echo '<img src="</images/siamesecat.jpeg>"/>';
		}else {
			echo "Such breed do not exist! Please choose again";
		}
	}else if(empty($_POST["dog"]) && empty($_POST["cat"]) && empty($_POST["beagle"]) 
	&& empty($_POST["german"]) && empty($_POST["siamese"]) && empty($_POST["persian"])){
		echo "Must choose at least the type or the breed!";
	}

?>

