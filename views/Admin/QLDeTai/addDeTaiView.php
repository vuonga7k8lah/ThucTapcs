<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/Admin/navigation.php';
$aDataGV=\ThucTap\Models\GiangVienModel::queryGV();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Thêm Đề Tài</div>
            <div class="right__formWrapper">
                <form action="<?=\ThucTap\Core\URL::uri('addDeTai')?>" method="post" enctype="multipart/form-data">
                    <div class="right__inputWrapper">
                        <label for="title">Mã Đề Tài</label>
                        <div id="availableMaDT"></div>
                        <input type="text" name="MaDT" id="MaDT" required>
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
                        <label for="p_category">Tên Đề Tài</label>
                        <input type="text" name="TenDT" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Mô tả</label>
                        <textarea name="MoTa" id="desc" cols="30" rows="10" placeholder="Mô Tả Đề Tài"></textarea>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Tài Liệu Đính Kèm</label>
                        <input type="file" name="DinhKem">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="time">Thời Gian Kết Thúc Đề Tài</label>
                        <input id="time" name="time_end" type="date" required>
                    </div>
                    <button class="btn" type="submit">Lưu</button>
                </form>
            </div>
        </div>
    </div>
<?php
require_once 'views/footer.php';