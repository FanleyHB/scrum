<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/01/2019
 * Time: 19:35
 */

namespace App\Entity;


class Definition extends \App\Lib\Entity
{
    private $titre, $contenu, $image;

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     * @return Definition
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenu
     * @return Definition
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return Definition
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }


}