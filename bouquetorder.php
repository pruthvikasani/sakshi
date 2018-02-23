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
     $flowernovar=$_POST['flowerno'];
     $flowersvar=$_POST['flowers'];
     $typevar=$_POST['type'];
    
    $sql="INSERT INTO `bouquet` VALUES ('".$typevar."','".$flowersvar."','".$flowernovar."')";
    $conn->query($sql);  
    
    header("Location: confirmation.html");

}
$conn->close();
?>