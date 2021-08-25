<?php
            if (isset($_POST['register'])) {
                $flag=false;
                if (!$flag) {
                    //get values
                    $name=$_POST['name'];
                    $emial=$_POST['emial'];
                    $contact=$_POST['contact'];
                    //create database connection
                   
                    require 'config.php';
                
                    $conn = mysqli_connect($host, $user, $password, $database);

                    //crate database query
                    if (!$conn) {
                        die('Could not connect: '.mysqli_connect_error());
                    }
                  
                    $sql = "INSERT INTO users(name,email,contact) VALUES ('$name','$emial','$contact')";
                     if ($_POST['name']!==""){
                         if (mysqli_query($conn, $sql)) {
                             echo "<h1>Registered successfully,  We will contact you soon.</h1>";
                             header("location:/healthclub/?status=Registered Successfully#register");
                         } else {
                             echo "Could not insert record: ". mysqli_error($conn);
                         }
                     }else{
                        header("location:/healthclub/?status=Please fill entries#register");
                     }
                     
                    $flag=true;

                    mysqli_close($conn);
                }
            }
            ?>