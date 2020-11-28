<?php
/**
 * @var $aRoute \ThucTap\Core\Route
 */
$aRoute->get('login','ThucTap\Controllers\LoginController@loadView');
$aRoute->post('login','ThucTap\Controllers\LoginController@actionLogin');

//Logout
$aRoute->get('logoutSV','ThucTap\Controllers\LogoutController@logoutSV');
//sinh vien
$aRoute->get('dashboardSV','ThucTap\Controllers\SinhVienController@loadView');
//sinh vien đề tài
$aRoute->get('listDetai','ThucTap\Controllers\SinhVienController@listDetaiView');
$aRoute->get('addDeTai','ThucTap\Controllers\SinhVienController@addDetaiView');
$aRoute->post('addDeTai','ThucTap\Controllers\SinhVienController@addDetai');
// profile sinh viên
$aRoute->get('profileView','ThucTap\Controllers\SinhVienController@profileView');
$aRoute->post('editProfile','ThucTap\Controllers\SinhVienController@editProfile');
//notification-sinh vien
$aRoute->get('listThongBao','ThucTap\Controllers\SinhVienController@listThongBaoView');
//Thông Tin Đề Tài Đã Chọn
$aRoute->get('TTDeTai','ThucTap\Controllers\SinhVienController@TTDeTai');