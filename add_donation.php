<?php
include 'db.php';
$name = $_POST['name'];
$amount = $_POST['amount'];

$stmt = $conn->prepare("INSERT INTO donations (name, amount) VALUES (?, ?)");
$stmt->bind_param("sd", $name, $amount);
$stmt->execute();

echo "success";
?>
