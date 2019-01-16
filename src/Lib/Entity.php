<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 12/11/2018
 * Time: 09:17
 */

namespace App\Lib;

abstract class Entity{

    protected $id;
    /**
     * @var array
     */
    protected $erreurs = [];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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
     * @return self
     */
    public function setErreurs(array $erreurs): self
    {
        $this->erreurs = $erreurs;
        return $this;
    }

    protected function hydratation(array $data){
        foreach ($data as $key=>$value):

            $setter = 'set'. ucfirst($key);

            if (method_exists($this, $setter))
                $this->$setter($value);
        endforeach;
    }
    public function __construct($data=[]){
        if ($data)
            $this->hydratation($data);
    }
}