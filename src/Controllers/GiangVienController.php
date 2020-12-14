<?php


namespace ThucTap\Controllers;


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

	}
}