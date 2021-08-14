<!DOCTYPE html>
<html>
 <head> 
   <title> Room reservation </title>
   <script src= "http://localhost/project/javascript/bookingvalidation.js"> </script>
   <style>
     *{
	   margin: 0;
	   padding: 0;
	 }
	 a{
	   text-decoration: none;
	 }
     .home{
	   width: 18%;
	   height: 99vh;	
	   background-color: rgb(13,57,93);
	   border-bottom: 2px solid red;
	   border-top: 2px solid red;
	   position: fixed;
	   top: 0;
	   left: 0;
	 }
	 .image{
	   width: 50px;
	   height: 30px;
	   margin-top: 30px;
	   margin-left: 30px;
	   border-radius: 3px;
	 }
	 .learn-more{
        width: 82%;
        height: 640px;
        background-color: whiteSmoke;
        position: absolute;
        margin-left: 18%;		
	 }
	 .reservation{
	    margin-top: 20px;
		margin-left: 20px;
		letter-spacing: 3px;
	    border-bottom: 1px solid black;
	 }
	 .personal-information{
	    border: 2px solid blue;
		width: 40%;
		height: 533px;
		margin-left: 70px;
		margin-top: 20px;
		float: left;
		border-radius: 5px;
		background-color: white;
	 }
	 .personal-information-top{
	    background-color: rgb(92,139,255);
	    text-align: center;
		letter-spacing: 3px;		
	 }
	 .info{
	    margin-top: 10px;
		margin-left: 10px;
		font-size: 18px;
	 }
	 .name-span{
	    color: red;
		font-size: 15px;
		letter-spacing: 5px;
	 }
	 .reservation-information{
	    border: 2px solid blue;
		width: 40%;
		height: 530px;
		margin-right: 70px;
		margin-top: 20px;
		float: right;
		border-radius: 5px;
		background-color: white;
	 }
	 .reservation-information-top{
	    background-color: rgb(92,139,255);
	    text-align: center;
		letter-spacing: 1px;
	 }
	 .reser{
	    margin-top: 13px;
		margin-left: 10px;
		font-size: 18px;
	 }
	 .submit{
	    border-radius: 12px;
	    width: 200px;
		height: 10vh;
		margin-top: 515px;
		margin-left: 650px;
		position: relative;
		bottom: 80px;
	 }
	 .submit-button{
	    border-radius: 7px;
	    position: relative;
		top: 40px;
		right: 20px;
	    font-size: 20px;
	    background-color: white;
	 }
	 .submit-button:hover{
	    background-color: rgba(255,99,71,0.1);
	 }
	 .reset-button{
	    border-radius: 7px;
	    position: relative;
		top: 40px;
		right: 20px;
	    font-size: 20px;
	    background-color: white;
	 }
	 .reset-button:hover{
	    background-color: rgba(255,99,71,0.1);
	 }
	 .background-none{
	    margin-top: 5px;
		font-size: 20px;
	 }
	 .background-none:hover{
	    color: blue;
	 }
	 .writen-lettter{
	    letter-spacing: 5px;
	    font-size: 20px;
		color: green;
		font-weight: bold;
	 }
   </style> 
   
   
   
   <script>
	    function auto(){
	      var a=document.getElementById("type room");
          var b= a.options[a.selectedIndex].text;
		  
		  if(b=="SINGLE ROOM"){
		    document.getElementById("txt").value= 5000; 
		  }
          else if(b=="GUEST ROOM"){
		    document.getElementById("txt").value= 7000; 
		  }
          else if(b=="DELUXE ROOM"){
		    document.getElementById("txt").value= 9000; 
		  }		
          else{
		    document.getElementById("txt").value= none;
		  }		  
	}
	</script>



	
 </head>
 <body>
    <section>
    <div class= "home">	
	  <a href= "http://localhost/project/html/frontpage.php">
	  <div style= "border-bottom: 2px solid green;"> 
	    <img src= "http://localhost/project/image/20.png" class= "image">
        <span style= "color: white; margin-left: 10px;"> HomePage </span>	  
	  </div>
	  </a>
	</div>
	
	<div class= "learn-more">
      <div class= "reservation"> RESERVATION </div>
	  <div>
	    <div class= "personal-information"> 
          <div class= "personal-information-top"> PERSONAL INFORMATION </div>
	  	    <div class= "info">
			<form action= "http://localhost/project/html/Anchor%20tag/booking1.php" method= "post" autocomplete= "off" onsubmit= "return valid()">
               
			   <span class= "writen-lettter"> Title </span> <br>
                <select style= "width: 352px;" name= "titles" id= "title" class= "background-none">
			                <option>  </option>
			                <option> Dr. </option>
							<option> Miss. </option>
							<option> Mr. </option>
							<option> Prof. </option>
			    </select> <br>
				<span id= "ti" class= "name-span">  </span> <br>
						  
    		   <span class= "writen-lettter"> First Name </span> <br>
			   <input type= "text" size= "31" maxlength= "20" name= "fname" id= "name" class= "background-none"> <br>
			   <span id= "na" class= "name-span"> </span> <br>
			   
			   <span class= "writen-lettter"> Last Name </span> <br>
			   <input type= "text" size= "31" maxlength= "20" name= "lname" id= "lastname" class= "background-none"> <br>
			   <span id= "ls" class= "name-span">  </span> <br>
			   
			   <span class= "writen-lettter"> Email-Id </span> <br>
			   <input type= "email" size= "31" maxlength= "20" name= "emails" id= "email" class= "background-none"> <br>
			   <span id= "em" class= "name-span">  </span> <br>
			   
			   <span class= "writen-lettter"> Phone Number </span> <br>
			   <input type= "tel" size= "31" maxlength= "10" name= "contacts" id= "contact" class= "background-none"> <br>
			   <span id= "co" class= "name-span"> </span> <br>
			   
			   <span class= "writen-lettter"> Nationality </span><br>
			   <select id= "nation" style= "width: 350px;"  name= "nations" class= "background-none">
			                <option> </option>
			                <option> India </option>
							<option> Afghanistan </option>
							<option> America </option>
							<option> SriLanka </option>
							<option> Pakistan </option>
							<option> china </option>
							<option> Bangladesh </option>
							<option> England </option>
							<option> France </option>
							<option> other </option>
			              </select> <br>
						  <span id= "nati" class= "name-span"> </span> <br>
			</div>    
		</div>
		<div class= "reservation-information">
           <div class= "reservation-information-top"> RESERVATION INFORMATION </div>
		   <div class= "reser">
		      <span class= "writen-lettter"> Type Of Room </span><br>
			  <select style= "width: 352px;" name= "rooms" id= "type room"  onchange="auto();" class= "background-none">
			                 <option>  </option>
			                 <option> SINGLE ROOM </option>
						  	 <option> GUEST ROOM </option>
							 <option> DELUXE ROOM </option>
				          </select> <br>
						  <span id= "tr" class= "name-span">  </span> <br>
						  
			  <span class= "writen-lettter"> Bedding Type </span> <br>
			  <select style= "width: 352px;" name= "beds" id= "bed type" class= "background-none">
			                <option>  </option>
			                <option> Single </option>
							<option> Double </option>
							<option> Triple </option>
			              </select> <br>
						  <span id= "bt" class= "name-span">  </span> <br>
						  
			  		  
			  <span class= "writen-lettter"> Meal Plan </span> <br>
			  <select style= "width: 352px;" name= "meals" id= "meal plan" class= "background-none">
			                <option>  </option>
			                <option> Room only </option>
							<option> Breakfast </option>
							<option> Half Board </option>
							<option> Full Board </option>
			              </select> <br>
						  <span id= "mp" class= "name-span">  </span> <br>
						  
			  <span class= "writen-lettter"> Check-In </span> <br>
			  <input type= "date"  style= "width: 352px;" name= "checkins" id= "check in" class= "background-none"> </br>
			  <span id= "in" class= "name-span">  </span> <br>
			  
			  <span class= "writen-lettter"> Check-out </span> <br>
			  <input type= "date" style= "width: 352px;" name= "checkouts" id= "check out" class= "background-none"> </br>
			  <span id= "out" class= "name-span">  </span> <br>
			  
			  <span class= "writen-lettter"> Booking Amount </span> <br>
			  <input type= "text"  style= "width: 352px;" name= "amounts" id= "txt" class= "background-none"  readonly>
		   </div>
		</div>
	  </div>
	
	  <div class= "submit">
	      
     	   <a href= "http://localhost/project/html/Anchor%20tag/payment.php"> <input type= "submit" value= "SUBMIT" class= "submit-button"> </a>
		   <input type= "reset" value= "RESET" class= "reset-button">
		 
	  </div>
	  </form>
	</div>
	
	</section>
 </body> 
</html>