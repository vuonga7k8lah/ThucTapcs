<div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
    <div class="left__content">
        <div class="left__logo" style="text-align: center">Sinh Viên</div>
        <div class="left__profile">
            <div class="left__image"><img src="./assets/upload/Profile/<?= (isset($_SESSION['isLogin']['Anh']) &&
					!empty($_SESSION['isLogin']['Anh']))
					? $_SESSION['isLogin']['Anh'] : 'avt.jpg' ?>" alt=""></div>
            <p class="left__name"><?= $_SESSION['isLogin']['TenSV'] ?></p>
        </div>
        <ul class="left__menu">
            <li class="left__menuItem">
                <a href="<?= \ThucTap\Core\URL::uri('listThongBao') ?>">
                    <div class="left__title"><img src="./assets/admin/assets/icon-tag.svg" alt="">Thông
                        Báo
                    </div>
                </a>
            </li>
            <li class="left__menuItem">
                <a href="<?= \ThucTap\Core\URL::uri('profileView') ?>">
                    <div class="left__title"><img src="./assets/admin/assets/icon-user.svg" alt="">Thông Tin Cái Nhân
                    </div>
                </a>
            </li>
			<?php if (\ThucTap\Models\SinhVienModel::isSVDKDeTai($_SESSION['isLogin']['MaSV']) > 0) { ?>
                <li class="left__menuItem">
                    <a href="" class="left__title"><img src="./assets/admin/assets/icon-dashboard.svg" alt="">Tiến Độ Đề
                        Tài
                    </a>
                </li>
                <li class="left__menuItem">
                    <a href="<?=\ThucTap\Core\URL::uri('TTDeTai')?>"><div class="left__title"><img src="./assets/admin/assets/icon-edit.svg" alt="">Thông Tin Đề Tài
                    </div></a>
                </li>
                <li class="left__menuItem">
                    <div class="left__title"><a href=""><img src="./assets/admin/assets/icon-edit.svg" alt="">Gia Hạn Đề Tài</div></a>
                </li>
                <li class="left__menuItem">
                    <div class="left__title"><a href="<?=\ThucTap\Core\URL::uri('HuyDeTai')?>"><img src="
                    ./assets/admin/assets/icon-edit.svg"
                                                                  alt="">Hủy Đề Tài</div></a>
                </li>
                <li class="left__menuItem">
                    <div class="left__title"><img src="./assets/admin/assets/icon-book.svg" alt="">Nộp Báo Cáo</div>
                </li>
			<?php } else { ?>
                <li class="left__menuItem">
                    <a href="<?= \ThucTap\Core\URL::uri('listDetai') ?>">
                        <div class="left__title"><img src="./assets/admin/assets/icon-edit.svg" alt="">Đăng
                            Ký Đề Tài
                        </div>
                    </a>
                </li>
			<?php } ?>
            <li class="left__menuItem">
                <a href="<?= \ThucTap\Core\URL::uri('logoutSV') ?>" class="left__title"><img
                            src="./assets/admin/assets/icon-logout.svg" alt="">Đăng Xuất</a>
            </li>
        </ul>
    </div>
</div>