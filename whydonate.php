<!DOCTYPE html> 
<html lang="en">
 <head>
 <title></title>
 <style>
.button {
   background-color: #4CAF50; /* Green */
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   font-size: 16px;
	margin:auto;
  display:block;
	}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.boxed1{ background-color: lightgrey;
    width: 1200px;
    border: 5px solid green;
    padding: 20px;
    margin: 10px 150px;
      }
</style>
</head></head>
<body>
  	<?php include('top.php') ?>
<div class="boxed1">
  <h1 align="center" style="color:red;">Why Donate Blood?</h1>
	<h3 style="margin-left:50px;">Blood is the living fluid that all life is based on. Blood is composed of 60% liquid part and 40% solid part. The liquid part called Plasma, made up of 90% water and 10% nutrients, hormones, etc. is easily replenished by food, medicines, etc. But the solid part that contains RBC (red blood cells), WBC (white blood cells) and Platelets take valuable time to be replaced if lost.</h3>
	<h3 style="margin-left:50px;">This is where you come in. The time taken by a patient's body to replace it could cost his/her life. Sometimes the body might not be in a condition to replace it at all.</h3>
	<h3 style="margin-left:50px;">As you know blood cannot be harvested it can only be donated. This means only you can save a life that needs blood.</h3>
	<h3 style="margin-left:50px;">Every year India requires 40 million units of 250cc blood out of which only a meager 500,000 of blood units are available.</h3>
	<h3 style="margin-left:50px;">Saving a life does not require heroic deeds. You could just do it with a small thought and an even smaller effort by saying "yes".</h3>
<button class="button button2" onclick="window.location.href = 'register.php';">Start by registering as donor</button>
</div>
</body>
</html>
