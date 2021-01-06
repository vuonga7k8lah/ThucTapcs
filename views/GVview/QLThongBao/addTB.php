<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/GVview/navigation.php';

?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Thêm Thông Báo</div>
			<div class="right__formWrapper">
				<form action="<?=\ThucTap\Core\URL::uri('guiTB')?>" method="post" enctype="multipart/form-data">
					<div class="right__inputWrapper">
						<label for="title">Tiêu Đề Thông Báo</label>
						<input type="text" name="TieuDe" id="title" required>
						<input type="hidden" name="idNguoiGui" id="MaDT" value="<?=$_SESSION['isLogin']['MaGV']?>"
						       required>
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Chọn Nhóm Để Gửi Thông Báo</label>
						<select name="MaDT">
							<option disabled selected>Chọn Nhóm Đăng Ký</option>
							<?php $aDataGV=\ThucTap\Models\GiangVienModel::MaDTDK($_SESSION['isLogin']['MaGV']);?>
							<?php foreach ($aDataGV as $value) :?>
								<option value="<?=$value[0]?>"><?=TenSV($value[1])?></option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="right__inputWrapper">
						<label for="desc">Nội Dung</label>
						<textarea name="MoTa" id="desc" cols="30" rows="10" placeholder="Nhập Nội Dung"></textarea>
					</div>
					<div class="right__inputWrapper">
						<label for="image">Tài Liệu Đính Kèm</label>
						<input type="file" name="DinhKem">
					</div>
					<button class="btn" type="submit">Gửi</button>
				</form>
			</div>
		</div>
	</div>
<?php
require_once 'views/footer.php';