<?php
$con= mysqli_connect('localhost','root',''); 
mysqli_select_db($con,'nagarkoti') or die("not connected database");
if($con){
	echo "connected";
}	
else{
	echo "not connected";
}

$usercard= $_POST['card'];
$usermonth= $_POST['month'];
$useryear= $_POST['year'];
$usercvv= $_POST['cvv'];
$useramount= $_POST['amount'];

$q= "insert into userpayment(cardnumber,month,year,cvv,amount) values ('$usercard','$usermonth','$useryear','$usercvv','$useramount')";
mysqli_query($con,$q);

if($q){
	echo "Data submit";
	header("location:payment.php");
}	

?>