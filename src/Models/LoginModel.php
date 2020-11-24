<?php


namespace ThucTap\Models;


use ThucTap\Database\DB;

class LoginModel
{
    public static function loginWithSV($data)
    {
        $query=DB::makeConnection()->query("SELECT * FROM sinhvien where MaSV='".$data['Username']."' and MatKhau='".$data['Password']."'");
        return [$query->num_rows,$query->fetch_assoc()];
    }
    public static function loginWithGV($data)
    {
        $query=DB::makeConnection()->query("SELECT * FROM giangvien where MaGV='".$data['Username']."' and MatKhau='".$data['Password']."'");
        return [$query->num_rows,$query->fetch_assoc()];
    }
    public static function loginWithadmin($data)
    {
    }
}