<?php


if(isset($_POST["submit"])){

  $name = trim($_POST["name"]);
  $pwd = trim($_POST["pwd"]);


  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(emptyInputLogin($name,$pwd) !== false){
    header("location: ../signup.php?error=emptyInputSignup");
    exit();
  }

  loginUser($conn,$name,$pwd);

}else {
  header("location: ../login.php");
}




 ?>
