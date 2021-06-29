<?php

if(isset($_POST["submit"])){

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$pwd = trim($_POST["pwd"]);
$confirmpwd = trim($_POST["confirmpwd"]);

require_once 'dbh.inc.php';
require_once 'functions.inc.php';


if(emptyInputSignup($name,$email,$pwd,$confirmpwd) !== false){
  header("location: ../signup.php?error=emptyInputSignup");
  exit();
}
if(InvalidEmail($email) !== false){
  header("location: ../signup.php?error=InvalidEmail");
  exit();
}
if(Invalidname($name) !== false){
  header("location: ../signup.php?error=Invalidname");
  exit();
}
if(passwordLengthError($pwd) !== false){
  header("location: ../signup.php?error=passwordLengthError");
  exit();
}
if(passwordError($pwd,$confirmpwd) !== false){
  header("location: ../signup.php?error=passwordError");
  exit();
}
if(userExist($conn,$name,$email) !== false){
  header("location: ../signup.php?error=userExist");
  exit();
}


createUser($conn,$name,$email,$pwd);

}

else {
  header("location: ../signup.php");
}






 ?>
