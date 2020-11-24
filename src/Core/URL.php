<?php


namespace ThucTap\Core;


class URL
{
    /**
     * @param string $path
     *
     * @return string
     */
    public static function uri($path = '') {
        if (empty($path)) {
            return App::get('config/app')['HomeURL'];
        }

        return App::get('config/app')['HomeURL'] . ltrim($path, '/');
    }
}