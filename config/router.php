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
// ADmin-quản lý
$aRoute->get('dashboardAdmin','ThucTap\Controllers\AdminController@loadView');
$aRoute->get('listUserSV','ThucTap\Controllers\AdminController@listUserSV');
$aRoute->get('listUserGV','ThucTap\Controllers\AdminController@listUserGV');
//add-delete-edit sv
$aRoute->get('addUserSV','ThucTap\Controllers\AdminQuanLyUserController@addUserSVView');
$aRoute->get('deleteUserSV/','ThucTap\Controllers\AdminQuanLyUserController@deleteUserSV');
$aRoute->get('editUserSV/','ThucTap\Controllers\AdminQuanLyUserController@editUserSVView');
$aRoute->post('editUserSV','ThucTap\Controllers\AdminQuanLyUserController@editUserSV');
$aRoute->post('addUserSV','ThucTap\Controllers\AdminQuanLyUserController@addUserSV');
//add-delete-edit GV
$aRoute->get('addUserGV','ThucTap\Controllers\AdminQuanLyUserController@addUserGVView');
$aRoute->get('deleteUserGV/','ThucTap\Controllers\AdminQuanLyUserController@deleteUserGV');
$aRoute->get('editUserGV/','ThucTap\Controllers\AdminQuanLyUserController@editUserGVView');
$aRoute->post('editUserGV','ThucTap\Controllers\AdminQuanLyUserController@editUserGV');
$aRoute->post('addUserGV','ThucTap\Controllers\AdminQuanLyUserController@addUserGV');
//ajax
$aRoute->post('checkMaSV','ThucTap\Controllers\AjaxController@checkMaSV');
$aRoute->post('checkMaDT','ThucTap\Controllers\AjaxController@checkMaDT');
$aRoute->post('checkMaGV','ThucTap\Controllers\AjaxController@checkMaGV');
//Quản Lý Đề Tài
$aRoute->get('listDeTai','ThucTap\Controllers\AdminQuanLyUserController@listDeTaiView');
$aRoute->post('listDeTai','ThucTap\Controllers\AdminQuanLyUserController@actionListDeTai');
$aRoute->get('addDeTai','ThucTap\Controllers\AdminQuanLyUserController@addDeTaiView');
$aRoute->get('editDeTai/','ThucTap\Controllers\AdminQuanLyUserController@editDeTaiView');
$aRoute->post('addDeTai','ThucTap\Controllers\AdminQuanLyUserController@addDeTai');