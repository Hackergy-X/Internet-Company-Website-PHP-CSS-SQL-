<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
    #back{
        padding: 10px;
        float: left;
        background-color: #2FAAFF;
        position: relative;
        left: 20px;
        width: 100px;
        border: solid 3px #2FAAFF;
        color: white;
    }
    #back:hover{
        background-color: #4FB7FF;
        border: solid 3px #4FB7FF;
    }
    </style>
</head>
<body>
<?php 

$con = mysqli_connect("localhost:3307","root","","internet");

if(isset($_POST['signup'])){

    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['speed'])){

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $speed = $_POST['speed'];
    $price = ($speed * 5) / 100;

    $qry="INSERT INTO data1(Username,Password,Email,Speed,Price) VALUES ('$user','$pass','$email','$speed','$price')";

    mysqli_query($con,$qry) or die(mysqli_error($con));

    if($qry){
        $ms = "created successfully :)";
        
    }
    else{
        $ms = " Not created :(";
    }
    }
}


?>
<form method="POST" action="signup.php">
<div style="text-align: center; width: 40%; height: 600px; background-color: white; position: relative; top: 30px; left: 420px;">
<br>
<label style="text-align: center; color: black; font-size: 30px;"><b>Sign Up</b></label>
<br><br><br><br>
<label  style="text-align: center; color: black; font-size: 22px; position: relative;"><b>Username: </b></label>
<input name="username" style="padding: 10px; border: solid 3px #2FAAFF; width: 335px;" type="text" name="username" placeholder="Enter the username !">
<br><br><br>
<label  style="text-align: center; color: black; font-size: 22px; position: relative;"><b>Password: </b></label>
<input name="password" style="padding: 10px; border: solid 3px #2FAAFF; width: 335px;" type="password" name="username" placeholder="Enter the password !">
<br><br><br>
<label  style="text-align: center; color: black; font-size: 22px; position: relative; right: 15px;"><b>Email: </b></label>
<input name="email" style="padding: 10px; border: solid 3px #2FAAFF; width: 335px; position: relative; left: 16px;" type="email" name="username" placeholder="Enter the email !">
<br><br><br>
<label  style="text-align: center; color: black; font-size: 22px; position: relative; right: 13px;"><b>Speed: </b></label>
<input name="speed" style="padding: 10px; border: solid 3px #2FAAFF; width: 335px; position: relative; left: 16px;" type="text" name="username" placeholder="Enter speed internet (KB) !">
<br><br>
<label style="font-size: 20px; color: green;"> <?php if(isset($ms)){
    echo $ms; 
 } ?> </label>
<br><br>
<button name="signup" id="signup">Sign up</button>
<br><br><br><br>
<button name="back" id="back">Back <?php  
if(isset($_POST['back'])){
    header("location:login.php");
}

?> 
</button>
</div>
</form>
    
</body>
</html>