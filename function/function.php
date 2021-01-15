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

function output_file($Source_File, $Download_Name, $time, $mime_type = '')
{
	/*
	$Source_File = path to a file to output
	$Download_Name = filename that the browser will see
	$mime_type = MIME type of the file (Optional)
	*/
	if (!is_readable($Source_File)) die('File not found or inaccessible!');

	$size = filesize($Source_File);
	$Download_Name = rawurldecode($Download_Name);

	/* Figure out the MIME type (if not specified) */
	$known_mime_types = [
		"pdf"  => "application/pdf",
		"csv"  => "application/csv",
		"txt"  => "text/plain",
		"html" => "text/html",
		"htm"  => "text/html",
		"exe"  => "application/octet-stream",
		"zip"  => "application/zip",
		"doc"  => "application/msword",
		"xls"  => "application/vnd.ms-excel",
		"ppt"  => "application/vnd.ms-powerpoint",
		"gif"  => "image/gif",
		"png"  => "image/png",
		"jpeg" => "image/jpg",
		"jpg"  => "image/jpg",
		"php"  => "text/plain"
	];

	if ($mime_type == '') {
		$file_extension = strtolower(substr(strrchr($Source_File, "."), 1));
		if (array_key_exists($file_extension, $known_mime_types)) {
			$mime_type = $known_mime_types[$file_extension];
		} else {
			$mime_type = "application/force-download";
		};
	};

	@ob_end_clean(); //off output buffering to decrease Server usage

// if IE, otherwise Content-Disposition ignored
	if (ini_get('zlib.output_compression'))
		ini_set('zlib.output_compression', 'Off');

	header('Content-Type: ' . $mime_type);
	header('Content-Disposition: attachment; filename="' . $Download_Name . '"');
	header("Content-Transfer-Encoding: binary");
	header('Accept-Ranges: bytes');

	header("Cache-control: private");
	header('Pragma: private');
	header("Expires:" . $time);

// multipart-download and download resuming support
	if (isset($_SERVER['HTTP_RANGE'])) {
		list($a, $range) = explode("=", $_SERVER['HTTP_RANGE'], 2);
		list($range) = explode(",", $range, 2);
		list($range, $range_end) = explode("-", $range);
		$range = intval($range);
		if (!$range_end) {
			$range_end = $size - 1;
		} else {
			$range_end = intval($range_end);
		}

		$new_length = $range_end - $range + 1;
		header("HTTP/1.1 206 Partial Content");
		header("Content-Length: $new_length");
		header("Content-Range: bytes $range-$range_end/$size");
	} else {
		$new_length = $size;
		header("Content-Length: " . $size);
	}

	/* output the file itself */
	$chunksize = 1 * (1024 * 1024); //you may want to change this
	$bytes_send = 0;
	if ($Source_File = fopen($Source_File, 'r')) {
		if (isset($_SERVER['HTTP_RANGE']))
			fseek($Source_File, $range);

		while (!feof($Source_File) &&
			(!connection_aborted()) &&
			($bytes_send < $new_length)
		) {
			$buffer = fread($Source_File, $chunksize);
			print($buffer); //echo($buffer); // is also possible
			flush();
			$bytes_send += strlen($buffer);
		}
		fclose($Source_File);
	} else die('Error - can not open file.');

	die();
}

function the_excerpt($text, $string)
{
	if (empty($string)) {
		$string = 300;
	}
	$sanitized = htmlentities($text, ENT_COMPAT, 'UTF-8');
	if (strlen($sanitized) > $string) {
		$cutString = substr($sanitized, 0, $string);
		return substr($sanitized, 0, strrpos($cutString, ' '));

	} else {
		return $sanitized;
	}

}

function actionTime($time)
{
	return date('d/m/Y', strtotime($time));

}

function handleNguoiGui($key)
{
	if ($key === 'admin') {
		return 'Hệ Thống';
	} else {
		return \ThucTap\Models\GiangVienModel::selectGV($key)['TenGV'];
	}
}

function TenSV($MaSV)
{
	if (strlen($MaSV) === 6) {
		return \ThucTap\Models\GiangVienModel::queryNameSV($MaSV)['TenSV'];
	}
	$aData = explode(" ", $MaSV);
	foreach ($aData as $value) {
		$aName[] = \ThucTap\Models\GiangVienModel::queryNameSV($value)['TenSV'];
	}
	return implode('-', $aName);
}

function returnIdNhomFromMaSVOrMaGV($ma, $type)
{
	switch ($type) {
		case 'SinhVien':
			$aData = \ThucTap\Models\ChatBoxModel::queryMaSV();
			foreach ($aData as $values) {
				if (strlen(strstr($values[1], $ma)) > 0) {
					return $values[0];
				}
			}
			break;
		case 'GiangVien':
			return \ThucTap\Models\ChatBoxModel::queryIdNhom($ma)['idNhom'];
			break;
	}
}

function TenDT($MaDT,$return)
{
	switch ($return){
		case 'TenDT':
			return (\ThucTap\Database\DB::makeConnection()->query("SELECT TenDT from detai where MaDT='".$MaDT."'")
				->fetch_assoc())['TenDT'];
			break;
		case 'SVDK':
			return TenSV((\ThucTap\Database\DB::makeConnection()->query("SELECT SinhVienDK from detai where MaDT='".$MaDT."'")
				->fetch_assoc())['SinhVienDK']);
			break;
	}
}