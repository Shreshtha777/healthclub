<?php
//incliding config file
require "config.php";

$id = $_POST['id'];

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];

//creating connection
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
    $sql = "UPDATE users SET name='$name',email='$email',contact='$contact' where id='$id' ";
    if (mysqli_query($conn, $sql)) {

        header("Location: /healthclub/admin");
    exit;
        

        exit;
    } else {
        echo "Could not insert record: " . mysqli_error($conn);
    }


mysqli_close($conn);