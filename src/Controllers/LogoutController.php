<?php


namespace ThucTap\Controllers;


use ThucTap\Core\Redirect;
use ThucTap\Core\Session;

class LogoutController
{
    public function logoutSV()
    {
        Session::destroyAll();
        Redirect::to('login');
    }

}