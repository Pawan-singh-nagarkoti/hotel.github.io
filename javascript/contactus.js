function validation(){
	var username= document.getElementById("name").value;
		
		if(username == ""){
		  document.getElementById("na").innerHTML= "** please enter your Name";
		  return false;
		}
		if(!isNaN(username)){
		  document.getElementById("na").innerHTML= "** please Chracter only";
		  return false;
		}
		if( (username.length<= 3) || (username.length> 50) ){
		  document.getElementById("na").innerHTML= "**Length must be between 2and20";
		  return false;
		}
		
	var usercontact= document.getElementById("contact").value;
		if(usercontact == ""){
		  document.getElementById("co").innerHTML= "** please enter your contact";
		  return false;
		}
		if(isNaN(usercontact)){
		  document.getElementById("co").innerHTML= "** please number only";
		  return false;
		}
		if(usercontact.length!= 10){
		  document.getElementById("co").innerHTML= "**Length must be between 2and20";
		  return false;
		}
		
	var useremail= document.getElementById("email").value;
		if(useremail == ""){
		  document.getElementById("em").innerHTML= "** please enter your email";
		  return false;
		}
	
	var userqurry= document.getElementById("demo").value;
		if(userqurry == ""){
		  document.getElementById("dem").innerHTML= "** please enter your qurry";
		  return false;
		}
		
		else{
			alert("Submit");
		}	
}