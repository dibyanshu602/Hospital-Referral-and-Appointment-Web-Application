<?php
   include('session.php');

$message=$_POST['message'];
$mno=$row['mno'];

$sql = "INSERT INTO messages(mno,message)
VALUES ($mno,'$message')";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
  echo 'alert("Message Sent.");';
  echo 'window.location.href= "home.php";';
  echo '</script>';


} else {
  echo "Error creating table: " . $conn->error;
}
?>
