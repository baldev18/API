<?php
include 'connect.php';

$a = $_POST["id"]  ?? "";
$b = $_POST["category_name"] ?? "";

if ($a === "" || $b === "" ) {
    echo "All fields are required.";
    exit;
}

$stmt = $con->prepare(
    "INSERT INTO expense_category (id,category_name) VALUES (?, ?)"
);
$stmt->bind_param("ss", $a, $b,);

if ($stmt->execute()) {
    echo "Inserted Successfully.";
} else {
    echo "Error inserting record.";
}

$stmt->close();
$con->close();
?>