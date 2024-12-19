<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <header class="bg-info">
        <h1 style="text-align: center;"> WakeUp ICT</h1>
    </header>


    <div class="content">
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center mt-2">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-info" style="text-align: center;">
                            <h4>Add Information</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name"> 1.Student Name:</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label> 2.Gender:</label><br>
                                <input type="radio" class="form-check-input" id="gender1" name="gender" value="Female">
                                <label for="gender1" class="form-check-label">Female</label><br>
                                <input type="radio" class="form-check-input" id="gender2" name="gender" value="Male">
                                <label for="gender2" class="form-check-label">Male</label><br>
                            </div>
                            <div class="form-group">
                                <label for="birth">3.Date of Birth:</label>
                                <input type="date" class="form-control" name="birth" required>
                            </div>
                            <div class="form-group">
                                <label for="fname">4.Father's Name:</label>
                                <input type="text" class="form-control" name="fname" required>
                            </div>
                            <div class="form-group">
                                <label for="mname">5.Mother's Name:</label>
                                <input type="text" class="form-control" name="mname" required>
                            </div><br>

                            <div class="card mt-2">
                                <div class="card_header">
                                    <div class="card-title" style="font-size: large;">6.Personal Information</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="rel">Religion:</label>
                                        <input type="text" class="form-control" name="rel" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nation">Nationality:</label>
                                        <input type="text" class="form-control" name="nation" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail Address:</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
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
                                                    <td><input type="text" name="w_mas_uni" class="form-control"></td>
                                                    <td><input type="text" name="w_mas_result" class="form-control"></td>
                                                    <td><input type="year" name="w_mas_year" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Honours</td>
                                                    <td><input type="text" name="w_hon_uni" class="form-control"></td>
                                                    <td><input type="text" name="w_hon_result" class="form-control"></td>
                                                    <td><input type="year" name="w_hon_year" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>H.S.C</td>
                                                    <td><input type="text" name="w_hsc_uni" class="form-control"></td>
                                                    <td><input type="text" name="w_hsc_result" class="form-control"></td>
                                                    <td><input type="year" name="w_hsc_year" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>S.S.C</td>
                                                    <td><input type="text" name="w_ssc_uni" class="form-control"></td>
                                                    <td><input type="text" name="w_ssc_result" class="form-control"></td>
                                                    <td><input type="year" name="w_ssc_year" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>J.S.C</td>
                                                    <td><input type="text" name="w_jsc_uni" class="form-control"></td>
                                                    <td><input type="text" name="w_jsc_result" class="form-control"></td>
                                                    <td><input type="year" name="w_jsc_year" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Others</td>
                                                    <td><input type="text" name="w_others_uni" class="form-control"></td>
                                                    <td><input type="text" name="w_others_result" class="form-control"></td>
                                                    <td><input type="year" name="w_others_year" class="form-control"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary">Submit Data</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <footer >
        #www.wakeupict.com
    </footer>
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