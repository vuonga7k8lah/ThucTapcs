<?php
function isUserLogin()
{
    if (isset($_SESSION['isLogin'])) {
        return TRUE;
    } else {
        \ThucTap\Core\Redirect::to('login');
    }
}