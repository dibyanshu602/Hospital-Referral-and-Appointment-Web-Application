<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
      background-color: #e6ffff ;
    }
  </style>
  <title>Refer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>



<body>
  <br>
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
      <a href="#"><center><h2 style="color:purple;">Refer</h2></center></a><br>
    </div>



    <div class="col-sm-4">
    <a href="referral.php"><center><h2 style="color:grey;">Referrals</h2></center></a>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-2"></div>

  </div>
  <form action = "referpatient.php" method = "post" enctype="multipart/form-data">
   <div class="row">
        <div class="col-sm-1"><p>Gender :</p></div>
        <div class="col-sm-3">
            <div class="form-check-inline">
                <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" name="optradio" value="1" checked>Male
                </label>
            </div>

            <div class="form-check-inline">
                <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" name="optradio" value="2">Female
                </label>
            </div>

            <div class="form-check-inline">
                <label class="form-check-label" for="radio3">
                <input type="radio" class="form-check-input" name="optradio" value="3">Other
                </label>
            </div>
      </div>
        <div class="col-sm-11"></div>
    </div>
     <center>
      <div class="row">
      <div class="form-group col-sm-6">
        <label class="statement">First Name</label>
        <input type="text" class="form-control" name="fname">
      </div>
      <div class="form-group col-sm-6">
        <label class="statement">Last Name</label>
        <input type="text" class="form-control" name="lname" required>
      </div>
    </div>

     <center>
      <div class="row">
      <div class="form-group col-sm-6">
        <label class="statement">Age</label>
        <input type="number" class="form-control" name="age" required>
      </div>
      <div class="form-group col-sm-6">
        <label class="statement">Mobile Number</label>
        <input type="number" class="form-control" name="pmno" required>
      </div>
      </div>

      <center>
     <div class="row">
      <div class="form-group col-sm-6">
        <label class="statement">Department</label>
        <select name="dept" class="form-control">
              <option value="ENT">ENT</option>
              <option value="Cardiology">Cardiology</option>
              <option value="Gynaecology">Gynaecology</option>
             </select>
          </div>
          <div class="form-group col-sm-6">
            <br><br>
              Select a file to upload:
              <input type="file" name="image">
          </div>
      </div>

       <center>
      <div class="row">
      <div class="form-group col-sm-6">
        <label class="statement">Attendant Name</label>
        <input type="text" class="form-control" name="atn" required>
      </div>
      <div class="form-group col-sm-6">
        <label class="statement">Attendant Mobile Number</label>
        <input type="number" class="form-control" name="amno" required>
      </div>
      </div>
<!--
       <center>
     <div class="row">
      <div class="form-group col-sm-6">
        <label class="statement">Upload Document</label>
         <input type="file" class="form-control-file" ="exampleFormControlFile1">
       </div>
      </div>

    </center>
  -->
     <div class="row">

      <div class="form-group col-sm-6">
        <label class="statement">Remarks</label>
         <textarea class="form-control" name="rem" rows="3" cols="50"></textarea>
       </div>
       <div class="from-group col-sm-6">
         <label class="statement">Select a Hospital</label>
         <select name="hospital" class="form-control">
               <option value="Virinchi Hospitals">Virinchi Hospitals</option>
               <option value="AIMS Hospital">AIMS Hospital</option>
               <option value="Misson Hospitals">Misson Hospitals</option>
              </select>
        </div>
      </div>
    <button class="button button1"  role="button" type="submit">Submit</button>
  </form>


</div>
<div class="col-sm-1"></div>
</div>
</div>
</body>
</html>
