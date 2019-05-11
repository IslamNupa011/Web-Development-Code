<?php

    $servername = "localhost";
    $username = "root";
    $password = "";                    
    $dbname = "employees";
	$name=$_POST['name'];
	$des=$_POST['des'];
	$age=$_POST['age'];
    
   
	
	try{
			 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "insert into employees values(' ','$name','$des','$age');";
			 $conn->exec($stmt);
			
			 echo "<script>window.location.assign('Ans_1_b.php'); </script>";
		
	}catch(PDOException $ex){
		
		echo "<script>showalert('sign up error');</script>";
		
	}



?>