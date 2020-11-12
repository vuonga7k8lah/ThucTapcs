<link rel="stylesheet" href="./assets/admin/bootstrap.min.css" id="bootstrap-css">
<link rel="stylesheet" href="./assets/Login.css">
<script src="./assets/admin/jquery.js"></script>
<script src="./assets/admin/bootstrap.min.js"></script>
<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Đăng Nhập</h2>
                <form class="login-form">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase">Tài Khoản:</label>
                        <input type="text" class="form-control" required >

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase">Mật Khẩu:</label>
                        <input type="password" class="form-control" required >
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
            </div>
        </div>
    </div>
</section>

