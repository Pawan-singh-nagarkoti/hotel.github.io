<?php
$con= mysqli_connect('localhost','root',''); 
mysqli_select_db($con,'nagarkoti') or die("not connected database");
if($con){
	echo "connected";
}	
else{
	echo "not connected";
}

$userna1= $_POST['usename'];
$userpa1= $_POST['usepass'];

$userlog= "select * from useraccount where username= '$userna1' && password= '$userpa1' ";

$result= mysqli_query($con,$userlog);

$count= mysqli_num_rows($result);


if($count==1){
	header('location:http://localhost/project/html/Anchor%20tag/booking.php');
}
else if($userna1 == 'Nagarkoti' && $userpa1 == '0000000000' ){
	header('location:http://localhost/project/html/admin/admins.php');
}	
else{
     echo "<script>
              alert('incurrpt username and password');
	          location.href= 'http://localhost/project/html/Anchor%20tag/loginform.php';
          </script>";
}

?>