<?php


namespace ThucTap\Core;


class App
{
    protected static $aRegister = [];

    public static function bind($key, $value)
    {
        self::$aRegister[$key]=$value;
    }

    public static function get($key)
    {
        return array_key_exists($key,self::$aRegister)?self::$aRegister[$key]:false;
    }

}