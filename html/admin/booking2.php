<?php
  $check= mysqli_connect('localhost','root','');
  mysqli_select_db($check,'nagarkoti') or die("data base is not connected");
 
 $q= "select * from userbooking";
 $fire= mysqli_query($check,$q);
 
?>
<!DOCTYPE html>
<html>
   <head>
      <title> </title>
	  <style>
	      
	      .table-contailner{
			border: 2px solid green;
            border-collapse: collapse;
            text-align: center;
            background-color: rgba(255,99,71,0.1);
            			
		  }
		  .book{
			font-size: 30px;
            letter-spacing: 10px;
			font-weight: bold;
		  }
		  th{
			  font-size: 20px;
			  border: 2px solid green;
			  font-weight: bold;
			  background-color: rgba(0,0,0,0.1);
			  color: green;
		  }
		  tr,td{
			  border: 2px solid green;
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
	     <th colspan= "12" class= "book"> BOOKING </th>
       </tr>
       <tr> 
		 <th> Title </th>
		 <th> First name </th>
		 <th> Last Name </th>
		 <th> Email-Id </th>
		 <th> Phone Number </th>
		 <th> Nationality </th>
		 <th> TypeRoom </th>
		 <th> Bedding </th>
		 <th> MealPlan </th>
		 <th> Check In </th>
		 <th> Check Out </th>
		 <th> Booking Amount </th>
	   </tr>	
    <?php
      while($rows= mysqli_fetch_assoc($fire)){
    ?>   
	
	<tr>
	   <td> <?php echo $rows['title']  ?> </td>
	   <td> <?php echo $rows['firstname']  ?> </td>
	   <td> <?php echo $rows['lastname']  ?> </td>
	   <td> <?php echo $rows['emailid']  ?> </td>
       <td> <?php echo $rows['phonenumber']  ?> </td>
	   <td> <?php echo $rows['nationality']  ?> </td>
	   <td> <?php echo $rows['typeroom']  ?> </td>
	   <td> <?php echo $rows['bedding']  ?> </td>
	   <td> <?php echo $rows['mealplan']  ?> </td>
	   <td> <?php echo $rows['checkin']  ?> </td>
	   <td> <?php echo $rows['checkout']  ?> </td>
	   <td> <?php echo $rows['bookingamount']  ?> </td>
	</tr>
	
	<?php
	  }
	?>
	
	</table>
	
   </body>
</html>

