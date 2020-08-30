<?php
   include('session.php');

$doctorname = $_POST['doctorname'];
$_SESSION['dname'] = $doctorname;
?>
<html>
<head>
  <style>
    body {
      background-color: #e6ffff ;
    }
  </style>
  <title>Bookings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-1" ></div>
      <div class="col-sm-10" >
        <center>
        <br>
        <div class="row">
              <div class="col-sm-2"><h2 style="color:purple;"><center>Virinchi</center></h2></div>
              <div class="col-sm-9"><center><h2>Appointments</h2></div>
              <div class="col-sm-1">
                <a class="btn btn-secondary" href="appointments.php" role="button">Back</a>
              </div>
        </div>
        <hr>

            </div>

      <div class="col-sm-1"></div>
    </div>



  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
  <form action="bookconfirm.php" method="post">
    <div class="row">
  <div class="form-group col-sm-6">
    <label class="statement">First Name</label>
    <input type="text" class="form-control" name="fname" required>
  </div>
  <div class="form-group col-sm-6">
    <label class="statement">Last Name</label>
    <input type="text" class="form-control" name="lname" required>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm-6">
    <label class="statement">Email</label>
    <input type="email" class="form-control" name="emailid" required>
  </div>
   <div class="form-group col-sm-6">
    <label class="statement">Attendant Name</label>
    <input type="text" class="form-control" name="aname" required>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm-6">
    <label class="statement">Mobile Number</label>
    <input type="tel" class="form-control" name="pmno" required>
  </div>
  <div class="form-group col-sm-6">
    <label class="statement">Age</label>
    <input type="number" class="form-control" name="age" required>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm-6">
    <label class="statement">Select gender</label>
    <select type="number" name="gender" class="form-control" required>
          <option value="1">Male</option>
          <option value="2">Female</option>
          <option value="3">Other</option>
         </select><br><br>
  </div>
  <div class="form-group col-sm-6">
    <label class="statement">Select a Slot</label>
    <select type="number" name="slot" class="form-control" required>
      <?php
      $s = "SELECT * FROM slotinfo where doctorname='$doctorname' && booking=0";
      $res = mysqli_query($conn, $s);
          while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
          {
      ?>
        <option value="<?php echo $row['slot'];?>"><?php echo $row['slot'];?></option>
      <?php
        }
      ?>
         </select><br><br>
  </div>
</div>

  <button class="button button1"  role="button" type="submit"><center>Confirm Booking</center></button>
</div>
</form>
  <div class="col-sm-3"></div>
  </div>
</div>
</body>
</html>
