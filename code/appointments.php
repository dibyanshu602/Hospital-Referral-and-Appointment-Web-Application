<?php
   include('session.php');
   if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
       $dept=$_POST['dept'];
       $s = "SELECT * FROM doctorinfo where dept=$dept";
       $res = mysqli_query($conn, $s);
       $cnt = mysqli_num_rows($res);
   }
   else{
     $cnt = 0;
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
      background-color: #e6ffff ;
    }
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  text-align: center;
}
div {
  padding-top: 5px;
  padding-right: 5px;
  padding-bottom: 5px;
  padding-left: 5px;
}
  </style>
  <title>Appointments</title>
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
            <div class="col-sm-9"><center><h2>Appointments</h2></div>
            <div class="col-sm-1">
              <a class="btn btn-secondary" href="home.php" role="button">Back</a>
            </div>
      </div>
      <hr>
    <form action="appointments.php" method="post">
            <div class="row">
              <div class="col-sm-4">
                  <br>
                  <label class="statement"><strong>Select Department</strong></label>
              </div>
              <div class="col-sm-4" style="align-content:center;">
              <center>
                  <select type="number" name="dept" class="" required>
                    <option value="1">Neuro Care</option>
                    <option value="2">Nephro Care</option>
                    <option value="3">Cardio care</option>
                    <option value="4">ENT</option>
                    <option value="5">Cancer Care</option>
                    <option value="6">Eye</option>
                  </select>
             </center>
              </div>
              <div class="col-sm-4">
                <button class="button button1"  role="button" type="submit">Search</button>
              </div>
            </div>
      </form>

<div class="row">
        <div class="col-sm-6">
      <form method="post" action="bookings.php">
          <div class="form-group">
            <div class="row">

          <?php
            for($i=0;$i*2<$cnt/2;$i++){
              $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
          ?>
            <div class="card w-100">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4"><img src="<?php echo $row['dp'];?>" alt="doctorphoto" width="100"; height="100"></div>
                  <div class="col-sm-8">
            <input type="submit" class="btn btn-light btn-lg btn-block" value="<?php echo $row['doctorname'];?>" name="doctorname" id="doctorname" style="margin-bottom: 5px;">
            <?php echo $row['position'];?></input>
          </div>
        </div>
              </div>
            </div>
          <?php
              }
           ?>
         </form>
       </div>

    </div>
    </div>

    <div class="col-sm-6">
  <form method="post" action="bookings.php">
      <div class="form-group">
        <div class="row">

      <?php
        for(;$i<$cnt;$i++){
          $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
      ?>
      <div class="card w-100">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-4"><img src="<?php echo $row['dp'];?>" alt="doctorphoto" width="100"; height="100"></div>
            <div class="col-sm-8">
      <input type="submit" class="btn btn-light btn-lg btn-block" value="<?php echo $row['doctorname'];?>" name="doctorname" id="doctorname" style="margin-bottom: 5px;">
      <?php echo $row['position'];?></input>
    </div>
  </div>
        </div>
      </div>
      <br>
      <?php
          }
       ?>
     </form>
   </div>

 </div>
  </div>

  </div>
    <div class="col-sm-1"></div>
  </div>

  </div>
