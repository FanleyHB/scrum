<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/01/2019
 * Time: 15:13
 */

namespace App\EntityManager;

use App\Entity\Recette;
use App\Lib\EntityManager;
use PDO;
use PDOException;

class RecetteManager extends EntityManager
{

    public function getRecettes() : array {
        $sql = 'SELECT id, titre, description, image FROM recette';

        try{
            $pdost = $this->pdo->query($sql);
            $pdost->setFetchMode(PDO::FETCH_CLASS,Recette::class);

            $recettes = $pdost->fetchAll();

            return $recettes;
        }catch(PDOException $e){
            var_dump($e);
            $this->erreurs[] = 'BDD :(';
            return [];
        }
    }

    public function getRecetteDuJour() : ?Recette {
        $sql = 'SELECT * FROM recette LIMIT 1';

        try{
            $pdost = $this->pdo->query($sql);
            $pdost->setFetchMode(PDO::FETCH_CLASS,Recette::class);

            $recette = $pdost->fetch();

            return $recette;
        }catch(PDOException $e){
            var_dump($e);
            $this->erreurs[] = 'BDD :(';
            return null;
        }
    }

}