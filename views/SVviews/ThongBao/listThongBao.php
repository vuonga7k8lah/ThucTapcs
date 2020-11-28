<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$row=\ThucTap\Models\SinhVienModel::selectAllThongBao();
?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Bảng điều khiển</div>
			<p class="right__desc">Bảng điều khiển</p>
            <div class="right__table">
                <div class="right__tableWrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th >Tiêu Đề</th>
                            <th>Nội Dung Thông Báo</th>
                            <th>Tài Liệu Đính Kèm</th>
                            <th>Xem Chi Tiết</th>
                        </tr>
                        </thead>

                        <tbody>
						<?php $i = 1;
						foreach ($row as $key => $value): ?>
                            <tr>
                                <td data-label="STT"><?= $i ?></td>
                                <td data-label="Email"><?= $value[1] ?></td>
                                <td data-label="Số Hoá Đơn"><?= $value[2] ?></td>
                                <td data-label="Số Lượng"><?= $value[3] ?></td>
                                <td data-label="Kích thước"><a href="">Chi Tiết</a></td>
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
require_once 'views/footer.php';

