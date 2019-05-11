<?php

session_start();

if (!isset($_SESSION['email'])) {
    echo "<script>window.location.assign('index.php')</script>";
} else {
    ?>
<html>
    <head>
        <meta charset='utf=8'>
        <title>Home Page</title>
    </head>
    <body>
	 <input type='button' value="Sign out" onclick="window.location.assign('logout.php');">
        <h1>Signed In As <?php echo $_SESSION['email']?> </h1>
        
<br/>
<br/>
<hr/>
       
        
       
        
    </body>
</html>
    <?php
}
?>

