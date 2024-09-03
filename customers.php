<?php
require_once('connection.php');
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = mysqli_real_escape_string($conn, $_POST['email']);
$number = mysqli_real_escape_string($conn, $_POST['number']);
$message = mysqli_real_escape_string($conn, $_POST['message']);


$stmt = $conn->prepare("INSERT INTO customers(first_name, last_name, gender, dob, email, number, message) values(?,?,?,?,?,?,?)");
$stmt->bind_param("sssssss", $first_name, $last_name, $gender, $dob, $email, $number, $message);

if($stmt->execute()){
    echo "inserted";
}
else{
    echo "Error in inserting" . $stmt->error;
}