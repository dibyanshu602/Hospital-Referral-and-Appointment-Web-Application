<?php
   $conn = mysqli_connect('localhost','root','','pwa');
   if(!$conn){
       echo "Connection Problem";
   }
   session_start();

   $cu = $_SESSION['cmno'];
   $s = "SELECT * FROM userinfo where mno='$cu'";
   $ses_sql = mysqli_query($conn,$s);


   $row = (array)mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $current_user = $row['mno'];
   if(!isset($_SESSION['cmno'])){
      header("location:login.php");
      die();
   }
?>
