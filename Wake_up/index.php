<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
    <?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'testing');
    $sql = "SELECT * FROM wake";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
    ?>


    <h1 style="text-align: center;" class="mt-4"> WakeUp ICT Institute</h1>
    <h4 style="text-align: center;">Let's break the limit......</h4><br>


    <div class="content-wrapper">
        <div class="row justify-content-center mt-2">
            <div class="col-12">

                <?php

                if (isset($_SESSION['flash_data'])) { ?>
                    <div class="alert alert-info alert-dismissible fade show">
                        <?= $_SESSION['flash_data']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php unset($_SESSION['flash_data']); ?>
                <?php } ?>

                <h3 style="text-align: center;" class="bg-secondary">Information</h3>

                <div class="mt-2">
                    <a type="submit" class="btn btn-warning" href="table.php">Add Information
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student Name</th>
                                <th>Gender</th>
                                <th>Date of Birth</th>
                                <th>Father's Name</th>
                                <th>Mother's Name</th>
                                <th>Religion</th>
                                <th>Nationality</th>
                                <th>E-mail Address</th>
                                <th>Educational Qualification</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $serial = 1;
                            foreach ($data as $row) {  ?>
                                <tr>
                                    <td><?= $serial++; ?></td>
                                    <td><?= $row['w_name']; ?></td>
                                    <td><?= $row['w_gender']; ?></td>
                                    <td><?=date("d-m-Y",strtotime($row['w_birth'])) ; ?></td>
                                    <td><?= $row['w_fname']; ?></td>
                                    <td><?= $row['w_mname']; ?></td>
                                    <td><?= $row['w_rel']; ?></td>
                                    <td><?= $row['w_nation']; ?></td>
                                    <td><?= $row['w_email']; ?></td>
                                    <td><?= $row['w_edu']; ?></td>
                                    <td>
                                        <a type="submit" class="btn btn-sm btn-primary mr-2" href="edit.php?id=<?= $row['w_id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                                        <a type="button" class="btn btn-sm btn-danger" href="action.php?deleteId=<?= $row['w_id']; ?>" onclick="return confirm('Are you sure you want to delete this?')"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php  } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>