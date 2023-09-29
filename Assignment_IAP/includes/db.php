<?php
require_once 'Dbh.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
$db = new Dbh();
$conn = $db->connect();

$sql ="INSERT INTO users (firstname,lastname,email,phonenumber) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$firstname,$lastname,$email,$phonenumber]);

echo 'User information stored successfully';




}