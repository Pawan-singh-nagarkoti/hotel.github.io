<!DOCTYPE html>
<html>
 <head> 
   <title> more-image </title>
   <style>
     *{
	   margin: 0;
	   padding: 0;
	 }
     .home{
	   width: 20%;
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
        width: 80%;
        height: 380vh;
		color: blue;
        background-color: whiteSmoke;
        position: absolute;
        margin-left: 20%;		
	 }
	 .gallery-img1{
	    margin-left: 3px;
	    width: 470px;
		height: 300px;
		border: 1px solid red;
		border-radius: 10px;
	 }
	 a{
	  text-decoration: none;
	 }
   </style>   
 </head>
 <body>
    <section>
    <div class= "home">	
	  <a href= "http://localhost/project/html/frontpage.php">
	  <div style= "border-bottom: 2px solid green;"> 
	    <img src= "http://localhost/Project/image/20.png" class= "image">
        <span style= "color: white; margin-left: 10px;"> HomePage </span>	  
	  </div>
	  </a>
	</div>
	
	<div class= "learn-more">
	   <div>
 	      <div>
	        <img src= "http://localhost/Project/image/1.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/2.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/3.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/9.jpg" class= "gallery-img1">
	      </div>
          <div>
	        <img src= "http://localhost/Project/image/1.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/2.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/3.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/9.jpg" class= "gallery-img1">
	      </div>
		  <div>
	        <img src= "http://localhost/Project/image/1.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/2.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/3.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/9.jpg" class= "gallery-img1">
	      </div>
		  <div>
	        <img src= "http://localhost/Project/image/1.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/2.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/3.jpg" class= "gallery-img1">
	        <img src= "http://localhost/Project/image/9.jpg" class= "gallery-img1">
	      </div>
		 
       </div>
	</div>
	</section>
 </body> 
</html>