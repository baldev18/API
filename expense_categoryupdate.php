<?php
include 'connect.php';

$id     = $_POST['id']     ?? '';
$name  = $_POST['category_name']  ?? '';


if (empty($id) || empty($category_name)) {
    echo "All fields are required.";
    exit;
}

$sql = "UPDATE expense_category
        SET name='$name', email='$email', pass='$pass' 
        WHERE id='$id'";

mysqli_query($con, $sql);
mysqli_close($con);

echo "Record updated successfully";
?>