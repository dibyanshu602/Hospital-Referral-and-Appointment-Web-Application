<!DOCTYPE HTML>


<?php
$conn = mysqli_connect('localhost','root','','pwa');
if(!$conn){
    echo "Connection Problem";
}
session_start();

$ps=$_POST['pwd'];
$mn=$_POST['mno'];

$s = "SELECT * FROM userinfo where mno='$mn' && pwd='$ps'";
$res = mysqli_query($conn, $s);
if(mysqli_num_rows($res) == 1){

//          session_register('mn'); //depreciated in newer versions
         $_SESSION['cmno'] = $mn;

         header("location: home.php");
}
else{
  echo '<script language="javascript">';
  echo 'alert("Wrong Password or phone number.Please try again.");';
  echo 'window.location.href= "home.php";';
  echo '</script>';
}

?>
