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
		return DB::makeConnection()->query("SELECT TenKhoa FROM khoa where MaKhoa='" . $MaKhoa . "'")->fetch_assoc();
	}

	public static function queryMaSVDK($MaGV)
	{
		return DB::makeConnection()->query("SELECT SinhVienDK FROM detai where MaGV='" . $MaGV . "' and Status='ĐÃ DK'")
			->fetch_all();
	}

	public static function MaDTDK($MaGV)
	{
		return DB::makeConnection()->query("SELECT MaDT,SinhVienDK FROM detai where MaGV='" . $MaGV .
			"' and Status='ĐÃ DK'")->fetch_all();
	}

	public static function insertThongBaoDT($data)
	{
		$sql
			= "INSERT INTO `thongbaodt`(`id`, `TieuDe`, `NoiDung`, `DinhKem`, `IdNguoiGui`, `MaDT`, `date_time`,`LoaiTB`) VALUES (null,'" .
			$data['TieuDe'] . "','" . $data['MoTa'] . "','" . $data['DinhKem'] . "','" . $data['idNguoiGui'] . "','" .
			$data['MaDT'] . "',null,'DT')";
		return DB::makeConnection()->query($sql);
	}

	public static function cancelDeTai($MaGV)
	{
		return DB::makeConnection()->query("SELECT dt.TenDT,dt.SinhVienDK,h.MaSV,h.LyDo,h.register_date FROM huydetai h JOIN detai dt on dt.MaDT=h.MaDT WHERE h.MaGV='".$MaGV."'")->fetch_all();
	}
}