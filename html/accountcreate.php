<!DOCTYPE html>
<html>
  <head> 
    <title> useraccout </title>
	
	<link rel= "stylesheet" type= "text/css" href= "http://localhost/project/html/accoutcreate.css">
	<script src= "http://localhost/project/javascript/accountcreate.js"> </script>
	
  </head>
  <body>
    <div class= "home">	
	  <a href= "http://localhost/project/html/frontpage.php">
	  <div style= "border-bottom: 2px solid green;"> 
	    <img src= "http://localhost/project/image/20.png" class= "image">
        <span style= "color: white; margin-left: 10px;"> HomePage </span>	  
	  </div>
	  </a>
	</div>
	   <div class= "backimg">   
          <div class= "useraccout"> USER ACCOUNT CREATE </div>
		  <div class= "borderinner"> 
		     <form action= "http://localhost/project/html/accountcreate1.php" method= "post" autocomplete= "off" onsubmit= "return vadone()">
			  <div class= "fomr-first"> Username : 
			  <input type= "text" maxlength= "20" name= "uname" id= "one" class= "fomr-firstinner" placeholder= "Please enter username"> <br> 
			  <span id= "one1" class= "formspan1"> </span> <br>
			  </div>
			  
			  <div class= "fomr-first"> Password : 
			  <input type= "password" maxlength= "10" name= "upass" id= "two" class= "fomr-firstinner1" placeholder= "Please enter password"> <br>
			  <span id= "two1" class= "formspan1">  </span> <br>
			  </div>
			   
			  <div class= "fomr-first"> Email-Id :
              <input type= "email" maxlength= "40" name= "uemail" id= "three" class= "fomr-firstinner2" placeholder= "Please enter Email-Id"> <br>
			  <span id= "three1" class= "formspan1"> </span> <br>
			  </div>
			  
			  <div class= "fomr-first"> Contact : 
			  <input type= "tel" maxlength= "10" name= "ucon"id= "four" class= "fomr-firstinner3" placeholder= "Please enter Contact"> <br>
			  <span id= "four1" class= "formspan1">  </span> <br>
			  </div>
			  
			  <div>
			    <input type= "submit" value= "submit" class= "sub">
				<input type= "reset" value= "reset" class= "sub1">
			  </div>
			  
		     </form>
		  </div>
	   </div>
	</body>   
</html>