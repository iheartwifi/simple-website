function privacy() {
  	    alert("Information will not be sold or misused, and protects the website builder from any incorrect information posted by a pet owner and so on");
}

function thank() {
  	    alert("Thank you for registering, you may begin the log into the website");
}
    
function again() {
  	    alert("Your pet is on the adoption list!");
}

function validate() {
    var x = document.forms["form"]["gender"].value;
    if (x == null || x == "") {
        alert("Gender must be filled out");
        return false;
    }

function validateEmail() {
	var email = document.getElementById("email");
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (!filter.test(email.value)) {
		alert("Error, please provide a valid email address");
		email.focus;
		return false;
		}
    }      
}