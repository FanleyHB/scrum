<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 04/12/2018
 * Time: 21:30
 */

namespace App\EntityManager;
use Lib\EntityManager;
use PDO;
use App\Entity\User;

class UserManager extends \App\Lib\EntityManager
{
    public function getUser($data){
        $sql='SELECT * FROM user WHERE login=? ';
        $pdoSt = $this->pdo->prepare($sql);
        $pdoSt->setFetchMode(PDO::FETCH_CLASS , User::class);
        $pdoSt->execute([$data]);
        $user = $pdoSt->fetch();
        return $user;
    }
    public function getUserById($id){
        $sql='SELECT * FROM user WHERE id=? ';
        $pdoSt = $this->pdo->prepare($sql);
        $pdoSt->setFetchMode(PDO::FETCH_CLASS , User::class);
        $pdoSt->execute([$id]);
        $user = $pdoSt->fetch();
        return $user;
    }

    public function insert(User $user){
        $sql = 'INSERT INTO user VALUES (null, ?, ?, ?)';
        $pdoSt = $this->pdo->prepare($sql);
        try{
            $pdoSt->execute([
                $user->getLogin(),
                $user->getPwd(),
                $user->getPrivilege()
            ]);
            return true;
        }catch(\PDOException $e){
            return false;
        }
    }
}