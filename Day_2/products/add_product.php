<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>

    <div class="content mt-5">

        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header bg-info">
                            <div class="row">
                                <div class="col-md-2">
                                    <a type="submit" class="btn btn-sm btn-primary" href="index.php"> <i class="fas fa-arrow-left"></i></a>
                                </div> 
                                <div class="col-md-10">
                                    <h4 style="text-align: center;" class="card-title">Add Product</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="product_name" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label>Category</label><br>
                                <select name="product_category" id="product_category" class="form-control select2">
                                    <option value="">Select Category</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Clothing">Clothing</option>
                                    <option value="Funiture">Funiture</option>
                                    <option value="Books">Books</option>
                                    <option value="Accessories">Accessories</option>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label>Describtion</label>
                                <textarea name="product_description" id="" rows="2" class="form-control" required></textarea>
                            </div>
                            <div class="form-group mt-2">
                                <label>Price</label>
                                <input type="number" name="product_price" class="form-control" required>
                            </div>

                            <div class="form-group mt-2">
                                <label>Product Feature</label><br>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="checkbox" class="form-check-input" id="feature1" name="product_features[]" value="Water Proof">
                                    <label for="feature1" class="form-check-label">Water Proof</label>
                                </div>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="checkbox" class="form-check-input" id="feature2" name="product_features[]" value="Bluetooth Enable">
                                    <label for="feature2" class="form-check-label">Bluetooth Enable</label>
                                </div>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="checkbox" class="form-check-input" id="feature3" name="product_features[]" value="Eco friendly">
                                    <label for="feature3" class="form-check-label">Eco friendly</label>
                                </div>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="checkbox" class="form-check-input" id="feature4" name="product_features[]" value="Energy Efficient">
                                    <label for="feature4" class="form-check-label">Energy Efficient</label>
                                </div>

                            </div>

                            <div class="form-group mt-2">
                                <label>Status</label><br>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="radio" class="form-check-input" id="status1" name="status" value="instock">
                                    <label for="status1" class="form-check-label">In stock</label>
                                </div>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="radio" class="form-check-input" id="status2" name="status" value="OutofStock">
                                    <label for="status2" class="form-check-label">Out of Stock</label>
                                </div>
                                <div class="form-check form-check-inline ml-2">
                                    <input type="radio" class="form-check-input" id="status3" name="status" value="PreOrder">
                                    <label for="status3" class="form-check-label">Pre-Order</label>
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <label>Product Image</label>
                                <input type="file" name="product_image" class="form-control" oninput="showImg.src=window.URL.createObjectURL(this.files[0])" required>
                                <img id="showImg" height="50" alt="">
                            </div>

                            <div class="form-group mt-2">
                                <button type="submit" class="brn btn-primary">Submit</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2();
        })
    </script>

</body>

</html>