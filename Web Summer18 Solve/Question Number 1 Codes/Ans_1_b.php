<!DOCTYPE html>
<html>



<head>
	<title>Ans To The Question Number 1(a)</title>
	</head>
 
 
 
 
<body>
	<h1 style="text-align:center;">Employee</h1>
	<hr/>
	
	<div id="menu" name="menu">
	<button id="nec" name="nec" onclick="nec();">New Employee Creation</button>
	<button id="elp" name="elp" onclick="elp();">Employee List Page</button>
		</div>
		<hr/>
		
		<div id="content_area" name="content_area" style="display:none;">
		    <h2 style="text-align:center;">New Employee Creation</h2>
			<form method="post" action="post_to_db.php" style="text-align:center;">
			Name : <input type="text" id="name" name="name">
			Designation : <input type="text" id="des" name="des">
			Age : <input type="text" id="age" name="age">
			       <input type="submit" value="Submit">
				</form>
			</div>
			
			
			<script>
			function nec(){
				document.getElementById("content_area").style.display ="inline"; 
				
			}
			
			function elp(){
				document.getElementById("content").innerHTML = "Employee List Option Pressed";
				
			}
				</script>

		
	
	
	</body>




</html>