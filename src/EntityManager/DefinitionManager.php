<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 04/12/2018
 * Time: 11:40
 */

namespace App\EntityManager;

use App\Entity\Definition;
use PDO;

class DefinitionManager extends \App\Lib\EntityManager
{
    public function getDefinitions()
    {
        $sql = 'SELECT id, titre, contenu, image FROM definition ORDER BY titre ASC';
        $pdoSt = $this->pdo->query($sql);
        $pdoSt->execute();
        $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Definition::class);
        $definitions = $pdoSt->FetchAll();

        return $definitions;
    }

    public function getDefinition($id){
        $sql = 'SELECT id, titre, contenu, image FROM definition WHERE id=? ';
        $pdoSt = $this->pdo->prepare($sql);
        $pdoSt->execute([$id]);
        $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Definition::class);
        $definition = $pdoSt->Fetch();

        return $definition;
    }

    public function getDefinitionByTitre($titre){
        $sql = 'SELECT id, titre, contenu, image FROM definition WHERE titre=? ';
        $pdoSt = $this->pdo->prepare($sql);
        $pdoSt->execute([$titre]);
        $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Definition::class);
        $definition = $pdoSt->Fetch();

        return $definition;
    }
}