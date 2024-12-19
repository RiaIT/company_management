<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'testing');
    $sql = "SELECT * FROM wake WHERE W_id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <header class="bg-info">
        <h1 style="text-align: center;"> WakeUp ICT</h1>
    </header>


    <div class="content">
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center mt-2">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-info" style="text-align: center;">
                            <h4>Update</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name"> 1.Student Name:</label>
                                <input type="text" class="form-control" name="name" required value="<?= $row['w_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label> 2.Gender:</label><br>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="gender1" name="gender" <?= $row['w_gender'] == "Female" ? "checked" : ""; ?> value="Female">
                                    <label for="gender1" class="form-check-label">Female</label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="gender2" name="gender" <?= $row['w_gender'] == "Male" ? "checked" : ""; ?> value="Male">
                                    <label for="gender2" class="form-check-label">Male</label><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="birth">3.Date of Birth:</label>
                                <input type="date" class="form-control" name="birth" required value="<?= $row['w_birth']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="fname">4.Father's Name:</label>
                                <input type="text" class="form-control" name="fname" required value="<?= $row['w_fname']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="mname">5.Mother's Name:</label>
                                <input type="text" class="form-control" name="mname" required value="<?= $row['w_mname']; ?>">
                            </div>
                            <div class="form-group"></div>
                            <div class="form-group">
                                <label for="rel">Religion:</label>
                                <input type="text" class="form-control" name="rel" required value="<?= $row['w_rel']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nation">Nationality:</label>
                                <input type="text" class="form-control" name="nation" required value="<?= $row['w_nation']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail Address:</label>
                                <input type="email" class="form-control" name="email" required value="<?= $row['w_email']; ?>">
                            </div>
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Educational Qualification</button>
                            <div class="form-group">
                                <div class="dropdown">
                                    <div class="dropdown-content">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Degree</th>
                                                    <th>Board/University</th>
                                                    <th>Result</th>
                                                    <th>Passing Year</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Masters</td>
                                                    <td><input type="text" class="form-control" name="w_mas_uni" value="<?= $row['w_mas_uni']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_mas_result" value="<?= $row['w_mas_result']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_mas_year" value="<?= $row['w_mas_year']; ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Honours</td>
                                                    <td><input type="text" class="form-control" name="w_hon_uni" value="<?= $row['w_hon_uni']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_hon_result" value="<?= $row['w_hon_result']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_hon_year" value="<?= $row['w_hon_year']; ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>H.S.C</td>
                                                    <td><input type="text" class="form-control" name="w_hsc_uni" value="<?= $row['w_hsc_uni']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_hsc_result" value="<?= $row['w_hsc_result']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_hsc_year" value="<?= $row['w_hsc_year']; ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>S.S.C</td>
                                                    <td><input type="text" class="form-control" name="w_ssc_uni" value="<?= $row['w_ssc_uni']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_ssc_result" value="<?= $row['w_ssc_result']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_ssc_year" value="<?= $row['w_ssc_year']; ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>J.S.C</td>
                                                    <td><input type="text" class="form-control" name="w_jsc_uni" value="<?= $row['w_jsc_uni']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_jsc_result" value="<?= $row['w_jsc_result']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_jsc_year" value="<?= $row['w_jsc_year']; ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Others</td>
                                                    <td><input type="text" class="form-control" name="w_others_uni" value="<?= $row['w_others_uni']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_others_result" value="<?= $row['w_others_result']; ?>"></td>
                                                    <td><input type="text" class="form-control" name="w_others_year" value="<?= $row['w_others_year']; ?>"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mt-4">
                                <input type="hidden" name="updateId" value="<?= $row['w_id']; ?>">
                                <button type="submit" class="btn btn-primary">Update</button>
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
            $(".dropdown-toggle").click(function() {
                if ($('.dropdown-content:visible').length) {
                    $('.dropdown-content').hide();
                } else {
                    $('.dropdown-content').show();
                }
            });
        })
    </script>
</body>

</html>