<?php


namespace ThucTap\Models;


use ThucTap\Database\DB;

class ChatBoxModel
{
	public static function saveData($data)
	{
		$sql = "INSERT INTO messages(`id_msg`, `body`, `user_from`, `date_sent`, `idNhom`) VALUES (null ,'" . $data['NoiDung'] . "','" .
			$data['Name']
			. "',null,'" . $data['idNhom'] . "' )";
		return DB::makeConnection()->query($sql);
	}

	public static function loadData($idNhom)
	{
		$sql = DB::makeConnection()->query("SELECT * FROM messages where idNhom='" . $idNhom . "' ORDER BY id_msg ASC");
		return [$sql->num_rows, $sql->fetch_all()];
	}
	public static function loadDataWithIdNhom($idNhom)
	{
		return DB::makeConnection()->query("SELECT * FROM nhomchat where idNhom='" . $idNhom . "'")->fetch_assoc();
	}
	public static function addNhom($data)
	{
		return DB::makeConnection()
			->query("INSERT INTO `nhomchat`(`idNhom`, `TenNhom`, `MaGV`, `ThanhVien`, `date_time`) VALUES (null,'" .
				$data['TenNhom'] . "','" . $data['MaGV'] . "','" . $data['MaSV'] . "',null)");
	}

	public static function queryData()
	{
		return DB::makeConnection()->query("SELECT * FROM nhomchat")->fetch_all();
	}

	public static function queryMaSV()
	{
		return DB::makeConnection()->query("SELECT idNhom,ThanhVien FROM nhomchat ")->fetch_all();
	}
	public static function queryIdNhom($MaGV)
	{
		return DB::makeConnection()->query("SELECT idNhom FROM nhomchat where MaGV='".$MaGV."'")->fetch_assoc();
	}
}