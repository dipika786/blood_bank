<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');
 $result =  mysqli_query($db,"SELECT * FROM blood_request");
  $pictures = array();
while ($row = mysqli_fetch_array($result)) {
  $picture = array(
    "name" => $row['name'], 
    "gender"       => $row['gender'],
   "blood_group"          => $row['blood_group'],
   "dateofBirth"       => $row['dateofBirth'],
  "email"       => $row['email'],
   "mobile"         => $row['mobile'],
  "tillrequireddate"       => $row['tillrequireddate']
      
  );
  $pictures[] = $picture;
}

echo json_encode($pictures);
 ?>
