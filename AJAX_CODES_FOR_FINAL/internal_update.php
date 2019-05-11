<?php


if (isset($_GET['id']))
    $id = $_GET['id'];
    $number= $_GET['number'];
  

try {
    $con = new PDO("mysql:host=localhost;dbname=ajaxdb", "root", "");

    $stmt = "UPDATE sampledata SET cont_no='$number' WHERE id='$id'";
    $con->exec($stmt);

    $stmt = "select * from sampledata";
    $pdostmt = $con->query($stmt);
    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);


    $htmlcode = "";
    foreach ($table as $row) {
        $htmlcode.="<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>" .
                       
                        "<td><input type='text' id='number' name='number' placeholder='Input New Contact Number'><input type='button' value='Update' onclick='updateMe($row[0])'></td></tr>";
    }
    echo $htmlcode;
    
    if($pdostmt->rowCount()==0){
        echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
    }
} catch (PDOException $ex) {
    echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
}
?>

