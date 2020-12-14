<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
$aDataGV = \ThucTap\Models\GiangVienModel::queryGV();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Danh Sách Đề Tài</div>
            <div class="right">
                <div class="right__content">
                    <div style="color: #ff27aa"><?php if (isset($_SESSION['successInsertDataDeTai'])) {
							echo $_SESSION['successInsertDataDeTai'];
						} ?></div>
                    <div class="right__formWrapper">
                        <form action="<?= \ThucTap\Core\URL::uri('listDeTai') ?>" method="post"
                              enctype="multipart/form-data">
                            <div class="right__inputWrapper">
                                <label for="p_category">Chọn Giảng Viên Hướng Dẫn</label>
                                <select name="MaGV">
                                    <option disabled selected>Chọn Giảng Viên</option>
									<?php foreach ($aDataGV as $value) : ?>
                                        <option value="<?= $value[0] ?>"><?= $value[2] ?></option>
									<?php endforeach; ?>
                                </select>
                            </div>
                            <button class="btn" type="submit">Tìm Kiếm</button>
                        </form>
                    </div>
                </div>
	            <?php if (isset($_SESSION['aDataDeTai']) && !empty($_SESSION['aDataDeTai'])): $i = 1; ?>
                    <p class="right__desc"><h3>Danh Sách Đề Tài Do Giảng Viên <?= $_SESSION['aDataDeTai'][1] ?>
                        Hướng
                        Dẫn </h3></p>
                    <div class="right__tableWrapper">
                        <table>
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Đề Tài</th>
                                <th>Giảng Viên Hướng Dẫn</th>
                                <th>Đính Kèm</th>
                                <th>Mô Tả</th>
                                <th>Trạng Thái</th>
                                <th>Ngày Tạo</th>
                                <th>Sửa</th>
                            </tr>
                            </thead>
                            <tbody>
				            <?php foreach ($_SESSION['aDataDeTai'][0] as $value): ?>
                                <tr>
                                    <td data-label="STT"><?= $i ?></td>
                                    <td data-label="Tên Đề Tài"><?= $value[1] ?></td>
                                    <td data-label="Giảng Viên"><?= $_SESSION['aDataDeTai'][1] ?></td>
                                    <td data-label="Đính Kèm"><?= $value[5] ?></td>
                                    <td data-label="Mô Tả"><?= $value[6] ?></td>
                                    <td data-label="Trạng Thái"><?= empty($value[4]) ? 'Đăng Ký' : $value[4]
							            ?></td>
                                    <td data-label="Ngày Tạo"><?= $value[3] ?></td>
                                    <td data-label="Sửa" class="right__iconTable"><a
                                                href="<?= \ThucTap\Core\URL::uri('editDeTai') . '/?id='
									            . $value[0] ?>"><img src="./assets/admin/assets/icon-edit.svg"
                                                                     alt=""></a></td>
                                </tr>
					            <?php $i++;
				            endforeach; ?>
                            </tbody>
                        </table>
                    </div>
	            <?php endif; ?>
            </div>

        </div>
    </div>
<?php
CheckReload(['successInsertDataDeTai']);
require_once 'views/footer.php';