<?php
$host = "localhost";
$user = "root"; // Change if needed
$pass = "teja@338"; // Change if needed
$dbname = "temple_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
