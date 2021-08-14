<?php
$con= mysqli_connect('localhost','root',''); 
mysqli_select_db($con,'nagarkoti') or die("not connected database");
if($con){
	echo "connected";
}	
else{
	echo "not connected";
}

$user= $_POST['name'];
$usercon= $_POST['contact'];
$useremail= $_POST['email'];
$userqy= $_POST['query'];

$q= "insert into zcontact(name,contact,email,qurry) values ('$user','$usercon','$useremail','$userqy')";
mysqli_query($con,$q);

if($q){
	echo "Data submit";
	header("location:frontpage.php");
}	

?>