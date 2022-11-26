<?php

if (isset($_POST["submit"])) {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $class = $_POST["class"];
  $pwd = $_POST["pwd"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($name, $email, $class, $pwd) !== false) {
    header("location: ../signup.php?error=emptyinput");
    exit();
  }
  if (invalidName($name) !== false) {
    header("location: ../signup.php?error=invalidname");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
    exit();
  }
  if (nameExists($conn, $email, $name) !== false) {
    header("location: ../signup.php?error=name-or-emailtaken");
    exit();
  }

  createUser($conn, $name, $email, $class, $pwd);
} else {
  header("location: ../signup.php");
  exit();
}
