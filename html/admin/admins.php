<!DOCTYPE html>
<html>
   <head>
      <title> Admin page </title>
	  <style>
	    *{
		  margin: 0px;
		  padding: 0px;
		}
		a{
			text-decoration: none;
			color: white;
		}
	    .navig{
			padding: 10px;
			background-color: rgb(30,57,93);
			color: white;
			position: fixed;
			z-index: 1;
		} 
		.navig-admin1{
		   	letter-spacing: 5px;
			color: tomato;
			font-size: 40px;
			font-weight: bold;
		}
		.navig-admin{
		   	letter-spacing: 5px;
			margin-left: 40px;
			font-size: 21px;
			font-weight: bold;
		}
		.navig-admin:hover{
			color: LawnGreen;
		}
		.navig-admin-log{
		   	letter-spacing: 5px;
			margin-left: 40px;
			font-size: 21px;
			font-weight: bold;
			color: red;
		}
		.navig-admin-log:hover{
			color: gold;
			border-bottom: 1px solid white;
		}
	
		.frame{
           position: relative;
           top: 68px;		   
		   background-color: white;
		}
		
		
	  </style>
   </head>
   <body>
      <div class= "navig"> 
	     <span class= "navig-admin1"> ADMIN </span>
		 
		 <a href= "http://localhost/project/html/admin/contact2.php" target= "open">
		     <span class= "navig-admin"> CONTACT </span>
		 </a>
			 
         <a href= "http://localhost/project/html/admin/useraccount2.php" target= "open">
		     <span class= "navig-admin"> USERACCOUNT </span>
		 </a>
		 
		 <a href= "http://localhost/project/html/admin/booking2.php" target= "open">
		     <span class= "navig-admin"> BOOKING </span>
		 </a>
		 
         <a href= "http://localhost/project/html/admin/payment2.php" target= "open">
		     <span class= "navig-admin"> PAYMENT </span>
		 </a>
		 
         <a href= "http://localhost/project/html/frontpage.php">
		     <span class= "navig-admin-log"> LOGOUT </span>
         </a>
			 
	  </div>
	  <div>
	  
	  <iframe width= "1191px"
	          height= "800px"
	          name= "open"
			  class= "frame"
			  scrolling= "no"
			  srcdoc= "<img src= 'http://localhost/project/image/5.jpg' width= '569px' height= '470px'>
			           <img src= 'http://localhost/project/image/6.jpg' width= '600px' height= '470px'>
					   <img src= 'http://localhost/project/image/3.jpg' width= '1175px' height= '310px' style= 'background: cover'>
			  ">
	  </iframe>
	  </div>
   </body>
</html>

