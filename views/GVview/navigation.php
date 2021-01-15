<div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
    <div class="left__content">
        <div class="left__logo" style="text-align: center">Giảng Viên</div>
        <div class="left__profile">
            <div class="left__image"><img src="./assets/upload/Profile/<?= (isset($_SESSION['isLogin']['Anh']) &&
				    !empty($_SESSION['isLogin']['Anh']))
				    ? $_SESSION['isLogin']['Anh'] : 'avt.jpg' ?>" alt=""></div>
            <p class="left__name"><?= $_SESSION['isLogin']['TenGV'] ?></p>
        </div>
        <ul class="left__menu">
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/admin/assets/icon-user.svg" alt="">Quản Lý Thông Báo<img
                            class="left__iconDown" src="./assets/admin/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="<?=\ThucTap\Core\URL::uri('SVDK')?>">Sinh Viên Đăng Ký
                    </a>
                    <a class="left__link" href="<?=\ThucTap\Core\URL::uri('guiTB')?>">Gửi Thông Báo</a>
                </div>
            </li>
            <li class="left__menuItem">
                <a href="<?= \ThucTap\Core\URL::uri('listNhomChatGV') ?>">
                    <div class="left__title"><img src="./assets/admin/assets/icon-user.svg" alt="">Quản Lý Nhóm Chat
                    </div>
                </a>
            </li>
            <li class="left__menuItem">
                <a href="<?= \ThucTap\Core\URL::uri('profileGV') ?>">
                    <div class="left__title"><img src="./assets/admin/assets/icon-user.svg" alt="">Thông Tin Cái Nhân
                    </div>
                </a>
            </li>
            <li class="left__menuItem">
                <a href="<?= \ThucTap\Core\URL::uri('listHuyDK') ?>">
                    <div class="left__title"><img src="./assets/admin/assets/icon-user.svg" alt="">Quản Lý Đăng Ký
                    </div>
                </a>
            </li>
            <li class="left__menuItem">
                <a href="<?= \ThucTap\Core\URL::uri('listBaoCaoGV') ?>">
                    <div class="left__title"><img src="./assets/admin/assets/icon-user.svg" alt="">Báo Cáo Đề Tài
                    </div>
                </a>
            </li>
            <li class="left__menuItem">
                <a href="<?= \ThucTap\Core\URL::uri('logoutSV') ?>" class="left__title"><img
                            src="./assets/admin/assets/icon-logout.svg" alt="">Đăng Xuất</a>
            </li>
        </ul>
    </div>
</div>