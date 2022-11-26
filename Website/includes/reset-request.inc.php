<?php

if (isset($_POST["reset-request-submit"])) {

  $selecter = bin2hex(random_bytes(8));
  $token = random_bytes(32);

  $url = "https://blueplanet1508.000webhostapp.com/create-new-password.php?selector=" . $selecter . "&validator=" . bin2hex($token) .

    $expires = date("U") + 1800;

  require 'dbh.inc.php';

  $userEmail = $_POST["email"];

  $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    die("There Was An Error!");
  } else {
    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);
  }

  $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken,	pwdResetExpires) VALUES (?, ?, ?,?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    die("There Was An Error!");
  } else {
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selecter, $hashedToken, $expires);
    mysqli_stmt_execute($stmt);
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  $to = $userEmail;

  $subject = 'Reset Your Password For Blueplanets!';

  $message = '<p>We Recieved A Password Reset Request.The Link To Reset Your Password Is Given Below.If You Didnt Make This Request,Simply Just Ignore This Email</p>';
  $message .= '<p>Here Is Your Password Reset Link</p><br>';
  $message .= '<a href="' . $url . '">' . $url . '</a></p>';

  $header = "From: Blueplanet <blueplanet1508@gmail.com>\r\n";
  $header .= "Reply-To: blueplanet1508@gmail.com\r\n";
  $header .= "Content-type: text/html\r\n";

  mail($to, $subject, $message, $header);

  header("location: ../resetpassword.php?reset=success");
} else {
  header("location: ../index.php");
}
