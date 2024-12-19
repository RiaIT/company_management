<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
    <div class="content">
        <div class="row justify-content-center mt-4">
            <div class="col-6">
                <div class="card p-3">
                    <div class="card-header">Form</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">

                            <div class="form-group">
                                <label for="name">Name: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile: <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="mobile" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail: <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>

                            <div class="form-group mt-2">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'testing');
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        ?>
        <div class="card">
            <div class="card-header">
                <div class="card-title">User List</div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>E-mail</th>
                            <th>Password</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $serial = 1;
                        foreach ($data as $row) { ?>
                            <tr>
                                <td><?= $serial++; ?></td>
                                <td><?= $row['u_name']; ?></td>
                                <td><?= $row['u_mobile']; ?></td>
                                <td><?= $row['u_email']; ?></td>
                                <td><?= $row['u_password']; ?></td>
                                <td><?= $row['u_address']; ?></td>
                                <td>
                                    <a type="button" class="btn btn-sm btn-info mr-2" href="edit.php?id=<?= $row['u_id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                                    <a type="button" class="btn btn-sm btn-danger " href="action.php?deleteId=<?= $row['u_id']; ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>