<?php 

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "internet";
$con = mysqli_connect($servername,$username,$password,$dbname);

echo "<br><br><br>";

if(isset($_GET['ID'])){

    $ID = $_GET['ID'];

    $del = "DELETE FROM data1 where ID=$ID";

    mysqli_query($con,$del) or die(mysqli_error($con));
    header("location:Data.php");
}

if(isset($_GET['Nmofms'])){
    $nmofms = $_GET['Nmofms'];

    $del = "DELETE FROM problems where Nmofms=$nmofms";

    mysqli_query($con,$del) or die(mysqli_error($con));
    header("location:problems.php");
}


?>