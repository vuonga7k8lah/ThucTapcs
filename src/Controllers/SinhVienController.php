<?php


namespace ThucTap\Controllers;


use ThucTap\Core\Redirect;
use ThucTap\Core\Request;
use ThucTap\Core\Session;
use ThucTap\Models\AdminModel;
use ThucTap\Models\GiangVienModel;
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

	public function actionListDeTaiSV()
	{
		$MaGV = $_POST['MaGV'];
		Session::set('aDataDeTai', [$MaGV, GiangVienModel::selectNameGV($MaGV)
		['TenGV']]);
		Redirect::to('listDetai');
	}

	public function downloadFile()
	{
		$name = $_GET['name'];
		$time = $_GET['time'];
		$filePath = './assets/upload/files/' . $name;
		output_file($filePath, $name, $time);
		Redirect::to('listDetai');
	}

	public function registerDeTai()
	{
		$data['MaDT'] = $_GET['id'];
		$data['status'] = 'Đã DK';
		$data['MaSV'] = $_SESSION['isLogin']['MaSV'];

		if (SinhVienModel::updateStatusDetai($data) && SinhVienModel::insertSVDK($data)) {
			?>
            <script>
                var x = confirm('Đăng Ký Của Bạn Đã Được Gửi Tới Hệ Thống ');
                if (x == true) {
                    window.location = "http://127.0.0.1/ThucTap/TTDeTai";
                }
            </script>
			<?php
		}
	}

	public function CTThongBao()
	{
		require_once 'views/SVviews/ThongBao/CTThongBao.php';
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

	public function HuyDeTaiView()
	{
	    require_once 'views/SVviews/HuyDeTai/HuyDeTai.php';
	}
	public function HuyDeTai()
	{
        $data=$_POST;
        if (SinhVienModel::insertHuyDT($data)){
	        ?>
            <script>
                var x = confirm('Yêu Cầu Của Bạn Đã Được Gửi Tới Hệ Thống ');
                if (x == true) {
                    window.location = "http://127.0.0.1/ThucTap/dashboardSV";
                }
            </script>
	        <?php
        }
	}
}