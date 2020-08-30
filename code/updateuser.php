<?php
   include('session.php');

$fn=$_POST['fname'];
$ln=$_POST['lname'];
$emid=$_POST['emailid'];
$pf=$_POST['proff'];
$lc=$_POST['locc'];
$pn=$_POST['pann'];
$bn=$_POST['bnamee'];
$an=$_POST['accnoo'];
$ic=$_POST['ifscc'];
$phno=$row['mno'];


$s = "UPDATE userinfo
SET fname = '$fn', lname = '$ln', emailid = '$emid', prof = '$pf', location = '$lc', pan= '$pn', bname = '$bn', accno = '$an', ifsc = '$ic'
WHERE mno = $phno";

if ($conn->query($s) === TRUE) {
  echo '<script language="javascript">';
  echo 'alert("Profile Updated Successfully.");';
  echo 'window.location.href= "home.php";';
  echo '</script>';
}
else {
  echo "Error creating table: " . $conn->error;
}


?>
