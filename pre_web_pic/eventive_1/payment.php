<!DOCTYPE html>

<html>
    <head>
        <title>Payment</title>
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
			
            <li style="float:right"><a href=""><b style="font-size:20px;">User Account</b></a></li>
            <li style="float:right"><a href=""><b style="font-size:20px;">Log Out</b></a></li>
            <li style="float:middle;padding-top: 28px;"><input type="search" name="search1" placeholder="search" style="width: 200px;height:30px"></li>
           
         </ul>
            </div>
        
        <!--middle-->
        <div id="middle_birthday">
            <img src="picture\pay.jpg" alt="weed_err" style="width:100%; height:700px" >
            
             <div style="background-color: #FB6161;display:inline-block;width:100%;height:50%;">
            <h1 style="text-align: center;color:white;">Payment</h1>
              </div>
            
            <!--choose option-->
            
         
            <div style="height:500px;padding-left: 550px;padding-top: 50px;">
			     <b>User Name:<br/></b><br><br>
                <b>Total Bill:<br/></b><br><br>
				<b style="color:maroon;font-size:25px;">Bkash Payment<hr style="width:400px;color:red;margin-left:2px;"><br/></b>
			<form method="post" action="">
				<b> Phone:</b><input type="tel" name="phone" id="phone1" style="margin-left:35px;width:167px;"><br/><br/>
				<b> Pin:</b><input type="text" name="pin" id="pin1" style="margin-left:56px;width:167px;"><br/><br/>
				<b> Amount:</b><input type="number" name="amount" id="amount1" style="margin-left:25px;width:167px;"><br/><br/>
				
				</form>
				
				 <input type="button" name="button" value="GO" style="margin-left:120px;width:100px;"><br/><br/>
                
                <!--<input type="radio" name="bill" value="card"><b>Card</b>
                <input type="radio" name="bill" value="cash"><b>Card On Delivery</b>-->
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
