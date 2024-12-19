<?php
session_start();
$updateId = isset($_POST['updateId']) ? $_POST['updateId'] : '';
$deleteId = isset($_GET['deleteId']) ? $_GET['deleteId'] : '';
$name = $_POST['product_name'];
$category = $_POST['product_category'];
$description = $_POST['product_description'];
$price = $_POST['product_price'];
$product_features = $_POST['product_features'];
$status = $_POST['status'];
// print_r($status);
// echo "<br>";
// print_r($status);
// exit();

// echo $price;
// exit();
$conn = mysqli_connect('localhost', 'root', '', 'testing');

if ($deleteId) {
    $sql = "DELETE FROM products WHERE p_id = $deleteId";
    $conn->query($sql);

    $_SESSION['flash_data'] = "Your data has been deleted successfully!";
} else if ($updateId) {
    if (!empty($_FILES['product_image']['name'])) {
        $image = $_FILES['product_image']['name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file);
    } else {
        $image = $_POST['oldImage'];
    }
    $sql = "UPDATE products SET p_name = '$name', p_category = '$category',p_description = '$description', p_price = '$price', p_image = '$image', p_status = '$status' WHERE p_id = $updateId";
    $conn->query($sql);
    //delete before feature
    $before_feature = "DELETE FROM product_features WHERE pf_product_id = $updateId";
    $conn->query($before_feature);

    foreach ($product_features as $product_feature) {
        $feature_sql = "INSERT INTO product_features (pf_products_id, pf_name) VALUES ('$updateId', '$product_feature')";
        $conn->query($feature_sql);
    }
    $_SESSION['flash_data'] = "Your data has been updated successfully!";
} else {
    if (!empty($_FILES['product_image']['name'])) {
        $image = $_FILES['product_image']['name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file);
    } else {
        $image = '';
    }
    // print_r($name);
    // exit();
    $sql = "INSERT INTO products (p_name, p_category, p_description, p_price, p_image , p_status) VALUES ('$name', '$category', '$description', '$price', '$image', '$status')";
    $conn->query($sql);

    $production_id = mysqli_insert_id($conn);
    foreach ($product_features as $product_feature) {
        $feature_sql = "INSERT INTO product_features (pf_products_id, pf_name) VALUES ('$production_id', '$product_feature')";
        $conn->query($feature_sql);
    }
    $_SESSION['flash_data'] = "Your data has been Inserted successfully!";
}


header("location: index.php");
