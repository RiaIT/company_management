<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<?php

$id = $_GET['id'];

  $conn = mysqli_connect('localhost', 'root', '', 'testing');
  $sql = "SELECT * FROM users WHERE u_id = $id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

 ?>
<div class="content">
        <div class="row justify-content-center mt-4">
            <div class="col-6">
                <div class="card p-3">
                    <div class="card-header"> Update Form</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">

                            <div class="form-group">
                                <label for="name">Name: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" value="<?= $row['u_name']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile: <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="mobile" value="<?= $row['u_mobile']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail: <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" value="<?= $row['u_email']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="password" value="<?= $row['u_password']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" name="address" value="<?= $row['u_address']; ?>" required>
                            </div>

                            <div class="form-group mt-2">
                              <input type="hidden" name="updateId" value="<?= $row['u_id']; ?>">
                                <input type="submit" class="btn btn-primary" value="update">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
</body>
</html>