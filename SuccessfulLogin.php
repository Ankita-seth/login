<?php session_start();
 $username=$_SESSION['username'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>Successful login</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="SuccessfulLogin.php">Home</a></li>
            <li><a href="#"><?php echo $username ?></a></li>

            <li><a href="#">Logout</a></li>

        </ul>
    </nav>
    <h1>
      <?php echo $username?>  Welcome to Test Site
    </h1>
</body>

</html>