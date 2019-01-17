<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 03/12/2018
 * Time: 13:36
 */

namespace App\Controller;

use App\Lib\Response;
use App\Lib\Controller;
use App\EntityManager\RecetteManager;

class RecetteController extends Controller
{
    public function index(){
        $em = new RecetteManager();

        $recette = $em->getRecetteDuJour();

        return $this->render('index.html.php', ['recette' => $recette]);
    }

}