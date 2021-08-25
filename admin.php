<?php
session_start();
if($_SESSION["islogin"]==true){

}else{
    header("Location: /healthclub/index.php");
}
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
    <?php
    //incliding config file
    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $dbname = 'yoga_users';

    //creating connection
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    $sql = 'SELECT * FROM users';
    $services = mysqli_query($conn, $sql); ?>
    <table border="1" class="table">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>emial</td>
            <td>Contact</td>
            <td colspan="2">Operation</td>
        </tr>


        <?php
        if (mysqli_num_rows($services) > 0) :


            while ($row = mysqli_fetch_assoc($services)) :
        ?>
        <tr>
            <td><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php

            endwhile;

        endif; ?>
    </table>
</body>

</html>