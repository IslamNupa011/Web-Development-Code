<!DOCTYPE html>


<html>



<head>
	<title>Chat App With Ajax & Php</title>
	</head>
	
	
	
<body>
<h1 style="text-align:center;">Chat With Ajax And Php</h1>

	<form action="request.php" id="register_form">
	<input class="formval" type="text" name="name" placeholder="Name">
	<input class="formval" type="text" name="message" placeholder="Message">
	<input type="submit" value="Send" onclick="myFunction(); return false;">
		</form>
		
		
		 <table style="width: 100%;">
            <thead>
                <tr>
                   <th>Name: </th>
				   <th>Message: </th>
                </tr>
            </thead>
            <tbody id="tbody">
			  <?php
                try {
                    $con = new PDO("mysql:host=localhost;dbname=chat", "root", "");

                    $stmt = "select * from message;";
                    $pdostmt = $con->query($stmt);
                    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

                    foreach ($table as $row) {
                        echo "<tr><td>$row[1]</td><td>$row[2]</td></tr>" ;
                       
                    }
                    
                    if($pdostmt->rowCount()==0){
                        echo "<tr><td colspan='2' style='text-align:center'>Chat Error</td></tr>";
                
                    }
                } catch (PDOException $ex) {
                    echo "<tr><td colspan='2' style='text-align:center'>Chat Error</td></tr>";
                }
                ?>
			 </tbody>
		</table>
		
		
		
		<script>
		
		function myFunction(){
			var elements =document.getElementsByClassName("formval");
			var formData= new FormData();
			
			for(var i=0;i<elements.length;i++){
				formData.append(elements[i].name,elements[i].value);
			}
			
			  
                
                var request=new XMLHttpRequest();
                
                request.onreadystatechange= function(){
                    if(this.readyState==4 && this.status==200){
                       document.getElementById('tbody').innerHTML=request.responseText;
                    }
                }
				request.open("post","server.php");
				request.send(formData);
		}
		
			</script>
		
		

		</body>









</html>