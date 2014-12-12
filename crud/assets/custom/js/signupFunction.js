function signupFunction()
{
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}

	ajaxRequest.onreadystatechange = function()
	{
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById('result');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}
	
	var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	

	var username= "?username"+username;
	
	var password = "?password"+password;
	
	var url = "http://localhost/task_two/welcome/process";
	
	ajaxRequest.open("GET", url+ username,true);
	ajaxRequest.send(null); 
	
} 