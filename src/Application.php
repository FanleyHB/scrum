<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 03/12/2018
 * Time: 09:51
 */

namespace App;

use App\Lib\Request;
use App\Lib\Router;
use App\Controller\RecetteController;
use App\Lib\Response;
use App\Lib\Entity;
use App\Entity\User;
use App\Entity\Recette;
use App\EntityManager\RecetteManager;

class Application
{
    /**
     * @var User
     */
    protected $user;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Application
     */
    public function setUser(User $user): Application
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @param Request $request
     * @return Application
     */
    public function setRequest(Request $request): Application
    {
        $this->request = $request;
        return $this;
    }


    /**
     * @var Request
     */
    protected $request;

//    Const RACINE = '/php/POO/BlogMvcRouter3/';

    public function __construct(){
        $this->request = new Request();
        if($this->request->getSessionData('user'))
            $this->user = $this->request->getSessionData('user');
        else
            $this->user = new User();
    }

    public function run(){
        $router = new Router();
        $routeinfo = $router->getRouteInfo($this->request);
//        var_dump($routeinfo);
        if($routeinfo){
            $controller = 'App\\Controller\\'. ucfirst($routeinfo['route']['controller'].'Controller');
            //var_dump($controller);
            //var_dump($this->getUser());

            //return call_user_func_array(array(new $controller,$routeinfo['route']['method']),$routeinfo['params'] );
            return call_user_func_array(array(new $controller($this),$routeinfo['route']['method']),$routeinfo['params'] );

        }else{
            return new Response('404 : (', ['HTTP/1.0 404 NOT FOUND']);
        }

    }

}