<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
    color: white;
    font-size: 20px;
}
.problems{
    display: inline;
    text-decoration: none;
    padding: 15px 50px 15px 50px;
    position: relative;
    bottom: 45px;
    color: #2FAAFF;
    font-size: 20px;
}
.problems:hover{
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
#speed{
    font-size: 20px;
    text-align: center;
    color:blue;
}
#count{
    font-size: 20px;
    text-align: center;
    color:blue;
}
#date{
    font-size: 20px;
    text-align: center;
    color:blue;
}
#Update{
    font-size: 20px;
    text-align: center;
    color:blue;
}
#Delete{
    font-size: 20px;
    text-align: center;
    color:blue;
}
#dataID{

    text-align: center;
}
#dataUSer{
    text-align: center;
}
#dataspeed{
    text-align: center;
}
#datacount{
    text-align: center;
}
#datadate{
    text-align: center;
}
#dataID{
  padding: 10px 0px 20px 0px;
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
        <a href=problems.php class="problems">Problems</a> 
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
            <td id="id">ID</td>
            <td id="Username">UserName</td>
            <td id="Username">Password</td>
            <td id="Username">Email</td>
            <td id="speed">Speed</td>
            <td id="count">Price</td>
            <td id="date">Date</td>
            <td id="Update">Update</td>
            <td id="Delete">Delete</td>
        </tr>
        <?php
$show = "SELECT * FROM data1";

  if($result = mysqli_query($con,$show)){

    while($row = mysqli_fetch_assoc($result)){
?>
        <tr id="Data2">
            <td id="dataID"><?php echo $row['ID'];  ?></td>
            <td id="dataUSer"><?php echo $row['Username'];  ?></td>
            <td id="dataUSer"><?php echo $row['Password'];  ?></td>
            <td id="dataUSer"><?php echo $row['Email'];  ?></td>
            <td id="dataspeed"><?php echo $row['Speed'];  ?></td>
            <td id="datacount"><?php echo $row['Price'];  ?></td>
            <td id="datadate"><?php echo $row['Date']; ?></td>
        <?php     echo "<td><a style=' text-decoration: none;
  background-color: orange;
  padding: 10px;
  color: white;' href=update.php?ID=". $row['ID'] .">Update</a></td>"; ?>
            <td><a id="deletedata" href=delete.php?ID=<?php echo $row['ID']; ?>>Delete</a></td>
        </tr>
       <?php } } ?>
    </table>
</body>
</html>