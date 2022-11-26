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
    if (isset($_GET["newpwd"])) {
        if ($_GET["newpwd"] == "passwordupdated") {
          echo "Login:Password Updated!";
          }
        }
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
         echo "Login:Empty Input!";
       } else if ($_GET["error"] == "wronglogin") {
          echo "Login:Wrong Login!";
        } else if ($_GET["error"] == "notloggedin") {
          echo "Login:Not Logged In!";
        }
      }
    else {
        echo "Login";
    }
  ?>
  </title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body onload="myFunction()">
  <section class="login-form">
    <div class="login" id="login">
      <?php
        if (isset($_GET["newpwd"])) {
          if ($_GET["newpwd"] == "passwordupdated") {
            echo "<p style=text-align:center;color:green>*Your Password has been reset</p>";
          }
        }
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
           echo '<script>function myFunction() {var x = document.getElementById("snackbar");x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}</script>';
        } else if ($_GET["error"] == "wronglogin") {
          echo '<script>function myFunction() {var x = document.getElementById("snackbarr");x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}</script>';
        } else if ($_GET["error"] == "notloggedin") {
          echo '<script>function myFunction() {var x = document.getElementById("snackbarrr");x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}</script>';
        }
      }
      ?>
      <h1>Log In</h1>
      <form action="includes/login.inc.php" method="POST">
        <p>Username</p>
        <input type="text" placeholder="Enter Your Name/Email" class="name" name="name" required>
        <p>Password</p>
        <input type="password" placeholder="Enter Password" class="pwd" name="pwd" required>
        <p>Class</p>
        <input type="number" name="class" placeholder="Enter Your Class And Section" class="class" required maxlength="3">
        <input type="submit" name="submit" value="Log In" class="submit" onclick="submit()">
        <a href="https://blueplanet-team.000webhostapp.com/resetpassword.php">Forgot Password?</a><br>
        <a href="signup.php">Create An Account?</a>
      </form>
      
    </div>
    <div id="snackbar">Fill In All The Fields!</div>
    <div id="snackbarr">Incorrect Username/Email Or Password</div>
    <div id="snackbarrr">Please Login To Get That Feature</div>
  </section>
  <style>
#snackbar {
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
  left: 46.5%; 
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
    .login {
      height: 583px;
    }

    @media(max-width: 700px) {
        body{
            overflow: hidden;
        }
      .login {
        padding: 35px;
        width: 375px;
        height: 500px;
      }
      p{
          font-size: 18px;
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
      #snackbarr {
        left: 36.5%;
        }
    }
  </style>
  
  <?php
  include_once 'footer.php'
  ?> 