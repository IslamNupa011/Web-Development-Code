<?php


$name=$_POST["name"];
$message=$_POST["message"];

   $servername = "localhost";
    $username = "root";
    $password = "";                    
    $dbname = "chat";
  
	
	try{
			 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "insert into message values('','$name','$message');";
			  $conn->exec($stmt);
		
		
	}catch(PDOException $ex){
		
		echo "<script>showalert('Chat Error');</script>";
		
	}

	
	try {
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $stmt = "select * from message ;";
    $pdostmt = $con->query($stmt);
    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

    $htmlcode="";
    foreach ($table as $row) {
        $htmlcode.="<tr><td>$row[1]</td><td>$row[2]</td></tr>";
        
    }
    echo $htmlcode;
} catch (PDOException $ex) {
    echo "<tr><td colspan='2' style='text-align:center'>Chat Error</td></tr>";
}
	
	
	
	

?>