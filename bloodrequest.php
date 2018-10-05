<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title></title><style>
.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
</style>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include('top.php'); ?>
  <div class="header">
  	<h2>Blood Request</h2>
  </div>
	 
  <form method="post" action="bloodrequest.php">
  	 <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name">
  	</div>
  	<!--
  	<div class="input-group">
  	  --><label>Gender:</label>&nbsp;&nbsp;&nbsp;
  	  Male <input type="radio" name="gender" value="male" checked>&nbsp;&nbsp;
	  Female <input type="radio" name="gender" value="female"><!--
  	</div>
  	-->
  	<div class="input-group">
  	  <label>Blood group</label>
  	  <input type="text" name="blood_group">
  	</div>
  	<div class="input-group">
  	  <label>Date Of Birth</label>
  	  <!--<input type="text" name="age">
  	-->
  	<select name = "month">
	<option>Month</option>
	<?php
		for($month = 1; $month <= 12; $month++)
		echo"<option value = '".$month."' >".$month."</option>";
	?>
	</select>&nbsp;&nbsp;
  	
  	<select name = "day">
        <option>Day</option>
        <?php
	        for($day = 1; $day <= 31; $day++){
		       echo "<option value = '".$day."'>".$day."</option>";
		}
	?>
	</select>&nbsp;&nbsp;
  	<select name = "year">
	<option>Year</option>
	<?php
		$y = date("Y", strtotime("+8 HOURS"));
		for($year = 1950; $y >= $year; $y--){
			echo "<option value = '".$y."'>".$y."</option>";
		}
	?>
</select>
  	
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label>Mobile number</label>
  	  <input type="text" name="mobile">
  	</div>
  	
  	</div>
  	<div class="input-group">
  	  <label>Till Required Date</label>
  	  <!--<input type="text" name="age">
  	-->
  	<select name = "month1">
	<option>Month</option>
	<?php
		for($month1 = 1; $month1 <= 12; $month1++)
		echo"<option value = '".$month1."' >".$month1."</option>";
	?>
	</select>&nbsp;&nbsp;
  	
  	<select name = "day1">
        <option>Day</option>
        <?php
	        for($day1 = 1; $day1 <= 31; $day1++){
		       echo "<option value = '".$day1."'>".$day1."</option>";
		}
	?>
	</select>&nbsp;&nbsp;
  	<select name = "year1">
	<option>Year</option>
	<?php
		for($year1 = 2018; $year1 <= 2050; $year1++){
			echo "<option value = '".$year1."'>".$year1."</option>";
		}
		
	?>
</select>
  	</div>
  	<br>
  	  <button type="submit" class="btn btn-primary btn-block" name="send_req">Submit</button>
  	
  </form>
  
</body>
</html>