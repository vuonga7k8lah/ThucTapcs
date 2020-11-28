<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$MaSV = $_SESSION['isLogin']['MaSV'];
$data = \ThucTap\Models\SinhVienModel::selectProfileSV($MaSV);

?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Thông Tin Sinh Viên</div>
            <div class="container emp-profile">
                <form method="post" action="<?= \ThucTap\Core\URL::uri('editProfile') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img src="./assets/upload/Profile/<?= (isset($data['Anh']) && !empty($data['Anh']))
	                                ? $data['Anh'] : 'avt.jpg' ?>"
                                     alt="" style="width: 200px;height: 150px"/>
                                <div class="file btn btn-lg btn-primary">
                                    Change Photo
                                    <input type="file" name="file" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                <h4>
									<?= $data['TenSV'] ?>
                                </h4>
                                <h6>
                                    Mã Sinh Viên: <?= $data['MaSV'] ?>
                                </h6>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                           role="tab" aria-controls="home" aria-selected="true">About</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="profile-edit-btn" name="File" value="Edit Profile"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Họ Tên</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?= $data['TenSV'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Quê Quán</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?= $data['Diachi'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?= $data['Email'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?= $data['SDT'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tên Lớp</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?= $data['Tenlop'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tên Khoa</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?= $data['Tenkhoa'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
require_once 'views/footer.php';
