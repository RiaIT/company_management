<?php
session_start();
$name = $_POST['fname'] . " " . $_POST['lname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$nid = $_POST['nid'];
$date = $_POST['date'];
$email = $_POST['email'];
$cmnt = $_POST['cmnt'];
$password = $_POST['password'];
$retype_password = $_POST['retype_password'];
// echo $name;

$conn = mysqli_connect('localhost', 'root', '', 'wake_up_ict');

if ($password == $retype_password) {
    $password = md5($password);

    $sql = "INSERT INTO `users` (`u_name`, `u_gender`, `u_address`, `u_mobile`, `u_nid`, `u_date`, `u_email`,`u_cmnt`, `u_password`) VALUES ('$name', '$gender', '$address', '$mobile', '$nid', '$date', '$email', '$cmnt', '$password');";
    $conn->query($sql);
    header("location: index.php");
} else {
    $_SESSION['flash_data'] = "Password and Re-type Password are not match!";
    header("location: register.php");
}
