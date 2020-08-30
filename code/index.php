<!DOCTYPE html>
<html lang="en">
<head>
  <title>Virinchi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
<style>
.scrollit {
  margin: auto;

    overflow:scroll;
    height:300px;
}
.cr{
margin :auto;
height:400px;
}

.dropdown-menu > li.kopie > a {
    padding-left:5px;
}

.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
   top:0;left:100%;
   margin-top:-6px;margin-left:-1px;
   -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
 }

.dropdown-submenu > a:after {
  border-color: transparent transparent transparent #333;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  content: " ";
  display: block;
  float: right;
  height: 0;
  margin-right: -10px;
  margin-top: 5px;
  width: 0;
}

.dropdown-submenu:hover>a:after {
    border-left-color:#555;
 }

.dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
  text-decoration: underline;
}

@media (max-width: 767px) {

  .navbar-nav  {
     display: inline;
  }
  .navbar-default .navbar-brand {
    display: inline;
  }
  .navbar-default .navbar-toggle .icon-bar {
    background-color: #fff;
  }
  .navbar-default .navbar-nav .dropdown-menu > li > a {
    color: red;
    background-color: #ccc;
    border-radius: 4px;
    margin-top: 2px;
  }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a {
     color: #333;
   }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
     background-color: #ccc;
   }

   .navbar-nav .open .dropdown-menu {
     border-bottom: 1px solid white;
     border-radius: 0;
   }
  .dropdown-menu {
      padding-left: 10px;
  }
  .dropdown-menu .dropdown-menu {
      padding-left: 20px;
   }
   .dropdown-menu .dropdown-menu .dropdown-menu {
      padding-left: 30px;
   }
   li.dropdown.open {
    border: 0px solid red;
   }

}

@media (min-width: 768px) {
  ul.nav li:hover > ul.dropdown-menu {
    display: block;
  }
  #navbar {
    text-align: center;
  }
}

</style>

</head>
<body>
 <div class="container-fluid">
<div class="row">
<div class="col-sm-2">
  <br>
<img src="logo.jpg" class="img-rounded" alt="Funding Agencies" width="150px;" height="  80px;">
</div>
<div class="col-sm-8">
<div class="text-center">
  <br><br><br>
  <strong><h1 style="color:purple;font-weight: bold;">Welcome to Virinchi Channel Partner</h1></strong>
</div>
</div>
<div class="col-sm-2">
  <br><br>
<a class="button button1" href="login.php" role="button">Login</a>
<a class="button button2" href="signup.php" role="button">Sign Up</a>
</div>
</div>
<hr>

</head>

<body>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
<strong>
    <div class="carousel-inner">
      <div class="item active cr">
        <img src="sp1.png" alt="Virinchi" style="width:100%;height:400px">
      <div class="carousel-caption">
        <p>PIC 1</p>
      </div>
      </div>

      <div class="item cr">
        <img src="sp2.png" alt="Virinchi" style="width:100%;height:400px">
      <div class="carousel-caption">
        <p>PIC 2</p>
      </div>
      </div>

      <div class="item cr">
        <img src="sp3.png" alt="Virinchi" style="width:100%;height:400px">
      <div class="carousel-caption">
        <p>PIC 3</p>
      </div>
  </div>

<!--
      <div class="item cr">
        <img src="#" alt="Virinchi" style="width:100%;height:400px">
      <div class="carousel-caption">
        <p>PIC 4</p>
      </div>
      </div>

      <div class="item cr">
        <img src="5.jpg" alt="IITI" style="width:100%;height:400px">
      <div class="carousel-caption">
        <p>PIC 5</p>
      </div>
      </div>

      <div class="item cr">
        <img src="#" alt="Virinchi" style="width:100%; height:400px">
      <div class="carousel-caption">
        <p>PIC 6</p>
      </div>
      </div>
    -->
    </div>
</strong>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<br><br>


<div class="panel panel-default" >
      <div class="panel-heading"><h4><strong><center>About Virinchi Hospitals</center></strong></h4></div>
      <div class="panel-body"><ul>
      <h4><li>Virinchi Hospitals, best multispeciality hospital in Hyderabad invites Medical representatives from various regions to refer our Hospital for medical services. The hospital has over 35 specialities with a bed occupancy of 550, top notch infracture with NABH Accreditation.Virinchi also operates 2 economy brand hospitals under ‘Bristlecone’, a 140-bed hospital at Hayathnagar and a 60-bed hospital at Barkatpura in Hyderabad. Our objective is to provide a challenging combination of world-class and affordable healthcare services.</li><br>
      <li>Deep medical expertise with a focus on CONNECT specialties – Cardiology, Orthopedics, Neurology, Nephrology, Emergency, Cancer & Transplants. These departments in particular are expreessly equipped with sophisticated equipment and experienced resources.Having the best Medical practitioners offering  best medical care for each patient with focus on infection control.A high patient benefit is comprised of first-class medical quality, a high level of patient satisfaction and the efficient provision of services.Every care practitioner and diagnostics teams are empowered with digital platforms for ease of access to the medical records of the patient.</li>
  <br>    <li>Virinchi Hospitals are progressing positively while fortifying themselves with the finest of the medical equipment, infracture, processes and most importantly renowned and expert m,edical staff with exceptional standards in diagnostics and therapy for treatind every disorder to an extent current medical science can possibly provide.</li>
</ul><br></h4>
    </div>
</div>
</div>
</body>
<br>
<p><center>footer</center></p><br>
</html>
