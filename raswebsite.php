<?php
include_once 'header.php';
 ?>


<div class="container bg-dark mt-5 mb-5 p-5 text-white text-center rounded" >


<div>

  <h1 class="text-danger">Report-a-Scam</h1>
  <p>
    Be a hero and Help the community.
  </p>
</div>



<form method="POST" action="includes/ras.inc.php">


  <div class="row mb-3">
    <label for="inputUrl" class="col-sm-2 col-form-label">Url of the website</label>
    <div class="col-sm-10">
      <input type="text" name="reportedUrl" class="form-control" id="inputUrl" placeholder="Url of the website to be reported">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputIp" class="col-sm-2 col-form-label">IP of the website</label>
    <div class="col-sm-10">
      <input type="text" name="reportedIp" class="form-control" id="inputIp" placeholder="IP of the website to be reported">
    </div>
  </div>

<div class="row mb-3">
  <div class="input-group mb-3">
    <label for="inputIp" class="col-sm-2 col-form-label">Category of Abuse</label>
    <div class="col-sm-10">
      <input type="text" name="reportedCat" class="form-control" placeholder="Category of Abuse" aria-label="cat" aria-describedby="basic-addon2">
      <span class="input-group-text" id="basic-addon2">Eg)Phishing,Spoofing,DNA poisoning</span>
    </div>
  </div>
</div>

<div class="row mb-3">
<div class="input-group">
  <label class="col-sm-2 col-form-label">Comment</label>
  <div class="col-sm-10">
  <textarea class="form-control" name="reportedComment" aria-label="With textarea" placeholder="Notes on the report (optional)"></textarea>
</div>

</div>
</div>

<?php
$_POST["userName"] = $_SESSION["userName"];
 ?>
<div class="col-12 p-2 mt-1">
   <button type="submit" class="btn btn-light btn-lg" name="submitReport">Submit Report</button>
 </div>


</form>

<div style="color:#ff9980 ;">
  <?php
if(isset($_GET["error"])){
  if($_GET["error"]== "emptyInputReport"){
    echo "<h3 > Fill in all the fields !</h3>";
  }
}
?>
</div>

<h6 style="color:#80ff80;margin-top:10px;">
  <?php
  if(isset($_GET["error"])){
  if ($_GET["error"]== "none") {
    echo "URL reported Successfully";
    echo "<br />Status will be approved after verification";
  }}
  ?>
</h6>

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
