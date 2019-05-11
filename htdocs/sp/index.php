<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> Security Provider </title>
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
		<script src="js/vendor/jquery-3.2.1.min.js"></script>
		<script src="js/vendor/modernizr-3.5.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/plugins.js"></script>
		
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
			<li> <input type="text" name="" placeholder="Search...."></li>
			<div class="log">
			<ul>
			<li><a href="Apply.php"><i class=""></i> Apply </a></li>
			<li><a href="Login.php"><i class="fa fa-user"></i> Log in </a></li>
			<li><a href="Signup.php"> Sign up </a></li>
			</ul>
			</div>
			</form>
			</nav>
			</div>
		</div>
	
		<!--image section-->
		
		<div class="autometic" style="max-width: 1685px">
		<img src="img/guards.jpg" alt="guards" style="width: 100%" class="img-responsive">
		</div>
		
		<!--Service section-->
		
		<div class="services">
		<div class="serv">
			<h2> Services </h2>
		</div>
	</div>
		
		<!--service option-->
		
		<div class="security">
		<div class="col-sm-four">
			<div class="order">
			<h3> BANK </h3>	
			<p> Here We are Providing</p>
			<p> You 3 Types of Security</p>	
			<p> related with BANK </p>	
		   </div>
			    <div class="buton">
			          <h4><a href="Bank.php"> GO </a>  </h4>
			    </div>
			
			</div>
			
		<div class="col-sm-four">
			<div class="order">
				<h3> ATM </h3>
				<p> Here We are Providing </p>
				<p> Your Security related </p>
				<p> with ATM </p>
				
				<div class="buton">
			    <h4><a href="Atm.php"> GO </a>  </h4>
			    </div>
				
			</div>
			
		</div>
			
			<div class="col-sm-four">
			<div class="order">
				<h3> EVENT </h3>
				<p> Here We are Providing </p>
				<p> Your Security for any </p>
				<p> kinds of EVENT </p>
				
				<div class="buton">
			    <h4><a href="Event.php"> GO </a>  </h4>
			    </div>
				
				</div>
			</div>
			
			
			<div class="col-sm-four">
			<div class="order">
			<h3> HOME </h3>	
			<p> Here We are Providing </p>
			<p> You Security for your </p>
			<p>HOME</p>
			
			<div class="buton">
			<h4><a href="Home.php"> GO </a>  </h4>
			</div>
			
			</div>	
			</div>
		</div>
		
		<!--Footer border section-->
       <div class="bar"></div>
		<div class="footer" > 
        
             <ul>
                 <li> <a href="Security/FAQ.php"> FAQ </a> </li>
                 <li> <a href="Security/TERM.php"> TERMS </a> </li>
                 <li> <a href="Security/HELP.php"> HELP </a> </li>
                 <li> <a href="Security/Contact Us.php"> CONTACT US </a></li>
            
            </ul>
        
        </div>
            
		
    </body>
	<style>
	/*font-family: 'Cherry Swash', cursive;
font-family: 'Open Sans Condensed', sans-serif;
 font-family: 'Tajawal', sans-serif;  */

.body{
	margin: 0;
	padding: 0;
	overflow: hidden;
}
.container-fluid{
	background-color: #1C0C4F;
}
.menu h1{
	color: white;
	font-family: 'Cherry Swash', cursive;
	font-weight: 500;
	line-height: 1.1;
	padding-left: 5px;
	padding-right: 180px;
}
.log ul{
	list-style: none;
	padding-left: 35px;
    padding-top: 15px;
    padding-bottom: 15px;
	margin: 0;
	float: right;
	font-size: 18px;
	
}
.log ul li{
	display: inline-block;
	margin-left: auto;
	
}
.log ul li a{
	text-decoration: none;
	padding: 8px;
	margin: 0;
	border-bottom: none;
	color: white;
	
}
li{
	list-style: none;
	float: left;
}
input[type=text]{
	background-image: url(../img/icons8-search-32.png);
	background-repeat: no-repeat;
	background-position: 6px;
	padding: 12px 20px 14px 42px;
	border-radius: 25px;
	margin-top: 5px;
	outline: none;
	width: 200px;
	-webkit-transition:width 0.7s ease-in-out;
	-moz-transition:width 0.7s ease-in-out;
	-ms-transition:width 0.7s ease-in-out;
	-o-transition:width 0.7s ease-in-out;
	transition: width 0.7s ease-in-out;
	
}
input[type=text]:focus{
	width: 400px;
}

.serv h2{
	font-size: 45px;
	text-align: center;
	font-weight: 700;
	font-family: 'Tajawal', sans-serif;
	color: #9C1F41;
	border-bottom: 2px solid #BDBDBD;
	padding-bottom: 3px;
	padding-top: 0px;
	
}

.security{
	padding-top: 40px;
	margin: auto;
}

.col-sm-four{
	float: left;
	width: 22%;
	margin-right: 35px;
	margin-left: 10px;
	padding-right: 5px; 
	border: 2px solid #1c0c4f;
	
	
}
@media(max-width:768px){
	.col-sm-four{
		width: 100%;
		float: left;
		margin-right: 5px;
		margin: 5px;
	}
}
 
@media(max-width:1200px){
	.col-sm-four{
		width: 100%;
		float: left;
		margin-right: 5px;
	}
}
.order h3{
	text-align: center;
	font-size: 25px;
	font-family: 'Tajawal', sans-serif;
	font-weight: bold;
	color: #1c0c4f;
}

.order p{
	text-align: center;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #9C1F41;
	margin: 0;
}

.buton{
	background-color: #1c0c4f;
	padding: 5px;
	margin-left: 90px;
	margin-right: 90px;
	border-radius: 7px;
	margin-top: 10px;
    margin-bottom: 60px;
}
.buton h4 {
	
	text-align: center;
	padding-top: 5px;
	
}
.buton h4 a{
	text-decoration: none;
	color: white;
	
}
.bar{
      margin-top: 300px;
    border-top: 2px solid black;
	
}
.footer{
     margin-left: 600px;
  
      
   
}

.footer ul li{
    list-style: none;
     margin-top: 20px;
    margin-bottom: 70px;
   
     
}
.footer li a{
    text-decoration: none;
    color: black;
    margin-right: 30px;
    font-weight: 500px;
    
}
.SYA{
    
    margin-top: 40px;
}
.SYA p{
   
    text-align: center;
    font-size: 25px;
}

.profile{
    background: #ddd;
    margin:10px 550px 5px 20px;
    padding:5px;
}

.Propic img{
    float:left;
    height: 70px;
    width:  70px;
    border:2px solid #fff;
}
.Prodetalis p{
    padding-left: 10px;
    font-size: 15px;
}
	</style>
</html>
