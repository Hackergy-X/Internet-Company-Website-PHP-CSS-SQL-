<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
}
.contactme{
    display: inline;
    text-decoration: none;
    padding: 15px 20px 15px 50px;
    position: relative;
    bottom: 45px;
    color: #2FAAFF;
    font-size: 20px;
}
.contactme:hover{
    color: white;
}
.about{
    display: inline;
    text-decoration: none;
    padding: 15px 20px 15px 50px;
    position: relative;
    bottom: 45px;
    color: white;
    font-size: 20px;
}
.services{
    display: inline;
    text-decoration: none;
    padding: 15px 20px 15px 50px;
    position: relative;
    bottom: 45px;
    color: #2FAAFF;
    font-size: 20px;
}
.services:hover{
    color: white;
}
.img{
    display: inline;
}
#imgsize{
    width: 90px;
    height: 100px;
    padding: 10px 10px 10px 20px;
}
#imgadmin{
    width: 80px;
    height: 80px;
    padding: 20px 20px 10px 10px;
    float: right;
    position: relative;
    bottom: 100px;
    right: 30px;
}
#logout{
    text-decoration: none;
  background-color: #1374E9;
  border: solid 5px #1374E9;
  padding: 4px;
  color: white;
  float: right;
  position: relative;
  bottom: 30px;
  right:30px;
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
</style>
</head>
<body>
<form method="POST" action="About.php">
    <div class="home">
        <a href=Services.php><img id="imgsize" src="images/comm.png"></a>
        <a href=Services.php class="services">Services</a>  
        <a href=Contactme.php class="contactme">Contact me</a>    
        <a href=About.php class="about">About</a>
        <img style="width: 200; height: 90; position: relative; bottom: 60px;" src="images/bar.png">
        <br>
        <label style="color: black; padding: 20px; font-size: 15px; position: relative; left: 600px; bottom: 110px; ">UserName: </label>
        <label style="color: white; padding: 10px; font-size: 15px; position: relative; left: 580px; bottom: 110px;"><?php session_start();
        echo $_SESSION['Username'];  ?></label>
        <label style="color: black; padding: 20px; font-size: 15px; position: relative; left: 600px; bottom: 110px;">Speed: </label>
        <label style="color: white; padding: 10px; font-size: 15px; position: relative; left: 580px; bottom: 110px;"><?php 
        echo $_SESSION['Speed'];  ?></label>
        <label style="color: black; padding: 20px; font-size: 15px; position: relative; left: 600px; bottom: 110px;">Price: </label>
        <label style="color: white; padding: 10px; font-size: 15px; position: relative; left: 580px; bottom: 110px;"><?php
        echo $_SESSION['Price'];  ?></label>
        <button name="logout" id="logout">Logout <?php 
        if(isset($_POST['logout'])){
            unset($_SESSION['id']);
            unset($_SESSION['Username']);
            unset($_SESSION['Speed']);
            unset($_SESSION['Price']);
            header("location:login.php");
        }
        ?></button>
        <img id="imgadmin" src="images/user.png">
        <label style="color: white; padding: 10px; font-size: 15px; float: right; position: relative; bottom: 85px; left: 145px;"><?php
        echo $_SESSION['Username'];  ?></label>
      </div>
      </form>
      <div style="float: left; text-align: center; width: 100%;">
      <img style="width: 130px; height: 100px; text-align: center; position: relative; top: 50px;" src="images/comm.png">
      <br><br><br><br>
      <img style="width: 930px; height: 500px; text-align: center; position: relative; top: 50px;" src="images/parag.png">
      <p style="padding: 20px; font-size: 25px; position: relative; bottom: 390px; color: white;">Hello, How are you?<br><br> This website to explain about the services of internet and you can choose (Speed) <br> of internet 
      ,and when you sign up don't forget the username or password <br><br> if you forget you can go to contact me page and send the feedback <br><br>
      to forget the password and we can change the password <br><br>
      Thank you for visited My website :) <br> </p>
      </div>
      <div style="width: 100%; background-color: black; float: left; text-align: center; height: 160px;">
      <a id="B1" href="#">Internet</a>
      <a id="B2" href="#">Test</a>
      <a id="B3" href="#">Speed</a>
      <a id="B4" href="#">Price</a>
      <br><br><br>
      <label style="color: #2FAAFF; padding: 25px; font-size: 20px; position: relative; top: 50px;">Copyright © 2021 Internet </label>
      </div>
</body>
</html>
<?php


?>