<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="login form">
        <form action="" method="POST">
            <h1>login form</h1>
            <input type="text" name="userid" placeholder="Enter your userID"><br>
            <input type="password" name="password" placeholder="Enter your password"><br>

            <input type="submit" name="login" value="login" class="login">

        </form>
        <?php      
    //incliding config file
require "config.php";

     

      
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
$uid=$_POST['userid'];
$password=$_POST['password'];
        $sql = "select * from admin where uid = '$uid' and pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION["islogin"] = true;
            header("Location: /healthclub/admin.php");
   exit;  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>
    </div>





</body>


</html>