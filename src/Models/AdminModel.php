<?php


namespace ThucTap\Models;


use ThucTap\Database\DB;

class AdminModel
{
	public static function selectAllSV()
	{
		return DB::makeConnection()->query("SELECT * FROM sinhvien")->fetch_all();
	}

	public static function selectSV($id)
	{
		return DB::makeConnection()->query("SELECT * FROM sinhvien where MaSV='" . $id . "'")->fetch_assoc();
	}

	public static function selectAllGV()
	{
		return DB::makeConnection()->query("SELECT * FROM giangvien")->fetch_all();
	}

	public static function addUserSV($data)
	{
		$sql = "INSERT INTO `sinhvien`(`MaSV`, `Malop`, `TenSV`, `Ngaysinh`, `Dantoc`, `Gioitinh`, `Matkhau`, `Diachi`, `Email`, `SDT`,`Anh`) VALUES 
		('" . $data['MaSV'] . "','" . $data['MaLop'] . "','" . $data['TenSV'] . "','" . $data['NgaySinh'] . "','" .
			$data['DanToc'] . "','" . $data['GioTinh'] . "','" . $data['NgaySinh'] . "','" . $data['DiaChi'] . "','"
			. $data['Email'] . "','" . $data['SDT'] . "','')";
		return DB::makeConnection()->query($sql);
	}

	public static function deleteSV($MaSV)
	{
		return DB::makeConnection()->query("DELETE FROM sinhvien where MaSV='" . $MaSV . "'");
	}

	public static function updateUserSV($data)
	{
		return DB::makeConnection()
			->query("UPDATE `sinhvien` SET `Malop`='" . $data['MaLop'] . "',`TenSV`='"
				. $data['TenSV'] . "',`Ngaysinh`='" . $data['NgaySinh'] . "',`Dantoc`='" . $data['DanToc'] .
				"',`Gioitinh`='" . $data['GioTinh'] . "',`Matkhau`='" . $data['MatKhau'] . "',`Diachi`='" .
				$data['DiaChi'] . "',`Email`='" . $data['Email'] . "',`SDT`='" . $data['SDT'] . "' WHERE MaSV='" .
				$data['MaSV'] . "'");
	}

	public static function selectDeTaiWithMaGV($MaGV)
	{
		return DB::makeConnection()->query("SELECT * FROM detai where MaGV='" . $MaGV . "'")->fetch_all();
	}

	public static function insertDeTai($data)
	{
		return DB::makeConnection()
			->query("INSERT INTO `detai`(`MaDT`, `TenDT`, `MaGV`, `ThoigianDK`, `Status`, `DinhKem`, `MoTa`) VALUES ('" .
				$data['MaDT'] . "','" . $data['TenDT'] . "','" . $data['MaGV'] . "',null,'','" . $data['DinhKem'] .
				"','" . $data['MoTa'] . "')");
	}

	public static function selectDeTaiWithMaDT($MaDT)
	{
		return DB::makeConnection()->query("select * from detai where MaDT='".$MaDT."'")->fetch_assoc();
	}
}