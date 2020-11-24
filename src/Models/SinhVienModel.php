<?php


namespace ThucTap\Models;


use ThucTap\Database\DB;

class SinhVienModel
{
	public static function querylistDetai()
	{
		return DB::makeConnection()->query("Select * from detai")->fetch_all();
	}

	public static function isExistDetai($MaDT)
	{
		return DB::makeConnection()
			->query("SELECT DISTINCT * From detai dt JOIN svdk svdk on svdk.MaDT=dt.MaDT JOIN gvdk gvdk ON gvdk.MaDT=detai.MaDT WHERE MaDT='" .
				$MaDT . "'")->num_rows;
	}
}