<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">.disclaimer { display: none; }</style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="https://stackpath.bu
      ootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <section class="heading">

    <nav>
      <a href="index.php"><img src="img/blueplanet.png"></a>
      <div class="links-list" id="links-list">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul class="ul">
          <?php
          if (isset($_SESSION["usersname"])) {
            echo "<li><a href='index.php'>HOME</a></li>";
            echo "<li><a href='waste.php'>WASTE</a></li>";
            echo "<li><a href='points.php'>POINTS</a></li>";
            echo "<li><a href='about.php'>ABOUT</a></li>";
            echo "<li><a href='profile.php'>PROFILE</a></li>";
            echo "<li><a href='includes/logout.inc.php'>LOGOUT</a></li>";
          } else {
            echo "<li><a href='index.php'>HOME</a></li>";
            echo "<li><a href='about.php'>ABOUT</a></li>";
            echo "<li><a href='login.php'>LOGIN</a></li>";
          }
          ?>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()" id="fa-bars"></i>
      
    </nav>
  </section>
  
</body>
<style>
  .div {
    border: none;
    outline: none;
    height: 40px;
    background: #00acd7;
    color: black;
    font-size: 18px;
    border-radius: 20px;
  }
* {
    margin: 0;
    font-family: 'Sora', sans-serif;
  }


::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: rgba(0, 0, 0, 0.692)
}

::-webkit-scrollbar {
    width: 5px;
}

::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #808080;
}

   @media(max-height: 600px) {
       .ul {
           position: static;
           left: 0;
       }
        .heading1 div{
            margin: 50px 1px;
            }
        #btnScrollToTop{
            position: fixed;
            right: 10px;
            bottom: 10px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
            color: black;
            border: none;
            outline: none;
            cursor: pointer;
            visibility: visible;
            }
        #btnScrollToTop:active {
            background: #D3D3D3;
            }
    }
    @media(max-width: 700px) {
        .ul {
            position: static;
            left: 0;
        }
        #btnScrollToTop{
            position: fixed;
            right: 10px;
            bottom: 10px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
            color: black;
            border: none;
            outline: none;
            cursor: pointer;
            visibility: visible;
            }
            #btnScrollToTop:active {
                background: #D3D3D3;
                }

            .links-list ul li {
                display: block;
            }   
        
            .links-list {
                position: fixed;
                background: linear-gradient(rgba(4, 9, 30, 0.7), rgba(84, 85, 90, 0.7));
                height: 100vh;
                width: 200px;
                top: 0;
                right: -200px;
                text-align: left;
                z-index: 2;
                transition: 1s;
            }

            nav .fa {
                display: block;
                color: #fff;
                margin: 10px;
                font-size: 22px;
                width:25px; 
                cursor: pointer;
                position: relative;
            }
            
            .links-list ul {
                padding: 10px;
            }
            
            .group-table {
                flex-direction: column;
            }
            
            .links-list ul li::after {
                content: '';
                width: 0%;
                height: 2px;
                background: #00acd7;
                display: block;
                margin: auto;
                transition: 0.5s;
                position: absolute;
            
            }
            
            .links-list ul li:hover::after {
                width: 30%;
            }
    }
.heading {
    background-color: rgba(0, 0, 0, 0.692);
  }
</style>