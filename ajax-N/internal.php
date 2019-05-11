<?php

    $searchVal="";

    if(isset($_GET['search'])) $searchVal=$_GET['search'];//1line tai {} dey nai

    //abr database er connection create try catch index code er
     try {
                        $con=new PDO("mysql:host=localhost;dbname=ajaxdb","root","");
                        $stmt="select *from sampledata where email like '%$searchVal%'";//like query % pattern match
                        $pdostmt=$con->query($stmt);
                        $table=$pdostmt->fetchAll(PDO::FETCH_NUM);
                        
                        $htmlcode="";
                        foreach($table as $row){//server text akare pay;striing akare join korbo;sb row er code send korbo
                            $htmlcode.="<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>".
                                    "<td><input type='button' value='Update'>"."<input type='button' value='Delete' onclick='deleteMe($row[0])'></td></tr>";//sb gula join kore purata eksathe pathabo
                        }
                        echo $htmlcode;//sb row er html code ace,print mane server e chole jawa
                    } catch (Exception $ex) {
                        echo "<tr><td colspan='5' style='text-align:center'>No data exists</td></tr>";
                    }
?>