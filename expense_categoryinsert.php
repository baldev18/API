

<?php

    include 'connect.php';

   
    $d = $_POST["category_name"];   

    if($d=="")
    {
        echo "All fields are required.";
    }
    else
    {
        $sql = "INSERT INTO  expense_category (category_name) VALUES ('$d')";
        mysqli_query($con, $sql);
        mysqli_close($con);

}




?>