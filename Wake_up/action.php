<?php
session_start();
$name = $_POST['name'];
$gender = $_POST['gender'];
$birth = $_POST['birth'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$rel = $_POST['rel'];
$nation = $_POST['nation'];
$email = $_POST['email'];
// $edu = $_POST['edu'];
$updateId = $_POST['updateId'];
$deleteId = $_GET['deleteId'];
// $edu = $_POST['edu'];
$gender = $_POST['gender'];

$w_mas_uni = $_POST['w_mas_uni'];
$w_mas_result = $_POST['w_mas_result'];
$w_mas_year = $_POST['w_mas_year'];

$w_hon_uni = $_POST['w_hon_uni'];
$w_hon_result = $_POST['w_hon_result'];
$w_hon_year = $_POST['w_hon_year'];

$w_hsc_uni = $_POST['w_hsc_uni'];
$w_hsc_result = $_POST['w_hsc_result'];
$w_hsc_year = $_POST['w_hsc_year'];

$w_ssc_uni = $_POST['w_ssc_uni'];
$w_ssc_result = $_POST['w_ssc_result'];
$w_ssc_year = $_POST['w_ssc_year'];

$w_jsc_uni = $_POST['w_jsc_uni'];
$w_jsc_result = $_POST['w_jsc_result'];
$w_jsc_year = $_POST['w_jsc_year'];

$w_others_uni = $_POST['w_others_uni'];
$w_others_result = $_POST['w_others_result'];
$w_others_year = $_POST['w_others_year'];
// print_r($gender);
// exit();

$conn = mysqli_connect('localhost', 'root', '', 'testing');

if ($deleteId) {
    $sql = "DELETE FROM wake WHERE w_id = $deleteId";
    $_SESSION['flash_data'] = "Your data has been deleted!";
} else if ($updateId) {
    $sql = "UPDATE wake SET w_name = '$name', w_gender = '$gender', w_birth = '$birth', w_fname = '$fname', w_mname = '$mname', w_rel = '$rel', w_nation = '$nation', w_email = '$email',w_mas_uni = '$w_mas_uni', w_mas_result = '$w_mas_result', w_mas_year = '$w_mas_year', w_hon_uni = '$w_hon_uni', w_hon_result = '$w_hon_result', w_hon_year = '$w_hon_year', w_hsc_uni = '$w_hsc_uni', w_hsc_result = '$w_hsc_result', w_hsc_year = '$w_hsc_year', w_ssc_uni = '$w_ssc_uni', w_ssc_result = '$w_ssc_result', w_ssc_year = '$w_ssc_year', w_jsc_uni = '$w_jsc_uni',w_jsc_result = '$w_jsc_result', w_jsc_year = '$w_jsc_year', w_others_uni = '$w_others_uni', w_others_result = '$w_others_result', w_others_year = '$w_others_year' WHERE w_id = $updateId";

    $_SESSION['flash_data'] = "Your data has been updated!";
} else {

    $sql = "INSERT INTO wake (w_name,w_gender,w_birth,w_fname,w_mname,w_rel,w_nation,w_email,w_edu, `w_mas_uni`, `w_mas_result`, `w_mas_year`, `w_hon_uni`, `w_hon_result`, `w_hon_year`, `w_hsc_uni`, `w_hsc_result`, `w_hsc_year`, `w_ssc_uni`, `w_ssc_result`, `w_ssc_year`, `w_jsc_uni`, `w_jsc_result`, `w_jsc_year`, `w_others_uni`, `w_others_result`, `w_others_year`) VALUES ('$name','$gender','$birth','$fname','$mname','$rel','$nation','$email','$edu','$w_mas_uni','$w_mas_result','$w_mas_year','$w_hon_uni','$w_hon_result','$w_hon_year','$w_hsc_uni','$w_hsc_result','$w_hsc_year','$w_ssc_uni','$w_ssc_result','$w_ssc_year','$w_jsc_uni','$w_jsc_result','$w_jsc_year','$w_others_uni','$w_others_result','$w_others_year')";
    $_SESSION['flash_data'] = "Your data has been inserted!";
}

// $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error updating record: " . $conn->error;
}
