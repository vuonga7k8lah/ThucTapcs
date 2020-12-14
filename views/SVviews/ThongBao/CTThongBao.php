<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$MaTB = $_GET['MaTB'];
$row = \ThucTap\Models\SinhVienModel::queryThongBaoWithMaTB($MaTB);
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Thông Tin Thông Báo</div>
            <div class="right__formWrapper">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="right__inputWrapper">
                        <label for="title">Tiêu Đề Thông Báo</label>
                        <input type="text" value="<?= $row['TieuDe'] ?>" disabled>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Người Gửi Thông Báo</label>
                        <input type="text" value="<?= handleNguoiGui($row['idNguoiGui']) ?>" disabled>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Thời Gian Gửi</label>
                        <input type="text" value="<?= $row['registration_date'] ?>" disabled>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Mô tả</label>
                        <textarea name="MoTa" id="desc" cols="20" rows="10" disabled><?= $row['NoiDung'] ?></textarea>
                    </div>
					<?php if (isset($row['TaiLieuTK'])&&!empty($row['TaiLieuTK'])): ?>
                        <div class="right__inputWrapper">
                            <label for="title">Tài Liệu Đính Kèm</label>
                            <a href="<?= \ThucTap\Core\URL::uri('downloadFile/') . '?name='
							. $row['TaiLieuTK'] . '&time=' . $row['registration_date'] ?>"><input type="text"
                                                                                                  value="<?= $row['TaiLieuTK'] ?>"
                                                                                                  disabled></a>
                        </div>
					<?php endif; ?>
                </form>
            </div>
        </div>
    </div>
<?php
require_once 'views/footer.php';
