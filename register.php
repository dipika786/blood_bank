<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css"><style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password],  input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
.container {
    padding: 16px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
</style>
</head>
<body>
<?php include('top.php'); ?>
	<br><br>
  <form method="post" action="register.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Donor Registration Form</h1>
    <p>Please fill in this form to register.</p>
    </div>
  	<?php include('errors.php'); ?>
  	
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
  	
  	  <label>Email</label>
  	  <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>">
  	
  	  <label>Mobile number</label>
  	  <input type="text" placeholder="Enter Mobile number" name="mobile">
  	<br><br>
  	  <label>Date Of Birth</label>
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
  	<br><br>
  	  <label>Blood group</label>
  	  <select name="blood_group">
  	  	<option>A+</option>
  	  	<option>A-</option>
  	  	<option>B+</option>
  	  	<option>B-</option>
  	  	<option>AB+</option>
  	  	<option>AB-</option>
  	  	<option>O+</option>
  	  	<option>O-</option>
  	  	</select>
  	<br><br>
  	<label>Gender:</label>&nbsp;&nbsp;&nbsp;
  	  Male <input type="radio" name="gender" value="male" checked>&nbsp;&nbsp;
	  Female <input type="radio" name="gender" value="female">
  	<br><br>
  	  <label>Password</label>
  	  <input type="password" placeholder="Enter Password" name="password_1">
  	
  	  <label>Confirm password</label>
  	  <input type="password" placeholder="Repeat Password" name="password_2">
  	  
  	  <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button><br>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>