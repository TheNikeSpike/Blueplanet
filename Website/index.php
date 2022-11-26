<?php
include_once 'header.php'
?>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>
<?php
if (isset($_SESSION["usersname"])) {
echo "Welcome To Blueplanet Site " . $_SESSION["usersname"] . "!";
} else {
    echo "Welcome To Blueplanet";
}
?>
</title>
</head>

<body>
  <section class="heading1">
    <div class="text">
      <?php
      if (isset($_SESSION["usersname"])) {
        echo "<p style='font-size:16px;text-align:center'>Welcome " . $_SESSION["usersname"] . "!</p>";
      }
      ?>
      <h3>Save Earth Project</h3>

      <p>The Blueplanet Team That Is Helping Our Enviroment By Using Waste To Turn Things Like Plastic Into
        Energy,Minerals From E-waste,Organic Waste Into Biogas,etc.<br>Luckily For Us We Can Also Contribute This By
        Donating Waste To Our School And Our School Will Give This Waste To Blueplanet.<br>Oh Ooops.......... I Almost
        Forgot To Tell you That We Will Get Points For Donating Waste And We Can Use These Points To Get A Certificate
      </p>
      <a href="https://blueplanet.asia" target="_blank" class="btn">Read The Blueplanet Site's Overview On This Topic To
        Know More</a>
    </div>
  </section>
  <button id="btnScrollToTop" class="scroll" onclick="scrollToTop()">
  <i class="material-icons">expand_less</i>
  </button>
  <section class="faq">
  <div>
    <h1>Blueplanet</h1>
    <b class="paragraph">Our Planet Is Deteoriating Day By Day So The Blueplanet Team Is Trying To Help Us By Making
      Waste Into Other
      Useful Items Hence Here Are Some Frequently Asked Questions By People And Their Answers....</b>
    <div class="group-table">
      <div class="content">
        <h2>Why Should I Contribute?</h2>
        <p class="p">Blueplanet Team Is Trying Their Best To Save Our Earth So It Won't Matter Much If You Donated Some Waste Considering The Fact Earth Is Deteriorating Very Quickly And Soil Erosion Is Getting Much Worse And Luckily We Are Going To Get A Certificate For It</p>
      </div>
    <div class="content">
      <h2>To Whom Should I Hand Out The Waste To?</h2>
      <p class="p">We Have To Hand Out The Waste To Our Respective Class Teachers</p>
    </div>
      <div class="content">
        <h2>How To Claim The Certificate?</h2>
        <p class="p">Well Thats Is Very Easy You Just Need To Collect More Than 600 Points To Get The Certificate</p>
      </div>
    </div>
</div>
    <style>
    body {
        overflow-x: hidden;
    }
            .heading1 div{
                position: absolute;
                top: 50%;
                transform: translate(10, -50%);
                padding: 10px;
                }
    .scroll{
        visibility: hidden;
    }
    @media(max-height: 600px) {
        .heading1 div{
            margin: 50px 1px;
            }
        #btnScrollToTop{
            display: none;
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
            }
        #btnScrollToTop:active {
            background: #D3D3D3;
            }
    }
    @media(max-width: 700px) {
        #btnScrollToTop {
            display: none;
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

                .faq h1{
                    padding-top: 25px;
                }
    }
        
        .faq {
        width: 85%;
        margin: auto;
        text-align: center;
        padding-top: 100px;
        }
        
        
        h1 {
        font-size: 36px;
        font-weight: 600;
        color: white;
        }
        
        b {
        color:#000080;
        padding: 10px;
        }
        .p {
        color:#000080;
        font-size: 14px;
        font-weight: 300;
        line-height: 22px;
        padding: 10px;
        }
        p {
        color: #fff;
        font-size: 14px;
        font-weight: 300;
        line-height: 22px;
        padding: 10px;
        }
        
        .group-table {
        margin-top: 5%;
        display: flex;
        justify-content: space-between;
        }

        
        .content {
        flex-basis: 31%;
        background: rgba(196, 249, 252, 0.86);
        border-radius: 10px;
        margin-bottom: 5%;
        padding: 20px 12px;
        box-sizing: border-box;
        transition: 0.5s;
        }
        
        h3 {
        text-align: center;
        font-weight: 600;
        font-size: 50px;
        margin: 10px 0;
        }
        
        .content:hover {
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
        }
        
        h1 {
        text-align: center;
        font-weight: 600;
        font-size: 50px;
        margin: 10px 0;
        color: black;
        }
        
        .paragraph {
        font-size: 18px;
        }
</style>
<script>
btnScrollToTop = document.getElementById("btnScrollToTop");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    btnScrollToTop.style.display = "block";
  } else {
    btnScrollToTop.style.display = "none";
  }
}
function scrollToTop() {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })
}

</script>



    <?php
    include_once 'footer.php'
    ?>
