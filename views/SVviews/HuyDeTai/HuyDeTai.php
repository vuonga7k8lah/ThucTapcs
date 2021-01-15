<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$aDataGV=\ThucTap\Models\GiangVienModel::queryGV();
$aDataDetai=\ThucTap\Models\SinhVienModel::queryDeTai($_SESSION['isLogin']['MaSV']);
?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Hủy Đăng Ký Đề Tài</div>
			<div class="right__formWrapper">
				<form action="<?=\ThucTap\Core\URL::uri('HuyDeTai')?>" method="post" enctype="multipart/form-data">
					<div class="right__inputWrapper">
						<label for="MaDT">Mã Đề Tài</label>
						<input type="text" name="MaDT" id="MaDT" value="<?=$aDataDetai['MaDT']?>" disabled required>
						<input type="hidden" name="MaSV"  value="<?=$_SESSION['isLogin']['MaSV']?>">
					</div>
					<div class="right__inputWrapper">
						<select name="MaGV">
							<option disabled selected>Chọn Giảng Viên</option>
							<?php foreach ($aDataGV as $key=>$value) :
                                if($value[0]==$aDataDetai['MaGV']){
                                ?>
								<option value="<?=$value[0]?>" selected><?=$value[2]?></option>
							<?php } endforeach;?>
						</select>
					</div>
					<div class="right__inputWrapper">
						<label for="desc">Lý Do Hủy Đề Tài</label>
						<textarea name="LyDo" id="desc" cols="20" rows="10" ></textarea>
					</div>
					<button class="btn" type="submit">Lưu</button>
				</form>
			</div>
		</div>
	</div>
<?php
require_once 'views/footer.php';
