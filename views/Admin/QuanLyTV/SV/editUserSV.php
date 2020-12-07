<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
$id = $_GET['id'];
$row = \ThucTap\Models\AdminModel::selectSV($id);
$aDataLop = \ThucTap\Models\SinhVienModel::queryLop();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Sửa Sinh Viên</div>
            <div class="right__formWrapper">
                <form action="<?= \ThucTap\Core\URL::uri('editUserSV') ?>" method="post" enctype="multipart/form-data">
                    <div class="right__inputWrapper">
                        <label for="title">Mã Sinh Viên</label>
                        <div id="available"></div>
                        <input type="text" name="MaSV" id="MaSV"  value="<?= $row['MaSV'] ?>" disabled required>
                        <input type="hidden" name="MaSV" value="<?= $row['MaSV'] ?>">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Mã Lớp</label>
                        <select name="MaLop">
                            <option disabled selected>Chọn Lớp Học</option>
							<?php foreach ($aDataLop as $value) : ?>
                                <option <?= ($row['Malop'] == $value[0]) ? 'selected' : '' ?>
                                        value="<?= $value[0] ?>"><?= $value[1] ?></option>
							<?php endforeach; ?>
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Tên Sinh Viên</label>
                        <input type="text" name="TenSV" value="<?= $row['TenSV'] ?>" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Mật Khẩu</label>
                        <input type="password" name="MatKhau" value="<?= $row['Matkhau'] ?>" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Ngày sinh</label>
                        <input type="date" name="NgaySinh" value="<?= $row['Ngaysinh'] ?>" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Dân Tộc</label>
                        <input type="text" name="DanToc" value="<?= $row['Dantoc'] ?>" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Giới Tính</label>
                        <select name="GioTinh">
                            <option disabled selected>Xác Nhận Giới Tính</option>
                            <option <?= ($row['Gioitinh'] == 'Nam') ? 'selected' : '' ?> value="Nam">Nam</option>
                            <option <?= ($row['Gioitinh'] == 'Nu') ? 'selected' : '' ?> value="Nu">Nữ</option>
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="label">Địa Chỉ</label>
                        <input type="text" name="DiaChi" value="<?= $row['Diachi'] ?>" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Email</label>
                        <input type="email" name="Email" value="<?= $row['Email'] ?>" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Số Điện Thoại</label>
                        <div id="availableSDT"></div>
                        <input id="SDT" type="number" name="SDT" value="<?= $row['SDT'] ?>" required>
                    </div>
                    <button class="btn" type="submit">Lưu</button>
                </form>
            </div>
        </div>
    </div>
<?php
require_once 'views/footer.php';