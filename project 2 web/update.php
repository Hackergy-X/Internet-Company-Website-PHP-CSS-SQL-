<?php
$servername = "localhost:3307";
$username = "root";
$pass = "";
$dbname = "internet";

$con = mysqli_connect($servername,$username,$pass,$dbname);

if(isset($_GET['ID'])){
$id = $_GET['ID'];

$Name = "SELECT Name FROM data1 WHERE ID= $id";

$quename = mysqli_query($con,$Name);



}
?>
<style>
html{
    padding: 0;
    margin: 0;
    background-color: black;
}
#updateform{
    text-align: center;
    width: 70%;
    position: relative;
    top: 130px;
}
#lauser{
color: white;
font-size: 20px;
}
#laspeed{
color: white;
font-size: 20px;
padding: 18px;
}
#idtxt{
    padding: 8px;
    width: 350px;
    border: solid orange 2px;
}
#usertxt{
    padding: 8px;
    width: 350px;
    border: solid orange 2px;
}
#speedtxt{
    padding: 8px;
    width: 350px;
    border: solid orange 2px;
}
#updatebutton{
    width: 440px;
    padding: 10px;
    background-color: orange;
    border: solid 2px orange;
    position: relative;
    left:5px;
    color: white;
}
#updatebutton:hover{
    background-color: #FFB93A;
    border: solid 2px #FFB93A;
}
#img{
    float: right;
    width: 450px;
    height: 450px;
    position: relative;
    right: 60px;
    bottom: 50px;
    top: 100px;
    
}
</style>
<img id="img" src="images/comm.png">
<form id="updateform" method="POST" action="update.php">

<label style="text-align: center; color: white; font-size: 25px; background-color: orange; padding: 15px;">ID: <?php echo $id; ?> </label>
<br><br><br>
<input id="idtxt" type="hidden" value="<?php echo $id ; ?>" name="id">
<label id="lauser">UserName: </label>
<input id="usertxt" type="text" value="<?php
     $Name = "SELECT Username FROM data1 WHERE ID= $id";

    if($result = mysqli_query($con,$Name)){

        while($row = mysqli_fetch_assoc($result)){
            echo $row['Username'];
        }
    }
 ?>" name="username">
<br><br><br>
<input id="idtxt" type="hidden" value="<?php echo $id ; ?>" name="id">
<label id="lauser">Password: </label>
<input id="usertxt" type="text" value="<?php
     $Name = "SELECT Password FROM data1 WHERE ID= $id";

    if($result = mysqli_query($con,$Name)){

        while($row = mysqli_fetch_assoc($result)){
            echo $row['Password'];
        }
    }
 ?>" name="Password">
 <br><br><br>
 <label id="lauser">Email: </label>
<input id="usertxt" type="text" value="<?php
     $Name = "SELECT Email FROM data1 WHERE ID= $id";

    if($result = mysqli_query($con,$Name)){

        while($row = mysqli_fetch_assoc($result)){
            echo $row['Email'];
        }
    }
 ?>" name="Email">
 <br><br><br>
<label id="laspeed">Speed: </label>
<input id="speedtxt" type="text" value="<?php
     $Name = "SELECT Speed FROM data1 WHERE ID= $id";

    if($result = mysqli_query($con,$Name)){

        while($row = mysqli_fetch_assoc($result)){
            echo $row['Speed'];
        }
    } ?>" name="speed">
<br><br><br>
<label id="laspeed">Price: </label>
<input id="speedtxt" type="text" value="<?php
$Name = "SELECT Price FROM data1 WHERE ID= $id";

if($result = mysqli_query($con,$Name)){

   while($row = mysqli_fetch_assoc($result)){
       echo $row['Price'];
   }
} ?>
" name="price">
<br><br><br>
<label id="laspeed">Date: </label>
<input id="speedtxt" type="text" value="<?php
     $Name = "SELECT Date FROM data1 WHERE ID= $id";

    if($result = mysqli_query($con,$Name)){

        while($row = mysqli_fetch_assoc($result)){
            echo $row['Date'];
        }
    } ?>" name="date">
<br><br><br>
<input id="updatebutton" type="submit" name="submit" value="Update">
</form>



<?php 
if(isset($_POST['submit'])){
    $idd = $_POST['id'];
    $namme = $_POST['username'];
    $pass = $_POST['Password'];
    $email = $_POST['Email'];
    $speeed = $_POST['speed'];
    $priice = $_POST['price'];
    $daate = $_POST['date'];

       

    $update = "UPDATE data1 SET Username = '$namme', Password = '$pass' , Email = '$email' , Speed = '$speeed', Price = '$priice', Date = '$daate' WHERE ID= $idd";

    $que = mysqli_query($con,$update);
    
    header("location:Data.php");
}


?>