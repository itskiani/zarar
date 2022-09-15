<?php

use Dotenv\Dotenv;
use League\Route\Router;
use Dotenv\Exception\InvalidPathException;

session_start();

require_once __DIR__.'/../vendor/autoload.php';

try {
    $env = Dotenv::createImmutable(base_path());
    $env->load();
}catch (InvalidPathException $e){
    //
}

require_once base_path('bootstrap/container.php');

$route = $container->get(Router::class);
require_once base_path('routes/web.php');