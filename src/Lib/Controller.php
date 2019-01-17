<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 03/12/2018
 * Time: 15:22
 */

namespace App\Lib;
use App\Application;

abstract class Controller
{
    protected $app;

    public function __construct(Application $app){
        $this->app = $app;
    }

    public function render($vue, $data =[]){
        extract($data);
        ob_start();
        include __DIR__.'/../../templates/'.$vue;
        $buffer= ob_get_clean();
        ob_start();
        include __DIR__.'/../../templates/base.html.php';
        $body= ob_get_clean();
        $response = new Response($body);
        return $response;
    }

    public function renderSingle($vue, $data =[]){
        extract($data);
        ob_start();
        include __DIR__.'/../../templates/'.$vue;
        $body= ob_get_clean();
        return new Response($body);
    }

    public function redirect($location=''){
        header('Location: '. Application::RACINE . $location);
        exit;
    }

    public function renderJson($data =[]){
        return new Response(json_encode($data), ['Content-Type: application/json']);
    }
    public function addFlash($message){
        $_SESSION['flash'] = $message;
    }
    public function getFlash(){
        $message = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $message;
    }
    public function hasFlash()    {
        return isset($_SESSION['flash']);
    }

    public function isSecure(){
        if(!$this->app->getUser()->isAuth())
            $this->redirect('connexion');
        if(!$this->app->getUser()->isAdmin())
            return new Response('403 : (', ['HTTP/1.0 403 Forbidden']);
        if ($_SESSION['ip'] != sha1($this->app->getRequest()->getRequestIp()) || $_SESSION['client'] != sha1($this->app->getRequest()->getRequestAgent()))
             exit('hacker');//verification que l ip et le client soit tjrs le meme
        return $this->render('ajouter.html.php');

    }
}