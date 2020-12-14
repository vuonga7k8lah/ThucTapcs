<?php
isUserLogin();
$aDataGV=TenSV(\ThucTap\Models\GiangVienModel::queryMaSVDK($_SESSION['isLogin']['MaGV']));
var_dump($aDataGV);die();
foreach ($aDataGV as $value) { var_dump($value);die();}
require_once 'views/header.php';
require_once 'views/GVview/navigation.php';

?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Thêm Thông Báo</div>
			<div class="right__formWrapper">
				<form action="<?=\ThucTap\Core\URL::uri('addTB')?>" method="post" enctype="multipart/form-data">
					<div class="right__inputWrapper">
						<label for="title">Tiêu Đề Thông Báo</label>
						<input type="text" name="TieuDe" id="MaDT" required>
						<input type="hidden" name="idNguoiGui" id="MaDT" value="<?=$_SESSION['isLogin']['MaGV']?>"
						       required>
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Chọn Sinh Viên Thông Báo</label>
						<select name="MaGV">
							<option disabled selected>Chọn Sinh Viên</option>
							<?php $aDataGV=TenSV(\ThucTap\Models\GiangVienModel::queryMaSVDK($_SESSION['isLogin']['MaGV']));?>
							<?php foreach ($aDataGV as $value) : var_dump($value);die();?>
								<option value="<?=$value[0]?>"><?=$value[2]?></option>
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
					<button class="btn" type="submit">Lưu</button>
				</form>
			</div>
		</div>
	</div>
<?php
require_once 'views/footer.php';