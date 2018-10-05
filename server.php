<?php
session_start();
// initializing variables
$username = "";
$email    = "";
$blood_group = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');
// REGISTER USER
if (isset($_POST['reg_user'])) {
	
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $dateofBirth = $_POST['year']."-". $_POST['month']."-".$_POST['day'];
  $blood_group = mysqli_real_escape_string($db, $_POST['blood_group']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);

  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile number is required"); }
  if (empty($blood_group)) { array_push($errors, "Blood group is required"); }
 
  if($_POST['year']=="Year" || $_POST['month']=="Month" || $_POST['day']=="Day")
  {
 	array_push($errors, "Date of birth is required");
  }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
/*	$val = "select *  from users";
	$result = mysqli_query($db, $val);
 
	if($result)
	{
		$user_check_query = "create table users (username varchar(255), email varchar(255), mobile bigint(10), dateofBirth date, blood_group varchar(100), gender varchar(15), password varchar(255))";
 		mysqli_query($db, $user_check_query);
 	}*/

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, mobile, dateofBirth, blood_group, gender, password) 
  			  VALUES('$username', '$email','$mobile' , '$dateofBirth', '$blood_group', '$gender' , '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: update.php');
  }
}

// ... 
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	 // $_SESSION['success'] = "You are now logged in";
  	 // header('location: index.php');
  	 header('location: update.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

// CONTACT USER
if (isset($_POST['contact'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $message = mysqli_real_escape_string($db, $_POST['message']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($message)) { array_push($errors, "Message is required"); }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO contact (name, email, message) 
  			  VALUES('$name', '$email', '$message')";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "You are now logged in";
  	header('location: contactus.php');
  }
}
//SEND BLOOD REQUEST
if (isset($_POST['send_req'])) 
{
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $blood_group = mysqli_real_escape_string($db, $_POST['blood_group']);
  $dateofBirth = $_POST['year']."-". $_POST['month']."-".$_POST['day'];
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $tillrequireddate = $_POST['year1']."-". $_POST['month1']."-".$_POST['day1'];
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($blood_group)) { array_push($errors, "Blood group is required"); }
   if($_POST['year']=="Year" || $_POST['month']=="Month" || $_POST['day']=="Day")
  {
 	array_push($errors, "Date of birth is required");
  }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile number is required"); }
  if($_POST['year1']=="Year" || $_POST['month1']=="Month" || $_POST['day1']=="Day")
  {
 	array_push($errors, "Till required date is required");
  } 
 	/*$val = "select *  from blood_request";
	$result = mysqli_query($db, $val);
 
	if($result)
	{
		$user_check_query = "create table blood_request (name varchar(255), gender varchar(10), blood_group varchar(100), dateofBirth date, email varchar(255), mobile bigint(10), tillrequireddate date )";
 		mysqli_query($db, $user_check_query);
 	}*/

  if (count($errors) == 0) {

  	$query = "INSERT INTO blood_request (name, gender, blood_group, dateofBirth, email, mobile, tillrequireddate) 
  			  VALUES('$name', '$gender', '$blood_group', '$dateofBirth', '$email','$mobile', '$tillrequireddate')";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "Data Saved";
  	
   }
}
//DONOR REQUEST
if (isset($_POST['donor_request'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $blood_group = mysqli_real_escape_string($db, $_POST['blood_group']);
 $gender = mysqli_real_escape_string($db, $_POST['gender']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile number is required"); }
  if (empty($blood_group)) { array_push($errors, "Blood Group is required"); }
	if (empty($gender)) { array_push($errors, "Gender is required"); }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO donor_request (name, mobile, blood_group, gender) 
  			  VALUES('$name', '$mobile', '$blood_group', '$gender')";
  	mysqli_query($db, $query);
  	
  	header('location: donorrequest.php');
  }
}
?>