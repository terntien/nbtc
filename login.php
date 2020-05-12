<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" > <!-- fa fa i-con -->

</html>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 content">
                 
                <br>
                <div class="col-md-4 offset-md-4 col-sm-12 text-center content-login-form">
                    <h2>เข้าสู่ระบบ</h2>
                    <form action="admin/models/admin_login.php" method="POST">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="users_email" placeholder="Email" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="fa fa-key" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="users_password" placeholder="Password" required>
                        </div>
                        <div class="input-group">
                            <button type="submit" href="models/admin_login.php" class="btn btn-success">เข้าสู่ระบบ</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>