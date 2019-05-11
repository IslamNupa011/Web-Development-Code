<?php

session_start();

if (!isset($_SESSION['uname'])) {
    echo "<script>window.location.assign('index.php')</script>";
} else {
    ?>
<html>
    <head>
        <meta charset='utf=8'>
        <title>Home Page</title>
    </head>
    <body>
        <h1>Welcome <?php echo $_SESSION['uname']?> </h1>
        
        Red: <input type="radio" name="color" id="red" value="red" onchange="setback('red');"> 
        Green: <input type="radio" name="color" id="green" value="green" onchange="setback('green');">
        
        <script>
        function setback(clr){
            document.getElementsByTagName('body')[0].style.backgroundColor=clr;
            var curdate=new Date();
            curdate.setDate(curdate.getDate()+3600);
            document.cookie="color="+clr+";expires="+curdate.toUTCString();
        }
        </script>
        
        <input type='button' value="Log out" onclick="window.location.assign('logout.php');">
        
    </body>
</html>
    <?php
}
?>

