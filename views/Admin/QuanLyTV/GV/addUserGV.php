<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
$aDataKhoa=\ThucTap\Models\GiangVienModel::queryTenKhoa();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Thêm Giảng Viên</div>
            <div class="right__formWrapper">
                <form action="<?=\ThucTap\Core\URL::uri('addUserGV')?>" method="post">
                    <div class="right__inputWrapper">
                        <label for="title">Mã Giảng Viên</label>
                        <div id="availableMaGV"></div>
                        <input type="text" name="MaGV" id="MaGV" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Mã Khoa</label>
                        <select name="MaKhoa">
                            <option disabled selected>Chọn Khoa</option>
							<?php foreach ($aDataKhoa as $value) :?>
                                <option value="<?=$value[0]?>"><?=$value[1]?></option>
							<?php endforeach;?>
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Tên Giảng Viên</label>
                        <input type="text" name="TenGV" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Ngày sinh</label>
                        <input type="date" name="NgaySinh" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Dân Tộc</label>
                        <input type="text" name="DanToc" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Học Vấn</label>
                        <input type="text" name="HocVan" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Giới Tính</label>
                        <select name="GioTinh">
                            <option disabled selected>Xác Nhận Giới Tính</option>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="label">Địa Chỉ</label>
                        <input type="text" name="DiaChi" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Email</label>
                        <input type="email" name="Email" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Số Điện Thoại</label>
                        <div id="availableSDT"></div>
                        <input type="number" name="SDT" id="SDT" required>
                    </div>
                    <button class="btn" type="submit">Lưu</button>
                </form>
            </div>
        </div>
    </div>
<?php
require_once 'views/footer.php';