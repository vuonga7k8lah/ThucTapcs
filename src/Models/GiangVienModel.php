<?php


namespace ThucTap\Models;


use ThucTap\Database\DB;

class GiangVienModel
{
	public static function queryGV()
	{
		return DB::makeConnection()->query("SELECT * FROM giangvien")->fetch_all();
	}

	public static function selectNameGV($MaGV)
	{
		return DB::makeConnection()->query("SELECT TenGV FROM giangvien where MaGV='" . $MaGV . "'")->fetch_assoc();
	}

	public static function queryTenKhoa()
	{
		return DB::makeConnection()->query("SELECT * FROM khoa")->fetch_all();
	}
}