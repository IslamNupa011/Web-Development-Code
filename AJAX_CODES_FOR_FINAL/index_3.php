<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>AJAX SEARCH</title>
		
		
		<style>
		table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
			</style>
    </head>
    <body>
	     <h1 style="text-align:center;">AJAX SEARCHING CODE</h1>
        Search: <input type="search" placeholder="Enter Email" id="search" onkeyup="callAjax();">

        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>CGPA</th>
                  
                </tr>
            </thead>
            <tbody id="tbody">

                <?php
                try {
                    $con = new PDO("mysql:host=localhost;dbname=ajaxdb", "root", "");

                    $stmt = "select * from sampledata";
                    $pdostmt = $con->query($stmt);
                    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

                    foreach ($table as $row) {
                        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>" ;
                        
                    }
                    
                    if($pdostmt->rowCount()==0){
                        echo "<tr><td colspan='4' style='text-align:center'>No Data Exists</td></tr>";
                
                    }
                } catch (PDOException $ex) {
                    echo "<tr><td colspan='4' style='text-align:center'>No Data Exists</td></tr>";
                }
                ?>

            </tbody>
        </table>

        <script>
            
            
           
            function callAjax() {
                var curvalue=document.getElementById('search').value;
                
                var request=new XMLHttpRequest();
                
                request.onreadystatechange= function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('tbody').innerHTML=request.responseText;
                    }
                }
                
                request.open("GET","internal_3.php?search="+curvalue, true);
                request.send();
            }
        </script>

    </body>
</html>
