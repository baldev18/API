

<?php

    include 'connect.php';

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

 

    $sql = "update users set name='$name',email='$email',pass='$pass'";
    if(mysqli_query($con, $sql))
    {
        echo "Record updated successfully";
    }
    else
    {
        echo "Error deleting record: " . mysqli_error($con);
    }
   
    mysqli_close($con);
?>