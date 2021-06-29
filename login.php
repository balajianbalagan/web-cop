<?php
include_once 'header.php';
 ?>

<div class="container bg-dark mt-5 mb-5 p-5 text-white text-center rounded">


<div >
  <h1>Web-Cop</h1>
  <p>
    Analyze suspicious websites and popular scam websites.
  </p>
</div>
  <h3 >Login</h3>
<div class="loginform container mt-3">

  <form method="post" action="includes/login.inc.php">

    <div class="row mb-3">
      <label for="inputUserName" class="col-sm-2 col-form-label" name="name">UserName</label>
      <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="inputUserName">
      </div>
    </div>



  <div class="row mb-3">
    <label for="inputPassword" class="col-sm-2 col-form-label" name="pwd">Password</label>
    <div class="col-sm-10">
      <input type="password" name="pwd" class="form-control" id="inputPassword">
    </div>
  </div>



  <div class="col-12 p-2 m-1">
     <button type="submit" class="btn btn-light btn-lg" name="submit">Log in</button>
   </div>

  </form>
  <div class="col-12 p-2 m-1">
    Don't have an account? <a href="signup.php">SignUp</a>
  </div>

</div>


<div style="color:#ff9980 ;">
  <?php
if(isset($_GET["error"])){
  if($_GET["error"]== "emptyInputLogin"){
    echo "<h3 > Fill in all the fields !</h3>";
  }elseif ($_GET["error"]== "wronglogin") {
    echo "<h3 > Incorrect UserName or Password !</h3>";
  }
}

    ?>
</div>

<h1 style="color:#80ff80;">
  <?php
  if(isset($_GET["error"])){
  if ($_GET["error"]== "none") {
    echo "SignUp Successful !";
  }}
  ?>
</h1>





</div>

















<?php include_once "footer.php"; ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
