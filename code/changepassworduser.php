<?php
   include('session.php');

$password=$_POST['password'];
$phno=$row['mno'];


$s = "UPDATE userinfo
SET pwd = '$password'
WHERE mno = $phno";

if ($conn->query($s) === TRUE) {
  header('location:home.php');
}
else {
  echo "Error creating table: " . $conn->error;
}


?>
