<?php
session_start();
$email = $_POST['email'];
$password = md5($_POST['password']);

$conn = mysqli_connect('localhost', 'root', '', 'wake_up_ict');

$sql = "SELECT * FROM `users` WHERE u_email = '$email' AND u_password = '$password'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();
// print_r($row);
// exit();
if ($row) {
    $_SESSION['user_id'] = $row['u_id'];
    header("location: dashboard.php");
} else {
    $_SESSION['flash_data'] = "Your email or password is incorrect";
    header("location: index.php");
}
