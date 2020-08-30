<?php
   include('session.php');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['emailid'];
$aname=$_POST['aname'];
$pmno=$_POST['pmno'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$slot=$_POST['slot'];
$mno=$row['mno'];
$doctorname=$_SESSION['dname'];

$sql = "INSERT INTO bookinfo(fname,	lname, emailid,	aname,	pmno,	age,	gender,	slot,	mno, doctorname)
VALUES ('$fname','$lname','$email', '$aname', $pmno, $age, $gender, '$slot', $mno, '$doctorname')";
$sq = "UPDATE slotinfo
SET booking = '1'
WHERE doctorname='$doctorname' && slot='$slot';";
if ($conn->query($sql) === TRUE && $conn->query($sq)) {

  echo '<script language="javascript">';
  echo 'alert("Booking Successhul.");';
  echo 'window.location.href= "home.php";';
  echo '</script>';
  //header('location:home.php');


} else {
  echo "Error creating table: " . $conn->error;
}
?>
