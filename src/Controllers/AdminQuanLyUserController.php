<?php


namespace ThucTap\Controllers;


use ThucTap\Core\Redirect;
use ThucTap\Core\Request;
use ThucTap\Core\Session;
use ThucTap\Models\AdminModel;
use ThucTap\Models\GiangVienModel;
use ThucTap\Models\SinhVienModel;

class AdminQuanLyUserController
{
	public function addUserSVView()
	{
		require_once 'views/Admin/QuanLyTV/SV/addUserView.php';
	}

	public function deleteUserSV()
	{
		$MaSV = $_GET['id'];
		if (AdminModel::deleteSV($MaSV)) {
			Session::set('SuccessDeleteSV', 'Tài Khoản Sinh Viên Đã Được Xóa');
			Redirect::to('listUserSV');
		}
	}

	public function editUserSVView()
	{
		require_once 'views/Admin/QuanLyTV/SV/editUserSV.php';
	}

	public function editUserSV()
	{
		$data = $_POST;
		if (AdminModel::updateUserSV($data)) {
			Session::set('updateUserSuccess', 'Tài Khoản Sinh Viên Đã Được Cập Nhật');
			Redirect::to('listUserSV');
		}
	}

	public function addUserSV()
	{
		$data = $_POST;
		if (AdminModel::addUserSV($data)) {
			Session::set('AddUserSuccess', 'Tài Khoản Sinh Viên Đã Được Tạo');
			Redirect::to('listUserSV');
		}
	}

	public function listDeTaiView()
	{
		require_once 'views/Admin/QLDeTai/listDeTaiView.php';
	}

	public function actionListDeTai()
	{
		$MaGV = $_POST['MaGV'];
		Session::set('aDataDeTai', [AdminModel::selectDeTaiWithMaGV($MaGV), GiangVienModel::selectNameGV($MaGV)
		['TenGV']]);
		Redirect::to('listDeTai');
	}

	public function addDeTaiView()
	{
		require_once 'views/Admin/QLDeTai/addDeTaiView.php';
	}

	public function addDeTai()
	{
		$data = $_POST;
		$data['DinhKem'] = uploadFile($_FILES['DinhKem']);
		if (AdminModel::insertDeTai($data)) {
			Session::set('successInsertDataDeTai', 'Đề Tài Đăng Ký Thành Công');
			Redirect::to('listDeTai');
		}
	}

	public function editDeTaiView()
	{
		require_once 'views/Admin/QLDeTai/editDeTaiView.php';
	}

	public function addUserGVView()
	{
		require_once 'views/Admin/QuanLyTV/GV/addUserGV.php';
	}

	public function addUserGV()
	{

	}

	public function editUserGVView()
	{
		require_once 'views/Admin/QuanLyTV/GV/editUserGV.php';
	}

	public function editUserGV()
	{

	}

	public function deleteUserGV()
	{

	}
}