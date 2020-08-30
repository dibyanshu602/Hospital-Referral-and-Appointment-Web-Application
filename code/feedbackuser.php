<?php
   include('session.php');

$message=$_POST['message'];
$dept=$_POST['dept'];
$mno=$row['mno'];

$sql = "INSERT INTO feedback(mno,dept,message)
VALUES ($mno,'$dept','$message')";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
  echo 'alert("Feedback Sent.");';
  echo 'window.location.href= "home.php";';
  echo '</script>';


} else {
  echo "Error creating table: " . $conn->error;
}
?>
