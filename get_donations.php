<?php
include 'db.php';
$result = $conn->query("SELECT * FROM donations");
$data = [];
while($row = $result->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
?>
