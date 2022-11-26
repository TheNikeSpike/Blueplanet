<?php
include_once 'header.php';
if (isset($_SESSION["usersname"])) {
    header('Location:index.php');
    exit();
}
?>

<head>
  <title>
  <?php
   if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
         echo 'Signup:Empty Input';
        } else if ($_GET["error"] == "invalidname") {
        echo 'Signup:Invalid Name!';
        } else if ($_GET["error"] == "invalidemail") {
        echo 'Signup:Invalid Email!';
        } else if ($_GET["error"] == "stmtfailed") {
        echo 'Signup:Try Again Later!';
        } else if ($_GET["error"] == "name-or-emailtaken") {
        echo 'Signup:Name Or Email Taken!';
        } else if ($_GET["error"] == "none") {
        echo 'Signed Up!';
        }
    }
  ?>
  </title>
  <link rel="stylesheet" href="css/signup.css">
</head>

<body onload="myFunction()">

  <section class="signup-form">
    <div class="register">
      <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
         echo '<script>function myFunction() {var x = document.getElementById("snackbar");x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}</script>';
        } else if ($_GET["error"] == "invalidname") {
        echo '<script>function myFunction() {var x = document.getElementById("snackbarr");x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}</script>';
        } else if ($_GET["error"] == "invalidemail") {
        echo '<script>function myFunction() {var x = document.getElementById("snackbarrr");x.className = "show";setTimeout(function(){ x.className =     x.className.replace("show", ""); }, 3000);}</script>';
        } else if ($_GET["error"] == "stmtfailed") {
echo '<script>function myFunction() {var x = document.getElementById("snackbarrrr");x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}</script>';
} else if ($_GET["error"] == "name-or-emailtaken") {
echo '<script>function myFunction() {var x = document.getElementById("snackbarrrrr");x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}</script>';
} else if ($_GET["error"] == "none") {
echo '<script>function myFunction() {var x = document.getElementById("snackbarrrrrr");x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}</script>';
}
      }
      ?>
      <h1>Register</h1>
      <form action="includes/signup.inc.php" method="POST">
        <p>Name</p>
        <input type="text" name="name" placeholder="Enter Your Name" class="name" required>
        <p>Email-Id</p>
        <input type="email" name="email" placeholder="Enter Your Email Id" class="email" required>
        <p>Password</p>
        <input type="password" name="pwd" placeholder="Create Your Password" class="password" required>
        <p>Class</p>
        <input type="text" name="class" placeholder="Enter Your Class And Section" class="class" required maxlength="3">
        <input type="submit" name="submit" value="Register" class="submit">
        <a href="login.php">Already Have An Account? Login Here!</a>
      </form>
    </div>
    <div id="snackbar">Fill In All The Fields!</div>
    <div id="snackbarr">Names Shouldn't Have Special Characters In It!</div>
    <div id="snackbarrr">Invalid Email!</div>
    <div id="snackbarrrr">Please Try Again Later!</div>
    <div id="snackbarrrrr">Name/Email Already Taken!</div>
    <div id="snackbarrrrrr">Succesfully Signed Up!</div>
  </section>

  <style>
#snackbar {
  visibility: hidden; 
  min-width: 250px; 
  margin-left: -125px; 
  background-color: #333; 
  color: #fff; /
  text-align: center; 
  border-radius: 2px; 
  padding: 16px; 
  position: fixed;
  z-index: 1; 
  left: 50%;
  bottom: 30px;
}
#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
#snackbarr {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
}
#snackbarr.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
#snackbarrr {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px; 
  background-color: #333; 
  color: #fff;
  text-align: center; 
  border-radius: 2px; 
  padding: 16px;
  position: fixed; 
  z-index: 1; 
  left: 50%; 
  bottom: 30px; 
}
#snackbarrr.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
#snackbarrrr {
  visibility: hidden; 
  min-width: 250px; 
  margin-left: -125px; 
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed; 
  z-index: 1; 
  left: 50%;
  bottom: 30px; 
}
#snackbarrrr.show {
  visibility: visible; 
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
#snackbarrrrr {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px; 
  padding: 16px; 
  position: fixed; 
  z-index: 1; 
  left: 50%; 
  bottom: 30px;
}
#snackbarrrrr.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
#snackbarrrrrr {
  visibility: hidden; 
  min-width: 250px;
  margin-left: -125px; 
  background-color: #333; 
  color: #fff; 
  text-align: center; 
  border-radius: 2px; 
  padding: 16px; 
  position: fixed; 
  z-index: 1; 
  left: 50%; 
  bottom: 30px; 
}
#snackbarrrrrr.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}
@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
    .register {
      height: 600px;
      padding: 30px
    }

    @media(max-width: 700px) {
      .register {
        padding: 35px;
        width: 400px;
        height: 600px;
      }

      nav {
        display: flex;
        padding: 1.25% 1.25%;
        justify-content: space-between;
        align-items: center;
      }

      nav img {
        width: 40px;
      }
    }
  </style>


  <?php
  include_once 'footer.php'
  ?>
