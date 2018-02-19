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
if(isset($_POST['confirm']))
{
    $namevar=$_POST['name'];
    $contactvar=$_POST['contact'];
    $emailvar=$_POST['email'];
    
    $entityvar=$_POST['entity'];
    $dnamevar=$_POST['dname'];
    $addressvar=$_POST['address'];
    $messagevar=$_POST['message'];
    $dtimevar=$_POST['dtime'];
    $paymentvar=$_POST['payment'];
    $cardnovar=$_POST['cardno'];
    $cvvvar=$_POST['cvv'];
    $holdernamevar=$_POST['holdername'];

    
    $sql="INSERT INTO `confirm` VALUES  ('".$namevar."','".$contactvar."','".$emailvar."','".$entityvar."','".$dnamevar."','".$addressvar."','".$messagevar."','".$dtimevar."','".$paymentvar."','".$cardnovar."','".$cvvvar."','".$holdernamevar."')";
    $conn->query($sql);  
    
    
    header("Location: thanks.html");
}

$conn->close();
?>