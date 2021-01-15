<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Bảng điều khiển</div>
			<p class="right__desc">Bảng điều khiển</p>
            <div class="right__cards">
                <a class="right__card" href="<?=\ThucTap\Core\URL::uri('listUserSV')?>">
                    <div class="right__cardTitle">Số Sinh Viên</div>
                    <div class="right__cardNumber"><?=\ThucTap\Models\CountModel::countSV()
						?></div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
                <a class="right__card" href="<?=\ThucTap\Core\URL::uri('listUserGV')?>">
                    <div class="right__cardTitle">Số Giảng Viên</div>
                    <div class="right__cardNumber"><?=\ThucTap\Models\CountModel::countGV()
						?></div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
                <a class="right__card" href="<?=\ThucTap\Core\URL::uri('listDeTai')?>">
                    <div class="right__cardTitle">Số Đề Tài</div>
                    <div class="right__cardNumber"><?=\ThucTap\Models\CountModel::countListDeTai() ?></div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
                <a class="right__card" href="<?=\ThucTap\Core\URL::uri('listNhomChat')?>">
                    <div class="right__cardTitle">Số Nhóm Chat</div>
                    <div class="right__cardNumber"><?=\ThucTap\Models\CountModel::countNhomChatAdmin() ?></div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
            </div>
		</div>
	</div>
<?php
require_once 'views/footer.php';
