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
	      
	  </style>
   </head>
   <body>
    <table border= "1">
       <tr> 
	    <th colspan= "4"> Contact us  </th>
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

