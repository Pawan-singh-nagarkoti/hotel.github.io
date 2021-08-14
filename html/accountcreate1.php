<?php
$con= mysqli_connect('localhost','root',''); 
mysqli_select_db($con,'nagarkoti') or die("not connected database");
if($con){
	echo "connected";
}	
else{
	echo "not connected";
}

$userna= $_POST['uname'];
$userpa= $_POST['upass'];
$userem= $_POST['uemail'];
$useruc= $_POST['ucon'];

$q= "insert into useraccount(username,password,emailid,contact) values 
('$userna','$userpa','$userem','$useruc')";

mysqli_query($con,$q);

if($q){
	header("location:accountcreate.php");
}	

?>