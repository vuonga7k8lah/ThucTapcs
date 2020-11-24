<?php


namespace ThucTap\Controllers;


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
}