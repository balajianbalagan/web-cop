<?php
session_start();

if(isset($_POST["submitReport"])){

  $reportedUrl = $_POST["reportedUrl"];
  $reportedIp = $_POST["reportedIp"];
  $reportedCat = $_POST["reportedCat"];
  $reportedComment = $_POST["reportedComment"];
  $userName = $_SESSION['userName'];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';



  if(emptyInputReport($reportedUrl,$reportedIp,$reportedCat) !== false){
    header("location: ../raswebsite.php?error=emptyInputReport");
    exit();
  }



  createReport($conn,$userName,$reportedUrl,$reportedIp,$reportedCat,$reportedComment);






}
else {
  header("location: ../ras.php");
}











 ?>
