function demo(){
	var username= document.getElementById("name").value;
		
		if(username == ""){
		  document.getElementById("na").innerHTML= "** please enter username";
		  return false;
		}
	var userpass= document.getElementById("pass").value;
		
		if(userpass == ""){
		  document.getElementById("pa").innerHTML= "** please enter your password";
		  return false;
		}
	else{
		 return true;
	}
}