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
$aRoute->get('listDetai','ThucTap\Controllers\SinhVienController@listDetaiView');