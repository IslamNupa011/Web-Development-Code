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
		
		<div id="content_area" name="content_area">
		
			<p id="content"></p>
			</div>
			
			
			<script>
			function nec(){
				document.getElementById("content").innerHTML = "New Employee Creation Option Pressed";
				
			}
			
			function elp(){
				document.getElementById("content").innerHTML = "Employee List Option Pressed";
				
			}
				</script>

		
	
	
	</body>




</html>