<?php

use ThucTap\Core\App;
use ThucTap\Core\Request;

require_once 'vendor/autoload.php';
App::bind('config/app', require_once 'config/app.php');
\ThucTap\Core\Route::Load('config/router.php')->direct(Request::uri()[0],Request::method());

