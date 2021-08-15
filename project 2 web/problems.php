<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problems</title>
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
.users{
    display: inline;
    text-decoration: none;
    padding: 15px 50px 15px 50px;
    position: relative;
    bottom: 45px;
    color: #2FAAFF;
    font-size: 20px;
}
.users:hover{
    color: white;
}
.problems{
    display: inline;
    text-decoration: none;
    padding: 15px 50px 15px 50px;
    position: relative;
    bottom: 45px;
    color: white;
    font-size: 20px;
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
    width: 140px;
    height: 90px;
    padding: 20px 20px 10px 10px;
    float: right;
    position: relative;
    left: 60px;
}
#logout{
    text-decoration: none;
  background-color: orange;
  border: solid 3px orange;
  padding: 5px;
  color: white;
  float: right;
  position: relative;
  top: 75px;
  left: 25px;
  z-index: 2;
}
#logout:hover{
    background-color: #FFBC43;
    border: solid 3px #FFBC43;
}
#table{
    border: black 2px solid;
    width: 100%;
    text-align: center;
}
#id{
   font-size: 20px;
    text-align: center;
    color:blue;
}
#Username{
    font-size: 20px;
    text-align: center;
    color:blue;
}
#count{
    font-size: 20px;
    text-align: center;
    color:blue;
}
#Delete{
    font-size: 20px;
    text-align: center;
    color:blue;
}
#dataUSer{
    text-align: center;
    padding: 20px 0px 20px 0px;
}
#deletedata{
  text-decoration: none;
  background-color: orange;
  padding: 10px;
  color: white;
}
      </style>
</head>
<body>
<form method="POST" action="Data.php">
    <div class="home">
        <a href=Data.php><img id="imgsize" src="images/comm.png"></a>
        <a href=Data.php class="users">Users</a>
        <a href=Problems.php class="problems">Problems</a>
        <label style="color: white; float: right; text-align: center; position: relative; right: 30px; top: 40px; font-size: 18px;">Admin</label>
        
        <button name="logout" id="logout">Logout <?php 
        if(isset($_POST['logout'])){
            session_start();
            header("location:login.php");
        }
        ?></button>
        <img id="imgadmin" src="images/admin1.png">
      </div>
      </form>
      <table id="table">
      <?php
$servername ="localhost:3307";
$username = "root";
$dbname = "internet";
$pass = "";

$con = mysqli_connect($servername,$username,$pass,$dbname);
?>
        <tr id="Data1">
            <td id="Username">Nb/Ms</td>
            <td id="Username">Email</td>
            <td id="Username">Name</td>
            <td id="count">Messages</td>
            <td id="Delete">Solved</td>
        </tr>
        <?php
$show = "SELECT * FROM problems";

  if($result = mysqli_query($con,$show)){

    while($row = mysqli_fetch_assoc($result)){
?>
        <tr id="Data2">
            <td id="dataUSer"><?php echo $row['Nmofms'];  ?></td>
            <td id="dataUSer"><?php echo $row['Email'];  ?></td>
            <td id="dataUSer"><?php echo $row['Name'];  ?></td>
            <td id="dataUSer"><?php echo $row['Message'];  ?></td>
            <td><a id="deletedata" href=delete.php?Nmofms=<?php echo $row['Nmofms']; ?>>Solved</a></td>
        </tr>
        <?php } } ?>
    </table>
</body>
</html>