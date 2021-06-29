<?php

function emptyInputSignup($name,$email,$pwd,$confirmpwd)
{

  if (empty($name) || empty($email) || empty($pwd) || empty($confirmpwd)  ) {
    return true;
  }else{
    return false;
  }
}

function emptyInputReport($url,$ip,$cat)
{
  if (empty($url) || empty($ip) || empty($cat)  ) {
    return true;
  }else{
    return false;
  }
}



function InvalidEmail($email)
{

  if (!filter_var($email,FILTER_VALIDATE_EMAIL) ) {
    return true;
  }else{
    return false;
  }
}



function Invalidname($name)
{

  if (!preg_match("/^[a-zA-Z0-9]*$/",$name) ) {

    return true;
  }else{
    if(strlen($name)<=4){
      return true;
    }else{
      return false;
    }

  }
}

function passwordError($pwd,$confirmpwd)
{

  if ( $pwd !== $confirmpwd ) {
    return true;
  }else {
    return false;
  }
}
function passwordLengthError($pwd)
{

  if(strlen($pwd)<=4){
    return True;
  }else{
    return false;
  }
}

function userExist($conn,$name,$email)
{

  $sql = "SELECT * FROM users WHERE userName = ? OR userMail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt,'ss',$name,$email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if($row=mysqli_fetch_assoc($resultData)){
    return $row;
  }
  else{
    return false;
  }
  mysqli_stmt_close($stmt);
}

function createUser($conn,$name,$email,$pwd)
{

  $sql = "INSERT INTO users (userName, userMail, userPwd) VALUES (?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=stmtFailed");
    exit();
  }

  $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);


  mysqli_stmt_bind_param($stmt,'sss',$name,$email,$hashedpwd);

  if(mysqli_stmt_execute($stmt)){
                 // Redirect to login page
                 header("location: ../signup.php");
             } else{
                 echo "Oops! Something went wrong. Please try again later.";
             }

  mysqli_stmt_close($stmt);

  // $stmt = $mysqli->prepare("INSERT INTO users VALUES (?, ?, ?)");
  // $stmt->bind_param('sss', $name, $mail, $pwd);
  // $stmt->execute();
  header("location: ../signup.php?error=none");
  exit();
}
function emptyInputLogin($name,$pwd)
{

  if (empty($name) || empty($pwd)) {
    return true;
  }else{
    return false;
  }
}
function loginUser($conn,$name,$pwd)
{
  $userExist = userExist($conn,$name,$email);
  if($userExist === false){
    header("location: ../signup.php?error=wronglogin");
    exit();
  }
  $pwdHashed = $userExist["userPwd"];
  $checkpwd = password_verify($pwd,$pwdHashed);

  if($checkpwd === false){
    header("location: ../signup.php?error=wronglogin");
    exit();
  }
  elseif ($checkpwd === true) {
    session_start();
    $_SESSION["userId"] = $userExist["userId"];
    $_SESSION["userName"] = $userExist["userName"];
    header("location: ../index.php");
    exit();
  }
  }

  function createReport($conn,$userName,$reportedUrl,$reportedIp,$reportedCat,$reportedComment)
  {
    $sql = "INSERT INTO reportDb (userName, reportedUrl, reportedIp, reportedCat,reportedComment) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("location: ../raswebsite.php?error=stmtFailed");
      exit();
    }
      mysqli_stmt_bind_param($stmt,'sssss',$userName,$reportedUrl,$reportedIp,$reportedCat,$reportedComment);
      if(mysqli_stmt_execute($stmt)){

                     header("location: ../raswebsite.php");
                 } else{
                     echo "Oops! Something went wrong. Please try again later.";
                 }

      mysqli_stmt_close($stmt);
      header("location: ../raswebsite.php?error=none");
      exit();
  }

 ?>
