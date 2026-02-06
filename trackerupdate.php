<?php
include 'connect.php';

$id     = $_POST['id']     ?? '';
$date  = $_POST['date']  ?? '';
$amount = $_POST['amount'] ?? '';
$category  = $_POST['category']   ?? '';

if (empty($id) || empty($date) || empty($amount) || empty($category)) {
    echo "All fields are required.";
    exit;
}

$sql = "UPDATE tracker
        SET name='$name', email='$amount', pass='$category' 
        WHERE id='$id'";

mysqli_query($con, $sql);
mysqli_close($con);

echo "Record updated successfully";
?>