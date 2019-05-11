<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Search:<input type="search" placeholder="your search values" id="search" onkeyup="callAjax();">
        <table style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Cgpa</th>
                    <th>Update/Delete</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <tr>
                    <?php
                    try {
                        $con=new PDO("mysql:host=localhost;dbname=ajaxdb","root","");
                        $stmt="select *from sampledata";
                        $pdostmt=$con->query($stmt);
                        $table=$pdostmt->fetchAll(PDO::FETCH_NUM);
                        
                        foreach($table as $row){
                            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>".
                                    "<td><input type='button' value='Update'>"."<input type='button' value='Delete'></td></tr>";
                        }
                        
                    } catch (Exception $ex) {
                        echo "<tr><td colspan='5' style='text-align:center'>No data exists</td></tr>";
                    }
                    ?>
                </tr>

            </tbody>

        </table>
        <?php
        // put your code here
        ?>
        
        <script>
            function deleteMe(id){
                var req=new XMLHttpRequest();//obbj create server e pathabo
            
            
            //11ta method;4 r 200 check hbe
            req.onreadystatechange=function()
            {
                if(this.readyState==4 && this.status==200){//this je call dey request
                    document.getElementById('tbody').innerHTML=req.responseText;//server e r response take rcv korar jnno;jax er jnno 1ta extra php file kage
                }
                
            }
            
            req.open("GET","internal.php?search="+curvalue,true);//search insecure so get,data chole gece,method,url paramtr,asynchronous true naile hang korbe
            req.send();//ajax data paya gece
            
            
        }
                
            
        function callAjax(){
            var curvalue=document.getElementById('search').value;//value paici server e pathabo
            
            var request=new XMLHttpRequest();//obbj create server e pathabo
            
            
            //11ta method;4 r 200 check hbe
            request.onreadystatechange=function()
            {
                if(this.readyState==4 && this.status==200){//this je call dey request
                    document.getElementById('tbody').innerHTML=request.responseText;//server e r response take rcv korar jnno;jax er jnno 1ta extra php file kage
                }
                
            }
            
            request.open("GET","internal.php?search="+curvalue,true);//search insecure so get,data chole gece,method,url paramtr,asynchronous true naile hang korbe
            request.send();//ajax data paya gece
            
            
        }
        </script>
    </body>
</html>
