<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
$aDataLop=\ThucTap\Models\SinhVienModel::queryLop();
?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Thêm Sinh Viên</div>
			<div class="right__formWrapper">
				<form action="<?=\ThucTap\Core\URL::uri('addUserSV')?>" method="post" enctype="multipart/form-data">
					<div class="right__inputWrapper">
						<label for="title">Mã Sinh Viên</label>
                        <div id="available"></div>
						<input type="text" name="MaSV" id="MaSV" required>
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Mã Lớp</label>
                        <select name="MaLop">
                            <option disabled selected>Chọn Lớp Học</option>
                            <?php foreach ($aDataLop as $value) :?>
                            <option value="<?=$value[0]?>"><?=$value[1]?></option>
                            <?php endforeach;?>
                        </select>
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Tên Sinh Viên</label>
						<input type="text" name="TenSV" required>
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Ngày sinh</label>
						<input type="date" name="NgaySinh" required>
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Dân Tộc</label>
						<input type="text" name="DanToc" required>
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
						<input type="text" name="DiaChi" required>
					</div>
					<div class="right__inputWrapper">
						<label for="title">Email</label>
						<input type="email" name="Email" required>
					</div>
					<div class="right__inputWrapper">
						<label for="desc">Số Điện Thoại</label>
                        <div id="availableSDT"></div>
						<input type="number" name="SDT" id="SDT" required>
					</div>
					<button class="btn" type="submit">Lưu</button>
				</form>
			</div>
		</div>
	</div>
<?php
require_once 'views/footer.php';