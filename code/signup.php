<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
      background-color: #e6ffff ;
    }
  </style>
  <title>sign-up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

  <div class="row">
    <div class="col-sm-5" >
      <img src="vc.png" alt="Virinchi">
    </div>
    <div class="col-sm-6" >
      <center>
      <br>
      <h1 class="text-secondary">Registration</h1>
      <br><br>
      <form action="signupuser.php" method="post">
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
        <label class="statement">Password:</label>
        <input type="password" class="form-control" name="pwd" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-sm-6">
        <label class="statement">Mobile Number</label>
        <input type="tel" class="form-control" name="mno" required>
      </div>
      <div class="form-group col-sm-6">
        <label class="statement">Age</label>
        <input type="number" class="form-control" name="age" required>
      </div>
    </div>
      <div class="form-group">
        <label class="statement">Select gender</label>
        <select type="number" name="gender" class="form-control" required>
              <option value="1">Male</option>
              <option value="2">Female</option>
              <option value="3">Other</option>
             </select><br><br>
      </div>
      <button class="button button1"  role="button" type="submit">Submit</button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a class="button button2" href="login.php" role="button">LogIn</a>

    </form>
    </center>
    </div>
    <div class="col-sm-1"></div>
  </div>


</form>
