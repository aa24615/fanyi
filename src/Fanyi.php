<?php


namespace Zyan\Fanyi;


use Zyan\Fanyi\Provider\Youdao;

class Fanyi
{

    protected $config = [];

    public function __construct(array $config)
    {

    }


    public function text(string $text)
    {
        $yodao = new Youdao();
        $yodao->text();
    }


}