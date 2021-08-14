<?php
$con= mysqli_connect('localhost','root',''); 
mysqli_select_db($con,'nagarkoti') or die("not connected database");
if($con){
	echo "connected";
}	
else{
	echo "not connected";
}

$user1= $_POST['titles'];
$user2= $_POST['fname'];
$user3= $_POST['lname'];
$user4= $_POST['emails'];
$user5= $_POST['contacts'];
$user6= $_POST['nations'];
$user7= $_POST['rooms'];
$user8= $_POST['beds'];
$user9= $_POST['meals'];
$user10= $_POST['checkins'];
$user11= $_POST['checkouts'];
$user12= $_POST['amounts'];


$q= "insert into userbooking(title,firstname,lastname,emailid,phonenumber,nationality,typeroom,bedding,mealplan,checkin,checkout,bookingamount) values 
('$user1','$user2','$user3','$user4','$user5','$user6','$user7','$user8','$user9','$user10','$user11','$user12')";
mysqli_query($con,$q);


if($q){
	header("location:http://localhost/project/html/Anchor%20tag/payment.php");
}	

?>