<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
		body {background-image: url("bg.jpg");
    /* Full height */
   height: 100%;

   /* Center and scale the image nicely */
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;}

   .dropbtn {
     background-color: grey;
     color: white;
     padding: 16px;
     font-size: 16px;
     border: none;
     cursor: pointer;
   }

   /* The container <div> - needed to position the dropdown content */
   .dropdown {
     position: relative;
     display: inline-block;
   }

   /* Dropdown Content (Hidden by Default) */
   .dropdown-content {
     display: none;
     position: absolute;
     background-color: #f9f9f9;
     min-width: 160px;
     box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
     z-index: 1;
   }

   /* Links inside the dropdown */
   .dropdown-content a {
     color: black;
     padding: 12px 16px;
     text-decoration: none;
     display: block;
   }

   /* Change color of dropdown links on hover */
   .dropdown-content a:hover {background-color: #f1f1f1}

   /* Show the dropdown menu on hover */
   .dropdown:hover .dropdown-content {
     display: block;
   }

   /* Change the background color of the dropdown button when the dropdown content is shown */
   .dropdown:hover .dropbtn {
     background-color: #3e8e41;
   }

	</style>
  <title>Home</title>
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
        <div class="col-sm-3"><h2 style="color:white;"><center>Hello <?php echo $row['fname']; ?></center></h2></div>
        <div class="col-sm-7"><a href="index.php" style="color:white;"><h2><center>Home</center></h2></a></div>
        <div class="col-sm-2  ">
          <div class="dropdown">
    <button class="dropbtn">Menu</button>
    <div class="dropdown-content">
      <a href="changepassword.php">Change Password</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>
      <!--    <a class="btn btn-secondary pull-right" href="logout.php" role="button"><center>LogOut</center></a>  -->
        </div>
  </div>
  <br><br>
  <div class="row">


    <div class="col-sm-4">
      <a href="refer.php"><center><img class="img-responsive img-icons" src="rp.png" alt="Chania"></center></a><br>
    </div>



    <div class="col-sm-4">
    <a href="update.php"><center><img class="img-responsive img-icons" src="up.png" alt="Chania"></center></a><br>
    </div>



    <div class="col-sm-4">
    <a href="referral.php"><center><img class="img-responsive img-icons" src="rpp.png" alt="Chania"></center></a><br>
    </div>


  </div>
  <br><br>
  <div class="row">


    <div class="col-sm-4">
      <a href="appointments.php"><center><img class="img-responsive img-icons" src="ap.png" alt="Chania"></center></a><br>
    </div>



    <div class="col-sm-4">
    <a href="contactus.php"><center><img class="img-responsive img-icons" src="cu.png" alt="Chania"></center></a><br>
    </div>



    <div class="col-sm-4">
    <a href="feedback.php"><center><img class="img-responsive img-icons" src="fb.png" alt="Chania"></center></a><br>
    </div>


  </div>
</div>
</body>
</html>
