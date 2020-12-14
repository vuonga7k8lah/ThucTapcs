<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$aDataGV = \ThucTap\Models\GiangVienModel::queryGV();
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Danh Sách Đề Tài</div>
            <div class="right">
                <div class="right__content">
                    <div style="color: #ff27aa"><?php if (isset($_SESSION['successInsertDataDeTai'])) {
							echo $_SESSION['successInsertDataDeTai'];
						} ?></div>
                    <div class="right__formWrapper">
                        <form action="<?= \ThucTap\Core\URL::uri('listDetaisv') ?>" method="post"
                              enctype="multipart/form-data">
                            <div class="right__inputWrapper">
                                <label for="p_category">Chọn Giảng Viên Hướng Dẫn</label>
                                <select name="MaGV">
                                    <option disabled selected>Chọn Giảng Viên</option>
									<?php foreach ($aDataGV as $value) : ?>
                                        <option value="<?= $value[0] ?>"><?= $value[2] ?></option>
									<?php endforeach; ?>
                                </select>
                            </div>
                            <button class="btn" type="submit">Tìm Kiếm</button>
                        </form>
                    </div>
					<?php if (isset($_SESSION['aDataDeTai']) && !empty($_SESSION['aDataDeTai'])): $i = 1; ?>
                        <p class="right__desc"><h3>Danh Sách Đề Tài Do Giảng Viên <?= $_SESSION['aDataDeTai'][1] ?>
                            Hướng
                            Dẫn </h3></p>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                    <tr>
                                        <th data-label="STT">STT</th>
                                        <th data-label="Tên Đề Tài">Tên Đề Tài</th>
                                        <th data-label="Giảng Viên Hướng Dẫn">Giảng Viên Hướng Dẫn</th>
                                        <th data-label="Đính Kèm">Đính Kèm</th>
                                        <th data-label="Mô Tả">Mô Tả</th>
                                        <th data-label="Trạng Thái">Trạng Thái</th>
                                        <th data-label="Ngày Tạo">Ngày Tạo</th>
                                        <th data-label="Đăng Ký">Đăng Ký</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php foreach (\ThucTap\Models\AdminModel::selectDeTaiWithMaGV($_SESSION['aDataDeTai'][0]) as $value): ?>
                                        <tr>
                                            <td data-label="STT"><?= $i ?></td>
                                            <td data-label="Tên Đề Tài"><?= $value[1] ?></td>
                                            <td data-label="Giảng Viên Hướng Dẫn"><?= $_SESSION['aDataDeTai'][1] ?></td>
                                            <td data-label="Đính Kèm"><a href="<?= \ThucTap\Core\URL::uri('downloadFile/') . '?name='
												. $value[5] . '&time=' . $value[3] ?>"><?=
													$value[5]
													?></a></td>
                                            <td data-label="Mô Tả"><?= the_excerpt($value[6]) ?></td>
                                            <td data-label="Trạng Thái"><?= $value[4]==='Đã DK' ? $value[4] : 'Đăng Ký' ?></td>
                                            <td data-label="Ngày Tạo"><?= $value[3] ?></td>
                                            <td data-label="Đăng Ký" class="right__iconTable"><?php if(empty($value[4])){ echo "<a href=\"<?= \ThucTap\Core\URL::uri('registerDeTai') . '/?id=' . $value[0] ?>\"><img src=\"./assets/admin/assets/icon-edit.svg\" alt=\"\"></a>";}else{echo 'Đã Đăng Ký';}?></td>
                                        </tr>
										<?php $i++;
									endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
					<?php endif; ?>
                </div>
            </div>

        </div>
    </div>
<?php
CheckReload(['aDataDeTai']);
require_once 'views/footer.php';
