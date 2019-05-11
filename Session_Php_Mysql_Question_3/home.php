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
  <button onclick="show1();">Item1</button>
  <button onclick="show2();">Item2</button>
  
  
</div>



<p id ="content"> </p>


 <button onclick="show3();">Click To Clear The Content Area</button>




<br/>
<br/>
<hr/>
       
        
        <input type='button' value="Log out" onclick="window.location.assign('logout.php');">
        
		
		<script>
		function show1(){
			document.getElementById("content").innerHTML = "";
			document.getElementById("content").innerHTML = "Menu Item 1 Is Pressed Showing From The Same Page Without Reloading";
			
		}
		function show2(){
			document.getElementById("content").innerHTML = "";
			document.getElementById("content").innerHTML = "Menu Item 2 Is Pressed Showing From The Same Page Without Reloading";
			
		}
		
		
		
		function show3(){
			document.getElementById("content").innerHTML = "";
			
		}
		
		
			</script>
		
		
		
		
    </body>
</html>
    <?php
}
?>

