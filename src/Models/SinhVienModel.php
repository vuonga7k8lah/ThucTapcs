<?php


namespace ThucTap\Models;


use ThucTap\Database\DB;

class SinhVienModel
{
	public static function querylistDetai()
	{
		return DB::makeConnection()->query("Select * from detai")->fetch_all();
	}

	public static function queryGiangVienAll()
	{
		return DB::makeConnection()->query("Select MaGV,TenGV from giangvien")->fetch_all();
	}

	public static function isExistDetai($MaDT)
	{
		return DB::makeConnection()
			->query("SELECT DISTINCT * From detai dt JOIN svdk svdk on svdk.MaDT=dt.MaDT JOIN gvdk gvdk ON gvdk.MaDT=detai.MaDT WHERE MaDT='" .
				$MaDT . "'")->num_rows;
	}

	public static function updateStatusDetai($data)
	{
		return DB::makeConnection()
			->query("UPDATE detai set Status='" . $data['status'] . "',time_start=null,SinhVienDK='" . $data['MaSV'] .
				"' where MaDT='" .
				$data['MaDT'] .
				"'");
	}

	public static function isMaSVExistSVDK($MaSV)
	{
		return DB::makeConnection()->query("SELECT * FROM svdk where MaSV='" . $MaSV . "'")->num_rows;
	}

	public static function insertSVDK($MaSV, $MaDT)
	{
		$sql = "INSERT INTO `svdk`(`idSVDK`, `MaSV`, `MaDT`) VALUES(null,'" . $MaSV . "','" . $MaDT . "')";
		return DB::makeConnection()->query($sql);
	}

	public static function selectProfileSV($MaSV)
	{
		return DB::makeConnection()
			->query("SELECT DISTINCT * FROM sinhvien sv JOIN lop l ON l.Malop=sv.Malop JOIN khoa k ON k.Makhoa=l.Makhoa where MaSV='" .
				$MaSV . "'")->fetch_assoc();
	}

	public static function updateAnh($data, $MaSV)
	{
		return DB::makeConnection()->query("UPDATE sinhvien set Anh='" . $data["Anh"] . "' where MaSV='" . $MaSV . "'");
	}

	public static function selectAllThongBao($MaSV)
	{
		return DB::makeConnection()->query("SELECT * FROM ThongBao where MaSV='" . $MaSV . "'")->fetch_all();
	}

	public static function selectAllThongBaoDT($MaDT)
	{
		return DB::makeConnection()->query("SELECT * FROM ThongBaoDT where MaDT='" . $MaDT . "'")->fetch_all();
	}

	public static function isSVDKDeTai($MaSV)
	{
		return DB::makeConnection()->query("SELECT * FROM svdk where MaSV='" . $MaSV . "'")->num_rows;
	}

	public static function SelectMaDT($MaSV)
	{
		$sql = DB::makeConnection()->query("SELECT MaDT FROM svdk where MaSV='" . $MaSV . "'");
		return [$sql->fetch_assoc(), $sql->num_rows];
	}

	public static function queryDeTai($MaSV)
	{
		return DB::makeConnection()
			->query("SELECT * FROM detai dt JOIN svdk svdk ON dt.MaDT=svdk.MaDT WHERE svdk.MaSV='" . $MaSV . "'")
			->fetch_assoc();
	}

	public static function queryLop()
	{
		return DB::makeConnection()->query("select * from lop")->fetch_all();
	}

	public static function queryThongBaoWithMaTB($MaTB)
	{
		return DB::makeConnection()->query("SELECT * FROM thongbao where idThongBao=" . $MaTB . "")->fetch_assoc();
	}

	public static function queryThongBaoWithMaTBDT($MaTB)
	{
		return DB::makeConnection()->query("SELECT * FROM thongbaodt where id=" . $MaTB . "")->fetch_assoc();
	}

	public static function insertHuyDT($data)
	{
		return DB::makeConnection()
			->query("INSERT INTO `huydetai`(`id`, `MaDT`, `MaGV`, `MaSV`, `LyDo`, `register_date`) VALUES (null,'" .
				$data['MaDT'] . "','" . $data['MaGV'] . "','" . $data['MaSV'] . "','" . $data['LyDo'] . "',null)");
	}

	public static function isExistDeTaiWithMaDT($MaDT)
	{
		$query = DB::makeConnection()->query("SELECT SinhVienDK FROM detai where MaDT='" . $MaDT .
			"'and Status='Đã DK'");
		return [$query->num_rows, $query->fetch_assoc()];
	}
}