<?php
//$blood_group = $_POST['blood_group'];
//echo $_POST['blood_group']
$blood_group = $_POST['blood_group'];
$db = mysqli_connect('localhost', 'root', '', 'registration');
 $result =  mysqli_query($db,"SELECT * FROM donor_request WHERE blood_group = '$blood_group'");
//echo "SELECT * FROM donor_request WHERE blood_group = '$blood_group'";

  $pictures = array();
while ($row = mysqli_fetch_array($result)) {
  $picture = array(
    "name" => $row['name'], 
    "gender"=> $row['gender'],
 
    "blood_group"=> $row['blood_group'],
    "mobile"=> $row['mobile']
    
  );
  $pictures[] = $picture;
}

echo json_encode($pictures);
 ?>