<?php


namespace ThucTap\Models;


use ThucTap\Database\DB;

class CountModel
{
	public static function countDeTai($MaGV)
	{
		return DB::makeConnection()->query("Select * from detai where MaGV='" . $MaGV .
			"' and Status='Đã DK'")->num_rows;
	}

	public static function countNhomChat($MaGV)
	{
		return DB::makeConnection()->query("Select * from nhomchat where MaGV='" . $MaGV . "'")
			->num_rows;
	}
	public static function countBaoCao($MaGV)
	{
		return DB::makeConnection()->query("Select * from tiendo where MaGV='" . $MaGV . "'")
			->num_rows;
	}
	public static function countHuyDT($MaGV)
	{
		return DB::makeConnection()->query("Select * from huydetai where MaGV='" . $MaGV . "'")
			->num_rows;
	}
	public static function countSV()
	{
		return DB::makeConnection()->query("Select * from sinhvien")
			->num_rows;
	}
	public static function countGV()
	{
		return DB::makeConnection()->query("Select * from giangvien")
			->num_rows;
	}
	public static function countListDeTai()
	{
		return DB::makeConnection()->query("Select * from detai")
			->num_rows;
	}
	public static function countNhomChatAdmin()
	{
		return DB::makeConnection()->query("Select * from nhomchat")
			->num_rows;
	}
}