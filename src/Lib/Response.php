<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 03/12/2018
 * Time: 14:19
 */

namespace App\Lib;


class Response
{
    protected $headers = [];

    protected $body;

    public function __construct($body='', $headers = []){
        $this->body = $body;
        $this->headers = $headers;
    }

    public function send(){
        foreach($this->headers as $header){
            header($header);
        }
        exit($this->body); //pour faire le echo et sortir
    }


}