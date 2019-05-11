<?php


$id=$_POST['id'];
	
    


try {
             $con = new PDO("mysql:host=localhost;dbname=crud_pdo", "root", "");
             $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "DELETE FROM crud WHERE id='$id';";
			  
              $con->exec($stmt);
			  
			  echo "<script>window.alert('Deleted Succesfully');</script>";
			 
			  
			   echo "<script>window.location.assign('read.php');</script>";
			   
			 } catch (PDOException $ex) {
                                echo "<script>window.alert('Not Deleted');</script>";
                            }



?>

