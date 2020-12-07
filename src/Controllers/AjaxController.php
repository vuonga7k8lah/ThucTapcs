<?php


namespace ThucTap\Controllers;


use ThucTap\Models\AjaxModel;

class AjaxController
{
	public function checkMaSV()
	{
		if (AjaxModel::isMaSVExist($_POST['MaSV'])<1) {
			$aResponse = [
				"isValid" => "yes",
				"msg"     => "Mã Sinh Viên Này Chưa Tồn Tại"
			];
		} else {
			$aResponse = [
				"isValid" => "no",
				"msg"     => "Mã Sinh Viên Này Đã Tồn Tại"
			];
		}

		echo json_encode($aResponse);
	}
	public function checkMaDT()
	{
		if (AjaxModel::isMaDTExist($_POST['MaDT'])<1) {
			$aResponse = [
				"isValid" => "yes",
				"msg"     => "Mã Đề Tài Này Hợp Lệ"
			];
		} else {
			$aResponse = [
				"isValid" => "no",
				"msg"     => "Mã Đề Tài Này Đã Tồn Tại"
			];
		}

		echo json_encode($aResponse);
	}
	public function checkMaGV()
	{
		if (AjaxModel::isMaGVExist($_POST['MaGV'])<1) {
			$aResponse = [
				"isValid" => "yes",
				"msg"     => "Mã Giảng Viên Này Hợp Lệ"
			];
		} else {
			$aResponse = [
				"isValid" => "no",
				"msg"     => "Mã Giảng Viên Này Đã Tồn Tại"
			];
		}

		echo json_encode($aResponse);
	}
}