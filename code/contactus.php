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
  <title>Contact us</title>
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
            <div class="col-sm-9"><center><h2>Let us connect</h2></div>
            <div class="col-sm-1">
              <a class="btn btn-secondary" href="home.php" role="button">Back</a>
            </div>
      </div>
      <br><hr><br>
      <form action="contactuser.php" method="post">
      <div class="row">
        <div class="col-sm-2"></div>
      <div class="form-group col-sm-8 ">
        <div class="card">
          <div class="card-body">
        <label class="statement">Type in the message: </label><br><br>
         <textarea class="form-control" name="message" rows="10" cols="100"></textarea>
         <br>

        <button class="button button1"  role="button" type="submit">Send</a>
      </div>
    </div>
    </div>
      <div class="col-sm-2"></div>
    </div>

    </form>
    </center>
    </div>
    <div class="col-sm-1"></div>
  </div>

  </div>
</form>
