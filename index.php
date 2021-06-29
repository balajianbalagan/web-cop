<?php
include_once 'header.php';
 ?>


<div class="container bg-dark mt-5 mb-5 p-5 text-white text-center rounded" >


<div>
  <?php
    if(isset($_SESSION["userName"])){
      $name =  $_SESSION["userName"];
      echo "<h3>Hello $name.</h3>";
    }

   ?>
  <h1>Web-Cop</h1>
  <p>
    Analyze suspicious websites and popular scam websites.
  </p>
</div>



<form method="POST" action="includes/scan.inc.php">
  <div class="input-group">
  <input type="text" class="form-control" id="givenLink" placeholder="Enter the link to be checked" name="givenLink">
  <div class="input-group-append">
    <span class="input-group-btn"><button type="submit" class="btn btn-lg btn-success" name="scan"><i class="fa fa-search fa-lg" aria-hidden="true"></i> Start Scan</button>  </span>
  </div>
</div>
</form>


<div class="container mt-4">
  <?php
if(isset($_GET["error"])){
  if($_GET["error"] == "none"){
    echo "<h3 class='text-success mt-5'>Scan results</h3>";
    if (isset($_SESSION["scanResults"])) {
      $tl = $_SESSION["scanResults"]["threatLevel"];
      $rc = $_SESSION["scanResults"]["reportCount"];
      $isp = $_SESSION["scanResults"]["isp"];
      $cc = $_SESSION["scanResults"]["countryCode"];
      include_once 'analysis.php';

    }
    }elseif ($_GET["error"] == "no") {
      echo "<h3 class='text-danger mt-5'>No results found</h3>";
    }
  }



   ?>







</div>


</div>

<div class="container mt-5 mb-5 p-5">
  <h1>Top Scam Websites to Avoid</h1>
  <div class="row p-5 m-1">
    <div class="col-sm-4 bg-light">
      scam1

    </div>
    <div class="col-sm-4 bg-light">scam2</div>
    <div class="col-sm-4 bg-light">scam3</div>
  </div>
</div>













<?php include_once "footer.php"; ?>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
