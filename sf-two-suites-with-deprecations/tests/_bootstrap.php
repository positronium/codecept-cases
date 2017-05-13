<?php
// This is global bootstrap for autoloading

$af = dirname(__DIR__).DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';
if (!is_readable($af))
{
    throw new \Exception("Cannot read $af. Please, run 'composer install' first");
}

require $af;
