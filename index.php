<?php
use App\Entity\Recette;
use App\EntityManager\RecetteManager;

require 'src/Lib/autoload.php';
require 'src/Lib/config.php';
require 'src/Lib/pdo.php';


session_start();

$app = new App\Application();

$response = $app->run();

if($response !== null)
    $response->send();
