<?php


   $var=$_POST['id'];
   $status="Yes";

		$conn=mysqli_connect('127.0.0.1','root','');
	    mysqli_select_db($conn,'t86');
		$sql="UPDATE tester_turjo_trigger SET Status='$status' WHERE id='$var'";
		
		if(mysqli_query($conn,$sql))
			header("refresh:3;url=index.php");
		
		
		else
			echo "Code Not Worked"

?>
