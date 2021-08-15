<?php
session_start();
if(isset($_POST['callculate'])){


$call = $_POST['callculate'];

$sum = ($call * 5) / 100;
}
if(isset($_POST['logout'])){
  unset($_SESSION['id']);
  unset($_SESSION['Username']);
  unset($_SESSION['Speed']);
  unset($_SESSION['Price']);
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Services</title>
    <style>
      head{
    padding: 0;
    margin: 0;
}
body{
    padding: 0;
    margin: 0;
}
.home{
    background-color: rgb(0, 0, 0);
    height: 140px;
    font-family: "Times New Roman", Times, serif;
}
.contactme{
    display: inline;
    text-decoration: none;
    padding: 15px 20px 15px 50px;
    color: #2FAAFF;
    font-size: 19px;
    position: relative;
    top: 10px;
}
.contactme:hover{
    color: white;
}
.about{
    display: inline;
    text-decoration: none;
    padding: 15px 20px 15px 50px;
    color: #2FAAFF;
    font-size: 19px;
    position: relative;
    top: 10px;
}
.about:hover{
    color: white;
}
.services{
    display: inline;
    text-decoration: none;
    padding: 15px 20px 15px 50px;
    color: white;
    font-size: 19px;
    position: relative;
    top: 10px;
}
.img{
    display: inline;
}
#imgsize{
    width: 120px;
    height: 120px;
    padding: 10px 10px 10px 20px;
}
#imgadmin{
    width: 110px;
    height: 110px;
    padding: 20px 20px 10px 10px;
    float: right;
    position: relative;
    bottom: 100px;
    right: 35px;
}
#logout{
  text-decoration: none;
  background-color: #1374E9;
  border: solid 3px #1374E9;
  color: white;
  float: right;
  position: relative;
  bottom: 30px;
  right: 35px;
}
#infoimg{
    width: 150px;
    height: 120px;
    float: left;
    position: relative;
    top: 100px;
    left: 300px;
}
#infocircle{
    width: 200px;
    height: 190px;
    float: left;
    position: relative;
    top: 60px;
    left: 125px;
}
#caltxt{
    float: right;
    position: relative;
    right: 450px;
    top: 80px;
    font-size: 25px;
    color: red;
}
#cal{
    float: right;
    position: relative;
    right: 170px;
    top: 80px;
    padding: 5px;
    border: solid 2px red;
}
#btncal{
    width: 200px;
    float: right;
    position: relative;
    right: 430px;
    top: 80px;
    font-size: 20px;
    padding: 2px;
    background-color: #FFA500;
    border: solid 3px #FFA500;
    color: white;
}
#btncal:hover{
    background-color: #FFC254;
    border: solid 3px #FFC254;
}
#calll{
    float: right;
    position: relative;
    right: 430px;
    top: 20px;
    font-size: 25px;
    color: red;
}
#KB{
    float: right;
    position: relative;
    left: 60px;
    top: 75px;
    font-size: 25px;
    color: red;
}
#testSpeed{
    float: left;
}
#B1{
    text-decoration: none; 
    display: inline;
    padding: 25px; 
    color: #2FAAFF; 
    font-size: 20px; 
    position: relative; 
    top: 20px;"
}
#B1:hover{
    color: white;
}
#B2{
    text-decoration: none; 
    display: inline;
    padding: 25px; 
    color: #2FAAFF; 
    font-size: 20px; 
    position: relative; 
    top: 20px;"
}
#B2:hover{
    color: white;
}
#B3{
    text-decoration: none; 
    display: inline;
    padding: 25px; 
    color: #2FAAFF; 
    font-size: 20px; 
    position: relative; 
    top: 20px;"
}
#B3:hover{
    color: white;
}
#B4{
    text-decoration: none; 
    display: inline;
    padding: 25px; 
    color: #2FAAFF; 
    font-size: 20px; 
    position: relative; 
    top: 20px;"
}
#B4:hover{
    color: white;
}
#w1,#w2,#w3,#w4,#w5{
  display: block; 
  text-decoration: none; 
  background-color: orange; 
  padding: 10px; 
  position:relative; 
  left: 500px; 
  text-align: center; 
  color: white; 
  font-size: 25px;
}
#w1:hover{
  background-color: #FFC254;
}
#w2:hover{
  background-color: #FFC254;
}
#w3:hover{
  background-color: #FFC254;
}
#w4:hover{
  background-color: #FFC254;
}
#w5:hover{
  background-color: #FFC254;
}
</style>
</head>
<body>
<form method="POST" action="Services.php">
    <div class="home">
        <a href=Services.php><img id="imgsize" src="images/comm.png"></a>
        <a href=Services.php class="services">Services</a>  
        <a href=Contactme.php class="contactme">Contact me</a>    
        <a href=About.php class="about">About</a>
        <img style="width: 200; height: 90; position: relative; bottom: 30px;" src="images/bar.png">
        <br>
        <label style="color: black; padding: 20px; font-size: 15px; position: relative; left: 600px; bottom: 130px; ">UserName: </label>
        <label style="color: white; padding: 10px; font-size: 15px; position: relative; left: 580px; bottom: 130px;"><?php 
        echo $_SESSION['Username'];  ?></label>
        <label style="color: black; padding: 20px; font-size: 15px; position: relative; left: 600px; bottom: 130px;">Speed: </label>
        <label style="color: white; padding: 10px; font-size: 15px; position: relative; left: 580px; bottom: 130px;"><?php 
        echo $_SESSION['Speed'];  ?></label>
        <label style="color: black; padding: 20px; font-size: 15px; position: relative; left: 600px; bottom: 130px;">Price: </label>
        <label style="color: white; padding: 10px; font-size: 15px; position: relative; left: 580px; bottom: 130px;"><?php
        echo $_SESSION['Price'];  ?></label>
        <button name="logout" id="logout">Logout</button>
        <img id="imgadmin" src="images/user.png">
        <label style="color: white; padding: 10px; font-size: 15px; float: right; position: relative; bottom: 85px; left: 145px;"><?php
        echo $_SESSION['Username'];  ?></label>
      </div>
      </form>
      <div>
      <table id="tabdiv" class="table table-hover">
  <thead>
    <tr id="black">
      <th scope="col">#</th>
      <th scope="col">Speed</th>
      <th scope="col"></th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody class=".table-hover">
    <tr id="black1">
      <th scope="row">1</th>
      <td>100 KB</td>
      <td></td>
      <td>8$</td>
    </tr>
    <tr id="black2">
      <th scope="row">2</th>
      <td>200 KB</td>
      <td></td>
      <td>15$</td>
    </tr>
    <tr id="black3">
      <th scope="row">3</th>
      <td colspan="2">300 KB</td>
      <td>22$</td>
    </tr>
    <tr id="black3">
      <th scope="row">4</th>
      <td colspan="2">400 KB</td>
      <td>33$</td>
    </tr>
    <tr id="black3">
      <th scope="row">5</th>
      <td colspan="2">500 KB</td>
      <td>43$</td>
    </tr>
    <tr id="black3">
      <th scope="row">6</th>
      <td colspan="2">600 KB</td>
      <td>55$</td>
    </tr>
    <tr id="black3">
      <th scope="row">7</th>
      <td colspan="2">700 KB</td>
      <td>63$</td>
    </tr>
    <tr id="black3">
      <th scope="row">8</th>
      <td colspan="2">800 KB</td>
      <td>75</td>
    </tr>
    <tr id="black3">
      <th scope="row">9</th>
      <td colspan="2">900 KB</td>
      <td>88$</td>
    </tr>
    <tr id="black3">
      <th scope="row">10</th>
      <td colspan="2">1 MB</td>
      <td>105$</td>
    </tr>
  </tbody>
</table>
      </div>
      <div id="info">
      <img id="infoimg" src="images/comm.png">
      <img id="infocircle" src="images/circle.png">
      <form method="POST" action="Services.php">
      <label id="calll">Speed Calculator</label>
      <br>
      <label id="caltxt">Speed: </label>
      <input id="cal" name="callculate" type="text">
      <label id="KB">KB</label>
      <br>
      <label style="color: red; font-size: 25px; position: relative; top: 100px; left: 290px;">Price($): </label>
      <label style="color: red; font-size: 25px; position: relative; top: 100px; left: 310px;"><?php if(isset($sum)){
          echo $sum;
       } ?></label>
      <br><br><br>
      <input id="btncal" type="submit" value="Calculate">

      </form>
      </div>
      <br><br><br><br><br><br><br><br><br>
      <div id="testSpeed">
      <h1 style="color: red; font-size: 45px; position: relative; left: 500px;">How to test your speed? </h1>
      <br><br><br>
      <a id="w1" href="https://www.speedtest.net/" target="_blank">SPEEDTEST</a>
      <br><br><br>
      <a id="w2" href="http://internethealthtest.org/"target="_blank">Internet Health Test</a>
      <br><br><br>
      <a id="w3" href="https://speedtest.xfinity.com/"target="_blank">Xfinity xFi Speed Test</a>
      <br><br><br>
      <a id="w4" href="https://testmy.net/"target="_blank">Testmy.net</a>
      <br><br><br>
      <a id="w5" href="https://speedof.me/"target="_blank">Speedof.me</a>
      <br><br><br><br>
      </div>
      <div style="width: 100%; background-color: black; float: left; text-align: center;">
      <a id="B1" href="#">Internet</a>
      <a id="B2" href="#">Test</a>
      <a id="B3" href="#">Speed</a>
      <a id="B4" href="#">Price</a>
      <br><br><br>
      <label style="color: #2FAAFF; padding: 25px; font-size: 20px;">Copyright © 2021 Internet </label>
      </div>
</body>
</html>
