<?php
include_once "header.php";
if (!isset($_SESSION["usersname"])) {
    header('Location:login.php?error=notloggedin');
    exit();
}
?>
<html>
<head>
<title>Points</title>
</head>

<body id="body" onload="myFunction()">
<section class="points-form">
<div class="points" id="points">
<?php
 if (isset($_GET["waste"])) {
        if ($_GET["waste"] == "newspapers") {
           echo "<script>document.getElementById('body').onload = function() {document.getElementById('newspapers').style.display = 'block';}</script>";
        } else if ($_GET["waste"] == "bottles") {
          echo "<script>document.getElementById('body').onload = function() {document.getElementById('bottles').style.display = 'block';}</script>";
        }
         else if ($_GET["waste"] == "tetra-pouches") {
          echo "<script>document.getElementById('body').onload = function() {document.getElementById('tetra-pouches').style.display = 'block';}</script>";
        }
         else if ($_GET["waste"] == "other-plastic-waste") {
          echo "<script>document.getElementById('body').onload = function() {document.getElementById('other-plastic-waste').style.display = 'block';}</script>";
        }
        else if ($_GET["waste"] == "error") {
        echo '<script>document.getElementById("body").onload = function() {var x = document.getElementById("snackbar");x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}</script>';
        }
      }
      
?>
    <h1>Points</h1>
   <div class="dropdown">
  <button class="dropbtn">Waste Type</button>
  <div class="dropdown-content">
    <a href="points.php?waste=newspapers">Newspapers</a>
    <a href="points.php?waste=bottles">Bottles</a>
    <a href="points.php?waste=tetra-pouches">Tetra Pouches</a>
    <a href="points.php?waste=other-plastic-waste">Other Plastic Waste</a>
  </div>
</div>
        <input type="number" placeholder="Enter The Amount Of Newspapers Donated!" class="newspapers" id="newspapers" required>
        <input type="number" placeholder="Enter The Amount Of Bottles Donated!" id="bottles" class="bottles" required>
        <input type="number" placeholder="Enter The Amount Of Tetra Pouches Donated!" id="tetra-pouches" class="tetra-pouches" required>
        <input type="number" placeholder="Enter The Amount Of Other Plastic Waste Donated!" id="other-plastic-waste" class="other-plastic-waste" required>
        <p id="demo"></p>
        <input type="submit" name="submit" value="Submit" class="submit" onclick="submit()">
    </div>    <div id="snackbar">Max Limit(20 Waste) Exceeded</div>

    <div class="container" id="container">
        <input id="name" type='text' placeholder="Enter Your Name">
        <a href="#" id="download-btn">Download</a>
        <canvas id="canvas" height="350px" width="500px"></canvas>
    </div>
    </section>
    <script>
submit();
function submit() {
  var input = document.getElementById("newspapers").value
  var input1 = document.getElementById("bottles").value
  var input2 = document.getElementById("tetra-pouches").value
  var input3 = document.getElementById("other-plastic-waste").value
  if(localStorage.input){
    if(input) {
      localStorage.input = Number(localStorage.input)+Number(input)*20;
    }
    if(input1) {
      localStorage.input = Number(localStorage.input)+Number(input1)*10;
    }
    if(input2) {
      localStorage.input = Number(localStorage.input)+Number(input2)*5;
    }
    if(input3) {
      localStorage.input = Number(localStorage.input)+Number(input3)*5;
    }
  }
  else {
    localStorage.input = 0;
    }

    if(input >= 20) {
      localStorage.input = Number(localStorage.input)-Number(input)*20;
      window.location.href = "points.php?waste=error";
      exit();
    }
    if(input1 >= 20) {
      localStorage.input = Number(localStorage.input)-Number(input1)*10;
      window.location.href = "points.php?waste=error";
      exit();
    }
    if(input2 >= 20) {
      localStorage.input = Number(localStorage.input)-Number(input2)*5;
      window.location.href = "points.php?waste=error";
      exit();
      }    
    if(input3 >= 20) {
      localStorage.input = Number(localStorage.input)-Number(input3)*5;
      window.location.href = "points.php?waste=error";
      exit();
      }
  document.getElementById("demo").innerHTML = localStorage.input;
  if(localStorage.input >= 2000) {
document.getElementById('container').style.display = 'block';
const canvas = document.getElementById('canvas')
const ctx = canvas.getContext('2d')
const nameInput = document.getElementById('name')
const downloadBtn = document.getElementById('download-btn')

const image = new Image()
image.src = 'certificate.jpg'
image.onload = function () {
	drawImage()
}

function drawImage() {
	ctx.drawImage(image, 0, 0, canvas.width, canvas.height)
	ctx.font = '40px monotype corsiva'
	ctx.fillStyle = '#29e'
	ctx.fillText(nameInput.value, 40, 180)
}

nameInput.addEventListener('input', function () {
	drawImage()
})

downloadBtn.addEventListener('click', function () {
	downloadBtn.href = canvas.toDataURL('image/jpg')
	downloadBtn.download = 'Certificate - ' + nameInput.value
})
  }
}
</script>
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
  from {bottom: 0; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 0; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
.container a {
    color: white;
}
.container {
    display: none;
}
#demo {
    text-align: center;
}
body {
    margin: 0;
    background: url(/img/sea.jpg);
    padding: 0;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
  }
  
  .points {
    width: 500px;
    height: 400px;
    background: #fff;
    color: black;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;
  }
  
  h1 {
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 35px;
  }
  
  .points p {
    margin: 0;
    padding: 0;
    font-weight: bold;
  }
  
  .points input {
    width: 100%;
    margin-bottom: 20px;
  }
  #name {
    border: none;
    border-bottom: 1px solid rgb(1, 1, 1);
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
  }  
  .newspapers {
    border: none;
    border-bottom: 1px solid rgb(1, 1, 1);
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
    display: none;
  }  
  .bottles {
    border: none;
    border-bottom: 1px solid rgb(1, 1, 1);
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
    display: none;
  }
    .tetra-pouches {
    border: none;
    border-bottom: 1px solid rgb(1, 1, 1);
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
    display: none;
  }
    .other-plastic-waste {
    border: none;
    border-bottom: 1px solid rgb(1, 1, 1);
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
    display: none;
  }
  
  .submit {
    border: none;
    outline: none;
    height: 40px;
    background: #00acd7;
    color: black;
    font-size: 18px;
    border-radius: 20px;
  }
  
  .submit:hover {
    cursor: pointer;
    background: #128dd4;
  }
  
  .points a {
    text-decoration: none;
    font-size: 17px;
    line-height: 20px;
    color: darkgrey;
  }
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  position: relative;
}
.dropdown {
  position: relative;
  display: inline-block;
  justify-content: center;
  display: flex;

}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin: 50px ;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</body>
</html>
<?php
include_once "footer.php";
?>