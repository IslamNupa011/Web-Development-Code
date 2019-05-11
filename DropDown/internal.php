<?php

$searchval = "";
if (isset($_GET['id']))
    $searchval = $_GET['search'];
   

try {
    $con = new PDO("mysql:host=localhost;dbname=dropdown", "root", "");

    $stmt = "select * from area where id='$searchval';";
    $pdostmt = $con->query($stmt);
    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

    $htmlcode="";
    foreach ($table as $row) {
        $htmlcode.="<option value="'.$row[0].'" id='c'>'.$row[2].'</option>"; // Need to apply Jquery to make it work, but for exam it's ok,till this 
    }
    echo $htmlcode;
} catch (PDOException $ex) {
    echo "No Info";
}
?>
