<?php
isUserLogin();
$MaDT = $_GET['id'];
$aDataGV = \ThucTap\Models\GiangVienModel::queryGV();
$aDataDeTai = \ThucTap\Models\AdminModel::selectDeTaiWithMaDT($MaDT);
require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Sửa Sinh Viên</div>
            <div class="right__formWrapper">
                <form action="<?= \ThucTap\Core\URL::uri('editUserSV') ?>" method="post" enctype="multipart/form-data">
                    <div class="right__inputWrapper">
                        <label for="title">Mã Đề Tài</label>
                        <input type="text" name="MaDT" disabled id="MaDT" value="<?= $aDataDeTai['MaDT'] ?>" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Chọn Giảng Viên Hướng Dẫn</label>
                        <select name="MaGV">
                            <option disabled selected>Chọn Giảng Viên</option>
							<?php foreach ($aDataGV as $value) : ?>
                                <option <?= ($aDataDeTai['MaDT'] == $value[0]) ? 'selected' : '' ?>
                                        value="<?= $value[0] ?>"><?= $value[2] ?></option>
							<?php endforeach; ?>
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Tên Đề Tài</label>
                        <input type="text" name="TenDT" value="<?= $aDataDeTai['TenDT'] ?>" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Mô tả</label>
                        <textarea name="MoTa" id="desc" cols="30" rows="10"
                                  placeholder="Mô Tả Đề Tài"><?= $aDataDeTai['MoTa'] ?></textarea>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Tài Liệu Đính Kèm</label>
                        <input type="file" name="DinhKem" value="<?= $aDataDeTai['DinhKem'] ?>">
                    </div>
                    <button class="btn" type="submit">Lưu</button>
                </form>
            </div>
        </div>
    </div>
<?php
require_once 'views/footer.php';