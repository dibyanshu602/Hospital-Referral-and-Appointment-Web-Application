<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

$conn = mysqli_connect('localhost','root','','pwa');
if(!$conn){
    echo "Connection Problem";
}
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$emid=$_POST['emailid'];
$ps=$_POST['pwd'];
$mn=$_POST['mno'];
$ag=$_POST['age'];
$gen=$_POST['gender'];

$s = "SELECT * FROM userinfo where mno='$mn'";
$res = mysqli_query($conn, $s);
if(mysqli_num_rows($res) == 1){
  echo "Mobile Number Already Registered, Go back and Login";
}
else{

$sql = "INSERT INTO userinfo(fname, lname, emailid, pwd, mno, age, gender)
VALUES ('$fn','$ln','$emid','$ps',$mn,$ag,'$gen')";

if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
  echo 'alert("Account Created.");';
  echo 'window.location.href= "login.php";';
  echo '</script>';
} else {
  echo "Error creating table: " . $conn->error;
}

}

?>
</body>
</html>
