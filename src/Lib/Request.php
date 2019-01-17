<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 03/12/2018
 * Time: 10:52
 */

namespace App\Lib;



class Request
{
    public function getRequestIp(){
        return $_SERVER['REMOTE_ADDR'];
    }

    public function getRequestAgent(){
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public function getRequestURI(){
        return $_SERVER['REQUEST_URI'];
    }

    public function getMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @param string $key
     */
    public function getSessionData($key =''){

        return isset($_SESSION[$key])? $_SESSION[$key]: null;
        /*
        if(isset($_SESSION[$key]))
            return $_SESSION[$key];
        else
            return null;
        */
    }

    public function setSessionData($data, $key ='')
    {
        $_SESSION[$key] =$data ;
    }

    public function getPostData($key = ''){
        return isset($_POST[$key])? $_POST[$key]: null;
    }

    public function getPost(){
        return $_POST;
    }

    public function isAjax(){
       return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=='XMLHttpRequest');
    }

}