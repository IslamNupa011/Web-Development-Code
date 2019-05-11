<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Search: <input type="search" placeholder="your search values" id="search" onkeyup="callAjax();">

        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>CGPA</th>
                    <th>Update/Delete</th>
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
                        "<td><input type='button' value='Update'>" .
                        "<input type='button' value='Delete' onclick='deleteMe($row[0])'></td></tr>";
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
            
            
            function deleteMe(id){
                var req=new XMLHttpRequest();
                
                req.onreadystatechange= function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('tbody').innerHTML=req.responseText;
                    }
                }
                
                req.open("GET","delete.php?id="+id, true);
                req.send();
            }

            function callAjax() {
                var curvalue=document.getElementById('search').value;
                
                var request=new XMLHttpRequest();
                
                request.onreadystatechange= function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('tbody').innerHTML=request.responseText;
                    }
                }
                
                request.open("GET","internal.php?search="+curvalue, true);
                request.send();
            }
        </script>

    </body>
</html>
