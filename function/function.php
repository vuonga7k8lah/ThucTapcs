<?php
function isUserLogin()
{
    if (isset($_SESSION['isLogin'])) {
        return TRUE;
    } else {
        \ThucTap\Core\Redirect::to('login');
    }
}
function uploadFile($data)
{
	$allowed = array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf','application/vnd.ms-excel');
	if (in_array(strtolower($data['type']), $allowed)) {
		$NameIMG = $data['name'];
		if (!move_uploaded_file($data['tmp_name'], "./assets/upload/files/" . $data['name'])) {
			$errors[] = "<p class='error'>Server problem</p>";
		}
		// Xoa file da duoc upload va ton tai trong thu muc tam
		if (isset($data['tmp_name']) && is_file($data['tmp_name']) && file_exists($data['tmp_name'])) {
			unlink($data['tmp_name']);
		}
	}
	return $NameIMG;
}
function uploadIMGProfile($data)
{
	$allowed = array('image/jpeg', 'image/jpg', 'image/png', 'images/x-png','image/gif');
	if (in_array(strtolower($data['type']), $allowed)) {
		// Neu co trong dinh dang cho phep, tach lay phan mo rong
		$ext = substr(strrchr($data['name'], '.'), 1);
		$renamed = uniqid(rand(), true) . '.' . "$ext";
		$NameIMG = $renamed;
		if (!move_uploaded_file($data['tmp_name'], "./assets/upload/Profile/" . $renamed)) {
			$errors[] = "<p class='error'>Server problem</p>";
		}
		// Xoa file da duoc upload va ton tai trong thu muc tam
		if (isset($data['tmp_name']) && is_file($data['tmp_name']) && file_exists($data['tmp_name'])) {
			unlink($data['tmp_name']);
		}
	}
	return $NameIMG;
}

function CheckReload(array $aName)
{
	$pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&
		($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' || $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache');
	if ($pageRefreshed == 1) {
		foreach ($aName as $name) {
			unset($_SESSION[$name]);
		}
	} else {
		true;
	}
}