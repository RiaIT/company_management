<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
</head>

<body>
    <?php
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'testing');
    $sql = "SELECT * FROM products where p_id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    //features
    $production_id = $row['p_id'];
    $feature_sql = "SELECT * FROM product_features where pf_products_id = $production_id";
    $feature_result = $conn->query($feature_sql);
    $feature_data = $feature_result->fetch_all(MYSQLI_ASSOC);

    $feature_values = [];

    foreach ($feature_data as $feature) {
        $feature_values[] = $feature['pf_name'];
    }
    // print_r($feature_values);
    // exit();
    ?>
    <div class="content m-5">
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="product_name" class="form-control" value="<?= $row['p_name']; ?>" required>
                            </div>
                            <div class="form-group mt-2">
                                <label>Category</label><br>
                                <select name="product_category" id="product_category" class="form-control">
                                    <option value="">Select Category</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Clothing">Clothing</option>
                                    <option value="Funiture">Funiture</option>
                                    <option value="Books">Books</option>
                                    <option value="Accessories">Accessories</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Describtion</label>
                                <textarea name="product_description" id="" rows="2" class="form-control" required><?= $row['p_description']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="product_price" class="form-control" value="<?= $row['p_price']; ?>">
                            </div>

                            <div class="form-group mt-2">
                                <label>Product Feature</label><br>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="checkbox" class="form-check-input" id="feature1" name="product_features[]" value="Water Proof" <?= (in_array('Water Proof', $feature_values)) ? 'checked' : ''; ?>>
                                    <label for="feature1" class="form-check-label">Water Proof</label>
                                </div>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="checkbox" class="form-check-input" id="feature2" name="product_features[]" value="Blutooth Enabled" <?= (in_array('Blutooth Enabled', $feature_values)) ? 'checked' : ''; ?>>
                                    <label for="feature2" class="form-check-label">Bluetooth Enable</label>
                                </div>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="checkbox" class="form-check-input" id="feature3" name="product_features[]" value="Eco Friendly" <?= (in_array('Eco Friendly', $feature_values)) ? 'checked' : ''; ?>>
                                    <label for="feature3" class="form-check-label">Eco friendly</label>
                                </div>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="checkbox" class="form-check-input" id="feature4" name="product_features[]" value="Energy Efficient" <?= (in_array('Energy Efficient', $feature_values)) ? 'checked' : ''; ?>>
                                    <label for="feature4" class="form-check-label">Energy Efficient</label>
                                </div>


                            </div>

                            <div class="form-group mt-2">
                                <label>Status</label><br>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="radio" class="form-check-input" id="status1" name="status" value="instock" <?= $row['p_status'] == 'instock' ? 'checked' : ''; ?>>
                                    <label for="status1" class="form-check-label">In stock</label>
                                </div>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="radio" class="form-check-input" id="status2" name="status" value="outofstock" <?= $row['p_status'] == 'outofstock' ? 'checked' : ''; ?>>
                                    <label for="status2" class="form-check-label">Out of Stock</label>
                                </div>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="radio" class="form-check-input" id="status3" name="status" value="preOrder" <?= $row['p_status'] == 'preOrder' ? 'checked' : ''; ?>>
                                    <label for="status3" class="form-check-label">Pre-Order</label>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <label>Product Image</label>
                                <input type="file" name="product_image" class="form-control" oninput="showImg.src=window.URL.createObjectURL(this.files[0])">
                            </div>
                            <?php
                            if ($row['p_image']) { ?>
                                <img src="images/<?= $row['p_image']; ?>" id="showImg" height="50" width="50" srcset="">
                            <?php } ?>

                            <div class="form-group mt-2">
                                <input type="hidden" name="oldImage" value="<?= $row['p_image']; ?>">
                                <input type="hidden" name="updateId" value="<?= $row['p_id']; ?>">
                                <button type="submit" class="brn btn-primary">Update</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#product_category').val("<?= $row['p_category']; ?>");
        });
    </script>
</body>

</html>