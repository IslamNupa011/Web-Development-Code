<?php

$id = "";
if (isset($_GET['id']))
    $id = $_GET['id'];
   

try {
    $con = new PDO("mysql:host=localhost;dbname=employees", "root", "");

    $stmt = "select * from employees where age<'$id' ;";
    $pdostmt = $con->query($stmt);
    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

    $htmlcode="";
    foreach ($table as $row) {
        $htmlcode.="<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>" ;
    }
    echo $htmlcode;
} catch (PDOException $ex) {
    echo "<tr><td colspan='3' style='text-align:center'>No Data Exists</td></tr>";
}
?>
