<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/01/2019
 * Time: 13:37
 */

namespace App\Entity;


use App\Lib\Entity;

class Recette extends Entity
{

    /**
     * @var string
     */
    private $titre;

    /**
     * @var int
     * Printemps = 1, Automne = 2, Ete = 3, Hiver = 4, Autre (pas d'une saison particulière) = 0
     */
    private $saison;

    /**
     * @var array
     * Sera géré plus tard avec des entités Ingredient pour pouvoir détailler un bilan carbone par ingrédient
     */
    private $ingredients=[];

    /**
     * @var int
     * temps en minutes
     */
    private $temps;

    /**
     * @var int
     */
    private $pourCombien;

    /**
     * @var int
     * De 1 (très facile) à 5 (très dur)
     */
    private $difficulte;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var string
     */
    private $description;

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     * @return Recette
     */
    public function setTitre(string $titre): Recette
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * @return int
     */
    public function getSaison(): int
    {
        return $this->saison;
    }

    /**
     * @param int $saison
     * @return Recette
     */
    public function setSaison(int $saison): Recette
    {
        $this->saison = $saison;
        return $this;
    }

    /**
     * @return array
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    /**
     * @param array $ingredients
     * @return Recette
     */
    public function setIngredients(array $ingredients): Recette
    {
        $this->ingredients = $ingredients;
        return $this;
    }

    /**
     * @return int
     */
    public function getTemps(): int
    {
        return $this->temps;
    }

    /**
     * @param int $temps
     * @return Recette
     */
    public function setTemps(int $temps): Recette
    {
        $this->temps = $temps;
        return $this;
    }

    /**
     * @return int
     */
    public function getPourCombien(): int
    {
        return $this->pourCombien;
    }

    /**
     * @param int $pourCombien
     * @return Recette
     */
    public function setPourCombien(int $pourCombien): Recette
    {
        $this->pourCombien = $pourCombien;
        return $this;
    }

    /**
     * @return int
     */
    public function getDifficulte(): int
    {
        return $this->difficulte;
    }

    /**
     * @param int $difficulte
     * @return Recette
     */
    public function setDifficulte(int $difficulte): Recette
    {
        $this->difficulte = $difficulte;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     * @return Recette
     */
    public function setPrix(float $prix): Recette
    {
        $this->prix = $prix;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Recette
     */
    public function setDescription(string $description): Recette
    {
        $this->description = $description;
        return $this;
    }

    public function getEmpreinteCarbone():int{
        $EC = 7;
        $longueur = strlen($this->titre);
        for ($i=0; $i<$longueur; $i++){
            $EC += ord(substr($this->titre,$i,1));
        }

        return $EC;
    }


}