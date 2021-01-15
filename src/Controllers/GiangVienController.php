<?php


namespace ThucTap\Controllers;


use ThucTap\Core\Redirect;
use ThucTap\Core\Session;
use ThucTap\Models\GiangVienModel;

class GiangVienController
{
	public function dashboardGV()
	{
		require_once 'views/GVview/dashboard/dashboard.php';
	}

	public function SVDK()
	{
		require_once "views/GVview/QLThongBao/SVDKView.php";
	}

	public function profileGV()
	{
		require_once "views/GVview/Profile/GVProfileView.php";
	}

	public function guiTB()
	{
		$MaSV = $_GET['MaSV'];
		require_once 'views/GVview/QLThongBao/addTB.php';
	}

	public function guiTBView()
	{
		require_once 'views/GVview/QLThongBao/addTB.php';
	}

	public function guiActionTB()
	{
		$data = $_POST;
		if (!empty($_FILES['DinhKem']['name'])) {
			$data['DinhKem'] = uploadFile($_FILES['DinhKem']);
		} else {
			$data['DinhKem'] = "";
		}
		if (GiangVienModel::insertThongBaoDT($data)) {
			Session::set('successTBDT', 'Thông Báo Đã ĐC Gửi');
			Redirect::to('SVDK');
		}
	}

	public function listHuyDK()
	{
		require_once "views/GVview/QLDK/QLDKView.php";
	}

	public function listBaoCaoGV()
	{
		require_once "views/GVview/QLBaoCao/viewBaoCao.php";
	}
}