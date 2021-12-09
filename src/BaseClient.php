<?php


namespace Zyan\Fanyi;


abstract class BaseClient
{
    protected $baseUri = 'https://openapi.youdao.com/api';


    protected function getClient(){

    }


    protected function get(){


    }


    protected function post(){

    }

    abstract public function text(string $text): string;
}