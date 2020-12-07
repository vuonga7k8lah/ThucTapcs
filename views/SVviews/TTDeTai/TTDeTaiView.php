<?php
isUserLogin();

require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$row = \ThucTap\Models\SinhVienModel::queryDeTai($_SESSION['isLogin']['MaSV']);
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Bảng điều khiển</p>
            <div class="right__formWrapper">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="right__inputWrapper">
                        <label for="title">Mã Đề Tài</label>
                        <input type="text" value="<?= $row['MaDT'] ?>" disabled>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Tên Đề Tài</label>
                        <input type="text" value="<?= $row['TenDT'] ?>" disabled>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Người Hướng Dẫn</label>
                        <input type="text" value="<?= $row['NguoiHD'] ?>" disabled>
                    </div>
                </form>
            </div>
		</div>
	</div>
<?php
require_once 'views/footer.php';
