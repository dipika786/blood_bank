<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
.sendmessage{
    background-color: #4CAF50;
    color: white;
    padding: 10px 30px;
	text-align:center;
	display:block;
    margin-left:40%;
    margin-top:5%;
 
}
.contacth1   {color: black; 
display:inline;
text-align: center;
font-size: 20px;
}
.contacth2    {font-size: 30px;
	color: black;
	float: left;
    width: 100%;
    height: 100%;  
	text-align: center;
	font-family: "Times New Roman", Times, serif;}
.contacttext {
    padding: 5px 10px;
    margin: 5px 0;
    box-sizing: border-box;
	border: 1px solid black;
    border-radius: 4px;	
     width: 500px;
}
label {
  background-color: pink;
  color: black;
  padding: 4px;
  text-transform: uppercase;
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 15px;
    width:180px;
    text-align:center;
    padding-right:10px;
}
.contactimg { 
    display: block;
    margin-left: auto;
    margin-right: auto;
}

</style>
 <title>Contact us</title>
</head>
<body>
  	<?php include('top.php') ?>
   <div class="row">
  <div class="col-md-6">
<h2 class="contacth2"><b>Send us a message</b></h2>
<form method="post" action="contactus.php">
  	<?php include('errors.php'); ?>
 
  	 <br> <label>  Name</label>
  	  <input class="contacttext"  type="text" name="name">
  
  
  	  <label>  Email</label>
  	  <input class="contacttext" type="email" name="email" >
  
  
  	  <label>  Message</label>
  	  <input class="contacttext" type="text" name="message" >
  
  	<br>
  
  	  <button type="submit" class="sendmessage" name="contact">Send Message</button>
  
	</form></div>
  <div class="col-md-6" style="border-left: thick solid #333;">
 <h2 class="contacth2"><b>Contact details</b></h2><br><br><br>
 <h1 class="contacth1">*Blood bank and Friend medical trust, sector-10, Shivaji Road, New panvel</h1><br><br>
 <h1 class="contacth1">*Phone no-1234567891</h1><br><br>
 <h1 class="contacth1">*Email id-abc@gmail.com</h1><br><br>
 <h1 class="contacth1">*H-24*7</h1><br><br>
 <h1 class="contacth1">*Website-www.bloodbank.org</h1><br><br>
<img class="contactimg" src="img/image12.jpg" alt="data" style="width:400px;height=400px;">
 </div>
  </div>
</body>
</html>