<?php
/**
 * @var $aRoute \ThucTap\Core\Route
 */
$aRoute->get('login','ThucTap\Controllers\LoginController@loadView');
$aRoute->get('','ThucTap\Controllers\LoginController@loadView');
$aRoute->post('login','ThucTap\Controllers\LoginController@actionLogin');

//Logout
$aRoute->get('logoutSV','ThucTap\Controllers\LogoutController@logoutSV');
//sinh vien
$aRoute->get('dashboardSV','ThucTap\Controllers\SinhVienController@loadView');
//sinh vien đề tài
$aRoute->get('listDetai','ThucTap\Controllers\SinhVienController@listDetaiView');
$aRoute->post('listDetaisv','ThucTap\Controllers\SinhVienController@actionListDeTaiSV');
$aRoute->get('addDeTai','ThucTap\Controllers\SinhVienController@addDetaiView');
$aRoute->get('registerDeTai/','ThucTap\Controllers\SinhVienController@registerDeTai');
$aRoute->get('downloadFile/','ThucTap\Controllers\SinhVienController@downloadFile');
$aRoute->post('addDeTai','ThucTap\Controllers\SinhVienController@addDetai');
// profile sinh viên
$aRoute->get('profileView','ThucTap\Controllers\SinhVienController@profileView');
$aRoute->post('editProfile','ThucTap\Controllers\SinhVienController@editProfile');
//notification-sinh vien
$aRoute->get('listThongBao','ThucTap\Controllers\SinhVienController@listThongBaoView');
$aRoute->get('CTThongBao/','ThucTap\Controllers\SinhVienController@CTThongBao');
//Thông Tin Đề Tài Đã Chọn
$aRoute->get('TTDeTai','ThucTap\Controllers\SinhVienController@TTDeTai');
//Hủy Đề Tài
$aRoute->get('HuyDeTai','ThucTap\Controllers\SinhVienController@HuyDeTaiView');
$aRoute->post('HuyDeTai','ThucTap\Controllers\SinhVienController@HuyDeTai');
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
//Giảng Viên
$aRoute->get('dashboardGV','ThucTap\Controllers\GiangVienController@dashboardGV');
$aRoute->get('dashboardGV','ThucTap\Controllers\GiangVienController@dashboardGV');
$aRoute->get('SVDK','ThucTap\Controllers\GiangVienController@SVDK');
//thong tin cai nhan
$aRoute->get('profileGV','ThucTap\Controllers\GiangVienController@profileGV');
//gửi Thông Báo
$aRoute->get('guiTB/','ThucTap\Controllers\GiangVienController@guiTB');
$aRoute->get('guiTB','ThucTap\Controllers\GiangVienController@guiTBView');
$aRoute->post('guiTB','ThucTap\Controllers\GiangVienController@guiActionTB');
//chatbox
$aRoute->get('chatbox','ThucTap\Controllers\ChatBoxController@loadView');
$aRoute->get('listNhomChat','ThucTap\Controllers\ChatBoxController@listNhomChat');
$aRoute->get('addNhomChat','ThucTap\Controllers\ChatBoxController@addNhomChatView');
$aRoute->get('urlChatBox','ThucTap\Controllers\ChatBoxController@LoadlistData');
$aRoute->post('saveData','ThucTap\Controllers\ChatBoxController@saveData');
$aRoute->post('addNhomChatBox','ThucTap\Controllers\ChatBoxController@addNhomChatBox');
//chatbox giang vien
$aRoute->get('listNhomChatGV','ThucTap\Controllers\ChatBoxController@listNhomChatGV');
$aRoute->get('CTNhomGV/','ThucTap\Controllers\ChatBoxController@CTNhomGV');
//QLDK giang Vien
$aRoute->get('listHuyDK','ThucTap\Controllers\GiangVienController@listHuyDK');
//nộp Báo cáo
$aRoute->get('NopBaoCao','ThucTap\Controllers\SinhVienController@NopBaoCao');
$aRoute->get('listBaoCaoGV','ThucTap\Controllers\GiangVienController@listBaoCaoGV');
$aRoute->post('NopBaoCao','ThucTap\Controllers\SinhVienController@handleNopBaoCao');

$aRoute->get('qrcode/','ThucTap\Controllers\QRCodeController@qrcode');
$aRoute->post('qrcode','ThucTap\Controllers\QRCodeController@actionQRCode');