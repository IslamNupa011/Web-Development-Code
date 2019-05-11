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
        <div>
  <a href="page1.php">Page1</a>
  <a href="page2.php">Page2</a>
  <a href="page3.php">Page3</a>
  
</div>
<br/>
<br/>
<hr/>
       
        
        <input type='button' value="Log out" onclick="window.location.assign('logout.php');">
        
    </body>
</html>
    <?php
}
?>

