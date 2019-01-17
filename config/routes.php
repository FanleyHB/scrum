<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 03/12/2018
 * Time: 11:14
 */

$routes = [
    ['path' => '#^/$#', 'controller' => 'recette', 'method' => 'index'],
    ['path' => '#^/definition$#', 'controller' => 'definition', 'method' => 'index'],
    ['path' => '#^/definition/(\d+)$#', 'controller' => 'definition', 'method' => 'detail'],
    ['path' => '#^/definition/(\d+)$#', 'controller' => 'definition', 'method' => 'titre'],
    ['path' => '#^/definition/(\a-zA-Z0-9)$#', 'controller' => 'definition', 'method' => 'titre']
];