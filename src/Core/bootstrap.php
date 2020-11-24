<?php

use ThucTap\Core\App;
use ThucTap\Core\Request;
use ThucTap\Core\Route;

session_start();
require_once 'vendor/autoload.php';
require_once 'function/function.php';
App::bind('config/app', require_once 'config/app.php');
Route::Load('config/router.php')->direct(Request::uri()[0], Request::method());

