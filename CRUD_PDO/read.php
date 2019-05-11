 <?php
                try {
                    $con = new PDO("mysql:host=localhost;dbname=crud_pdo", "root", "");

                    $stmt = "select * from crud;";
                    $pdostmt = $con->query($stmt);
                    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);
					//echo "<style>table {
 // border-collapse: collapse;
//}

//table, th, td {
  //border: 1px solid black;
//}</style>";
                    echo "<table style='width:10%;'>";
					//echo "<thead>";
					echo "<th>Id</th><th>f0</th><th>f1</th><th>Update</th><th>Delete</th>";
					
                    foreach ($table as $row) {
						
						echo "<tr>
						<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>
						
						<td><form method='post' action='update_input.php'>
						<input type=hidden name=id value='".$row[0]."'>
						<input type='submit' value='Update'></form></td>
						
						<td><form method='post' action='delete.php'><input type=hidden name=id value='".$row[0]."'><input type='submit' value='Delete'>
						
						</form></td></tr>";
                       
                       
                    }
                    
					
					
					//echo "</table>";
					
                    if($pdostmt->rowCount()==0){
                        echo "<tr><td colspan='3' style='text-align:center'>No Data</td></tr>";
                
                    }
                } catch (PDOException $ex) {
                    echo "<tr><td colspan='3' style='text-align:center'>No Data</td></tr>";
                }
?>