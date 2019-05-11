<!DOCTYPE html>
<html>



<head>
	<title>Ans To The Question Number 1(c)</title>
	</head>
 
 
 
 
<body>
	<h1 style="text-align:center;">Employee</h1>
	<hr/>
	
	<div id="menu" name="menu">
	<button id="nec" name="nec" onclick="nec();">New Employee Creation</button>
	<button id="elp" name="elp" onclick="elp();">Employee List Page</button>
		</div>
		<hr/>
		
		<div id="content_area_1" name="content_area_1" style="display:none;">
		    <h2 style="text-align:center;">New Employee Creation</h2>
			<form method="post" action="post_to_db.php" style="text-align:center;">
			Name : <input type="text" id="name" name="name">
			Designation : <input type="text" id="des" name="des">
			Age : <input type="text" id="age" name="age">
			       <input type="submit" value="Submit">
				</form>
			</div>
			
			
		<div id="content_area_2" name="content_area_2" style="display:none;">
		<table style="width: 100%;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Age</th>
                    
                </tr>
            </thead>
            <tbody id="tbody">

                <?php
                try {
                    $con = new PDO("mysql:host=localhost;dbname=employees", "root", "");

                    $stmt = "select * from employees";
                    $pdostmt = $con->query($stmt);
                    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

                    foreach ($table as $row) {
                        echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>" ;
                       
					   
                    }
                    
                    if($pdostmt->rowCount()==0){
                        echo "<tr><td colspan='3' style='text-align:center'>No Data Exists</td></tr>";
                
                    }
                } catch (PDOException $ex) {
                    echo "<tr><td colspan='3' style='text-align:center'>No Data Exists</td></tr>";
                }
                ?>

            </tbody>
        </table>
			
			
			</div>
			
			
			
			<script>
			function nec(){
			
				document.getElementById("content_area_1").style.display ="inline"; 
				document.getElementById("content_area_2").style.display ="none"; // New Line added
				
			}
			
			function elp(){
				document.getElementById("content_area_2").style.display ="inline"; 
				document.getElementById("content_area_1").style.display ="none";  // New Line Added
					var id=40;
				 var req=new XMLHttpRequest();
                
                req.onreadystatechange= function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('tbody').innerHTML=req.responseText;
                    }
                }
                
                req.open("GET","internal.php?id="+id, true);
                req.send();
				
			}
				</script>

		
	
	
	</body>




</html>