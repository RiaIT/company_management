<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
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
                                <label for="name">Name: <span class="text-danger">*</span>/label>
                                <input type="text" class="from-control" name="mobile" required>
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile: <span class="text-danger">*</span>/label>
                                <input type="number" class="from-control" name="mobile" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email: <span class="text-danger">*</span>/label>
                                <input type="email" class="from-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password: <span class="text-danger">*</span>/label>
                                <input type="password" class="from-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address: <span class="text-danger">*</span>/label>
                                <input type="address" class="from-control" name="address" required>
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" class="btn btn-primary" value="submit" required>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User List</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>