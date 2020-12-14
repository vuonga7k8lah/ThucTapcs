<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/GVview/navigation.php';
$data['MaGV']=$_SESSION['isLogin']['MaGV'];
$data['Status']="Đã DK";
$row=\ThucTap\Models\GiangVienModel::svdkDeTai($data);
$i=1;
?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Danh Sách Sinh Viên Đăng Ký Đề Tài</div>
				<div class="right__tableWrapper">
					<table>
						<thead>
						<tr>
							<th>STT</th>
							<th>Tên Đề Tài</th>
							<th>Sinh Viên Đăng Ký</th>
							<th>Ngày Đăng Ký</th>
							<th>Ngày Kết Thúc</th>
							<th>Gửi Thông Báo</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($row as $value): ?>
							<tr>
								<td data-label="STT"><?= $i ?></td>
								<td data-label="Tên Đề Tài"><?= $value[1] ?></td>
								<td data-label="Tên Sinh Viên"><?= TenSV($value[9])[0] ?></td>
								<td data-label="Ngày Đăng Ký"><?= actionTime($value[7]) ?></td>
								<td data-label="Ngày Kết Thúc"><?= actionTime($value[8]) ?></td>
								<td data-label="Chi Tiết"><a href="<?=\ThucTap\Core\URL::uri('guiTB')
									.'/?MaSV='.$value[9]?>">Gửi Thông Báo</a></td>
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