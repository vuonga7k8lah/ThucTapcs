<?php


namespace ThucTap\Controllers;


use ThucTap\Core\Redirect;
use ThucTap\Core\Session;
use ThucTap\Database\DB;
use ThucTap\Models\LoginModel;

class LoginController
{
    public function loadView()
    {
        require_once 'views/Login/loginView.php';
    }

    public function actionLogin()
    {
        $data = $_POST;
        $data['Username']=DB::makeConnection()->real_escape_string(trim($_POST['Username']));
        $data['Password']=DB::makeConnection()->real_escape_string(trim($_POST['Password']));
        switch ($data['access']) {
            case 'sinhvien':
                if(LoginModel::loginWithSV($data)[0]>0){
                    Session::destroy('errorsSVLogin');
                    Session::set('isLogin',LoginModel::loginWithSV($data)[1]);
                    Redirect::to('listThongBao');
                }else{
                    Session::set('errorsSVLogin','Bạn Hãy Xem Lại Tài Khoản và Mật Khẩu');
                    Redirect::to('login');
                }
                break;
            case 'giangvien':
                if(LoginModel::loginWithGV($data)[0]>0){
                    Session::destroy('errorsGVLogin');
	                Session::set('isLogin',LoginModel::loginWithGV($data)[1]);
	                Redirect::to('dashboardGV');
                }else{
                    Session::set('errorsGVLogin','Bạn Hãy Xem Lại Tài Khoản và Mật Khẩu');
                    Redirect::to('login');
                }
                break;
            case 'admin':
            	if($_POST['Username']==='admin'&&$_POST['Password']==='admin'){
		            Session::destroy('errorsAdminLogin');
		            Session::set('isLogin',['MaQL'=>1,'TenAdmin'=>'Hello Admin']);
		            Redirect::to('dashboardAdmin');
	            }else{
		            Session::set('errorsAdminLogin','Bạn Hãy Xem Lại Tài Khoản và Mật Khẩu');
		            Redirect::to('login');
	            }
                break;
        }
    }
}