<?php


namespace ThucTap\Core;


class Route
{
    private static $_self = null;
    private static $aRoute = null;

    public static function Load($route)
    {
        if (self::$_self == null) {
            self::$_self = new self();
        }
        $aRoute = self::$_self;
        include $route;
        return self::$_self;
    }

    public static function get($uri, $controller)
    {
        self::$aRoute['GET'][$uri] = $controller;
    }

    public static function post($uri, $controller)
    {
        self::$aRoute['POST'][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
        if (!$controller = $this->routeIsExist($uri, $method)) {
            echo '404 not Found';
        } else {
            $aInit=explode('@',$controller);
            $this->callRoute($aInit[0],$aInit[1]);
        }

    }

    public function routeIsExist($uri, $method)
    {
        return array_key_exists($uri, self::$aRoute[$method]) ? self::$aRoute[$method][$uri] : false;
    }

    public function callRoute($controller, $method, $para = [])
    {
        $oInit= new $controller;
        call_user_func_array([$oInit,$method],$para);
    }
}