<?php


namespace ThucTap\Models;


use ThucTap\Database\DB;

class QRCodeModel
{
	public static function updateEnable2NFadmin()
	{
		return DB::makeConnection()->query("UPDATE `admin` SET `2nf`='true' WHERE `id`=1");
	}

	public static function isEnable2NFadmin()
	{
		if (DB::makeConnection()->query("SELECT * FROM admin where `2nf`='true'")->num_rows > 0) {
			return true;
		} else {
			return false;
		}
	}

	public static function updateEnable2NFGV($id)
	{
		return DB::makeConnection()->query("UPDATE `giangvien` SET `2nf`='true' WHERE `MaGV`='" . $id . "'");
	}

	public static function isEnable2NFGV($id)
	{
		if (DB::makeConnection()->query("SELECT * FROM giangvien where `2nf`='true' and `MaGV`='" . $id .
				"'")->num_rows > 0) {
			return true;
		} else {
			return false;
		}
	}
	public static function updateEnable2NFSV($id)
	{
		return DB::makeConnection()->query("UPDATE `sinhvien` SET `2nf`='true' WHERE `MaSV`='" . $id . "'");
	}

	public static function isEnable2NFSV($id)
	{
		if (DB::makeConnection()->query("SELECT * FROM sinhvien where `2nf`='true' and `MaSV`='" . $id .
				"'")->num_rows > 0) {
			return true;
		} else {
			return false;
		}
	}
}