<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body class="register-page">
    <div class="register-box">
        <img src="img/logo.jpg" height="70px" width="70px" alt="" style="margin-left: 435px;">
        <div class="register-logo">
            <a href="index2.html"><b>WakeUp ICT</b></a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">
                    <h3 style="text-align: center">-Register Now-</h3>
                </p>

                <form action="action.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label>First name</label><br>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="First name" name="name" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>Last name</label><br>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Last name" name="name" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label>Gender</label><br>
                    <div class="row">
                        <div class="col-6">
                            <div class="icheck-primary">
                                <input type="checkbox" id="gender" name="gender" value="female">
                                <label for="gender">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="icheck-primary">
                                <input type="checkbox" id="gender" name="gender" value="male">
                                <label for="gender">
                                    Male
                                </label>
                            </div>
                        </div>
                    </div>

                    <label>Address</label><br>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Address" name="address">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-home"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>Mobile No.</label><br>
                            <div class="input-group mb-3">
                                <input type="mobile" class="form-control" placeholder="Mobile No." name="mobile" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>NID no.</label><br>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="Type Here...." name="nid">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-number"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label>Date of Birth</label><br>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" placeholder="Date of Birth" name="date">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-date"></span>
                            </div>
                        </div>
                    </div>
                    <label>Your Email</label><br>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <label>Comments</label><br>
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control" placeholder="Comment Here..." name="cmnt" style="height: 100px;"></textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-comment"></span>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Create Password</label><br>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>Confirm Password</label><br>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Retype password" name="retype_password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 20px;">
                        <!-- <div>
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms and conditions</a>
                                </label>
                            </div>
                        </div> -->
                    </div>
                    <br>
                    <div style="margin-left: 20px;">
                        <button type="submit" class="btn btn-warning btn-lg-block">Register</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>