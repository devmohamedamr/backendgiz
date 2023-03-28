<?php

namespace Giz2\Mvc\core;

class route 
{
    public static $routes = [];

    public static function get($url,$action)
    {
        self::$routes[$url] = $action;
    }
}