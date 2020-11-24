<div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
    <div class="left__content">
        <div class="left__logo" style="text-align: center">Sinh Viên</div>
        <div class="left__profile">
            <div class="left__image"><img src="./assets/admin/assets/profile.jpg" alt=""></div>
            <p class="left__name"><?= $_SESSION['isLogin']['TenSV'] ?></p>
        </div>
        <ul class="left__menu">
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/admin/assets/icon-tag.svg" alt="">Thông Báo</div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/admin/assets/icon-user.svg" alt="">Thông Tin Cái Nhân<img
                            class="left__iconDown" src="./assets/admin/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="insert_admin.html">Chèn Admin</a>
                    <a class="left__link" href="view_admins.html">Xem Thông Tin</a>
                </div>
            </li>
            <li class="left__menuItem">
                <a href="" class="left__title"><img src="./assets/admin/assets/icon-dashboard.svg" alt="">Trạng Thái
                    Đề Tài
                </a>
            </li>
            <li class="left__menuItem">
                <a href="<?= \ThucTap\Core\URL::uri('listDetai') ?>">
                    <div class="left__title"><img src="./assets/admin/assets/icon-edit.svg" alt="">Đăng
                        Ký Đề Tài
                    </div>
                </a>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/admin/assets/icon-edit.svg" alt="">Xem Mã Số Đề Tài</div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/admin/assets/icon-edit.svg" alt="">Gia Hạn Đề Tài</div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/admin/assets/icon-edit.svg" alt="">Hủy Đề Tài</div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="./assets/admin/assets/icon-book.svg" alt="">Nộp Báo Cáo</div>
            </li>
            <li class="left__menuItem">
                <a href="<?= \ThucTap\Core\URL::uri('logoutSV') ?>" class="left__title"><img
                            src="./assets/admin/assets/icon-logout.svg" alt="">Đăng Xuất</a>
            </li>
        </ul>
    </div>
</div>