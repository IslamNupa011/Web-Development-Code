<?php


	
	$f0=$_POST['f0'];
	$f1=$_POST['f1'];
	
	
       try {
              $con = new PDO("mysql:host=localhost;dbname=crud_pdo", "root", "");
              $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "insert into crud values(' ','$f0','$f1')";
              $con->exec($stmt);
			  echo "<script>window.alert('Create Successful');</script>";
			 
			 
			   echo "<script>window.location.assign('index.php');</script>";
			   
			 } catch (PDOException $ex) {
                                echo "<script>showalert('Error');</script>";
                            }



?>