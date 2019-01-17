<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 03/12/2018
 * Time: 16:26
 */
namespace App\Entity;

class User extends \App\Lib\Entity
{
    const ADMIN = 1;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $pwd;

    /***
     * @var int
     */
    protected $privilege;

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return User
     */
    public function setLogin(string $login): User
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * @param string $pwd
     * @return User
     */
    public function setPwd(string $pwd): User
    {
        $this->pwd = $pwd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }

    /**
     * @param mixed $privilege
     * @return User
     */
    public function setPrivilege($privilege)
    {
        $this->privilege = $privilege;
        return $this;
    }

    public function isAuth(){
        return isset($_SESSION['auth']) && $_SESSION['auth'] === true;
    }

    public function isAdmin(){
        return $this->isAuth() && $this->getPrivilege() > self::ADMIN;
    }

    public function setAuth($auth){
        $_SESSION['auth'] = $auth;
    }
    public function __sleep()
    {
        return array('id', 'login', 'privilege');
    }




}