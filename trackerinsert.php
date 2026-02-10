
<?php

    include 'connect.php';

    $a = $_POST["date"];
    $c = $_POST["amount"];    
    $d = $_POST["category"];   

    if($a=="" && $c=="" && $d=="")
    {
        echo "All fields are required.";
    }
    else
    {
        $sql = "INSERT INTO tracker (date,amount,category) VALUES ('$a','$c','$d')";
        mysqli_query($con, $sql);
        mysqli_close($con);

}




?>