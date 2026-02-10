<?php

    include 'connect.php';

    $a = $_POST["name"];
    $b = $_POST["email"];
    $c = $_POST["pass"];    

    if($a=="" && $b=="" && $c=="")
    {
        echo "All fields are required.";
    }
    else
    {
        $sql = "INSERT INTO users(name,email,pass) VALUES ('$a', '$b','$c')";
        mysqli_query($con, $sql);
        mysqli_close($con);

}




?>