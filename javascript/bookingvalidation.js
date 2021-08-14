function valid(){
	var usertitle= document.getElementById("title").value;
		
		if(usertitle == ""){
		  document.getElementById("ti").innerHTML= "** please enter your title";
		  return false;
		}
		
		
    var username= document.getElementById("name").value;
		
		if(username == ""){
		  document.getElementById("na").innerHTML= "** enter your first name";
		  return false;
		}
		if(!isNaN(username)){
		  document.getElementById("na").innerHTML= "** Chracter only";
		  return false;
		}
		if( (username.length<= 3) || (username.length> 50) ){
		  document.getElementById("na").innerHTML= "**Length must be between 2and20";
		  return false;
		}
		
	var userlastname= document.getElementById("lastname").value;
		
		if(userlastname == ""){
		  document.getElementById("ls").innerHTML= "** enter your last name";
		  return false;
		}
		if(!isNaN(userlastname)){
		  document.getElementById("ls").innerHTML= "** Chracter only";
		  return false;
		}
		if( (userlastname.length<= 3) || (userlastname.length> 50) ){
		  document.getElementById("ls").innerHTML= "**Length must be between 2and20";
		  return false;
		}
		
	var useremail= document.getElementById("email").value;
		if(useremail == ""){
		  document.getElementById("em").innerHTML= "** enter your email";
		  return false;
		}
		
	var usercontact= document.getElementById("contact").value;
		if(usercontact == ""){
		  document.getElementById("co").innerHTML= "** enter your contact";
		  return false;
		}
		if(isNaN(usercontact)){
		  document.getElementById("co").innerHTML= "** number only";
		  return false;
		}
		if(usercontact.length!= 10){
		  document.getElementById("co").innerHTML= "**Length must be between 2and20";
		  return false;
		}
		
	var usernation= document.getElementById("nation").value;
		
		if(usernation == ""){
		  document.getElementById("nati").innerHTML= "**enter your nation";
		  return false;
		}

	var usertyperoom= document.getElementById("type room").value;
		
		if(usertyperoom == ""){
		  document.getElementById("tr").innerHTML= "**enter Type of room";
		  return false;
		}
	
	var userbedtype= document.getElementById("bed type").value;
		
		if(userbedtype == ""){
		  document.getElementById("bt").innerHTML= "**enter Bedding type";
		  return false;
		}

	var usermealplan= document.getElementById("meal plan").value;
		
		if(usermealplan == ""){
		  document.getElementById("mp").innerHTML= "**enter Meal plan ";
		  return false;
		}
	
	var usercheckin= document.getElementById("check in").value;
		
		if(usercheckin == ""){
		  document.getElementById("in").innerHTML= "**enter check in ";
		  return false;
		}
	
	var usercheckout= document.getElementById("check out").value;
		
		if(usercheckout == ""){
		  document.getElementById("out").innerHTML= "**enter check out ";
		  return false;
		}
	
		else{
			window.alert("Your Booking application has been sent!..");
		}
}