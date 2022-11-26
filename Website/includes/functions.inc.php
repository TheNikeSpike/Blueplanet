<?php

//SignUp
function emptyInputSignup($name, $email, $class, $pwd)
{
  $result;
  if (empty($name) || empty($email) || empty($class) || empty($pwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidName($name)
{
  $result;
  if (!preg_match("/^[a-zA-Z]*$/", $name)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email)
{
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function nameExists($conn, $email, $name)
{
  $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $name, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $class, $pwd)
{
  $sql = "INSERT INTO users (usersName,	usersEmail,	usersClass,	usersPwd) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $class, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../signup.php?error=none");
  exit();
}

function emptyInputLogin($name, $pwd)
{
  $result;
  if (empty($name) || empty($pwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

//Login
function loginUser($conn, $name, $pwd)
{
  $nameExists = nameExists($conn, $name, $name);

  if ($nameExists === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }

  $pwdHashed = $nameExists["usersPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if ($checkPwd === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  } else if ($checkPwd === true) {
    session_start();
    $_SESSION["userid"] = $nameExists["usersId"];
    $_SESSION["usersname"] = $nameExists["usersName"];
    header("location: ../index.php");
    exit();
  }
}
