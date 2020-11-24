<?php


namespace ThucTap\Database;


use ThucTap\Core\App;

class DB
{
    private static $self;

    public static function makeConnection()
    {
        if (empty(self::$self)) {
            self::$self = new \mysqli(
                App::get('config/app')['Database']['host'],
                App::get('config/app')['Database']['username'],
                App::get('config/app')['Database']['password'],
                App::get('config/app')['Database']['dbname']
            );
        }
        return self::$self;
    }
}