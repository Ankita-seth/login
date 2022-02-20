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

   else{ $sql="INSERT INTO `users`(`Name`, `Email`, `Age`, `Salary`, `Password`) VALUES ('$Name','$Email','$Age','$Salary','$Password')";

    if ($conn->query($sql) === TRUE) {
      
        session_start();
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $_SESSION['username']=$row['Name'];
        header("location: SuccessfulLogin.php");
        
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
      $conn->close();
    }
?>
