

<?php

    include 'connect.php';

    $date = $_POST["date"];
    $amount = $_POST["amount"];
    $category = $_POST["category"];

 

    $sql = "update tracker set date='$date',amount='$amount',category='$category'";
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

