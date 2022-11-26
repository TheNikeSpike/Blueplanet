<?php 
include_once "header.php";
?>
<html>
<head>
<title>Waste</title>
</head>
<body>
<section id="heading1" class="heading1">
<div class="text">
<h3 id="demo"></h3><br>
<p>New Here And You Have No Clue About The Points Table? Well Worry Not Cause I am Here</p>

<table border="1" class="table">
<tr>
<th class="sno">S.No</th>
<th class="sno">Name</th>
<th class="sno">Points Given</th>
</tr>
<tr>
<td>1.</td>
<td class="sno">Newspapers</td>
<td>20</td>
</tr>
<tr>
<td>2.</td>
<td>Bottles</td>
<td>10</td>
</tr>
<tr>
<td>3.</td>
<td>Tetra Pouches</td>
<td>5</td>
<tr>
<td>4.</td>
<td>Other Plastic Waste</td>
<td>5</td>
</tr>
</table>
</div>
</section>
</body>
<script>
localStorage.getItem("input")
  document.getElementById("demo").innerHTML = "You Have " + localStorage.input + " Points!!!!!!!";
</script>
<style>
.table {
      align-content: center;
      color: white;
}
.sno{
    padding: 0px 20px;
}
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
        color: white;
        }
        
        .paragraph {
        font-size: 18px;
        }
</style>
<script>
</html>
<?php
include_once "footer.php";
?>