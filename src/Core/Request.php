<?php


namespace ThucTap\Core;


class Request
{
	public static function route11()
	{
		return trim(str_replace(
			App::get('config/app')['HomeBase'],
			'',
			parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH)
		));
	}
    public static function uri()
    {
        return explode('/', trim(str_replace(App::get('config/app')['HomeBase'], '', $_SERVER['REQUEST_URI'])));
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}