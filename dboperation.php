<?php

if(isset($_POST['submit']))
{
    include('connection.php');

    $Name=$_POST['Name'];                                                                                                                                                                                                                                                                                                                                                                                                                                          
    $Email=$_POST['Email'];
    $Age=$_POST['Age'];
    $Salary=$_POST['Salary'];
    $Password = $_POST['Password'];

    $sql="INSERT INTO `form_data`(`Name`, `Email`, `Age`, `Salary`, `Password`) VALUES ($Name,$Email,$Age,$Salary,$Password)";

if($conn->query($sql)==true)
{echo "new user added";
}else{
     echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>
