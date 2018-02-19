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

if(isset($_POST['login']))
{
     $usernamevar=$_POST['username'];
    $passwordvar=$_POST['password'];
    
    $sql="INSERT INTO `login` VALUES ('".$usernamevar."','".$passwordvar."')";
    $conn->query($sql);  
    
    header("Location: indexnew.html");

}
$conn->close();
?>