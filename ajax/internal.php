<?php

$searchval = "";
if (isset($_GET['search']))
    $searchval = $_GET['search'];

try {
    $con = new PDO("mysql:host=localhost;dbname=ajaxdb", "root", "");

    $stmt = "select * from sampledata where email like '%$searchval%';";
    $pdostmt = $con->query($stmt);
    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

    $htmlcode="";
    foreach ($table as $row) {
        $htmlcode.="<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>" .
        "<td><input type='button' value='Update'>" .
        "<input type='button' value='Delete'></td></tr>";
    }
    echo $htmlcode;
} catch (PDOException $ex) {
    echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
}
?>
