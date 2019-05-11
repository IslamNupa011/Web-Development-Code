<?php


$id=$_POST['id'];
$f0=$_POST['f0'];
$f1=$_POST['f1'];
	
    



try {
             $con = new PDO("mysql:host=localhost;dbname=crud_pdo", "root", "");
             $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			 
			 			  $stmt = "UPDATE crud SET f0='$f0',f1='$f1' WHERE id='$id'";
              $con->exec($stmt);
			  
			  echo "<script>window.alert('Updated Succesfully');</script>";
			 
			  
			   echo "<script>window.location.assign('read.php');</script>";
			   
			 } catch (PDOException $ex) {
                                echo "<script>window.alert('Not Updated');</script>";
								 echo "<script>window.location.assign('read.php');</script>";
                            }



?>

