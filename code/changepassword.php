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
  <title>Change Password</title>
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
            <div class="col-sm-9"><center><h2>Change Password</h2></div>
            <div class="col-sm-1">
              <a class="btn btn-secondary" href="home.php" role="button">Back</a>
            </div>
      </div>
      <br><hr>
      <form action="changepassworduser.php" method="post">
      <div class="row">
        <div class="col-sm-4"></div>
      <div class="form-group col-sm-4 ">
        <label class="statement">Enter your new password:</label>
        <input type="text" class="form-control" name="password" required>
        <button class="button button1"  role="button" type="submit">Change</a>
      </div>
      <div class="col-sm-4"></div>
    </div>

    </form>
    </center>
    </div>
    <div class="col-sm-1"></div>
  </div>

  </div>
</form>
