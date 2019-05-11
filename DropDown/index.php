<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Dependent Drop Down</title>
    </head>
    <body>
       
        
                <?php
                try {
                    $con = new PDO("mysql:host=localhost;dbname=dropdown", "root", "");

                    $stmt = "select * from city";
                    $pdostmt = $con->query($stmt);
                    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);
					
					echo '<select>';
					echo '<option value="">Select City</option>';
                    foreach ($table as $row) {
						
					 echo '<option value="'.$row[0].'" onclick="drop($row[0])">'.$row[1].'</option>';
				
                    }
					 echo '</select>';
					 
					 
					 
					 
					 
					 echo '<select id="city">';
					echo '<option value="">Select Area</option>';
                    foreach ($table as $row) {
						
					 echo '<option>'.$row[2].'</option>';
				
                    }
					 echo '</select>';
					 
					 
					 
		     
                    
                    if($pdostmt->rowCount()==0){
                        echo "No Data";
                
                    }
                } catch (PDOException $ex) {
                    echo "Error";
                }
                ?>
				
				
				
   
           
<script>
            function drop(id) {
               
                
                var request=new XMLHttpRequest();
                
                request.onreadystatechange= function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('city').innerHTML=request.responseText;
                    }
                }
                
                request.open("GET","internal.php?search="+id, true);
                request.send();
            }
        </script>

    </body>
</html>
