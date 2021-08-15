<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body{
        background-color: #2FAAFF;
    }
    #login{
        padding: 10px; 
        background-color: #2FAAFF; 
        width: 230px; 
        color: white; 
        border: solid 3px #2FAAFF;
    }
    #login:hover{
        background-color: #68C1FF;
        border: solid 3px #68C1FF;
    }
    #reset{
        padding: 10px; 
        background-color: #2FAAFF; 
        width: 230px; 
        color: white; 
        border: solid 3px #2FAAFF;"
    }
    #reset:hover{
        background-color: #68C1FF;
        border: solid 3px #68C1FF;
    }
    #signup{
        padding: 15px; 
        width: 470px; 
        background-color: orange; 
        border: solid 3px orange; 
        color: white;"
    }
    #signup:hover{
        background-color: #FFB631;
        border: solid 3px #FFB631;
    }
    </style>
</head>
<body>
<form method="POST" action="login.php">
<div style="text-align: center; width: 40%; height: 530px; background-color: white; position: relative; top: 100px; left: 410px;">
<br>
<img style="width: 90px; height: 90px;" src="images/comm.png">
<br><br> 
<label style="text-align: center; color: black; font-size: 30px;"><b>Login</b></label>
<br><br><br><br>
<label style="text-align: center; color: black; font-size: 22px; position: relative;"><b>Username: </b></label>
<input style="padding: 10px; border: solid 3px #2FAAFF; width: 335px;" type="text" name="username" placeholder="Enter the username !">
<br><br><br>
<label style="text-align: center; color: black; font-size: 22px; position: relative;"><b>Password: </b></label>
<input style="padding: 10px; border: solid 3px #2FAAFF; width: 335px;" type="password" name="password" placeholder="Enter the password !">
<br><br>
<label style="font-size: 20px; color: red;"><?php
session_start();
$con = mysqli_connect("localhost:3307","root","","internet");

   
  if(isset($_POST['submit'])){
    
    if(count($_POST)>0) {
    $result = mysqli_query($con,"SELECT * FROM data1 WHERE Username ='" . $_POST["username"] . "' and Password = '".
    $_POST["password"]."'");
    $row = mysqli_fetch_array($result);
    if(is_array($row)) {
    
    $_SESSION["id"] = $row['ID'];
    $_SESSION["Username"] = $row['Username'];
    $_SESSION["Speed"] = $row['Speed'];
    $_SESSION["Price"] = $row['Price'];
    header("Location:Services.php");
    } 
    else {
        echo "Invalid Username or Password!";
    }
    
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $_SESSION['user'] = $_POST['username'];
        $_SESSION['pass'] = $_POST['password'];
        $us = "admin";
        $pas = "admin";
        if($_SESSION['user'] == $us && $_SESSION['pass'] == $pas){

        header("location:Data.php");
    }
    }
    else{
        echo "error";
    }
}
?></label>
<br><br>
<input id="login" type="submit" value="Login" name="submit">
<input id="reset" type="reset">
<br><br>

<button id="signup" name="signup">Sign up <?php if(isset($_POST['signup'])){
    header("location:signup.php");
 } ?> </button>
</div>
</form>
    
</body>
</html>