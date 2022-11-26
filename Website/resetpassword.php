<?php
include_once 'header.php';
if (isset($_SESSION["usersname"])) {
    header('Location:index.php');
    exit();
}
?>

<head>
  <link rel="stylesheet" href="css/reset.css">
</head>

<body>

  <section class="signup-form">

    <div class="resetpassword" style="align-items: center;">
      <?php
      if (isset($_GET["reset"])) {
        if ($_GET["reset"] == "success") {
          echo '<p class="signupsuccess" style="text-align:center;">*Check Your Email Account</p>';
        }
      }
      ?>
      <h1>Reset Your Password!</h1>
      <p>An E-Mail Will Be Sent To Your Mail Address With Instruction On How To Reset Your Password!</p>
      <form action="includes/reset-request.inc.php" method="POST">
        <input type="text" name="email" class="email" placeholder="Enter Your Email Id...">
        <button type="submit" name="reset-request-submit" class="submit">Receive New Password By Email</button>
      </form>
    </div>
  </section>
  <style>
  .resetpassword {
    width: 450px;
    height: 375px;
    background: #fff;
    color: black;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;
  }
  @media(max-width: 700px) {
    body{
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    .resetpassword  {
      width: 450px;
      height: 379px;
    }
</style>
  <?php
  include_once 'footer.php'
  ?>
