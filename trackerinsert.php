<?php
include 'connect.php';

$a = $_POST["name"]  ?? "";
$b = $_POST["date"] ?? "";
$c = $_POST["amount"]   ?? "";
$d = $_POST["category"]   ?? "";

if ($a === "" || $b === "" || $c === "" || $d === "") {
    echo "All fields are required.";
    exit;

}

$stmt = $con->prepare(
    "INSERT INTO tracker (name, date,amount,category) VALUES (?, ?, ?)"
);
$stmt->bind_param("sss", $a, $b, $c,$d);

if ($stmt->execute()) {
    echo "Inserted Successfully.";
} else {
    echo "Error inserting record.";
}

$stmt->close();
$con->close();
?>