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
if(isset($_POST['register']))
{
    $firstnamevar=$_POST['firstname'];
    $lastnamevar=$_POST['lastname'];
    $gendervar=$_POST['radio'];
    $usernamevar=$_POST['username'];
    $emailvar=$_POST['email'];
    $passwordvar=$_POST['password'];
    $repasswordvar=$_POST['repassword'];
    $mobilevar=$_POST['mobile'];

    
    $sql="INSERT INTO `register`(`firstname`,`lastname`,`gender`,`username`,`email`,`password`,`repassword`,`mobile`) VALUES ('".$firstnamevar."','".$lastnamevar."','".$gendervar."','".$usernamevar."','".$emailvar."','".$passwordvar."','".$repasswordvar."','".$mobilevar."')";
    $conn->query($sql);  
    
    echo "$passwordvar";
    //header("Location: login.html");
}

$conn->close();
?>