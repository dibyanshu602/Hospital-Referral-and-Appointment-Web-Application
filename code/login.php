<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
      background-color: #e6ffff ;
    }

  </style>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <div class="row">
    <div class="col-sm-5">
      <img src="vc.png" alt="Virinchi">
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-5 mb-5 pb-5 mt-5 pt-5">
      <br>
      <center>
      <h2 class="text-secondary">Welcome to Virinchi Channel Partner Login Portal</h2>
    </center>
      <br><br>

<form action="validation.php" method="post">
  <center>
  <div class="form-group">
    <label class="statement">Mobile Number:</label>
    <input type="number" class="form-control" name="mno" required>
  </div>
  <div class="form-group">
    <label class="statement">Password:</label>
    <input type="Password" class="form-control" name="pwd" required>
  </div><br>
  <button class="button button1" role="button" type="Submit">Login</button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a class="button button2" href="signup.php" role="button">Sign Up</a>




</center>
</form>
</div>
<div class="col-sm-1"></div>
</div>

</body>

</html>
