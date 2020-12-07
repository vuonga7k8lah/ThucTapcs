<?php


namespace ThucTap\Controllers;


class AdminController
{
	public function loadView()
	{
		require_once 'views/Admin/dashboard/dashboard.php';
	}

	public function listUserSV()
	{
		require_once 'views/Admin/QuanLyTV/SV/listUserSV.php';
	}
	public function listUserGV()
	{
		require_once 'views/Admin/QuanLyTV/GV/listUserGV.php';
	}
}