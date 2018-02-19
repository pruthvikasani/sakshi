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
     $orderrvar=$_POST['ordertype'];
     $aboutvar=$_POST['aboutorder'];
  
    
    $sql="INSERT INTO `personalize` VALUES ('".$orderrvar."','".$aboutvar."')";
    $conn->query($sql);  
    
    header("Location: personalize.html");

}
$conn->close();
?>