<?php

     $con = mysqli_connect('127.0.0.1','root','');
	 
	 if(!$con){
		 echo 'Not Connected To Server';
	 }
	 
	 if(!mysqli_select_db($con,'test'))
	 {
		 echo 'DB Not Selected';
	 }
	 
	 $name = $_POST['n'];
	  $email = $_POST['e'];
	  $password = $_POST['p'];
	 
	 
	 $sql = "INSERT INTO signup (name,email,password) VALUES ('$name','$email','$password')";
	 
	 if(!mysqli_query($con,$sql))
	 {
		 echo 'Not Inserted';
	 }
	 
	 else {
		 echo 'Inserted';
		 
		 
	 }
	 
	 header("refresh:2; url=Signup.php");
	 
	 
	 




?>