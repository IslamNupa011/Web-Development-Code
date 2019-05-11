<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> Event Security </title>
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
		       <h3> EVENT </h3>
			<div class= "form">
			    <form>
			      <table>
				       <tr>
					           <td class="ddd"> Event Name </td>
							  <td >  <input type="text" name="amount"></td>
							  </td>
				       </tr>
					   
					    <tr>
					          <td class="ddd"> Date </td>
							  <td><input type="text" class="abc" id="datepicker">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                            </td>
				       </tr>
					   
					    <tr>
					          <td class="ddd"> Time </td>
							  <td> <input type="time" class="abc" id="datepicker"> </td>
				       </tr>
					   
					    <tr>
					         <td class="ddd"> City </td>
							  <td> <select class="abc" name="ci" required > 
                                  
								  <option value="Dhaka">Dhaka</option>
                                   <option value="Chittagong">Chittagong</option>
                                   <option value="Rajshahi">Rajshahi</option>
								   <option value="Khulna">Khulna</option>
                                   
								   <option value="Sylhet">Sylhet</option>
                                   
								   
                                  
                                  </select>
				       </tr>
					   
					    <tr>
					         
				       </tr>
					   
					    <tr>
					          <td class="ddd"> Security Type </td>
							  <td class="cc"> <input type="radio" class="ab" name ="st" value="Group"> <span class="group">Group</span>
                                   <input type="radio" name ="st" class="ab" value="Individual"><span class="group" value="Individual">Individual</span> 
							  </td>
				       </tr>
			      </table>
				  <div class="choose"> 
                     <p>Submit</p>
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
