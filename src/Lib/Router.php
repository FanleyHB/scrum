<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 03/12/2018
 * Time: 11:06
 */

namespace App\Lib;
use App\Application;

class Router
{
    private $routes = [];

    public function __construct(){
        include (__DIR__ . '/../../config/routes.php');
        $this->routes = $routes;
    }

    public function getRouteInfo(Request $request) :? array{ // retourne soit null soit un tab

        $url = str_replace(RACINE, '/', $request->getRequestURI());
//        var_dump($url);
        foreach($this->routes as $route){
            if(preg_match($route['path'], $url, $matches)){
                unset($matches['0']);//ne sert pas
                return ['route' => $route, 'params' => $matches];
            }
        }
        return null;
    }
}