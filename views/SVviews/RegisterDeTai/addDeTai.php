<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Đề Xuất Đề Tài</div>
            <p class="right__desc">Thêm Đề Tài</p>
            <div class="right__formWrapper">
                <form action="<?=\ThucTap\Core\URL::uri('addDeTai')?>" method="post" enctype="multipart/form-data">
                    <div class="right__inputWrapper">
                        <label for="title">Tên Đề Tài</label>
                        <input id="title" name="TenDT" type="text" required>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Mô tả</label>
                        <textarea name="MoTa" id="desc" cols="30" rows="10"></textarea>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Giảng Viên Hướng Dẫn</label>
                        <select name="GVHD" required>
                            <option disabled selected>Chọn Giảng Viên Hướng Dẫn</option>
                            <?php $row=\ThucTap\Models\SinhVienModel::queryGiangVienAll();
                            foreach ($row as $key=>$value):
                            ?>
                            <option value="<?=$value[0]?>"><?=$value[1]?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Tài Liệu Đính Kèm</label>
                        <input type="file" name="TaiLieu">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="time">Thời Gian Kết Thúc Đề Tài</label>
                        <input id="time" name="time_end" type="date" required>
                    </div>
                    <button class="btn" type="submit">Gửi</button>
                </form>
            </div>
        </div>
    </div>
<?php
require_once 'views/footer.php';
