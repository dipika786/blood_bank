<!DOCTYPE html> 
<html lang="en">
 <head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

body {
    font-family: Arial, Helvetica, sans-serif;
	    background-color: rgba(255, 99, 71, 0.6);
			margin: 0;
}
img {
    border-radius: 8px;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
a { color: #fe921f; text-decoration: underline; }

nav ul {
    list-style-type: none;
    padding: 0;
}
</style>
<title></title></head>
<body>
	<?php include('top.php') ?>
  <br><br>
<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/front1.png" alt="Los Angeles" style="width:1000px;height:450px";>
      </div>

      <div class="item">
        <img src="img/front2.jpg" alt="Chicago" style="width:1000px;height:450px;">
      </div>
      <div class="item">
        <img src="img/front3.jpg" alt="New york" style="width:1000px;height:450px;">	 
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br><br>
<?php include('home.php') ?>
</div>
</div>
</body>
</html>
