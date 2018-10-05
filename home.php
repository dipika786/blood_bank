<!DOCTYPE html> 
<html lang="en">
 <head>
 <meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h2  {
background-color: rgba(255, 99, 71, 0.2);
display: inline; 
    text-decoration-color: red;
	text-shadow: 2px 2px #FF0000;
	font-size: 30px;
}
h3{
color:red;}
p    {color:white;
font-size: 17px;}

body {
    font-family: Arial, Helvetica, sans-serif;font-size: 18px;
}
img {
    border-radius: 8px;
}

.article {border: 1px solid black; ;
    float: left;
    padding: 0px;
    width: 100%;
    background-color: rgba(255, 99, 71, 0.6);
    height: 180px; /* onlfor demonstration, should be removed */    
}
.column {
    float: left;
    width: 50%;
    padding: 5px;
	 display: inline-block;
	 border: 1px solid black; ; 
	}
</style>
<title></title></head>
<body>
<div class="article">
    <h2>Welcome to the Blood Bank Management System</h2> <br>
	<p style="text-align: justify;margin:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Blood is univerasally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are neede. More than 29 millions units of blood components are transfused every year. Donate Blood despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood receipients.
	</p>
</div> 
  <div class="column">
   <h3>Tips on blood donation</h3>You are noble but you got to be informed as well...
   <a href="tips.php" target="_self" style="text-align:center;color:blue;font-size: 18px";>Click here >>>></a><br><br>
    <img src="img/tips.jpg" alt="Forest" style="width:400px;height=370px;">
	 </div>
  <div class="column">
   <h3>Blood Facts</h3>A whole world in itself blood is living matter...
   <a href="facts.php" target="_self" style="text-align:center;color:blue;font-size: 18px";>Click here >>>></a><br><br>
    <img src="img/facts.jpg" alt="Mountains" style="width:280px;height=260px">
  </div>
</body>
</html>









