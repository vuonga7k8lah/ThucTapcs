<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$aDataTB=\ThucTap\Models\SinhVienModel::selectAllThongBao($_SESSION['isLogin']['MaSV']);
if (\ThucTap\Models\SinhVienModel::SelectMaDT($_SESSION['isLogin']['MaSV'])[1]>0){
	$MaDT=\ThucTap\Models\SinhVienModel::SelectMaDT($_SESSION['isLogin']['MaSV'])[0]['MaDT'];
	$aDataTBDT=\ThucTap\Models\SinhVienModel::selectAllThongBaoDT($MaDT);
	$row=array_merge($aDataTB,$aDataTBDT);
}else{
	$row=$aDataTB;
}

?>
	<div class="right">
		<div class="right__content">
			<div class="right__title">Thông Báo Hệ Thống</div>
            <?php if (isset($row)&& !empty($row)){?>
            <div class="right__table">
                <div class="right__tableWrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th >Tiêu Đề</th>
                            <th>Người Gửi</th>
                            <th>Thời Gian Gửi</th>
                            <th>Xem Chi Tiết</th>
                        </tr>
                        </thead>

                        <tbody>
						<?php $i = 1;
						foreach ($row as $key => $value): ?>
                            <tr>
                                <td data-label="STT"><?= $i ?></td>
                                <td data-label="Tiêu Đề"><?= $value[1] ?></td>
                                <td data-label="Người Gửi"><?= handleNguoiGui($value[4]) ?></td>
                                <td data-label="Thời Gian Gửi"><?= $value[6]?></td>
                                <td data-label="Chi Tiết"><a href="<?=\ThucTap\Core\URL::uri('CTThongBao')
                                    .'/?MaTB='.$value[0].'&Type='.$value[7]?>">Chi
                                        Tiết</a></td>
                            </tr>
							<?php $i++;
						endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php }else{
                echo "<h2 style='text-align: center;color:#61ff85'>Bạn Chưa Có Thông Báo Nào Từ Hệ Thống</h2>";
            } ?>
		</div>
	</div>
<?php
require_once 'views/footer.php';

