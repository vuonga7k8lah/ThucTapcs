<?php


namespace ThucTap\Controllers;


use ThucTap\Core\Redirect;
use ThucTap\Core\Request;
use ThucTap\Core\Session;
use ThucTap\Core\URL;
use ThucTap\Models\LoginModel;
use ThucTap\Models\QRCodeModel;
use Vectorface\GoogleAuthenticator;

class QRCodeController
{
	private $lib;
	private $secret;
	private $data = '';

	public function __construct()
	{
		$this->lib = new GoogleAuthenticator();
		$this->secret = '5QAJ4SDF22A3JH2G';
	}

	public function qrcode()
	{
		$qrcode = $this->secret;
		if (isset($_GET['id'])) {
			$data['id'] = $_GET['id'];
		}
		if (isset($_GET['data'])) {
			$data['data'] = $_GET['data'];
		}
		switch ($_GET['action']) {
			case 'admin':
				$enable = QRCodeModel::isEnable2NFadmin();
				break;
			case 'giangvien':
				$enable = QRCodeModel::isEnable2NFGV($data['id']);
				break;
			case 'sinhvien':
				$enable = QRCodeModel::isEnable2NFSV($data['id']);
				break;
		}
		$data['action'] = $_GET['action'];
		$data['name'] = $_GET['name'];
		$url = $this->getQRCodeGoogleUrl($data['name']);
		require_once 'views/QRcode.php';
	}

	public function getQRCodeGoogleUrl($data)
	{
		$qrCodeUrl = $this->lib->getQRCodeUrl($data, $this->secret);
		return $qrCodeUrl;
	}

	public function actionQRCode()
	{
		$qrCode = $_POST['otp'];
		$secret = $_POST['secret'];
		$action = $_POST['action'];
		$checkResult = $this->lib->verifyCode($secret, $qrCode, 0);
		if ($checkResult) {
			switch ($action) {
				case 'admin':
					QRCodeModel::updateEnable2NFadmin();
					Session::set('isLogin', ['MaQL' => 1, 'TenAdmin' => 'Hello Admin']);
					Redirect::to('dashboardAdmin');
					break;
				case 'giangvien':
					QRCodeModel::updateEnable2NFGV($_POST['id']);
					$data = json_decode(base64_decode($_POST['data']), true);
					Session::set('isLogin', LoginModel::loginWithGV($data)[1]);
					Redirect::to('dashboardGV');
					break;
				case 'sinhvien':
					QRCodeModel::updateEnable2NFSV($_POST['id']);
					$data = json_decode(base64_decode($_POST['data']), true);
					Session::set('isLogin',LoginModel::loginWithSV($data)[1]);
					Redirect::to('listThongBao');
					break;
			}
		} else {
			switch ($action) {
				case 'admin':
					?>
                    <script>
                        let x = confirm('Hãy Nhập Lại Mã QRcode');
                        if (x === true) {
                            window.location = "/ThucTap/qrcode/?name=admin";
                        }
                    </script>
					<?php
					break;
				case 'giangvien':
					?>
                    <script>
                        let x = confirm('Hãy Nhập Lại Mã QRcode');
                        if (x === true) {
                            window.location = '<?=$_SERVER['HTTP_REFERER'] ?>';
                        }
                    </script>
					<?php
					break;
				case 'sinhvien':
					?>
                    <script>
                        let x = confirm('Hãy Nhập Lại Mã QRcode ');
                        if (x === true) {
                            window.location = '<?=$_SERVER['HTTP_REFERER'] ?>';
                        }
                    </script>
					<?php
					break;
			}
		}
	}

	public function getCode()
	{
		return $this->lib->getCode($this->secret);
	}
}