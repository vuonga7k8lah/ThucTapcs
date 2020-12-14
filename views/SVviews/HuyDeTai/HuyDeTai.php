<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$aDataGV=\ThucTap\Models\GiangVienModel::queryGV();
?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Hủy Đề Tài</div>
			<div class="right__formWrapper">
				<form action="<?=\ThucTap\Core\URL::uri('HuyDeTai')?>" method="post" enctype="multipart/form-data">
					<div class="right__inputWrapper">
						<label for="MaDT">Mã Đề Tài</label>
						<input type="text" name="MaDT" id="MaDT" required>
						<input type="hidden" name="MaSV"  value="<?=$_SESSION['isLogin']['MaSV']?>">
					</div>
					<div class="right__inputWrapper">
						<label for="p_category">Chọn Giảng Viên Hướng Dẫn</label>
						<select name="MaGV">
							<option disabled selected>Chọn Giảng Viên</option>
							<?php foreach ($aDataGV as $value) :?>
								<option value="<?=$value[0]?>"><?=$value[2]?></option>
							<?php endforeach;?>
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
