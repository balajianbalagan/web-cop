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
<h3 >Signup</h3>
<div class="signupform container mt-3 ">

  <form method="post" action="includes/signup.inc.php">

    <div class="row mb-3">
      <label for="inputUserName" class="col-sm-2 col-form-label">UserName</label>
      <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="inputUserName">
      </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="pwd" class="form-control" id="inputPassword">
      <span id="StrengthDisp" class="badge displayBadge"></span>
    </div>

  </div>

  <div class="row mb-3">
    <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" name="confirmpwd" class="form-control" id="inputConfirmPassword">
    </div>
  </div>

  <div class="col-12 p-2 m-1">
     <button type="submit" class="btn btn-light btn-lg" name="submit">Sign up</button>
   </div>

  </form>
  <div class="col-12 p-2 m-1">
    Already a member? <a href="login.php">LogIn</a>
  </div>
</div>

<div style="color:#ff9980 ;">
  <?php
if(isset($_GET["error"])){
  if($_GET["error"]== "emptyInputSignup"){
    echo "<h3 > Fill in all the fields !</h3>";
  }elseif ($_GET["error"]== "InvalidEmail") {
    echo "<h3> Enter a valid email !</h3>";
  }elseif ($_GET["error"]== "Invalidname") {
    echo "<h3 > Enter a valid UserName !</h3>";
  }elseif ($_GET["error"]== "passwordLengthError") {
    echo "<h3> Password is too short !</h3>";
  }elseif ($_GET["error"]== "passwordError") {
    echo "<h3 > Passwords do not match !</h3>";
  }elseif ($_GET["error"]== "userExist") {
    echo "<h3> UserName/Email already taken !</h3>";
  }elseif ($_GET["error"]== "stmtFailed") {
    echo "<h3> Query statement failed !</h3>";
  }

}

    ?>
</div>

<h1 style="color:#80ff80;">
  <?php
  if(isset($_GET["error"])){
  if ($_GET["error"]== "none") {
    echo " SignUp Successful !";
  }}
  ?>
</h1>



</div>















<?php include_once "footer.php"; ?>

<script src="js/index.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
