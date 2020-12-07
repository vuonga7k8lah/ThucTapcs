<?php
isUserLogin();

require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
$row = \ThucTap\Models\AdminModel::selectAllGV();
?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Danh Sách Giảng Viên</div>
			<a href="<?=\ThucTap\Core\URL::uri('addUserGV')?>"><p class="right__desc">Thêm Giảng Viên</p></a>
			<div class="right__table">
				<div class="right__tableWrapper">
					<table>
						<thead>
						<tr>
							<th>STT</th>
							<th style="text-align: center;">avatar</th>
							<th>Tên Giảng Viên</th>
							<th>Học Vấn</th>
							<th>Quê Quán</th>
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
										src="./assets/upload/Profile/<?= !empty($value[12]) ? $value[12] :
											'avt.jpg' ?>"
										alt=""></td>
								<td data-label="Tên"><?= $value[2] ?></td>
								<td data-label="Email"><?= $value[5] ?></td>
								<td data-label="Phone"><?= $value[8] ?></td>
								<td data-label="Địa chỉ"><?= $value[9] ?></td>
								<td data-label="Địa chỉ"><?= $value[10] ?></td>
								<td data-label="Sửa" class="right__iconTable"><a href="<?=\ThucTap\Core\URL::uri('editUserGV').'/?id='.$value[0]?>"><img src="
                                ./assets/admin/assets/icon-edit.svg" alt=""></a></td>
								<td data-label="Xoá" class="right__iconTable"><a href="<?=\ThucTap\Core\URL::uri('deleteUserGV').'/?id='.$value[0]?>"><img
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
require_once 'views/footer.php';