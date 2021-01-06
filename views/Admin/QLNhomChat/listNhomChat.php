<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
$row=\ThucTap\Models\ChatBoxModel::queryData();
$i=1;
?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Danh Sách Nhóm Chat</div>
			<div class="right__tableWrapper">
				<table>
					<thead>
					<tr>
						<th>STT</th>
						<th>Tên Nhóm Chat</th>
						<th>Giảng Viên Hướng Dẫn</th>
						<th>Thành Viên Nhóm</th>
						<th>Ngày Tạo</th>
						<th>Sửa</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($row as $value): ?>
						<tr>
							<td data-label="STT"><?= $i ?></td>
							<td data-label="Tên Đề Tài"><?= $value[1] ?></td>
							<td data-label="Giảng Viên"><?= \ThucTap\Models\GiangVienModel::selectNameGV($value[2])['TenGV']?></td>
							<td data-label="Thành Viên Nhóm"><?= !empty($value[3]) ? TenSV($value[3]) : "Chưa Đăng Ký" ?></td>
							<td data-label="Ngày Tạo"><?= $value[4] ?></td>
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
		</div>
	</div>
<?php
require_once 'views/footer.php';
