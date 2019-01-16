<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 31/10/2018
 * Time: 16:46
 */

//$pdo = new PDO($dsn, $user, $password,
try{
    $pdo = new PDO(PDO_DSN, PDO_USER, PDO_PWD,
        [
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
        ]
    );
} catch (Exception $e){
    exit('Erreur connexion BDD');
}
