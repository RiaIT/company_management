<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'testing');
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    ?>

    <div class="content-wrapper m-3">
        <header class="bg-light">
            <h4>Product CRUD</h4>
        </header>
        <div class="content m-5">
            <?php
            if (isset($_SESSION['flash_data'])) { ?>
                <div class="alert alert-info alert-dismissible fade show">
                    <?= $_SESSION['flash_data']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
                <?php unset($_SESSION['flash_data']); ?>
            <?php } ?>

            <h4>Product list</h4>
            <a href="add_product.php" class="btn btn-primary">Add New Product</a>
            <table class="table">

                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Category</td>
                        <td>Description</td>
                        <td>Price</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $serial = 1;
                    foreach ($data as $row) { ?>
                        <tr>
                            <td><?= $serial++; ?></td>
                            <td><?= $row['p_name'] ?></td>
                            <td><?= $row['p_category'] ?></td>
                            <td><?= $row['p_description']  ?></td>
                            <td><?= $row['p_price']  ?></td>
                            <td>
                                <?php
                                if ($row['p_image']) { ?>
                                    <img src="images/<?= $row['p_image']; ?>" height="50" width="50" srcset="">

                                <?php } ?>
                            </td>

                            <td>
                                <a href="edit_product.php?id=<?= $row['p_id'] ?>" class="btn btn-sm btn-info mr-2 editButton"> <i class="fas fa-edit"> Edit</i> </a>
                                <a href="action.php?deleteId=<?= $row['p_id'] ?>" onclick="return confirm('Are yiu sure you want to delet this?');" class="btn btn-sm btn-danger mr-2"> <i class="fas fa-trash-alt"></i> Delete<a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>

</html>