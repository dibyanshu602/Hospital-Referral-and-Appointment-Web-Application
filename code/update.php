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
  </style>
  <title>Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1" ></div>
    <div class="col-sm-10" >
      <center>
      <br>
      <div class="row">
            <div class="col-sm-2"><h2 style="color:purple;"><center>Virinchi</center></h2></div>
            <div class="col-sm-9"><center><h2>Update Profile</h2></div>
            <div class="col-sm-1">
              <a class="btn btn-secondary" href="home.php" role="button">Back</a>
            </div>
      </div>
      <hr><br>
      <form action="updateuser.php" method="post">
      <div class="row">
      <div class="form-group col-sm-6">
        <label class="statement">First Name</label>
        <input type="text" class="form-control" name="fname" value="<?php echo $row['fname']; ?>">
      </div>
      <div class="form-group col-sm-6">
        <label class="statement">Last Name</label>
        <input type="text" class="form-control" name="lname" value="<?php echo $row['lname']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-sm-6">
        <label class="statement">Email</label>
        <input type="text" class="form-control" name="emailid" value="<?php echo $row['emailid']; ?>">
      </div>
       <div class="form-group col-sm-6">
      </div>
    </div>
      <div class="row">
      <div class="form-group col-sm-6">
        <label class="statement">Profession</label>
        <input type="text" class="form-control" name="proff" value="<?php echo $row['prof']; ?>">
      </div>
      <div class="form-group col-sm-6">
        <label class="statement">Location</label>
        <input type="text" class="form-control" name="locc" value="<?php echo $row['location']; ?>">
      </div>
    </div>
      <div class="row">
       <div class="form-group col-sm-6">
        <label class="statement">PAN</label>
        <input type="text" class="form-control" name="pann" value="<?php echo $row['pan']; ?>">
      </div>
      <div class="form-group col-sm-6">
        <label class="statement">Bank Name</label>
        <input type="text" class="form-control" name="bnamee" value="<?php echo $row['bname']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-sm-6">
        <label class="statement">Account Number</label>
        <input type="text" class="form-control" name="accnoo" value="<?php echo $row['accno']; ?>">
      </div>
      <div class="form-group col-sm-6">
        <label class="statement">IFSC</label>
        <input type="text" class="form-control" name="ifscc" value="<?php echo $row['ifsc']; ?>">
      </div>
    </div>
      <button class="button button1"  role="button" type="submit">Submit</a>

    </form>
    </center>
    </div>
    <div class="col-sm-1"></div>
  </div>

  </div>
</form>
