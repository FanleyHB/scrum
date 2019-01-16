<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 12/11/2018
 * Time: 09:17
 */

namespace App\Lib;

abstract class EntityManager
{
    /**
     * @var \PDO
     */
    protected $pdo;
    /**
     * @var array
     */
    protected $erreurs = [];

    /**
     * FormationManager constructor.
     */
    public function __construct()
    {
        $this->pdo = PDOFactory::get();
    }

    /**
     * @return array
     */
    public function getErreurs(): array
    {
        return $this->erreurs;
    }

    /**
     * @param array $erreurs
     * @return EntityManager
     */
    public function setErreurs(array $erreurs): self
    {
        $this->erreurs = $erreurs;
        return $this;
    }
}