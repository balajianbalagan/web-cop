<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Web-cop : Scam website checker and analyzer</title>

    <!-- bootstrap cdn -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;700&family=Press+Start+2P&display=swap" rel="stylesheet">

    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  </head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <body>





    <nav class="navbar navbar-expand-xl bg-warning navbar-light nav-pills" style="color:#fff;font-size:1.1rem;">
  <a class="navbar-brand" href="index.php"><i class="fa fa-shield fa-lg" style="margin-right:5px;"></i>Web-Cop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul style="color:white;" class="nav navbar-nav ml-auto bg-warning" >
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">AboutUs</a>
      </li>
      <?php
      if(isset($_SESSION["userId"])){
        echo "<li class='nav-item'>";
        echo "<a class='nav-link' href='ras.php'>Report-a-Scam</a> </li>";
        echo "<li class='nav-item'>";
        echo "<a class='nav-link' href='profile.php'>Profile</a> </li>";
        echo "<li class='nav-item'>";
        echo "<a class='nav-link' href='includes/logout.inc.php'>LogOut</a> </li>";

      }else {
        echo "<li class='nav-item'>";
        echo "<a class='nav-link' href='signup.php'>SignUp</a> </li>";
        echo "<li class='nav-item'>";
        echo "<a class='nav-link' href='login.php'>LogIn</a> </li>";
      }




       ?>





    </ul>
  </div>
</nav>
