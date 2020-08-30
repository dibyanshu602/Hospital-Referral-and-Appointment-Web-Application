<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
      background-color: #e6ffff ;
    }
    hr{height:2px;border-width:0;color:gray;background-color:gray;}
  </style>
  <title>Referrals</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>



<body>
  <br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-1" ></div>
      <div class="col-sm-10" >
        <div class="row">
        <div class="col-sm-2"><h2 style="color:purple;"><center>Virinchi</center></h2></div>
        <div class="col-sm-9"></div>
        <div class="col-sm-1">
          <a class="btn btn-secondary" href="home.php" role="button">Back</a>
        </div>
  </div>

  <div class="row">

    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <a href="refer.php"><center><h2 style="color:grey;">Refer</h2></center></a><br>
    </div>



    <div class="col-sm-4">
    <a href="#"><center><h2 style="color:purple;">Referrals</h2></center></a><br>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-2"></div>

  </div>

  <hr>
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
    <form action="referral.php" method="post">
  <label class="statement" for="start">Start date:</label>&emsp;

  <input type="date" id="start" name="sdate"
       value="0000-00-00" required>

  &emsp;&emsp;&emsp;&emsp;

  <label class="statement" for="start">End date:</label>&emsp;

  <input type="date" id="start" name="edate"
       value="0000-00-00" required>

  &emsp;&emsp;&emsp;&emsp;
  <button class="button button1"  role="button" type="submit">Search</button>
  </form>
  </div>
  <div class="col-sm-2"></div>
  </div>

  <hr>
<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
  $mnuser=$row['mno'];
  $sdate=$_POST['sdate'];
  $edate=$_POST['edate'];
    $s = "SELECT * FROM patientinfo where mno=$mnuser && date>='$sdate' && date<='$edate' ";
    $res = mysqli_query($conn, $s);

while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){
  ?>
  <div class="card">
    <div class="card-body">
<?php
  echo "<strong>Name</strong> - ".$row['fname']." ".$row['lname']."<br><strong>Age</strong> - ".$row['age']."<br>";
  echo "<strong>Mobile Number</strong> : ".$row['pmno']."<br><strong>MRN</strong> : ".$row['pid']."<br><strong>Department</strong> : ".$row['dept'];
  ?>
</div></div>
<br>
<?php
}
}
?>


</div>
<div class="col-sm-1"></div>
</div>


</div>
</body>
</html>
