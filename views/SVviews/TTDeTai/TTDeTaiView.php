<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$row = \ThucTap\Models\SinhVienModel::queryDeTai($_SESSION['isLogin']['MaSV']);
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Thông Tin Đề Tài</div>
            <div class="right__formWrapper" style="font-size: 23px;color: rgba(6,2,3,0.98);font-weight: bold">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="right__inputWrapper">
                        <label for="title">Mã Đề Tài</label>
                        <input type="text" value="<?= $row['MaDT'] ?>" disabled>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Tên Đề Tài</label>
                        <textarea name="MoTa" id="desc" cols="10" rows="5" disabled><?= $row['TenDT'] ?></textarea>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Người Hướng Dẫn</label>
                        <input type="text" value="<?= \ThucTap\Models\GiangVienModel::selectNameGV($row['MaGV'])['TenGV'] ?>"
                               disabled>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Thời Gian Đăng Ký</label>
                        <input type="text" value="<?= actionTime($row['time_start']) ?>" disabled>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Thời Gian Kết Thúc</label>
                        <input type="text" value="<?= actionTime($row['time_end']) ?>" disabled>
                    </div>
                    <div class="right__inputWrapper" style="font-size: 14px">
                        <label for="title">Tài Liệu Đính Kèm</label>
                        <a  href="<?= \ThucTap\Core\URL::uri('downloadFile/') . '?name='
		                . $row['DinhKem'] . '&time=' . $row['registration_date'] ?>"><input type="text" value="<?= $row['DinhKem'] ?>" disabled></a>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Mô tả</label>
                        <textarea name="MoTa" id="desc" cols="20" rows="10" disabled><?= $row['MoTa'] ?></textarea>
                    </div>
                </form>
            </div>
		</div>
	</div>
<?php
require_once 'views/footer.php';
