<?php


namespace ThucTap\Controllers;


use ThucTap\Core\Redirect;
use ThucTap\Models\SinhVienModel;

class SinhVienController
{
	public function loadView()
	{
		require_once 'views/SVviews/dashboard/dashboard.php';
	}

	public function listDetaiView()
	{
		require_once 'views/SVviews/RegisterDeTai/listDetai.php';
	}

	public function addDetaiView()
	{
		require_once 'views/SVviews/RegisterDeTai/addDeTai.php';
	}

	public function addDetai()
	{
		$data = $_POST;
		$data['TaiLieu'] = uploadFile($_FILES['TaiLieu']);
		if (SinhVienModel::insertTaiLieuDX($data)) {
			?>
            <script>
                var x = confirm('Yêu Cầu Của Bạn Đã Được Gửi Đến Giảng Viên Hãy Chờ Phê Duyệt');
                if (x == true) {
                    window.location = "http://127.0.0.1/ThucTap/listDetai";
                }
            </script>
			<?php
		}
	}

	public function profileView()
	{
		require_once 'views/SVviews/Profile/svProfileView.php';
	}

	public function editProfile()
	{
		$data['Anh'] = uploadIMGProfile($_FILES['file']);
		if (SinhVienModel::updateAnh($data, $_SESSION['isLogin']['MaSV'])) {
			Redirect::to('profileView');
		}
	}

	public function listThongBaoView()
	{
		require_once 'views/SVviews/ThongBao/listThongBao.php';
	}

	public function TTDeTai()
	{
    require_once 'views/SVviews/TTDeTai/TTDeTaiView.php';
	}
}