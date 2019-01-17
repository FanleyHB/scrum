<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/01/2019
 * Time: 19:34
 */

namespace App\Controller;

use App\Lib\Response;

class DefinitionController extends \App\Lib\Controller
{
    public function index(){
        $dm = new \App\EntityManager\DefinitionManager();
        $definitions = $dm->getDefinitions();

        return $this->render('listeDefinitions.html.php', ['definitions' => $definitions]);
    }

    public function detail($id){
        $dm = new \App\EntityManager\DefinitionManager();
        if($definition = $dm->getDefinition($id)){

            return $this->render('detailDefinition.html.php', ['definition' => $definition]);
        }else
            return new Response('404 : (', ['HTTP/1.0 404 NOT FOUND']);
    }

    public function titre($titre){
        $dm = new \App\EntityManager\DefinitionManager();
        if($definition = $dm->getDefinitionByTitre($titre)){

            return $this->render('detailDefinition.html.php', ['definition' => $definition]);
        }else
            return new Response('404 : (', ['HTTP/1.0 404 NOT FOUND']);
    }
}