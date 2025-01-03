<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body class="login-page">
    <div class="login-box">
        <img src="img/logo.jpg" height="70px" width="70px" alt="" style="margin-left: 250px;">
        <div class="login-logo">
            <a href="index2.html"><b>WakeUp ICT</b></a>
        </div>

        <?php
        session_start();
        if (isset($_SESSION['flash_data'])) { ?>
            <div class="alert alert-warning alert-dismissible fade show">
                <?= $_SESSION['flash_data']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
            </div>
            <?php unset($_SESSION['flash_data']); ?>
        <?php } ?>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><b>LOGIN</b></p>

                <form action="login_action.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block"><a href="register.php" style="color: white;">Register</a></button>
                        </div>
                        <div class="col-4">
                            <button type="submit" style="margin-left: 185px;" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
        <script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="dist/js/adminlte.min.js"></script>
</body>

</html>