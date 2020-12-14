<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/admin/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" href="./assets/Login.css">
    <script src="./assets/admin/jquery.js"></script>
    <script src="./assets/admin/bootstrap.min.js"></script>
</head>
<body>
<section class="login-block">
    <div class="container">
        <div class="row" style="
    height: 100%;
    justify-content: center;
    align-items: center;
">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Đăng Nhập</h2>
                <div style="color: red"><?php if (isset($_SESSION['errorsSVLogin'])) {
						echo $_SESSION['errorsSVLogin'];
					} ?></div>
                <div style="color: red"><?php if (isset($_SESSION['errorsGVLogin'])) {
						echo $_SESSION['errorsGVLogin'];
					} ?></div>
                <div style="color: red"><?php if (isset($_SESSION['errorsAdminLogin'])) {
						echo $_SESSION['errorsAdminLogin'];
					} ?></div>
                <form class="login-form" action="<?= \ThucTap\Core\URL::uri('login') ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase">Tài Khoản:</label>
                        <input type="text" class="form-control" required name="Username">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase">Mật Khẩu:</label>
                        <input type="password" class="form-control" name="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Truy Cập Với Tư Cách:</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="access">
                            <option value="sinhvien">Sinh Viên</option>
                            <option value="giangvien">Giảng Viên</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            <small>Remember Me</small>
                        </label>
                        <button type="submit" class="btn btn-login float-right">Gửi</button>
                    </div>

                </form>
                <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="">VươngKMA</a></div>
            </div>
            <div class="col-md-8 banner-sec">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="./assets/upload/kma.jpg"
                         alt="First slide" style="margin-top: 10px">
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<?php CheckReload(['errorsSVLogin','errorsGVLogin','errorsAdminLogin']);?>

