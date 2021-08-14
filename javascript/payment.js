function demo(){
	var username= document.getElementById("name").value;
		
		if(username == ""){
		  document.getElementById("na").innerHTML= "** please enter your ATM Card number";
		  return false;
		}
		if(isNaN(username)){
		  document.getElementById("na").innerHTML= "** please number only";
		  return false;
		}
		
		
	var userupto= document.getElementById("upto").value;
		if(userupto == ""){
		  document.getElementById("up").innerHTML= "** enter ValidUpto";
		  return false;
		}
		if(isNaN(userupto)){
		  document.getElementById("up").innerHTML= "**number only";
		  return false;
		}
	var userupto1= document.getElementById("upto1").value;
		if(userupto1 == ""){
		  document.getElementById("up1").innerHTML= "**enter ValidUpto";
		  return false;
		}
		if(isNaN(userupto1)){
		  document.getElementById("up1").innerHTML= "**number only";
		  return false;
		}
		
	var usercvv= document.getElementById("cvv").value;
		if(usercvv == ""){
		  document.getElementById("cv").innerHTML= "** please enter your cvv number";
		  return false;
		}
		
		if(isNaN(usercvv)){
		  document.getElementById("cv").innerHTML= "**number only";
		  return false;
		}
	
    var usebk= document.getElementById("bk").value;
		if(usebk == ""){
		  document.getElementById("bk1").innerHTML= "** please enter your Booking amount";
		  return false;
		}
	
		if(isNaN(usebk)){
		  document.getElementById("bk1").innerHTML= "**number only";
		  return false;
		}
		
		else{
			window.alert("Payment successful");
		}	
}