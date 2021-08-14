<!DOCTYPE html>
<html>
   <head>
      <title> Payment </title>
	  <script src= "http://localhost/project/javascript/payment.js"> </script>
	  <style>
	    a{
		  text-decoration: none;
		  color: white;
		}
	     body{
 	       background-image : url(http://localhost/project/image/2.jpg); 
		   background-size : cover ;
		}
		.logout{
		   font-size: 30px;
		   border: 2px solid green;
		   border-radius: 5px;
		   margin-left: 1090px;
		   text-align: center;
		   color: white;
		   text-shadow: 2px 2px red;
		   letter-spacing: 2px;
		}
		.logout:hover{
		  border-radius: 10px;
		  background-color: rgba(255,99,71,0.4);
		}
		.outer{
		  background-color: rgba(0,0,0,0.4);
		  border: 2px solid white;
		  border-radius: 5px;
		  width: 300px;
		  margin-left: 400px;
		  margin-top: 30px;
		}
		.outer-booking{
		  letter-spacing: 5px;
		  color: LawnGreen;
		  text-align: center;
		  border-bottom: 2px solid white;
		  background-color: rgba(255,99,71,0.4);
		}
		.cardnumber{
		  letter-spacing: 2px;
		  color: white;
		  margin-left: 10px;
		  margin-top: 10px;
		}
		.cardnumber-inner{
		  width: 270px;
		  margin-left: 10px;
		  background-color: rgba(0,0,0,0.4);
		  border: 2px solid white;
		  color: white;
		  font-size: 20px;
		}
		.cardnumber-inner1{
		  margin-left: 10px;
		  color: red;
		  font-size: 18px;
		}
		.cardnumber-inner2{
		  width: 120px;
		  margin-left: 10px;
		  background-color: rgba(0,0,0,0.4);
		  border: 2px solid white;
		  color: white;
		  font-size: 20px;
		}
		.usersubmit{
		   font-size: 20px;
		   margin-left: 80px;
		   background: none;
		   color: white;
		   margin-bottom: 5px;
		   letter-spacing: 2px;
		}
		.usersubmit:hover{
		  border-radius: 8px;
		  background-color: rgba(255,99,71,0.4);
		}
		.usersubmit1{
		   font-size: 20px;
		   margin-left: 10px;
		   background: none;
		   color: white;
		   margin-bottom: 5px;
		   letter-spacing: 2px;
		}
		.usersubmit1:hover{
		  border-radius: 8px;
		  background-color: rgba(255,99,71,0.4);
		}
	  </style>
   </head>
   <body>
     <div class= "logout"> <a href= "http://localhost/project/html/frontpage.php"> Logout </a> </div>
     <form action= "http://localhost/project/html/Anchor tag/payment1.php"  method= "post" autocomplete= "off" onsubmit= "return demo()">
	  <div class= "outer"> 
      <div class= "outer-booking"> Booking PAYMENT </div>
	  
	  <div class= "cardnumber"> Enter your card Number </div>
	  <input type= "text" maxlength= "16" id= "name" name= "card" class= "cardnumber-inner" placeholder= "Enter your card Number"> <br>
	  <span id= "na" class= "cardnumber-inner1">  </span> <br>
	  
	  <div class= "cardnumber"> Valid UpTo </div>
	  <input type= "tel" maxlength= "2" id= "upto" name= "month" class= "cardnumber-inner2" placeholder= "MM"> 
	  <input type= "tel" maxlength= "4" id= "upto1" name= "year" class= "cardnumber-inner2" placeholder= "20YY"> <br>
	  <span  id= "up" class= "cardnumber-inner1">  </span>
	  <span  id= "up1" class= "cardnumber-inner1">  </span> <br>
	  
	  <div class= "cardnumber"> CVV </div>
	  <input type= "tel" maxlength= "3" id= "cvv" name= "cvv" class= "cardnumber-inner"  placeholder= "CVV"> <br>
	  <span id= "cv" class= "cardnumber-inner1">  </span> <br>
	  
	  <div class= "cardnumber"> Booking amount </div>
	  <input type= "tel" maxlength= "4" id= "bk" name= "amount" class= "cardnumber-inner" placeholder= "Amount"> <br>
	  <span id= "bk1" class= "cardnumber-inner1">  </span>
	  
	  <div> 
	     <input type= "submit" value= "Pay" class= "usersubmit">
		 <input type= "reset" value= "reset" class= "usersubmit1">
	  </div>
	  </div>
	 </form>
   </body>
</html>