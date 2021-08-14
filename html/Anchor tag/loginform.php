<!DOCTYPE html>
<html>
   <head>
     <title> Login form </title>
	  <script src= "http://localhost/project/javascript/login.js"> </script>
	 <style>
	    body{
		  background-image: url('http://localhost/project/image/3.jpg');
		  background-size: cover;
		}
		a{
	      text-decoration: none;
		  color: white;
	    }
		a:hover{
		   color: yellow;
		   text-shadow: 2px 2px red;
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
		.container{
		  background-color: rgba(0,0,0,0.4);
		  border-radius: 5px;
		  border: 2px solid white;
		  width: 500px;
		  margin-top: 100px;
		  margin-left: 450px;
		}
		.container-login{
		  color: LawnGreen;
		  border-bottom: 2px solid white;
		  text-align: center;
		  letter-spacing: 5px;
		  background-color: rgba(255,90,71,0.5);
		  font-weight: bold;
		  font-size: 30px;
		}
		.username{
		   color: white;
		   text-align: center;
		   letter-spacing: 10px;
		   font-size: 30px;
		   margin-top: 10px;
		}
		.username-input{
		   color: white;
		   width: 350px;
		   font-size: 20px;
		   margin-left: 70px;
		   background: none;
		   border: 2px solid white;
		}
		.userspan{
		  letter-spacing: 5px;
		  color: red;
		  font-size: 18px;
		  margin-left: 80px;
		}
		.password{
		   color: white;
		   text-align: center;
		   letter-spacing: 10px;
		   font-size: 30px;
		   margin-top: 10px;
		}
		.password-input{
		   color: white;
 		   width: 350px;
		   font-size: 20px;
		   margin-left: 70px;
		   background: none;
		   border: 2px solid white;
		}
		.login{
		   font-size: 20px;
		   margin-left: 190px;
		   background: none;
		   color: white;
		}
		.login:hover{
		  border-radius: 5px;
		  background-color: rgba(255,99,71,0.4);
		}
		.dont{
		   color: white;
		   margin-top: 10px;
		   margin-left: 90px;
		}
		.dont-inner{
		    color: LawnGreen;
		}
	 </style>
   </head>
   <body>
      <div class= "home">	
	  <a href= "http://localhost/project/html/frontpage.php">
	  <div style= "border-bottom: 2px solid green;"> 
	    <img src= "http://localhost/Project/image/20.png" class= "image">
        <span style= "color: white; margin-left: 10px;"> HomePage </span>	  
	  </div>
	  </a>
	</div>
      <form action= "http://localhost/project/html/Anchor%20tag/loginfrom1.php" method= "post" autocomplete= "off" onsubmit= "return demo()">
	   <div class= "container">
	   <div class= "container-login"> Login </div>
	   
       <div class= "username"> Username </div>
	   <input type= "text" maxlength= "20" name= "usename" id= "name" class= "username-input" placeholder=  "username"> <br>
	   <span id= "na" class= "userspan"> </span> <br>
	   
	   <div class= "password"> Password </div>
	   <input type= "password" maxlength= "10" name= "usepass" id= "pass" class= "password-input" placeholder=  "password"> <br>
	   <span id= "pa" class= "userspan"> </span> <br>
	   
	   
	     <input type= "submit" value= "Log In" class= "login">
	   
	   
	   <div class= "dont"> Don't have account? 
	      <span class= "dont-inner"> 
		    <a href= "http://localhost/project/html/accountcreate.php" title= "create your account"> Sign Up </a>
		  </span>
	   </div>
	   </div>
	  <form>
   </body>
</html>