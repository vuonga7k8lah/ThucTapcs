<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
$aDataGV = \ThucTap\Models\GiangVienModel::queryGV();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Thêm Thành Viên Nhóm</div>
            <div class="right__formWrapper">
                <form action="<?= \ThucTap\Core\URL::uri('addNhomChatBox') ?>" method="post"
                      enctype="multipart/form-data">
                    <div class="right__inputWrapper">
                        <label for="p_category">Tên Nhóm Chat</label>
                        <input type="text" name="TenNhom" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Chọn Giảng Viên Hướng Dẫn</label>
                        <select name="MaGV">
                            <option disabled selected>Chọn Giảng Viên</option>
							<?php foreach ($aDataGV as $value) : ?>
                                <option value="<?= $value[0] ?>"><?= $value[2] ?></option>
							<?php endforeach; ?>
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="time">Thành Viên Nhóm</label>
                        <input type="text" value="Ví Dụ:CTO201 AT0101 " disabled>
                        <input id="time" name="MaSV" type="text" placeholder="Nhập Mã Sinh Viên Thành Viên Nhóm"
                               required>
                    </div>
                    <button class="btn" type="submit">Lưu</button>
                </form>
            </div>
        </div>
    </div>
<?php
require_once 'views/footer.php';
