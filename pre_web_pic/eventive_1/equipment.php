<!DOCTYPE html>

<html>
    <head>
        <title>Equipment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
                width:100%;
                 overflow: auto;
                
                  
            }
            ul{
                list-style-type: none;
                margin: 0px;
                padding:0px;
                background-color: #BE0101;
                overflow:hidden;
                height:100px;
                width: 100%;
                
                
            }
            li{
                float:left;
            }
            li a{
                display:block;
                text-decoration: none;
                color:white;
                text-align: center;
                padding:32px 20px;
                
            }
            li a:hover{
                color:goldenrod;
            }
            #h{
                
                position:sticky;
                top:0px;
            }
            #footer{
                height:200px;
            }
            #srvc_dropdown{
                
            }
            #middle_birthday{
                background-image: url("middle_wed3.jpg");
                background-repeat: no-repeat;
               background-size: 4000px 3025px;
            }
            div span{
                width:4000px;
                height:1500px;
                padding-left: 500px;
                padding-top: 70px;
                font-size: 35px;
            }  
            div span img{
                height:400px;
                width: 600px;
                 padding-left: 350px;
            }
             
        </style>
    </head>
    <body>
        <!--header-->
        <div>
        <ul id="h">
            <li style="padding: 20px;"><img style="padding: 1px;" src="picture\eventive_logo.png" alt="not found" height="49" width="73"></li>
           
            <li><a href=""><b style="font-size:20px;">Home</b></a></li>
            <li><a href=""><b style="font-size:20px;">Weeding</b></a></li>
			<li><a href=""><b style="font-size:20px;">Event</b></a></li>
			<li><a href=""><b style="font-size:20px;">Equipment</b></a></li>
			
			
            <li style="float:right"><a href=""><b style="font-size:20px;">User Account</b></a></li>
            <li style="float:right"><a href=""><b style="font-size:20px;">Log Out</b></a></li>
            <li style="float:middle;padding-top: 28px;"><input type="search" name="search1" placeholder="search" style="width: 200px;height:30px"></li>
           
         </ul>
            </div>
        
        <!--middle-->
        <div id="middle_birthday">
            <img src="picture\eq_selection.jpg" alt="weed_err" style="width:100%; height:700px" >
            
             <div style="background-color: #FB6161;display:inline-block;width:100%;height:50%;">
            <h1 style="text-align: center;color:white;">Equipment Selection</h1>
              </div>
            
            <!--choose option-->
            
         
            <div style="height:650px;padding-left: 550px;padding-top: 50px;">
                <b>Equipment:<br/></b><br><br><br><br>
				
                <input type="checkbox" name="bill" value="candle"><b>Candle</b><img style="width:150px;height:100px;" src="picture\candle.jpg" alt="candle"><br>
				<br><br><br><br>
                <input type="checkbox" name="bill" value="cake"><b>Cake</b><img style="width:150px;height:100px;" src="picture\cake.jpg" alt="cake"><br>
				<br><br><br><br>
                <input type="checkbox" name="bill" value="ballon"><b>Ballon</b><img style="width:150px;height:100px;"src="picture\ballon.jpg" alt="ballon"><br>
				
				<input type="button" name="button" value="GO" style="margin-left:120px;width:100px;margin-top:50px;"><br/><br/>
            </div>
        
       </div>
        
        <!--footer-->
        <div>
            <ul >
                <li style="padding-left:100px;"><a href=""><b style="font-size:20px;">About Us</b></a></li>
              
                <li style="padding-left:260px;" ><a href=""><b style="font-size:20px;">Contact Us</b></a></li>
                
                 <li style="padding-left:200px;" ><a href=""><b style="font-size:20px;">Social Links</b></a></li>
                
                <li style="float:right;padding-right:100px;"><a href=""><b style="font-size:20px;">Message</b></a></li>
                
                <li><a href=""></a></li>
               
            </ul>
            
        </div>
        
        <div>
            <ul id="footer">
                <li style="padding-left:80px;font-size:17px;">Eventive is an event management<br>web platform to support multiple events.</li>
                <li style="padding-left:125px;font-size:17px;">Address:Dhanmondi<br>Phone:0181-xxxxxxx<br>Email:abc@gmail.com</li>
                <li style="color:white;padding-left:150px;"><a href="#" class="fa fa-facebook"></a></li>
                 <li style="color:white;padding-left:0px;"><a href="#" class="fa fa-twitter"></a></li>
                  <li style="color:white;padding-left:0px;"><a href="#" class="fa fa-google"></a></li>
                   <li style="color:white;padding-left:0px;"><a href="#" class="fa fa-yahoo"></a></li>
                   
                 <li style="padding-right:1px;font-size:17px;">Email:<input type="email" name="email" id="email1" style="padding-right:1px;margin-left: 40px;"></li>
                 <li style="padding:30px;font-size:17px;" >Message:<textarea></textarea></li>
                  <li style="padding-left:1200px;font-size:17px;"><input type="submit" value="Submit"></li>
            </ul>
        </div>
        
    </body>
</html>
