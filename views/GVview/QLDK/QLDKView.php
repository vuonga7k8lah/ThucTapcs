<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/GVview/navigation.php';
$row = \ThucTap\Models\GiangVienModel::cancelDeTai($_SESSION['isLogin']['MaGV']);
$i = 1;
if (empty($row)) {
	echo '<div class="right">
		<div class="right__content">
			<div class="right__title">Quản Lý Đăng Ký Đề Tài</div>
			<h2>Chưa Có Sinh Viên Nào Hủy Đăng Ký Đề Tài Cả</h2>
			</div>
			</div>';
} else {
	?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Quản Lý Đăng Ký Đề Tài</div>
            <div class="right__tableWrapper">
                <table>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Đề Tài</th>
                        <th>Thành Viên Nhóm</th>
                        <th>Sinh Viên Hủy Đăng Ký</th>
                        <th>Lý Do</th>
                        <th>Thời Gian</th>
                        <th>Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php foreach ($row as $value): ?>
                        <tr>
                            <td data-label="STT"><?= $i ?></td>
                            <td data-label="Tên Đề Tài"><?= $value[0] ?></td>
                            <td data-label="Thành Viên Nhóm"><?= TenSV($value[1]) ?></td>
                            <td data-label="Sinh Viên Hủy Đăng Ký"><?= TenSV($value[2]) ?></td>
                            <td data-label="Lý Do"><?= $value[3] ?></td>
                            <td data-label="Thời Gian"><?= $value[4] ?></td>
                            <td data-label="Sửa" class="right__iconTable"><a
                                        href="<?= \ThucTap\Core\URL::uri('CTNhomGV') . '/?id='
										. $value[0] ?>"><img src="./assets/admin/assets/icon-edit.svg"
                                                             alt=""></a></td>
                        </tr>
						<?php $i++;
					endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
	<?php
}
require_once 'views/footer.php';
