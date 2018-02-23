<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "craft";

   $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['Pay']))
{
    $cardnovar=$_POST['cardno'];
    $cvvvar=$_POST['cvv'];
    $expiryvar=$_POST['expiry'];
    $holdernamevar=$_POST['holdername'];

    
    $sql="INSERT INTO `carddetails` VALUES  ('".$cardnovar."','".$expiryvar."','".$cvvvar."','".$holdernamevar."')";
    $conn->query($sql);  
 
    header("Location: thanks.html");
    
}

$conn->close();
?>