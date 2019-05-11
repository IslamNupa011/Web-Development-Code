<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP MySQL Connection</title>

        <style>
            #left_menu>input[type="button"]:hover{
                background-color:#b3b3ff;
            }
        </style>

        <script>
            ///to hide the alert message box
            function hidealert() {
                document.getElementById('alertmsg').innerHTML = "";
                document.getElementById('alertbox').style.display = "none";
            }
            ///to show the alert message box
            function showalert(alrtmsg) {
                document.getElementById('alertmsg').innerHTML = alrtmsg;
                document.getElementById('alertbox').style.display = "block";
            }
            ///after successfully connected to database
            function dbconnected() {
                document.getElementById('cdb').disabled = true;
                document.getElementById('ddb').disabled = false;
                ///showing the insert and showtable sections
                document.getElementById('insertsection').style.display = "block";
                document.getElementById('showdatasection').style.display = "block";
            }
            ///after disconnected to database
            function dbdisconnected() {
                document.getElementById('cdb').disabled = false;
                document.getElementById('ddb').disabled = true;
                ///hiding the insert and show table sections
                document.getElementById('insertsection').style.display = "none";
                document.getElementById('showdatasection').style.display = "none";
                document.getElementById('showdatasection').innerHTML="";
            }
            ///to check whether or not the customer wants to delete the data
            function deleterow(id) {
                if (window.confirm('Do you want to delete the data?')) {
                    window.location.assign('index.php?status=connect&type=delete&id=' + id);
                }
            }
            ///when update button is clicked
            function updaterow(id,prevname,prevemail){
                console.log("I am called");
                var newname=window.prompt('Updated Name: ',prevname);
                var newemail=window.prompt('Updated Email:',prevemail);
                if(newname=="") newname=prevname;
                if(newemail=="") newemail=prevemail;
                
                window.location.assign("index.php?status=connect&type=update&id="+id+"&name="+newname+"&email="+newemail);
            }
        </script>
    </head>
    <body>
        <!-- alert message show section, call function showalert() or hidealert() -->
        <div id="alertbox" style="background-color:#ccffee;display:none;color:#660000;margin:3px;padding:3px;border:1px outset;width:100%;height:25px;">
            <span id="alertmsg"></span>
            <span style="float:left;"><input type="button" value="X" style="background-color:#00b36b;" onclick="hidealert();"></span>
        </div>

        <!--the main body section-->
        <div>
            <!--left panel containing the buttons only-->
            <span id="left_menu" style="width:20%;height:600px;overflow:auto;background-color:#ffddcc;display:inline-block;">
                <input id="cdb" name="cdb" type="button" value="Connect DataBase" style="width:100%;" onclick="window.location.assign('index.php?status=connect');"><br/>
                <input id="ddb" name="ddb" type="button" value="Disconnect DataBase" style="width:100%;" disabled onclick="window.location.assign('index.php?status=disconnect')"><br/>
            </span>
            <!--right panel containg the other parts-->
            <span id="content" style="width:78%;height:600px;overflow:auto;display:inline-block;background-color:#ecf9f2;">
                <div id="insertsection" style="width:99%;max-height:200px;display:none;">
                    <h4>Insert Data</h4>
                    <form method='get' action='index.php'>
                        Name: <input type='text' name='name' id='name'> 
                        Email: <input type='email' name='email' id='email'>
                        <input type='submit' value='Submit'>
                        <!-- this hidden input form will send a get variable named 'type' whose value is 'insert', check the url -->
                        <input type='hidden' name='status' value='connect'>
                        <input type='hidden' name='type' value='insert'>
                    </form>
                </div>
                <div id="showdatasection" style="width:99%;height:400px;overflow:auto;display:none;">
                    <!-- this section will show the database table -->
                </div>
            </span>
        </div>
        <?php
        
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(isset($_GET['status'])){
                $status=$_GET['status'];
                if($status=='connect'){
                    $serveraddr = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "projectdb";
                    try {
                        $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $flag=false;
                        ///when insert parameter is passed
                        if(isset($_GET['type'])&& $_GET['type']=='insert'){
                            $flag=true;
                            try {
                                $pdostmt = $conn->prepare("select max(id) as total from userlist");
                                $pdostmt->execute();
                                $res = $pdostmt->fetchAll(PDO::FETCH_NUM);
                                $len = $res[0][0];  ///here $len contains the max assigned id to users, so that we can assign the next value(i.e. +1) to the new user

                                if (isset($_GET['name']) && isset($_GET['email'])){
                                    $stmt = "insert into userlist values(" . ($len + 1) . ",'" . $_GET['name'] . "','" . $_GET['email'] . "')";
                                    $conn->exec($stmt);
                                }
                            } catch (PDOException $ex) {
                                echo "<script>showalert('insertion error');</script>";
                            }
                        }
                        
                        ///when delete parameter is passed with id
                        if(isset($_GET['type']) && $_GET['type']=='delete'){
                            $flag=true;
                            try {
                                if (isset($_GET['id'])) {
                                    $stmt = 'delete from userlist where id=' . $_GET['id'];
                                    $conn->exec($stmt);
                                }
                            } catch (PDOException $ex) {
                                echo "<script>showalert('can\'t delete data due to error');</script>";
                            }
                        }
                        
                        if(isset($_GET['type']) && $_GET['type']=='update'){
                            $flag=true;
                            try {
                                if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['email'])){
                                    $stmt = "update userlist set name='" . $_GET['name'] . "', email='" . $_GET['email'] . "' where id=".$_GET['id'];
                                    $conn->exec($stmt);
                                }
                            } catch (PDOException $ex) {
                                echo "<script>showalert('update error');</script>";
                            }
                        }
                        
                        if($flag==false) echo "<script>showalert('database is connected');</script>";
                        
                        ///showing data in the table
                        echo "<script>dbconnected();</script>";
                        try {
                            $pdostat = $conn->prepare("select * from userlist");
                            $pdostat->execute();
                            $res = $pdostat->fetchAll(PDO::FETCH_NUM);
                            $tablegenerate = "<h4>Show Table Data</h4>  <table style='width:100%;border-collapse:collapse;border:1px solid black;'><thead><tr><th>ID</th><th>Name</th><th>Email</th><th></th></tr></thead></tbody>";
                            foreach ($res as $innarr) {
                                $tablegenerate = $tablegenerate . "<tr>";
                                foreach ($innarr as $val) {
                                    $tablegenerate = $tablegenerate . "<td style='border:1px solid black'>" . $val . "</td>";
                                }
                                
                                $tablegenerate = $tablegenerate . "<td style='border:1px solid black'>".
                                                    "<input type='button' value='Delete' onclick='deleterow($innarr[0]);'>".
                                                    "<input type='button' value='Update' onclick='updaterow(".$innarr[0].",\\\"".$innarr[1]."\\\",\\\"".$innarr[2]."\\\");'>".
                                                "</td>";
                                $tablegenerate = $tablegenerate . "</tr>";
                            }
                            $tablegenerate = $tablegenerate . "</tbody></table>";

                            echo "<script>document.getElementById('showdatasection').innerHTML=\"".$tablegenerate."\";</script>";
                        } catch (PDOException $ex) {
                            echo "<script>showalert('Can\'t read data from database table');</script>";
                        }
                    } catch (PDOException $ex) {
                        echo "<script>dbdisconnected();showalert('can\'t conenct to database');</script>";
                    }
                    $conn=null;
                }
                else if($status=='disconnect'){
                    echo "<script>dbdisconnected();showalert('disconnected from database');</script>";
                }
            }
        }
        ?>
    </body>
</html>
