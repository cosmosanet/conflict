<?php
namespace Framework\Facade;

use Exception;
use Framework\Routes;

/**
 * @method static Routes get(string $reqestUrl, string $controllerName)
 * @method static Routes post(string $reqestUrl, string $controllerName)
 * @method void name(string $nameMethod)
 * 
 * @see Framework\Route
 */

final class Route extends Facade
{
    protected static function getFacadeAccessor()
    {
       return Routes::class;
    }
    public static function isExit()
    {
        http_response_code(404);
        throw new Exception('Route ' . $_SERVER['REQUEST_URI'] . ' not found');
    }

}