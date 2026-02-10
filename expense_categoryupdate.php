


<?php

    include 'connect.php';

   
    $category_name = $_POST["category_name"];
 

    $sql = "update expense_category set category_name='$category_name'";
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