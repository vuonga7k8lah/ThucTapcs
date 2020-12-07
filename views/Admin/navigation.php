<div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
    <div class="left__content">
        <div class="left__logo" style="text-align: center">Admin</div>
        <div class="left__profile">
            <div class="left__image"><img src="./assets/upload/logoKMA.jpg" alt=""></div>
            <p class="left__name"><?= $_SESSION['isLogin']['TenAdmin'] ?></p>
        </div>
        <ul class="left__menu">
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/admin/assets/icon-user.svg" alt="">Quản Lý Users<img
                            class="left__iconDown" src="./assets/admin/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="<?=\ThucTap\Core\URL::uri('listUserSV')?>">List Users Sinh Viên</a>
                    <a class="left__link" href="<?=\ThucTap\Core\URL::uri('listUserGV')?>">List Users Giảng Viên</a>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/admin/assets/icon-book.svg" alt="">Quản Lý Đề Tài<img
                            class="left__iconDown" src="./assets/admin/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="<?=\ThucTap\Core\URL::uri('listDeTai')?>">List Đề Tài</a>
                    <a class="left__link" href="<?=\ThucTap\Core\URL::uri('addDeTai')?>">Thêm Đề Tài</a>
                </div>
            </li>
            <li class="left__menuItem">
                <a href="<?= \ThucTap\Core\URL::uri('logoutSV') ?>" class="left__title"><img
                            src="./assets/admin/assets/icon-logout.svg" alt="">Đăng Xuất</a>
            </li>
        </ul>
    </div>
</div>