<?php
namespace FormTest;

class Bootstrap
{
    public static function init()
    {
        require __DIR__.'/../vendor/autoload.php';
    }
}
Bootstrap::init();