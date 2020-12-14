<?php


namespace ThucTap\Models;


use ThucTap\Database\DB;

class GiangVienModel
{
	public static function queryGV()
	{
		return DB::makeConnection()->query("SELECT * FROM giangvien")->fetch_all();
	}

	public static function selectGV($MaGV)
	{
		return DB::makeConnection()->query("SELECT * FROM giangvien where MaGV='" . $MaGV . "'")->fetch_assoc();
	}

	public static function selectNameGV($MaGV)
	{
		return DB::makeConnection()->query("SELECT TenGV FROM giangvien where MaGV='" . $MaGV . "'")->fetch_assoc();
	}

	public static function queryTenKhoa()
	{
		return DB::makeConnection()->query("SELECT * FROM khoa")->fetch_all();
	}

	public static function deleteUserGV($MaGV)
	{
		return DB::makeConnection()->query("DELETE FROM giangvien where MaGV='" . $MaGV . "'");
	}

	public static function svdkDeTai($data)
	{
		return DB::makeConnection()->query("SELECT * FROM detai where MaGV='" . $data['MaGV'] . "' and Status='" .
			$data['Status'] . "'")->fetch_all();
	}

	public static function queryNameSV($MaSV)
	{
		return DB::makeConnection()->query("SELECT TenSV FROM sinhvien where MaSV='" . $MaSV . "'")->fetch_assoc();
	}

	public static function queryTenKhoaGV($MaKhoa)
	{
		return DB::makeConnection()->query("SELECT TenKhoa FROM khoa where MaKhoa='".$MaKhoa."'")->fetch_assoc();
	}
	public static function queryMaSVDK($MaGV)
	{
		return DB::makeConnection()->query("SELECT SinhVienDK FROM detai where MaGV='".$MaGV."' and Status='ĐÃ DK'")->fetch_all();
	}
}