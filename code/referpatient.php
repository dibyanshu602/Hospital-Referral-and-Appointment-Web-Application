<?php
   include('session.php');

$gender=$_POST['optradio'];
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$age=$_POST['age'];
$dept=$_POST['dept'];
$pmno=$_POST['pmno'];
$atn=$_POST['atn'];
$amno=$_POST['amno'];
$rm=$_POST['rem'];
$mno=$row['mno'];
$hospital=$_POST['hospital'];

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
    //  $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
    //  $file_type = $_FILES['image']['type'];
    //  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
  }


$sql = "INSERT INTO patientinfo(fname,	lname,	gender,	age,	pmno,	dept,	mno,	aname,	amno,	remarks, filename, hospital)
VALUES ('$fn','$ln',$gender, $age, $pmno, '$dept', $mno, '$atn', $amno, '$rm', '$file_name', '$hospital')";

if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
  echo 'alert("Refered Successful.");';
  echo 'window.location.href= "home.php";';
  echo '</script>';
} else {
  echo "Error creating table: " . $conn->error;
}

?>
