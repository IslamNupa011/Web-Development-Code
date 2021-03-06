<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>AJAX Notification</title>
		
		
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
	<h1 style="text-align:center;">AJAX Notification</h1>
        

        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>CGPA</th>
                    <th>Notify Button</th>
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
                        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>" .
                       
                        "<td><input type='button' value='Notification' onclick='notify($row[0])'></td></tr>";
                    }
                    
                    if($pdostmt->rowCount()==0){
                        echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
                
                    }
                } catch (PDOException $ex) {
                    echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
                }
                ?>

            </tbody>
        </table>

        <script>
            
            
            function notify(id){
                var req=new XMLHttpRequest();
                window.alert("Sample Notification");
                req.onreadystatechange= function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('tbody').innerHTML=req.responseText;
                    }
                }
                
                req.open("GET","internal_notification.php?id="+id, true);
                req.send();
            }

          
        </script>

    </body>
</html>
