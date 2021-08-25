<?php

//incliding config file
require "config.php";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

$id = $_GET['id'];
$sql = "delete from users where id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: /healthclub/admin");
    exit;
} else {
    echo "Could not deleted record: " . mysqli_error($conn);
}

mysqli_close($conn);