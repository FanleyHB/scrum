<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 31/10/2018
 * Time: 16:46
 */


namespace App\Lib;

use PDO;
use PDOException;

abstract class PDOFactory {

    private static $pdo = null;

    public static function get()
    {
        if (is_null(self::$pdo)) :

            try{
                self::$pdo = new PDO(PDO_DSN, PDO_USER, PDO_PWD,
                    [
                        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
                        PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
                    ]
                );
            } catch (PDOException $e){
                exit('Erreur connexion BDD');
            }
        endif;

        return self::$pdo;

    }

}
