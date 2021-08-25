<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <?php
    //incliding config file
    require "config.php";

    //creating connection
    $conn = mysqli_connect($host, $user, $password, $database);
    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM users where id='$id'";
    $services = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($services);


    ?>



    <h1>Resources form</h1>
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <table class="table">

            <tr>
                <td>ID</td>
                <td><input type="text" name="id" value="<?php echo $id; ?>"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
            </tr>

            <tr>
                <td>email</td>
                <td><input type="text" name="email" value="<?php echo $row['email'] ?>"></td>
            </tr>
            <tr>
                <td>contact</td>
                <td><input type="text" name="contact" value="<?php echo $row['contact'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>

</body>

</html>