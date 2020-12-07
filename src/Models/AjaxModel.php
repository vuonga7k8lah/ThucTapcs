<?php


namespace ThucTap\Models;


use ThucTap\Database\DB;

class AjaxModel
{
	public static function isMaSVExist($data)
	{
		return DB::makeConnection()->query("SELECT * FROM sinhvien where MaSV='".$data."'")->num_rows;
	}
	public static function isMaDTExist($data)
	{
		return DB::makeConnection()->query("SELECT * FROM detai where MaDT='".$data."'")->num_rows;
	}
	public static function isMaGVExist($data)
	{
		return DB::makeConnection()->query("SELECT * FROM giangvien where MaGV='".$data."'")->num_rows;
	}
}