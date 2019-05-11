<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> Sign Up </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="apple-touch-icon" href="icon.png">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Cherry+Swash:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css" type="text/css">
		<script src="js/vendor/jquery-3.2.1.min.js"></script>
		<script src="js/vendor/modernizr-3.5.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/plugins.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        
         <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "img/calendar-gif-animated-3.gif",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
  } );
  </script>
		
    </head>
	
    <body>
		
	<!--navigation bar section-->
		<div class="Topbar_wrapper container-fluid">
		<div class="container-fluid">
			<nav>
			<ul class="menu">
				<li><a href="index.php"><h1>Security Provider</h1></a> </li>
			</ul>
			
			<form action="">
			<li> <input type="text" name="" class="lll" placeholder="Search...."></li>
			<div class="log">
			<ul>
			<li><a href=""><i class=""></i> Apply </a></li>
			<li><a href=""><i class=""></i>  </a></li>
			<li><a href=""> Log Out</a></l>
			</ul>
			</div>
			</form>
			</nav>
			</div>
		</div>
	

		
		<!--sidebar menu-->
		
		<div class= "sideber col-sm-3">
		       <section class= "menubar"> MENU </section>
             <div class= "nav">
                <h4><a href="Home.php"> HOME </a>   </h4>
                <h4><a href="Bank.php"> BANK </a>   </h4>
                <h4><a href="Event.php"> EVENT </a>  </h4>
                <h4><a href="Atm.php"> ATM </a>    </h4>
                <h4><a href="#"> OUR CLIENTS </a></h4>
                <h4><a href="#"> CAREER </a></h4>
		</div>	
     </div>
  
        
        <div class="main col-sm-9">
		       <h3> Sign Up </h3>
			<div class= "form">
			   <form action="signup_db.php" method="post" >
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
	 <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Email" name="n" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="e" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="p" required>

    
   

    <p>By creating an account you agree to our <a href="TERM.php" style="color:dodgerblue">Terms</a>.</p>

    <div class="clearfix">
      
      <button type="submit" class="abc" name="submit">Sign Up</button>
    </div>
  </div>
</form>

               
			</div>
            
           
		</div>
		
		
		
		
		
		
		
		<!--Footer border section-->
       <div class="bar"></div>
		<div class="footer" > 
        
             <ul>
                <li> <a href="FAQ.php"> FAQ </a> </li>
                 <li> <a href="TERM.php"> TERMS </a> </li>
                 <li> <a href="HELP.php"> HELP </a> </li>
                 <li> <a href="Contact Us.php"> CONTRUCT US </a></li>
            
            </ul>
        
        </div>
            
	

		
    </body>
</html>
