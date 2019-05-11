<!DOCTYPE html>


<html>

	<head>
		<title>Dynamic Trigeer Testing</title>
		</head>
		
		
		
	<body>
	
	<?php
	$conn=mysqli_connect('127.0.0.1','root','');
	mysqli_select_db($conn,'t86');
	$stmt="Select * from tester_turjo_trigger;";
	$pdostmt=mysqli_query($conn,$stmt);
	?>
	
	<table>
	
		    <tr>
			<th>Service Name</th>
			<th>Status</th>
			<th>Address</th>
			</tr>
			
			<?php
			
			while($row=mysqli_fetch_array($pdostmt)){
				echo "<tr><form method=post action=t.php>";
				echo "<td>".$row['Service_Name']."</td>";
				echo "<td>".$row['Status']."</td>";
				echo "<input type=hidden name=id value='".$row['id']."'>";
				echo "<td><input type=submit value=Accept>";
				echo "</form></tr>";
			}
			
			
			?>
	
	
		</body>



</html>