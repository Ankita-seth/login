<?php

    include('connection.php');

    $Name=$_POST['Name'];                                                                                                                                                                                                                                                                                                                                                                                                                                          
    $Email=$_POST['Email'];
    $Age=$_POST['Age'];
    $Salary=$_POST['Salary'];
    $Password = $_POST['Password'];

    $sqlcheck = "SELECT * FROM `users` WHERE `Email`='$Email' AND `Password`= '$Password'";
    $result = $conn->query($sqlcheck);

    if ($result->num_rows > 0) {
        header("location: Signup.php");
    }
    $sql="INSERT INTO `users`(`Name`, `Email`, `Age`, `Salary`, `Password`) VALUES ('$Name','$Email','$Age','$Salary','$Password')";

    if ($conn->query($sql) === TRUE) {
        header("location: SuccessfulLogin.php");
      } else {
        echo "Error:lolo " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
?>
