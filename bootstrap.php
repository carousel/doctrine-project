<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$env = require_once ".env.php";
require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . "/src"],$isDevMode);

if($env['dbdriver'] == 'pdo_sqlite'){
    $conn = [
        'driver' => $env['dbdriver'],
        'path'   => $env['dbpath']
    ];
}else{
    $conn = [
        'dbname' => $env['dbname'],
        'user' => $env['dbuser'],
        'password' => $env['dbpassword'],
        'host' => $env['dbhost'],
        'driver' => $env['dbdriver']
    ];
}

$entityManager = EntityManager::create($conn,$config);
