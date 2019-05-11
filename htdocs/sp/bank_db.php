<?php

     $con = mysqli_connect('127.0.0.1','root','');
	 
	 if(!$con){
		 echo 'Not Connected To Server';
	 }
	 
	 if(!mysqli_select_db($con,'test'))
	 {
		 echo 'DB Not Selected';
	 }
	 
	 $service_type = $_POST['sst'];
	  $date = $_POST['d'];
	  $time = $_POST['t'];
	  $amount = $_POST['amount'];
	  $security_type = $_POST['st'];
	 
	 
	 $sql = "INSERT INTO bank (service_type,date,time,amount,security_type) VALUES ('$service_type','$date','$time','$amount','$security_type')";
	 
	 if(!mysqli_query($con,$sql))
	 {
		 echo 'Not Inserted';
	 }
	 
	 else {
		 echo 'Inserted';
		 
		 
	 }
	 
	 header("refresh:2; url=Bank.php");
	 
	 
	 




?>