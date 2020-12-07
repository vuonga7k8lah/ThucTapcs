<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
$row = \ThucTap\Models\AdminModel::selectAllSV();

?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Danh Sách Sinh Viên</div>
            <a href="<?=\ThucTap\Core\URL::uri('addUserSV')?>"><p class="right__desc">Thêm Sinh Viên</p></a>
            <div style="color: #ff27aa"><?php if(isset($_SESSION['AddUserSuccess'])){echo $_SESSION['AddUserSuccess'];}?></div>
            <div style="color: #ff27aa"><?php if(isset($_SESSION['SuccessDeleteSV'])){echo $_SESSION['SuccessDeleteSV'];}?></div>
            <div style="color: #ff27aa"><?php if(isset($_SESSION['updateUserSuccess'])){echo $_SESSION['updateUserSuccess'];}?></div>
            <div class="right__table">
                <div class="right__tableWrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th style="text-align: center;">avatar</th>
                            <th>Tên Sinh Viên</th>
                            <th>Mã Sinh Viên</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Sửa</th>
                            <th>Xoá</th>
                        </tr>
                        </thead>

                        <tbody>
						<?php $i = 1;
						foreach ($row as $key => $value):
							?>
                            <tr>
                                <td data-label="STT"><?= $i ?></td>
                                <td data-label="Hình ảnh" style="text-align: center;"><img
                                            style="width: 50px;height: 50px; border-radius: 100%; object-fit: cover;"
                                            src="./assets/upload/Profile/<?= !empty($value[10]) ? $value[10] :
												'avt.jpg' ?>"
                                            alt=""></td>
                                <td data-label="Tên"><?= $value[2] ?></td>
                                <td data-label="Email"><?= $value[0] ?></td>
                                <td data-label="Phone"><?= $value[7] ?></td>
                                <td data-label="Địa chỉ"><?= $value[8] ?></td>
                                <td data-label="Địa chỉ"><?= $value[9] ?></td>
                                <td data-label="Sửa" class="right__iconTable"><a href="<?=\ThucTap\Core\URL::uri('editUserSV').'/?id='.$value[0]?>"><img src="
                                ./assets/admin/assets/icon-edit.svg" alt=""></a></td>
                                <td data-label="Xoá" class="right__iconTable"><a href="<?=\ThucTap\Core\URL::uri('deleteUserSV').'/?id='.$value[0]?>"><img
			                                src="./assets/admin/assets/icon-trash-black.svg" alt=""></a></td>
                            </tr>
							<?php $i++;
						endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
CheckReload(['AddUserSuccess','SuccessDeleteSV','updateUserSuccess']);
require_once 'views/footer.php';