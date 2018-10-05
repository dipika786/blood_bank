<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head><style>
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
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
</style>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include('update.php'); ?>
  <div class="header">
  	<h2>Donor Request</h2>
  </div>
  <form method="post" action="donorrequest.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name">
  	</div>
  	<div class="input-group">
  	  <label>Mobile number</label>
  	  <input type="text" name="mobile">
  	</div>
  	<div class="input-group">
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
  	</div>
  	<!--
  	<div class="input-group">
  	  --><label>Gender:</label>&nbsp;&nbsp;&nbsp;
  	  Male <input type="radio" name="gender" value="male" checked>&nbsp;&nbsp;
	  Female <input type="radio" name="gender" value="female"><!--
  	</div>
  	-->
  	<div class="input-group">
  	  <button type="submit" class="btn" name="donor_request">Donor request</button>
  	</div>
  </form>
</body>
</html>