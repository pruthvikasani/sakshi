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

if(isset($_POST['order']))
{
     $flavourvar=$_POST['flavour'];
     $quantityvar=$_POST['quantity'];
     $typevar=$_POST['type'];
    
    $sql="INSERT INTO `ordertable` VALUES ('".$flavourvar."','".$quantityvar."','".$typevar."')";
    $conn->query($sql);  
    
    header("Location: indexnew.html");

}
$conn->close();
?>