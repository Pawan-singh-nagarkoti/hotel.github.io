<?php
  $check= mysqli_connect('localhost','root','');
  mysqli_select_db($check,'nagarkoti') or die("data base is not connected");
 
 $q= "select * from zcontact";
 $fire= mysqli_query($check,$q);
 
?>




<!DOCTYPE html>
<html>
   <head>
      <title> Contact </title>
	  <style>
	      .table-contailner{
			border: 2px solid green;
            border-collapse: collapse;
            text-align: center;
            background-color: rgba(255,99,71,0.1);
            			
		  }
		  .contact{
			font-size: 50px;
            letter-spacing: 10px;
			font-weight: 100;			
		  }
		  th{
			  font-size: 35px;
			  border: 1px solid black;
			  font-weight: bold;
			  letter-spacing: 5px;
			  background-color: rgba(0,0,0,0.1);
			  color: green;
		  }
		  tr,td{
			  border: 1px solid black;
			  font-size: 20px;
		  }
		  tr:hover{
			  background-color: rgba(0,0,0,0.1);
			  color: blue;
			  font-weight: 80;
		  }
	  </style>
   </head>
   <body>
    <table border= "1" class= "table-contailner">
      <tr> 
	     <th colspan= "4" class= "contact"> CONTACT </th>
      </tr>		
	  <th> Name </th>
	  <th> Contact </th>
	  <th> Email-Id </th>
	  <th> Query </th>
	  </tr>



	   
    <?php
      while($rows= mysqli_fetch_assoc($fire)){
    ?>   
	
	<tr>
	   <td> <?php echo $rows['name']  ?> </td>
	   <td> <?php echo $rows['contact']  ?> </td>
	   <td> <?php echo $rows['email']  ?> </td>
	   <td> <?php echo $rows['qurry']  ?> </td>
	</tr>
	
	<?php
	  }
	?>
	
	</table>
	
   </body>
</html>

