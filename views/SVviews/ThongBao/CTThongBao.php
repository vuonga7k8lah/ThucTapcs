<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$MaTB = $_GET['MaTB'];
$Type = $_GET['Type'];
switch ($_GET['Type']) {
	case 'DT':
	    $row=\ThucTap\Models\SinhVienModel::queryThongBaoWithMaTBDT($MaTB);
		break;
    case 'HT':
	    $row = \ThucTap\Models\SinhVienModel::queryThongBaoWithMaTB($MaTB);
	    break;
}

?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Thông Tin Thông Báo</div>
            <div class="right__formWrapper" style="font-size: 23px;color: rgba(6,2,3,0.98);font-weight: bold">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="right__inputWrapper">
                        <label for="desc">Tiêu Đề Thông Báo</label>
                        <textarea id="desc" cols="10" rows="2" disabled><?= $row['TieuDe'] ?>
                            </textarea>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Người Gửi Thông Báo</label>
                        <input type="text" value="<?= handleNguoiGui($row['idNguoiGui']) ?>" disabled>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Thời Gian Gửi</label>
                        <input type="text" value="<?= $row['date_time'] ?>" disabled>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Mô tả</label>
                        <textarea name="MoTa" id="desc" cols="20" rows="10" disabled><?= $row['NoiDung'] ?></textarea>
                    </div>
					<?php if (isset($row['DinhKem'])&&!empty($row['DinhKem'])): ?>
                        <div class="right__inputWrapper">
                            <label for="title">Tài Liệu Đính Kèm</label>
                            <a href="<?= \ThucTap\Core\URL::uri('downloadFile/') . '?name='
							. $row['DinhKem'] . '&time=' . $row['registration_date'] ?>"><input type="text"
                                                                                                  value="<?= $row['DinhKem'] ?>"
                                                                                                  disabled></a>
                        </div>
					<?php endif; ?>
                </form>
            </div>
        </div>
    </div>
<?php
require_once 'views/footer.php';
