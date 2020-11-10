<?php


namespace ThucTap\Core;


class Request
{
    public static function uri()
    {
        return explode('/', trim(str_replace(App::get('config/app')['HomeBase'], '', $_SERVER['REQUEST_URI'])));
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}