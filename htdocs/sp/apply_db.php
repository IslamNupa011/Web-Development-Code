<?php

     $con = mysqli_connect('127.0.0.1','root','');
	 
	 if(!$con){
		 echo 'Not Connected To Server';
	 }
	 
	 if(!mysqli_select_db($con,'test'))
	 {
		 echo 'DB Not Selected';
	 }
	 
	 $first_name = $_POST['f'];
	  $last_name = $_POST['l'];
	  $education = $_POST['e'];
	  $experience = $_POST['ex'];
	  $foot = $_POST['f'];
	  $inch = $_POST['inch'];
	  $dob = $_POST['date'];
	  $gender = $_POST['gen'];
	  $email = $_POST['em'];
	  $mobile = $_POST['mobile'];
	  $company_name = $_POST['c'];
	  $post = $_POST['p'];
	 
	 
	 $sql = "INSERT INTO apply (first_name,last_name,education,experience,foot,inch,dob,gender,email,mobile,company_name,post) VALUES ('$first_name','$last_name','$education','$experience','$foot','$inch','$dob','$gender','$email','$mobile','$company_name','$post')";
	 
	 if(!mysqli_query($con,$sql))
	 {
		 echo 'Not Inserted';
	 }
	 
	 else {
		 echo 'Inserted';
		 
		 
	 }
	 
	 header("refresh:2; url=Apply.php");
	 
	 
	 




?>