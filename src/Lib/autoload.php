<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 12/11/2018
 * Time: 09:16
 */


function autoLoad(string $classe){
    $file= $classe . '.php';
    if (substr($file,0,4)=='App\\')
        $file = 'src' . substr($file,3);

    if (file_exists($file)) :
        include $file;
    endif;
}
spl_autoload_register('autoLoad');