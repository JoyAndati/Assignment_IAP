<?php
require_once 'Dbh.php';

$db = new Dbh();
$conn = $db->connect();


$sql = "SELECT * FROM users";
$stmt = $conn->query($sql);

while ($row = $stmt->fetch()){
    echo 'Name: '.$row['firstname'] . ''. $row['lastname'] . ', Email: '.$row['email'] . ', Password: '.$row['password'] . '<br>';
}
?>