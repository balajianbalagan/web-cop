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
    Select the type of Scam to report
  </p>
</div>




</div>




<?php include_once "footer.php"; ?>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
