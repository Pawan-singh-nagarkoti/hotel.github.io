<?php
  $check= mysqli_connect('localhost','root','');
  mysqli_select_db($check,'nagarkoti') or die("data base is not connected");
 
 $q= "select * from useraccount";
 $fire= mysqli_query($check,$q);
 
?>
<!DOCTYPE html>
<html>
   <head>
      <title> </title>
	  <style>
	      table{
			  width: 1165px;
		  }
	      .table-contailner{
			border: 2px solid green;
            border-collapse: collapse;
            text-align: center;
            background-color: rgba(255,99,71,0.1);			
		  }
		  .account{
			font-size: 50px;
            letter-spacing: 10px;
			font-weight: 100;	
		  }
		  th{
			  font-size: 35px;
			  border: 1px solid black;
			  font-weight: bold;
			  letter-spacing: 6px;
			   background-color: rgba(0,0,0,0.1);
			  color: green;
		  }
		  tr,td{
			  border: 1px solid black;
			  font-size: 20px;
			  letter-spacing: 3px;
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
	     <th colspan= "4" class= "account"> USER ACCOUNT </th>
       </tr>
       <tr> 
		 <th> Username </th>
		 <th> Password </th>
		 <th> Email-Id </th>
		 <th> Contact </th>
	   </tr>	
    <?php
      while($rows= mysqli_fetch_assoc($fire)){
    ?>   
	
	<tr>
	   <td> <?php echo $rows['username']  ?> </td>
	   <td> <?php echo $rows['password']  ?> </td>
	   <td> <?php echo $rows['emailid']  ?> </td>
	   <td> <?php echo $rows['contact']  ?> </td>
	</tr>
	
	<?php
	  }
	?>
	
	</table>
	
   </body>
</html>

