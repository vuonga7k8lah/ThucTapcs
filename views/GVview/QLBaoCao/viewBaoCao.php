<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/GVview/navigation.php';
$row=\ThucTap\Models\GiangVienModel::ListBaoCaoGV($_SESSION['isLogin']['MaGV']);
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
						<th>Tên Đề Tài</th>
						<th>Tiêu Đề Báo Cáo</th>
						<th>Nội Dung</th>
						<th>Thành Viên Nhóm</th>
						<th>Đính Kèm</th>
						<th>Thời Gian Gửi</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($row as $value): ?>
						<tr>
							<td data-label="STT"><?= $i ?></td>
							<td data-label="Tên Đề Tài"><?= TenDT($value[5],'TenDT') ?></td>
							<td data-label="Tiêu Đề Báo Cáo"><?= $value[2]?></td>
							<td data-label="Nội Dung"><?= $value[4]?></td>
							<td data-label="Thành Viên Nhóm"><?= TenDT($value[5],'SVDK') ?></td>
							<td data-label="Đính Kèm"><a  href="<?= \ThucTap\Core\URL::uri('downloadFile/') . '?name='
								. $value[7] . '&time=' . $value[1] ?>"><?= $value[7] ?></a></td>
							<td data-label="Thời Gian Gửi"><?= $value[1] ?></td>
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
