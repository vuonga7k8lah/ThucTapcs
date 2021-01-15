<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/GVview/navigation.php';
$MaGV=$_SESSION['isLogin']['MaGV'];
?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Bảng điều khiển</div>
			<p class="right__desc">Bảng điều khiển</p>
            <div class="right__cards">
                <a class="right__card" href="<?=\ThucTap\Core\URL::uri('SVDK')?>">
                    <div class="right__cardTitle">Đề Tài Đăng Ký</div>
                    <div class="right__cardNumber"><?=\ThucTap\Models\CountModel::countDeTai($MaGV)
                        ?></div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
                <a class="right__card" href="<?= \ThucTap\Core\URL::uri('listNhomChatGV') ?>">
                    <div class="right__cardTitle">Nhóm Chat</div>
                    <div class="right__cardNumber"><?=\ThucTap\Models\CountModel::countNhomChat($MaGV)
	                    ?></div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
                <a class="right__card" href="<?= \ThucTap\Core\URL::uri('listHuyDK') ?>">
                    <div class="right__cardTitle">Quản Lý Đăng Ký</div>
                    <div class="right__cardNumber"><?=\ThucTap\Models\CountModel::countHuyDT($MaGV) ?></div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
                <a class="right__card" href="<?= \ThucTap\Core\URL::uri('listBaoCaoGV') ?>">
                    <div class="right__cardTitle">Báo Cáo</div>
                    <div class="right__cardNumber"><?=\ThucTap\Models\CountModel::countBaoCao($MaGV) ?></div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
            </div>
		</div>
	</div>
<?php
require_once 'views/footer.php';
