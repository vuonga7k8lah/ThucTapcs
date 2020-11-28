<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$row = \ThucTap\Models\SinhVienModel::querylistDetai();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Danh Sách Đề Tài</div>
            <div class="right__table">
                <div class="right__tableWrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Đề Tài</th>
                            <th>Người Hướng Dẫn</th>
                            <th>Trạng Thái Đề Tài</th>
                            <th>Đăng Ký Đề Tài</th>
                        </tr>
                        </thead>

                        <tbody>
						<?php $i = 1;
						foreach ($row as $key => $value): ?>
                            <tr>
                                <td data-label="STT"><?= $i ?></td>
                                <td data-label="Email"><?= $value[1] ?></td>
                                <td data-label="Số Hoá Đơn"><?= $value[2] ?></td>
                                <td data-label="Số Lượng"><?= $value[4] ?></td>
                                <td data-label="Kích thước"><?php if ($value[4] === 'Đã Đăng Ký'){
										echo 'Đã Đăng Ký';
									}else{ ?><a
                                            href="">Đăng Ký</a></td><?php
								} ?>
                            </tr>
							<?php $i++;
						endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <a href="" class="right__tableMore"><p>Phân Trang</p> <img src="assets/arrow-right-black.svg"
                                                                           alt=""></a>
                <a class="right__tableMore1" style="text-align: right" href="<?= \ThucTap\Core\URL::uri('addDeTai') ?>">
                    <p
                            class="right__desc">Đề
                        Xuất Đề Tài</p></a>
            </div>
        </div>
    </div>
<?php
require_once 'views/footer.php';
