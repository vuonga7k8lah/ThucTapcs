<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
$MaGV=$_GET['id'];
$aData=\ThucTap\Models\GiangVienModel::selectGV($MaGV);
$aDataKhoa=\ThucTap\Models\GiangVienModel::queryTenKhoa();
?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Thêm Giảng Viên</div>
			<div class="right__formWrapper">
				<form action="<?=\ThucTap\Core\URL::uri('editUserGV')?>" method="post">
					<div class="right__inputWrapper">
						<label for="title">Mã Giảng Viên</label>
						<div id="availableMaGV"></div>
						<input disabled type="text" name="MaGV" id="MaGV" value="<?=$aData['MaGV']?>" required>
						<input type="hidden" name="MaGV" value="<?=$aData['MaGV']?>">
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Mã Khoa</label>
						<select name="MaKhoa">
							<option disabled selected>Chọn Khoa</option>
							<?php foreach ($aDataKhoa as $value) :?>
								<option <?= $aData['Makhoa']===$value[0]?'selected':''?>
									value="<?=$value[0]?>"><?=$value[1]?></option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Tên Giảng Viên</label>
						<input type="text" name="TenGV" value="<?=$aData['TenGV']?>" required>
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Ngày sinh</label>
						<input type="date" name="NgaySinh" value="<?=$aData['Ngaysinh']?>" required>
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Dân Tộc</label>
						<input type="text" value="<?=$aData['Dantoc']?>" name="DanToc" required>
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Học Vấn</label>
						<input type="text" value="<?=$aData['Hocvan']?>" name="HocVan" required>
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Giới Tính</label>
						<select name="GioTinh">
							<option disabled selected>Xác Nhận Giới Tính</option>
							<option value="Nam">Nam</option>
							<option value="Nữ">Nữ</option>
						</select>
					</div>
					<div class="right__inputWrapper">
						<label for="label">Địa Chỉ</label>
						<input value="<?=$aData['Diachi']?>" type="text" name="DiaChi" required>
					</div>
					<div class="right__inputWrapper">
						<label for="title">Email</label>
						<input value="<?=$aData['Email']?>" type="email" name="Email" required>
					</div>
					<div class="right__inputWrapper">
						<label for="desc">Số Điện Thoại</label>
						<div id="availableSDT"></div>
						<input value="<?=$aData['SDT']?>" type="number" name="SDT" id="SDT" required>
					</div>
					<button class="btn" type="submit">Lưu</button>
				</form>
			</div>
		</div>
	</div>
<?php
require_once 'views/footer.php';