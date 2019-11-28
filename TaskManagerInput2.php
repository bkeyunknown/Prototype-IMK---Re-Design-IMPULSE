<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task Manager - Input</title>
  
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="shortcut icon" href="logo/logo_login2.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

    <style>
        
        .container{
           
           width: 800px;
           
           background: #9DC3E6;
           position: absolute;
           top: 50%;
           left: 23%;
           margin-top: -150px;
           margin-left: -205px;
           
           padding: 10px;
           
           
       }
        body{
            background-color: #9DC3E6;
            font-family: calibri;
        }
        .grid {
            width: 100%;
            margin-right:160px;
        }
        #logo{
        width: 400px;
        height: 70px;
        background-color: #8FAADC;
        float: left;
        margin: 0;
        padding-top: 10px;
        padding-left: 20px;
        }
        #header1{
            width: 350px;
            height: 70px;
            float: left;
            margin: 0;
            padding-top: 10px;
            padding-left: 40px;
            font-size: 25px;
        }
        #header2{
            width: 400px;
            height: 70px;
            margin: 0;
            padding-top: 10px;
            padding-left: 40px;
            font-size: 25px;
        }
        #header3{
            width: 300px;
            height: 70px;
            margin: 0;
            padding-top: 5px;
            padding-left: 40px;
            padding-right: 90px;
            font-size: 35px;
            float: right;
            background-color: #8FAADC;
        }
        #header {
            background-color: #2E75B6;
            height: 70px;
        }
        #btnadmin{
            float:right;
            margin: 15px 20px 0 0;
        }
        .in{
            display: inline-block;
        }
        .menu{
            height: 50px;
            background-color: #FFFFFF;
        }
        .col-2{
            border: 1px solid black;
            height: 50px;
            text-align: center;
            padding-top: px;
            font-size: 30px;
        }
        .col-2 a{
            text-decoration: none;
            color: black;
        }

    </style>
</head>
<body>
    <!--
        <div className="youtube-wrapper">
                <div className="img-thumb">
                    <img src="https://i.ytimg.com/vi/5kHyviqjhCk/hqdefault.jpg?sqp=-oaymwEYCKgBEF5IVfKriqkDCwgBFQAAiEIYAXAB&rs=AOn4CLDD6DPWG5t9r4EdBQj0U5-vnDoyaQ" alt=""/>
                    <p className="time">{props.time}</p>
                </div>
                <p className="title">{props.title}</p>
                <p className="desc">{props.desc}</p>
        </div>
    -->
        <div  id="header">
            <div class="grid">
                <div id="logo" class="in">
                    <a href="">
                        <img src="logo/logo_admin.png" alt="">
                    </a>
                </div>
                <div id="header1" class="in">
                    <strong>Waktu Server : 10:48:11</strong>
                </div>
                <div id="header2" class="in">
                    <p style="color: white;float:right;">Welcome, Dicky Hidayat</p>
                </div>
                <div class="in" id="header3">
                    <strong><a href="Login.html" style="float: right;text-decoration: none;color: black;">Logout</a></strong>
                </div>
            </div>
            
        </div>
        <div class="menu">
            <div class="row">
                    <div class="col-2">
                        <a href="AsprakHome.html">Home</a>
                    </div>
                    <div class="col-2" style="">
                        <a href="ApsrakAbsen.html">Presence</a>
                    </div>
                    <div class="col-2" style="font-size: 26px;padding-top: 2px;">
                        <a href="AsprakActivate.html">Activate Practicum</a>
                    </div>
                    <div class="col-2" style="font-size: 26px;padding-top: 2px;background: #6688FF;border: 4px solid #0038FF;">
                        <a href="TaskManagerViewPre.html">Task Manager</a>
                    </div>
                    <div class="col-2" style="font-size: 26px;padding-top: 2px;">
                        <a href="AsprakScore.html">Score Manager</a>
                    </div>
                    <div class="col-2" style="font-size: 26px;padding-top: 2px;">
                        <a href="AsprakAccount.html">Account Manager</a>
                    </div>
                </div>
    </div>
    <div>
    <a href ="TaskManagerViewPre.html"><div style ="position: absolute;

background: #FFFFFF;
border: 1px solid #000000;
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
position: absolute;
width: 250px;
height: 50px;
left: 33px;
top: 149px;

font-family: calibri;
font-style: normal;
font-weight: normal;
font-size: 34px;
line-height: 48px;
text-align: center;

color: #000000;" >View Task</div></a>
<a href ="TaskManagerInput.php"><div style="position: absolute;
width: 250px;
height: 50px;
left: 302px;
top: 149px;

font-family: calibri;
font-style: normal;
font-weight: normal;
font-size: 34px;
line-height: 48px;
text-align: center;


background: #6688FF;
border: 3px solid #000000;
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

color: #000000;">
Input Task</div></a>
    <div class="container">
        <div style = "font-family: calibri;
font-style: normal;
font-weight: normal;
font-size: 34px;
line-height: 48px;

color: #000000;">
        <?php if($_POST['pretest'] != 0){?> 
            Pre Test <button style="
    float:right;
    width: 140px;
    height: 50px;
    
    font-family: calibri;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 34px;
    text-align: center;
    border: 1px solid #333;
    border-radius: 5px" class="btn-primary">Upload</button> 
            <?php } ?>
        </div>
        <br>
        <?php for($i=1;$i<=$_POST['pretest'];$i++){ ?> 
            <textarea style="
        
        font-size:20px" rows="3" cols="90"><?= $i ?>. </textarea><br>
        <?php } ?>
        
        <div style = "font-family: calibri;
font-style: normal;
font-weight: normal;
font-size: 34px;
line-height: 48px;

color: #000000;">
        <?php if($_POST['journal'] != 0){?> 
            Journal <button style="
    float:right;
    width: 140px;
    height: 50px;
    
    font-family: calibri;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 34px;
    text-align: center;
    border: 1px solid #333;
    border-radius: 5px" class="btn-primary">Upload</button> 
            <?php } ?>
        </div>
        <br>
        <?php for($i=1;$i<=$_POST['journal'];$i++){ ?> 
            <textarea style="
        
        font-size:20px" rows="3" cols="90"><?= $i ?>. </textarea><br>
        <?php } ?>
        
        <div style = "font-family: calibri;
font-style: normal;
font-weight: normal;
font-size: 34px;
line-height: 48px;

color: #000000;">
        <?php if($_POST['posttest'] != 0){?> 
            Post Test <button style="
    float:right;
    width: 140px;
    height: 50px;
    
    font-family: calibri;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 34px;
    text-align: center;
    border: 1px solid #333;
    border-radius: 5px" class="btn-primary">Upload</button>
            <?php } ?>
        </div>
        <br>
        <?php for($i=1;$i<=$_POST['posttest'];$i++){ ?> 
            <textarea style="
        
        font-size:20px" rows="3" cols="90"><?= $i ?>. </textarea><br>
        <?php } ?>
        <a href="TaskManagerViewPre.html">
        <button style="
    float:right;
    width: 140px;
    height: 50px;
    
    font-family: calibri;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 34px;
    text-align: center;
    border: 1px solid #333;
    border-radius: 5px" class="btn-success">Submit</button>
     </a>   
    </div>
    </body>
    </html>
    
<?php ?>