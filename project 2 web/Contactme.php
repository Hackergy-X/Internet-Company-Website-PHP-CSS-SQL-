<?php
session_start();
$con = mysqli_connect("localhost:3307","root","","internet");

if(isset($_POST['em']) && isset($_POST['na']) && isset($_POST['ms'])) {
    $em = $_POST['em'];
    $na = $_POST['na'];
    $ms = $_POST['ms'];

    $que = "INSERT INTO problems(Email,Name,Message) VALUES('$em','$na','$ms')";
    
    mysqli_query($con,$que) or die(mysqli_error($con));
  
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
    <title>Contact Me</title>
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
    color: white;
    font-size: 20px;
}
.about{
    display: inline;
    text-decoration: none;
    padding: 15px 20px 15px 50px;
    position: relative;
    bottom: 45px;
    color: #2FAAFF;
    font-size: 20px;
}
.about:hover{
    color: white;
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
#btnS{
    padding: 10px;
    background-color: #2FAAFF;
    border: solid 2px #2FAAFF;
    width: 230px; 
    color: white;
}
#btnS:hover{
          background-color: #6AC2FF;
          border: solid 2px #6AC2FF;
}
#btnR{
    padding: 10px; 
    background-color: #2FAAFF;
    border: solid 2px #2FAAFF;
    width: 230px; 
    color: white;
}
#btnR:hover{
        background-color: #6AC2FF;
        border: solid 2px #6AC2FF;
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
<form method="POST" action="Contactme.php">
    <div class="home">
        <a href=Services.php><img id="imgsize" src="images/comm.png"></a>
        <a href=Services.php class="services">Services</a>  
        <a href=Contactme.php class="contactme">Contact me</a>    
        <a href=About.php class="about">About</a>
        <img style="width: 200; height: 90; position: relative; bottom: 60px;" src="images/bar.png">
        <br>
        <label style="color: black; padding: 20px; font-size: 15px; position: relative; left: 600px; bottom: 110px; ">UserName: </label>
        <label style="color: white; padding: 10px; font-size: 15px; position: relative; left: 580px; bottom: 110px;"><?php 
        echo $_SESSION['Username'];  ?></label>
        <label style="color: black; padding: 20px; font-size: 15px; position: relative; left: 600px; bottom: 110px;">Speed: </label>
        <label style="color: white; padding: 10px; font-size: 15px; position: relative; left: 580px; bottom: 110px;"><?php 
        echo $_SESSION['Speed'];  ?></label>
        <label style="color: black; padding: 20px; font-size: 15px; position: relative; left: 600px; bottom: 110px;">Price: </label>
        <label style="color: white; padding: 10px; font-size: 15px; position: relative; left: 580px; bottom: 110px;"><?php
        echo $_SESSION['Price'];  ?></label>
        <button name="logout" id="logout">Logout</button>
        <img id="imgadmin" src="images/user.png">
        <label style="color: white; padding: 10px; font-size: 15px; float: right; position: relative; bottom: 85px; left: 145px;"><?php
        echo $_SESSION['Username'];  ?></label>
      </div>
      </form>
<form method="POST" action="contactme.php" style="text-align: center; position: relative; top: 70px;" enctype="multipart/form-data">
      <img style="width: 100px; height: 100px; position: relative; left: 140px;" src="images/comm.png">
      <br><br><br>
      <label style="font-size: 25px;">Email</label>
      <br>
      <input name="em" style="padding: 14px; border: solid 2px #2FAAFF; width: 30%;" type="email">
      <br><br><br><br>
      <label style="font-size: 25px;">Name</label>
      <br>
      <input name="na" style="padding: 14px; border: solid 2px #2FAAFF; width: 30%;" type="text">
      <br><br><br><br>
      <label  style="font-size: 25px;">Message</label>
      <br>
      <textarea name="ms" style="border: solid 2px #2FAAFF;" rows="10" cols="60">
</textarea>
<br><br><br>
<?php
if(isset($_POST['btnS'])){
    $FilesName = $_FILES['image']['name'];
    $FileSize = $_FILES['image']['size'];
    $FilesTmp = $_FILES['image']['tmp_name'];
    $FilesType = $_FILES['image']['type'];

    if(isset($_POST['em']) && isset($_POST['na'])){

    $em = $_POST['em'];
    $na = $_POST['na'];

    $ex = strtolower(end(explode('.', $FilesName)));
    echo "<br><br>";
    
    $Types = array("jpg","png","jpeg");
    if(in_array($ex,$Types)){
        if($FileSize < 2097152){
            move_uploaded_file($FilesTmp , "problems/" . $FilesName);
            echo "Success :)" . "<br><br>";
        }else{
            echo "Choose File Size less than 2 MB";
        }
    }
    else{
        echo "Choose another type of image :)";
    }
}
else{
    echo "not set";
}
}

?>
<label style="font-size: 20px;">Screenshot The problem: </label>
<input type="file" name="image"/>
      <br><br><br><br>
      <input id="btnS" name="btnS" type="submit">
      <input id="btnR" type="reset">
      <br><br>
      <label style="font-size: 20px; color: green;"><?php if(isset($que)){
      echo " Has sent the problem :)";
    }
    ?>
    </label>
      <br><br><br><br><br><br><br><br><br>
</form>
      <div style="width: 100%; background-color: black; float: left; text-align: center; height: 150px;">
      <a id="B1" href="#">Internet</a>
      <a id="B2" href="#">Test</a>
      <a id="B3" href="#">Speed</a>
      <a id="B4" href="#">Price</a>
      <br><br><br><br><br>
      <label style="color: #2FAAFF; padding: 25px; font-size: 20px;">Copyright © 2021 Internet </label>
      </div>
</body>
</html>
