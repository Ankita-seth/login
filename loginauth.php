<?php

use LDAP\Result;

include 'connection.php';

$Email=$_POST['email'];
$Password = $_POST['password'];


$sql = "SELECT * FROM `users` WHERE `Email`='$Email' AND `Password`= '$Password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  header("location: SuccessfulLogin.php");
  session_start();
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $_SESSION['username']=$row['Name'];
  
} else {
    header("location: login.php");
}
$conn->close();
?>